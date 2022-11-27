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
        include 'header.php';
    ?>
        <div class="relative w-1/2 mx-auto pt-20 rounded-lg hidden md:block">

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[500px] object-cover rounded-md" src="./assets/2.jpg">
            </div>

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[500px] object-cover rounded-md" src="./assets/3.jpg">
            </div>

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[500px] object-cover rounded-md" src="./assets/4.jpg">
            </div>

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[500px] object-cover rounded-md" src="./assets/5.jpg">
            </div>

            <a class="absolute left-0 top-1/2 p-4 bg-black/30 hover:bg-black/50 text-white cursor-pointer"
                onclick="moveSlide(-1)">❮</a>

            <a class="absolute right-0 top-1/2 p-4 bg-black/30 hover:bg-black/50 text-white cursor-pointer"
                onclick="moveSlide(1)">❯</a>

        </div>

        <div class="pt-20">
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
                <div class="md:flex">
                    <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="./assets/team.jpg">
                    </div>
                    <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-700 font-semibold">Wie zijn wij?</div>
                    <p class="mt-2 text-lg font-medium">Wij, team 8 op een rij, stellen ons graag voor.</p>
                    <a href="aboutUs.php" class="block mt-1 underline">Over ons</a>
                    </div>
                </div>
            </div>
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4">
                <div class="md:flex">
                    <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="./assets/spaghett.jpg">
                    </div>
                    <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-700 font-semibold">Onze acties</div>
                    <p class="mt-2 text-lg font-medium">Wil jij graag helpen zodat wij kunnen fietsen voor Kom op Tegen Kanker? <br> Bekijk de acties!</p>
                    <a href="acties.php" class="block mt-1 underline">Acties</a>
                    </div>
                </div>
            </div>
            <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl m-4 ">
                <div class="md:flex">
                    <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="./assets/krant.jpg">
                    </div>
                    <div class="p-8">
                    <div class="uppercase tracking-wide text-sm text-indigo-700 font-semibold">Media</div>
                    <p class="mt-2 text-lg font-medium">8 op een rij in de media.</p>
                    <p class="mt-2"><a href="https://www.gva.be/cnt/dmf20221108_96507185?fbclid=IwAR2ygwTI4NvpE1uTJWWICudh7e68He57y9DX68uKohfco-2Sa7_nudv3pgs" class="underline">1.000 liter spaghettisaus ten voordele van 1000 km voor Kom op tegen Kanker - GVA</a></p>
                    <p class="mt-2"><a href="https://www.hln.be/puurs-sint-amands/team-8-op-een-rij-maakt-en-verkoopt-1-100-liter-spaghetti-voor-kom-op-tegen-kanker~a2550935/" class="underline">Team ‘8 op een rij!’ maakt en verkoopt 1.100 liter spaghetti voor Kom op tegen Kanker - HLN</a></p>
                    <p class="mt-2"><a href="https://www.nieuwsblad.be/cnt/dmf20221108_96507185" class="underline">1.000 liter spaghettisaus ten voordele van 1000 km voor Kom op tegen Kanker - Het Nieuwsblad</a></p>
                    <p class="mt-2"><a href="https://www.rtv.be/artikels/1000-liter-spaghettisaus-sint-amands-voor-kotk-a122678" class="underline">1000 liter spaghettisaus in Sint-Amands voor KOTK - RTV</a></p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <script>
            let slideIndex = 1;
            showSlide(slideIndex);

            function moveSlide(moveStep) {
                showSlide(slideIndex += moveStep);
            }

            function currentSlide(n) {
                showSlide(slideIndex = n);
            }

            function showSlide(n) {
                let i;
                const slides = document.getElementsByClassName("slide");
                
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }

                for (i = 0; i < slides.length; i++) {
                    slides[i].classList.add('hidden');
                }

                slides[slideIndex - 1].classList.remove('hidden');
            }
        </script>
</body>
</html>