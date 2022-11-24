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

        echo '
            <header class="sticky top-0 z-50">
                <nav class="fixed w-screen bg-cyan-900 px-4 lg:px-6 py-2.5 z-2">
                    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl>
                        <a href="./# class="flex items-center">
                            <span class="self-center text-xl font-bold whitespace-nowrap text-white">Team 8 op een rij</span>
                        </a>
                        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                            <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                                <li>
                                    <a href="./index.php" class="block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0">Home</a>
                                </li>
                                <li>
                                    <a href="./aboutUs.php" class="block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0">Over ons</a>
                                </li>
                                <li>
                                    <a href="./acties.php" class="block py-2 pr-4 pl-3 text-white lg:border-0 lg:p-0">Acties</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
        
        '


    ?>

    
    
</body>
</html>