// importo vue 
import Vue from 'vue'
// importo il gestore delle rotte dopo aver fatto npm i vue-routes@3
import VueRouter from 'vue-router'

Vue.use(VueRouter)

// importo i componenti delle pagine a cui farò riferimento sotto nelle rotte
import HomePage from './components/pages/HomePage.vue';
import RestaurantShow from './components/pages/RestaurantShow.vue';
import ContactForm from './components/pages/ContactForm.vue';
import PaymentForm from './components/pages/PaymentForm.vue';


// inizializzo il router
const router = new VueRouter({
    // permette di mantere in memoria le pagine avanti e indietro e la storia del percorso nel sito 
    mode: 'history',
    // possiamo inserire un parametro per specificare chi è attivo
    linkExactActiveClass: 'active',
    // creo la gestione delle rotte come un array di oggetti -> uri -> componente da visualizzare-> nome da richiamare
    routes: [
        {path:'/', component: HomePage, name:'home'},
        {path:'/restaurant/:id', component: RestaurantShow, name:'menu'},
        {path:'/messages/:id/:cart', component: ContactForm, name:'form'},
        {path: '/payment/:cart', component: PaymentForm, name:'payment'},
    ]
})
// lo esporto per poterlo richiamare in front.js e in #root
export default router;