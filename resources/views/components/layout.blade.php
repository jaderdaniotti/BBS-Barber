<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BBS Barber</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Montserrat:ital,wght@0,300;1,300&display=swap"
        rel="stylesheet">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar/>
    {{-- <div id="particles-js"></div>  --}}
    {{ $slot }}
</body>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

</html>
