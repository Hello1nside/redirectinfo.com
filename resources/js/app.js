require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Require Vue
window.Vue = require('vue').default;

// Register Vue Components
Vue.component('redirect-detective-component', require('./components/RedirectDetectiveComponent.vue').default);

// Initialize Vue
const app = new Vue({
    el: '#app',
});
