<template>
    <header class="bg-gray-200 dark:border-b-indigo-900">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="#" class="">
                    <h2
                        class="h-6 w-auto font-bold text-nowrap text-2xl text-indigo-500 hover:text-orange-500 transition duration-75">
                        DuongTheDev</h2>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex">
                <div class="relative">
                    <div class="flex items-center justify-center w-screen">
                        <a class="mx-3 font-semibold text-lg hover:text-yellow-400 transition duration-75" href="#">Trang
                            chủ</a>
                        <a class="mx-3 font-semibold text-lg hover:text-yellow-400 transition duration-75" href="#">Danh
                            mục</a>
                        <a class="mx-3 font-semibold text-lg hover:text-yellow-400 transition duration-75"
                            href="#">Portfolio</a>
                        <button class="mx-3 font-semibold text-lg hover:scale-125 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>