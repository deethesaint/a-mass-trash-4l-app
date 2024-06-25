<template>
    <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-2 px-2">    
        <Post v-for="item in data" :data="item">
        </Post>
    </div>
</template>

<script>
import Post from './Post.vue'
export default {
    props: {
        data: {
            type: Array
        }
    },
    components: { Post }
}
</script>