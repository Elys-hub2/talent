import './bootstrap';

import { createApp } from 'vue';

import App from './App.vue';

createApp(App).mount("#app")

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
