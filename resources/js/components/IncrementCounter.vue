<script setup>

import { ref } from 'vue'

const counter = ref(0)

</script>

<template>
    <button
        type="button" 
        @click="counter++"
    >
    Counter is: {{ counter }}
    </button>
</template>