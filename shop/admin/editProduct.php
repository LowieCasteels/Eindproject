<?php

    if($_SESSION['status'] = "admin") {

        include "../../header.php";

        // var_dump($products);
    
            if (isset($_POST['edit'])) {
                
            

                $product = \Stripe\Product::retrieve($_GET['product']);
                $price = \Stripe\Product::update(
                    $_GET['product'],
                    [
                        'name' => $_POST['naam'],
                        'description' => $_POST['beschrijving']
                    ]
                    );
                $price = \Stripe\Price::update(
                    $product->default_price,
                    [
                        'unit_amount' => $_POST['prijs']*100
                    ]
                    );

                
                Header('Location: index.php');

    
            } else {
                $product = \Stripe\Product::retrieve($_GET['product']);
                $price = \Stripe\Price::retrieve($product->default_price);
                echo '
                <div class="max-w-md flex justify-center items-center">
                    <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <label for="naam" class="block text-gray-700 text-sm font-bold">Naam product: </label><br>
                            <input type="text" id="naam" name="naam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4" required value="'.$product->name.'"><br>
                            <label for="beschrijving" class="block text-gray-700 text-sm font-bold">Beschrijving: </label><br>
                            <input type="text" name="beschrijving" id="beschrijving" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4" required value="'.$product->description.'"><br>
                            <label for="prijs" class="block text-gray-700 text-sm font-bold">Prijs: </label><br>
                            <input type="text" name="prijs" id="prijs" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6" required value="'.$price->unit_amount/100 .'"><br>
                            <label for="afbeelding" class="block text-gray-700 text-sm font-bold">Afbeelding: </label><br>
                            <input type="file" name="afbeelding" id="afbeelding" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6" accept="image/*"><br>
                        <button type="submit" name="edit" class="bg-sky-800 hover:bg-sky-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Product bewerken</button>
                    </form>
                </div>
                ';
                
            }

            
            
    }
    ?>
    