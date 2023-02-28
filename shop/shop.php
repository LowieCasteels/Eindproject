<?php

    include "../header.php";

    $products = \Stripe\Product::all();

    // var_dump($products);



    foreach ($products->data as $product) {
        echo 'Product: '. $product->name;
        echo '<br> Beschrijving: '. $product->description;
        $prijs = $stripe->prices->retrieve(
          $product->default_price,
          []
        );
        echo '<br> Prijs: '. $prijs->unit_amount;
        echo '<br>';
    }

?>