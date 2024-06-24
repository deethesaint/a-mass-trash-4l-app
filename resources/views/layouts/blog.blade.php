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
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        function onChangeThemeClicked() {
            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        }
    </script>
</head>

<body id="app"
    class="bg-gradient-to-r from-cyan-100 to-lime-100 dark:bg-gradient-to-r dark:from-emerald-950 dark:to-blue-950">
    <v-header></v-header>
    <div class="flex flex-row">
        <div
            class="basis-full mx-auto xl:border-x xl:max-w-6xl 2xl:max-w-7xl min-h-screen bg-white/50 dark:bg-transparent/10 dark:border-x-indigo-900 transition">
            <div class="w-full h-8">

            </div>
            <div class="grid grid-cols-12 gap-1">
                <div class="col-span-full xl:col-span-9">
                    @yield('content')
                </div>
                <div
                    class="col-span-12 xl:col-span-3 px-3 py-3 border-t xl:border-t-0 xl:border-s dark:border-s-indigo-900 dark:border-t-indigo-900 dark:text-white">
                    <div class="w-full border-b dark:border-b-indigo-900">
                        <p class="mx-3 my-3 font-semibold">'bout me</p>
                        <div class="ms-3 mb-3">
                            <div class="my-3 justify-center">
                                <img src="{{ asset('x.jpg') }}" class="h-36 w-36 rounded-full block mx-auto border">
                            </div>
                            <p class="text-center xl:text-justify">I'm Duong, a third year IT student at HCMC University of Industry and
                                Trade.</p>
                        </div>
                    </div>
                    <div class="w-full border-b dark:border-b-indigo-900">
                        <p class="mx-3 my-3 font-semibold">contact</p>
                        <div class="ms-3">
                            <ul class="flex justify-center">
                                <li class="me-4">
                                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 8 19">
                                            <path fill-rule="evenodd"
                                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">Facebook page</span>
                                    </a>
                                </li>
                                <li class="mx-3">
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 21 16">
                                            <path
                                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                                        </svg>
                                        <span class="sr-only">Discord community</span>
                                    </a>
                                </li>
                                <li class="mx-3">
                                    <a href="#"
                                        class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="sr-only">GitHub account</span>
                                    </a>
                                </li>
                            </ul>
                            <p class="w-full font-semibold text-center my-3">vtduong0912@gmail.com</p>
                            <p class="w-full font-semibold text-center my-3">+84366035415</p>
                        </div>
                    </div>
                    <div class="w-full border-b dark:border-b-indigo-900">
                        <p class="mx-3 my-3 font-semibold">achieves</p>
                        <div class="ms-3">
                            <p class="mx-4 my-3 font-semibold">2024</p>
                            <p class="mx-4 my-3 font-semibold">2023</p>
                            <p class="mx-4 my-3 font-semibold">2022</p>
                            <p class="mx-4 my-3 font-semibold">2021</p>
                            <p class="mx-4 my-3 font-semibold">2020</p>
                            <p class="mx-4 my-3 font-semibold">2019</p>
                        </div>
                    </div>
                    <div class="w-full border-b dark:border-b-indigo-900">
                        <p class="mx-3 my-3 font-semibold">tags</p>
                        <div class="ms-3">

                        </div>
                    </div>
                    <div class="w-full">
                        <p class="mx-3 my-3 font-semibold">topics</p>
                        <div class="ms-3">

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full h-8">

            </div>
        </div>
    </div>
    <button class="fixed z-20 bottom-2 end-2 rounded-full backdrop-blur-sm bg-white/40 border h-12 w-12" type="button"
        onclick="onClick()">
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
