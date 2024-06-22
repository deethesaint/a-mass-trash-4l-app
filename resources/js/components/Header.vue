<template>
    <header class="bg-gray-100 dark:border-b-indigo-900 backdrop-blur-sm bg-white/40 border-b-2">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-3 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="/" class="">
                    <p
                        class="h-14 w-auto font-bold text-nowrap text-4xl bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-transparent bg-clip-text">
                        DuongTheDev <br><span class="text-sm">i tell stories</span></p>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                    data-collapse-toggle="menu-mobile">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div id="menu-mobile" class="absolute end-0 top-20 order-1 hidden flex bg-gray-100 shadow w-full divide-y">
                    <ul class="w-full text-end items-end justify-end">
                        <li>
                            <button id="menu-mobile-categories-dropdown-btn"
                                class="mx-3 my-1 font-semibold text-xl hover:text-yellow-400 transition" type="button"
                                data-dropdown-toggle="menu-mobile-categories-dropdown">Danh
                                mục</button>
                            <div id="menu-mobile-categories-dropdown"
                                class="absolute z-10 hidden bg-gray-200 rounded-lg shadow transition w-full divide-x divide-y">
                                <ul aria-labelledby="menu-desktop-categories-dropdown-btn" class="w-full">
                                    <li class="hover:bg-slate-300 rounded-lg px-3">
                                        <a href="#" class="block text-xl font-semibold">Category 1</a>
                                    </li>
                                    <li class="hover:bg-slate-300 rounded-lg px-3">
                                        <a href="#" class="block text-xl font-semibold">Category 2</a>
                                    </li>
                                    <li class="hover:bg-slate-300 rounded-lg px-3">
                                        <a href="#" class="block text-xl font-semibold">Category 3</a>
                                    </li>
                                    <li class="hover:bg-slate-300 rounded-lg px-3">
                                        <a href="#" class="block text-xl font-semibold">Category 4</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="mx-3 my-1 font-semibold text-xl hover:text-yellow-400 transition" href="#">'bout
                                me</a>
                        </li>
                        <li>
                            <button class="mx-3 my-1 font-semibold text-xl hover:scale-125 transition ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-desktop" class="hidden lg:flex">
                <div class="relative">
                    <div class="flex items-center justify-center">
                        <button id="menu-desktop-categories-dropdown-btn"
                            class="mx-3 font-semibold text-lg hover:text-yellow-400 transition" type="button"
                            data-dropdown-toggle="menu-desktop-categories-dropdown">Danh
                            mục</button>
                        <a class="mx-3 font-semibold text-lg hover:text-yellow-400 transition" href="#">'bout me</a>
                        <button class="mx-3 font-semibold text-lg hover:scale-125 transition my-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                        <div id="menu-desktop-categories-dropdown"
                            class="absolute z-10 hidden bg-gray-100 rounded-lg shadow-lg transition w-60 divide-x divide-y">
                            <ul aria-labelledby="menu-desktop-categories-dropdown-btn" class="w-full">
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold">Category 1</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold">Category 2</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold">Category 3</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold">Category 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>