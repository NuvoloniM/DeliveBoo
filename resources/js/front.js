window.Vue = require('vue');

import Vue from 'vue';
// importo router per gestione delle rotte dentro al #root
import router from  './routes.js';
import App from './components/App.vue';



const root = new Vue({
    el: '#root',
    router,
    render: h=>h(App)
});