<template>
    <header class="bg-gray-100 dark:border-b-indigo-900 backdrop-blur-sm bg-white/5 border-b">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-3 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="/" class="">
                    <p
                        class="h-14 w-auto font-bold text-nowrap text-4xl bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 text-transparent bg-clip-text">
                        DuongTheDev <br><span class="text-sm">i tell stories</span></p>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 dark:text-white"
                    data-collapse-toggle="menu-mobile">
                    <span class="sr-only">Open main menu</span>
                    <i class="fa-solid fa-bars w-10"></i>
                </button>
                <div id="menu-mobile"
                    class="absolute end-0 top-20 order-1 hidden bg-gray-100 shadow w-full h-screen divide-y dark:bg-indigo-900">
                    <ul class="w-full text-end items-end justify-end p-2">
                        <li class="my-2">
                            <button id="menu-mobile-categories-dropdown-btn"
                                class="mx-3 my-1 font-semibold text-xl hover:text-yellow-400 transition dark:text-white"
                                type="button" data-dropdown-toggle="menu-mobile-categories-dropdown">Danh
                                mục</button>
                            <div id="menu-mobile-categories-dropdown"
                                class="absolute hidden bg-gray-200 dark:bg-indigo-950 dark:text-white rounded-lg shadow w-full divide-x divide-y">
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
                        <li class="my-2">
                            <button class="mx-3 my-1 font-semibold text-xl hover:scale-125 transition dark:text-white">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </li>
                        <li class="my-2">
                            <button onclick="onChangeThemeClicked()"
                                class="mx-3 my-1 font-semibold text-xl hover:scale-125 transition dark:text-white">
                                <i class="fa-solid fa-lightbulb"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu-desktop" class="hidden lg:flex">
                <div class="relative">
                    <div class="flex items-center justify-center">
                        <button id="menu-desktop-categories-dropdown-btn"
                            class="mx-3 font-semibold text-lg hover:text-yellow-400 transition dark:text-white"
                            type="button" data-dropdown-toggle="menu-desktop-categories-dropdown">Danh
                            mục</button>
                        <button class="mx-3 font-semibold text-lg hover:scale-125 transition my-1 dark:text-white">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <button onclick="onChangeThemeClicked()"
                            class="mx-3 font-semibold text-lg hover:scale-125 transition my-1 dark:text-white">
                            <i class="fa-regular fa-lightbulb"></i>
                        </button>
                        <div id="menu-desktop-categories-dropdown"
                            class="absolute hidden rounded-lg shadow-lg w-60 divide-x divide-y bg-gray-100 dark:bg-indigo-900">
                            <ul aria-labelledby="menu-desktop-categories-dropdown-btn" class="w-full">
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold text-dark dark:text-white">Category 1</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold text-dark dark:text-white">Category 2</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold text-dark dark:text-white">Category 3</a>
                                </li>
                                <li class="hover:bg-slate-300 rounded-lg px-3">
                                    <a href="#" class="block text-lg font-semibold text-dark dark:text-white">Category 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>