<?php

    if($_SESSION['status'] = "admin") {

        include "../../header.php";

        // var_dump($products);
    
            if (isset($_POST['create'])) {
                
                $naam = $_POST['naam'];
                $beschrijving = $_POST['beschrijving'];
                $prijs = $_POST['prijs'];
                // $afbeelding = $_POST['afbeelding'];
                // $foto = 
                
                // $image = \Stripe\File::create([
                //     'purpose' => 'product_image',
                //     'file' => $afbeelding
                // ]);

                // $

                $product = \Stripe\Product::create([
                    'name' => $naam,
                    'description' => $beschrijving,
                    // 'images' [$image->id]
                ]);

                $price = \Stripe\Price::create([
                    'unit_amount' => $prijs*100,
                    'currency' => 'eur',
                    'product' => $product->id,
                    'id' => $product->default_price
                ]);

                echo 'product toegevoegd met id: '.$product->id;
                Header('Location: index.php');

    
            } else {
                echo '
                <div class="mt-6 flex justify-center items-center">
                    <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            <label for="naam" class="block text-gray-700 text-sm font-bold">Naam product: </label><br>
                            <input type="text" id="naam" name="naam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4" required placeholder="Naam product"><br>
                            <label for="beschrijving" class="block text-gray-700 text-sm font-bold">Beschrijving: </label><br>
                            <input type="text" name="beschrijving" id="beschrijving" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4" required placeholder="Beschrijving product"><br>
                            <label for="prijs" class="block text-gray-700 text-sm font-bold">Prijs: </label><br>
                            <input type="text" name="prijs" id="prijs" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6" required placeholder="Prijs product"><br>
                            <label for="afbeelding" class="block text-gray-700 text-sm font-bold">Afbeelding: </label><br>
                            <input type="file" name="afbeelding" id="afbeelding" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6" accept="image/*"><br>
                        <div class="flex justify-center"><button type="submit" name="create" class="bg-sky-800 hover:bg-sky-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Product toevoegen</button></div>
                    </form>
                </div>
                ';
                
            }

            
            
    }
    ?>
    