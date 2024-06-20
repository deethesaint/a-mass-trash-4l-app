import { createApp } from 'vue'
import IncrementCounter from './components/IncrementCounter.vue'
import ImageBox from './components/ImageBox.vue'

const app = createApp({})
app.component('dua', IncrementCounter)
app.component('image-box', ImageBox)
app.mount('#app')