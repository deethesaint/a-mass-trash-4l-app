<template>
    <div class="lg:hover:scale-[1.05] lg:transition cursor-pointer">
        <div class="h-40 sm:h-60 md:h-72 lg:h-96">
            <img :src="url"
            alt="gi may"
            class="w-full h-full object-cover object-center rounded-lg">
        </div>
        <h3 class="text-center font-semibold text-lg">{{ title }}</h3>
        <span class="block text-center text-gray-500">{{ description }}</span>
    </div>
</template>

<script>
export default {
    props: {
        url: String,
        title: String,
        description: String
    }
}
</script>