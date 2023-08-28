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
    {{ $slot }}

</body>

</html>
