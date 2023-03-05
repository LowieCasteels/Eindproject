<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="firebase.js" type="module"></script> -->
    <title>Document</title>

    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
</head>
<body>
    <script type="module">
        import { registreer } from "./firebase.js"
        window.registreer = registreer
    </script>
    <?php
        include 'header.php';
    ?>
    <div class="w-full max-w-xs items-center">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" id="registerForm">
            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Naam
            </label>
            <input placeholder="Warre Bossaap" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="naam" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="email" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="adres">
                Straat
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="straat" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="adres">
                Huisnummer
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="huisnr" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="adres">
                Plaats
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="plaats" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="adres">
                Postcode
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="postcode" type="text" required>
            </div>
            <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="wachtwoord">
                Wachtwoord
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="wachtwoord" type="password" required>
            </div>
            <div class="flex items-center justify-between">
            <button onclick="registreer()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                Registreren
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="login.php">
                Aanmelden
            </a>
            </div>
        </form>
    </div>
    
</body>
</html>