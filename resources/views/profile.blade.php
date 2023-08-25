<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>PT Bismacindo Perkasa</title>
</head>

<body>
    <div class="mt-5 ml-2">
        <a class="px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-gradient-to-tr from-bip-orange-400 to-bip-orange-500 hover:bg-gradient-to-br hover:from-bip-orange-400 hover:to-bip-orange-300 focus:ring-4 focus:outline-none focus:ring-orange-300 text-md md:mr-0"
            href="/">Back</a>

        <!-- Download Button-->
        <a class="px-6 py-2 mr-3 font-bold text-center text-white rounded-full bg-bip-blue-500 hover:bg-bip-blue-400 focus:ring-4 focus:outline-none focus:ring-bip-blue-300 text-md md:mr-0"
            href="cp/cp.pdf" download="Company Profile PT Bismacindo">Download</a>

    </div>

    <div class="mt-5">
        <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe"
            src="https://heyzine.com/flip-book/46977bdba8.html"
            style="border: 1px solid lightgray; width: 100%; height: 100vh;"></iframe>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        //make navbar transparent when it is on the top
        const navbar = document.querySelector(".navbar");



        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 0) {
                navbar.classList.add("bg-white");
                navbar.classList.remove("bg-transparent");
                navbar.classList.remove("text-white");
                navbar.classList.add("text-base-900");

            } else {
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white");
                navbar.classList.remove("text-base-900");
                navbar.classList.add("text-white");
            }
        });
    </script>

</body>

</html>
