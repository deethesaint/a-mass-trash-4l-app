import { createApp } from 'vue'
import 'flowbite'

import IncrementCounter from './components/IncrementCounter.vue'
import ImageBox from './components/ImageBox.vue'
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import PostList from './components/PostList.vue'

const app = createApp({})
app.component('dua', IncrementCounter)
app.component('image-box', ImageBox)
app.component('v-header', Header)
app.component('v-footer', Footer)
app.component('postList', PostList)
app.mount('#app')