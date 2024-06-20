<template>
    <div>
        <div class="h-96">
            <img :src="url"
            alt="gi may"
            class="w-full h-full rounded-lg">
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