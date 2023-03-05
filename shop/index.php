

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "../header.php";

    $products = \Stripe\Product::all();

    echo '<form>';
    foreach ($products->data as $product) {
        $price = \Stripe\Price::retrieve($product->default_price);
        echo '
        <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="../assets/spaghetti.jpg">
                </div>
                <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-sky-900 font-semibold">'.$product->name.'</div>
                    <p class="mt-2 text-lg font-medium">'.$product->description.'</p>
                    <p class="mt-2">€'.$price->unit_amount / 100 .'</p>
                    <div class="flex items-center">
                        <label for="amount" class="block text-gray-700 text-sm font-bold pr-4 ">Aantal: </label>
                        <input type="number" value="0" name="amount" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight mt-2">
                        <input type="hidden" name="id" value="'.$product->id.'">
                    </div>
                </div>
            </div>
        </div>';
    };
    echo '<div class="flex items-center"><button type="submit" class="mx-auto bg-sky-800 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Afrekenen</button></div>';
    echo '</form>';
    ?>
    
</body>
</html>