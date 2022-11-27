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
        include "tailwind.php";
    ?>
    <nav class="px-2 bg-sky-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <span class="self-center text-xl font-bold text-white">Team 8 op een rij</span>
            <div class="w-full flex w-auto">
                <ul class="flex flex-row p-4 mt-4 rounded-lg md:space-x-8 mt-0 font-medium">
                    <li>
                    <a href="index.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Home</a>
                    </li>
                    <li>
                    <a href="aboutUs.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Over ons</a>
                    </li>
                    <li>
                    <a href="acties.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Acties</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</body>
</html>