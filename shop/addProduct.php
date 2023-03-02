<?php

    include "../header.php";

    // var_dump($products);

    if (isset($_POST['create'])) {

    } else {
        ?>
        <div class="max-w-md flex justify-center items-center">
            <form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <label for="naam" class="block text-gray-700 text-sm font-bold">Naam product: </label><br>
                    <input type="text" id="naam" name="naam" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4"><br>
                    <label for="beschrijving" class="block text-gray-700 text-sm font-bold">Beschrijving: </label><br>
                    <input type="text" name="beschrijving" id="beschrijving" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-4"><br>
                    <label for="prijs" class="block text-gray-700 text-sm font-bold">Prijs: </label><br>
                    <input type="text" name="prijs" id="prijs" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6"><br>
                    <label for="afbeelding" class="block text-gray-700 text-sm font-bold">Afbeelding: </label><br>
                    <input type="file" name="afbeelding" id="afbeelding" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight mb-6" accept="image/*"><br>
                <button type="submit" name="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Product toevoegen</button>
            </form>
        </div>
        <?php
    }
    
?>