<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-stone-300">
    <?php
        include 'header.php';
    ?>
        <div class="relative w-1/2 mx-auto pt-20 rounded-md">
            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[300px] object-cover" src="./assets/download.jpg">
            </div>

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[300px] object-cover rounded-md" src="./assets/download1.jpg">
            </div>

            <div class="slide relative shadow shadow rounded-md">
                <img class="w-full h-[300px] object-cover rounded-md" src="./assets/download2.jpg">
            </div>

            <a class="absolute left-0 top-1/2 p-4 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                onclick="moveSlide(-1)">❮</a>

            <a class="absolute right-0 top-1/2 p-4 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
                onclick="moveSlide(1)">❯</a>

        </div>
        <div class="mx-auto w-2/3 mt-10">
            <div class="flex flex-row h-auto my-1 text-center bg-white shadow rounded-md">
                <img src="./assets/download.jpg" alt="" class="w-1/3 mx-1 p-1">
                <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mi id pharetra fringilla. Phasellus imperdiet lacinia maximus. Sed semper libero est, sit amet pulvinar metus condimentum quis. Nam euismod nisl ac lectus malesuada cursus. Duis in ipsum vel tortor posuere pellentesque. Sed egestas congue laoreet. Pellentesque eleifend neque nibh, ornare porta lacus aliquet ultricies. Cras ante lacus, pellentesque non porta sed, volutpat non metus. Nam nec posuere nibh. Nunc porta sodales mauris nec laoreet.</p>
            </div>
            <div class="flex flex-row h-auto my-1 text-center bg-white shadow rounded-md">
                <img src="./assets/download1.jpg" alt="" class="w-1/3 mx-1 p-1">
                <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mi id pharetra fringilla. Phasellus imperdiet lacinia maximus. Sed semper libero est, sit amet pulvinar metus condimentum quis. Nam euismod nisl ac lectus malesuada cursus. Duis in ipsum vel tortor posuere pellentesque. Sed egestas congue laoreet. Pellentesque eleifend neque nibh, ornare porta lacus aliquet ultricies. Cras ante lacus, pellentesque non porta sed, volutpat non metus. Nam nec posuere nibh. Nunc porta sodales mauris nec laoreet.</p>
            </div>
            <div class="flex flex-row h-auto my-1 text-center bg-white shadow rounded-md">
                <img src="./assets/download2.jpg" alt="" class="w-1/3 mx-1 p-1">
                <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mi id pharetra fringilla. Phasellus imperdiet lacinia maximus. Sed semper libero est, sit amet pulvinar metus condimentum quis. Nam euismod nisl ac lectus malesuada cursus. Duis in ipsum vel tortor posuere pellentesque. Sed egestas congue laoreet. Pellentesque eleifend neque nibh, ornare porta lacus aliquet ultricies. Cras ante lacus, pellentesque non porta sed, volutpat non metus. Nam nec posuere nibh. Nunc porta sodales mauris nec laoreet.</p>
            </div>
            <div class="flex flex-row h-auto my-1 text-center bg-white shadow rounded-md">
                <img src="./assets/download.jpg" alt="" class="w-1/3 mx-1 p-1">
                <p class="p-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum mi id pharetra fringilla. Phasellus imperdiet lacinia maximus. Sed semper libero est, sit amet pulvinar metus condimentum quis. Nam euismod nisl ac lectus malesuada cursus. Duis in ipsum vel tortor posuere pellentesque. Sed egestas congue laoreet. Pellentesque eleifend neque nibh, ornare porta lacus aliquet ultricies. Cras ante lacus, pellentesque non porta sed, volutpat non metus. Nam nec posuere nibh. Nunc porta sodales mauris nec laoreet.</p>
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