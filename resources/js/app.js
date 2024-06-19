import { createApp } from 'vue'
import IncrementCounter from './components/IncrementCounter.vue'

createApp({})
.component('dua', IncrementCounter)
.mount('#app')