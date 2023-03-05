<?php
    $customer = \Stripe\Customer::create([
        'name' => $_GET['name'],
        'address.city' => $_GET['city'],
        'address.line1' => $_GET['street'],
        'address.postal_code' => $_GET['postalCode'],
        'email' => $_GET['email']
    ]);

    echo '<script> alert('.$customer.')</script>';

    echo '           
        <script type="module">
            import { connectUserInfo } from "./firebase.js"
            connectUserInfo($_GET["id"], $customer->id)
        </script>
    ';

?>
