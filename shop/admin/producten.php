<?php

    include "../../header.php";

    echo '<div class="flex items-center m-2"><button class="mx-auto bg-sky-800 hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">Product toevoegen</button></div>';
    // <form action="addProduct.php" class="flex items-center"><button type="submit"  onclick="window.location.href=addProduct.php">Product toevoegen</button></form>

    $products = \Stripe\Product::all();

    echo '<form>';
    foreach ($products->data as $product) {
        $price = \Stripe\Price::retrieve($product->default_price);
        echo '
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="../../assets/spaghetti.jpg">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-700 font-semibold">'.$product->name.'</div>
                    <p class="mt-2 text-lg font-medium">'.$product->description.'</p>
                    <p class="mt-2">€'.$price->unit_amount / 100 .'</p>
                    <button class="mx-auto bg-sky-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded mr-4 mt-2">Bewerken</button><button class="mx-auto bg-sky-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Verwijderen</button>
                    <a href="editProduct.php?product='.$product->id.'">Product wijzigen</a>
                </div>
            </div>
        </div>'.
        $product->id;
    };
    echo '</form>';

    

?>