<?php

    include "../header.php";

    $products = \Stripe\Product::all();

    foreach ($products->data as $product) {
        echo 'Product: '. $product->name;
        echo '<br> Beschrijving: '. $product->description;
        $price = \Stripe\Price::retrieve($product->default_price);
        echo '<br> Prijs: €'. $price->unit_amount / 100;
        echo '<br>';
    }

?>