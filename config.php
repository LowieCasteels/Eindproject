<?php
    require_once "stripe/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51Lqey1DAKszuCSoeV8hVequk8ML9hcQGYGlL2XSbOdYMviNmrkeMf5rjiNpw6u0NEv8E6VLXDI6PYbB9VDD6HnmA00D5FvBG3v",
        "publishableKey" => "pk_test_51Lqey1DAKszuCSoe8g8H7OtN1tToMov4wgVNwbRuKg1yKSZzXr8XHqqden36G48zCaI6Gly6dxTexgZQSxokz4Qt004qUfJqlR"
    );

    $stripe = \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);

?>