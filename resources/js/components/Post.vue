<template>
    <div
        class="bg-gray-100 w-full rounded-xl overflow-hidden border-2 border-gray-200 hover:bg-gray-200 dark:text-white dark:border-indigo-900 dark:bg-transparent/5 dark:hover:bg-indigo-950 transition">
        <a href="#">
            <img class="w-full rounded-ss-xl rounded-se-xl object-cover hover:scale-105 h-52 ease-in-out transition duration-500"
                :src="data.thumbnail">
            <p class="w-full px-2 mt-2 font-semibold text-base lg:text-lg">{{ data.title }}</p>
            <p class="w-full px-2 mt-1  line-clamp-3 lg:line-clamp-5 xl:line-clamp-6">{{ data.description }}</p>
        </a>
        <div class="w-full px-2 my-1 pb-2">
            <a v-for="item in data.tags" href="#">
                <span class="bg-blue-800 text-white font-medium text-sm rounded text-nowrap inline-block px-1 me-1 mt-1 ">{{
                    item }}</span>
            </a>
            <div class="w-full text-end items-center justify-center px-2 my-1 pb-2">
                <p class="font-semibold">20-12-23 | DuongVu <span><img class="w-7 h-7 rounded-full inline border-2 mb-1"
                            src="https://brocanvas.com/wp-content/uploads/2022/01/hinh-anh-chu-cho-tai-cut.jpg"></span></p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        data: {
            type: Object
        }
    }
}
</script>