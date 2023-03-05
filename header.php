<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.3/firebase-auth.js"></script>
    <script src="firebase.js" type="module"></script>
    
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
</head>

<?php
    include "tailwind.php";
    include "firebase.php";
    include "config.php";
?>
<nav class="px-2 bg-sky-900">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <span class="self-center text-xl font-bold text-white">Team 8 op een rij</span>
        <div class="w-full flex w-auto">
            <ul class="flex flex-row p-4 rounded-lg md:space-x-8 mt-0 font-medium">
                <li>
                <a href="/gip/src/index.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Home</a>
                </li>
                <li>
                <a href="/gip/src/aboutUs.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Over ons</a>
                </li>
                <li>
                <a href="/gip/src/acties.php" class="block py-2 pl-3 pr-4 text-white rounded md:border-0 md:p-0 text-lg">Acties</a>
                </li>
            </ul>
        </div>
    </div>
</nav>