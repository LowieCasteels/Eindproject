<?php
    include '../../header.php';

    $product = \Stripe\Product::retrieve($_GET['product']);
    $prices = \Stripe\Price::all(['product' => $product->product_id]);
    foreach($prices->data as $price) {
        $price->delete();
    };
    $product->delete();

    echo 'Product succesvol verwijderd';

?>