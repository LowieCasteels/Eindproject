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

        var_dump($stripe->charges->all(['limit' => 3]));

        var_dump($paymentIntents);


    ?>
    

</body>
</html>