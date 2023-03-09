<?php
require_once '../vendor/autoload.php';
require_once '../header.php';

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost:4242';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    // foreach ($variable as $key => $value) {
    //     'price' => 'price_1M'
    // }
    'price' => 'price_1MiHGRDAKszuCSoeWUJxsfWr',
    'quantity' => 1,
  ],[
    'price' => 'price_1LzcR2DAKszuCSoeYP3iyGQK',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);