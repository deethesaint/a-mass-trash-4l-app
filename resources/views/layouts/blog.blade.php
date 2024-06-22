<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
    <title>DuongTheDev</title>
</head>

<body id="app" class="bg-gradient-to-r from-cyan-100 to-lime-100">
    <v-header></v-header>
    <div class="flex flex-row">
        <div class="basis-full mx-auto border-x-2 max-w-7xl bg-white min-h-screen">
            <div class="w-full h-8">

            </div>
            @yield('content')
            <div class="w-full h-8">

            </div>
        </div>
    </div>
    <button class="fixed z-20 bottom-2 end-2 rounded-full backdrop-blur-sm bg-white/40 border-2 h-12 w-12"
        type="button" onclick="onClick()">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
    <v-footer></v-footer>
    @vite('resources/js/app.js')
    <script>
        function onClick() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            })
        }
    </script>
</body>

</html>
