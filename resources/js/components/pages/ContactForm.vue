<template>
    <form class="form-group">
            <label for="nome">Nome</label>
            <input
                type="text"
                class="form-control"
                id="nome"
                placeholder="inserisci nome"
                v-model="form.nome"
                name="nome"
            >
            <input
                type="text"
                class="form-control"
                id="cognome"
                placeholder="inserisci nome"
                v-model="form.cognome"
                name="cognome"
            >
            <label for="prezzo_totale">Amount</label>
            <input
                type="text"
                class="form-control"
                id="prezzo_totale"
                name="prezzo_totale"
                :value="`${total}`"
                disabled
            >

            <div class="form-group">
                <label for="indirizzo">indirizzo</label>
                <input
                    class="form-control"
                    id="indirizzo"
                    v-model="form.indirizzo"
                >
            </div>
            <div class="form-group">
                <label for="recapito">inserisci un recapito</label>
                <input
                    class="form-control"
                    id="recapito"
                    name="recapito"
                    type="number"
                    v-model="form.recapito"
                >
            </div>
            <div class="form-group">
                <input type="hidden" name="data_ordine">
            </div>
            <router-link :to="{name:'payment', params: {cart: this.total}}"> 
                <button class="btn btn-primary" @click="sendForm" type="button">Invia</button>
            </router-link>

        </form>

</template>
<script>
import axios from 'axios';
export default {
    name:'ContactForm',
    data(){
        return{
            form: {
                nome: '',
                indirizzo: '',
                cognome: '',
                data_ordine:'',
                prezzo_totale: this.$route.params.cart,
                restaurant_id: this.$route.params.id,
                recapito: '',

            },
            total: this.$route.params.cart 
            
        }
    },
    methods:{
        sendForm(){
            axios.post(`http://127.0.0.1:8000/api/messages/${ this.$route.params.id }/${ this.$route.params.cart}`, this.form)
                .then((res)=>{
                    this.form.nome = '';
                    this.form.indirizzo = '';
                    this.form.cognome = '';
                    this.form.data_ordine = '';
                    this.form.prezzo_totale = '';
                    this.form.recapito = '';
                    console.log(res)
                })
        },
        // takeCart(){
        //      axios.post(`http://127.0.0.1:8000/api/restaurants`, this.carrello)
        //         .then((res)=>{
        //             console.log(res.data);
        //     })
        // },
    },
    mounted(){
        // this.takeCart()
    }
}
</script>
<style lang="scss" scoped>

</style>