<?php

    include "../header.php";

    $product = \Stripe\Product::create();

    // var_dump($products);


    
    foreach ($products->data as $products) {
        echo 'Product: '. $products->name;
        echo '<br> Beschrijving: '. $products->description;
    }
    
?>