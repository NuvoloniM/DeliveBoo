<template>
<div class="bg-form">
   <div class="container">
     <form class="form-group pt-5">
            <label for="nome" class="mt-2">Nome</label>
            <input
                type="text"
                class="form-control font-italic"
                id="nome"
                placeholder="Inserisci nome"
                v-model="form.nome"
                name="nome"
                required
            >
            <label for="nome" class="mt-2">Cognome</label>
            <input
                type="text"
                class="form-control"
                id="cognome"
                placeholder="Inserisci nome"
                v-model="form.cognome"
                name="cognome"
                required
            >
            <label for="prezzo_totale" class="mt-2">Totale ordine</label>
            <input
                type="text"
                class="form-control"
                id="prezzo_totale"
                name="prezzo_totale"
                :value="`${total}`"
                disabled
            >

            <div class="form-group">
                <label for="indirizzo" class="mt-2">Indirizzo</label>
                <input
                    class="form-control"
                    id="indirizzo"
                    name="indirizzo"
                    placeholder="Inserisci l'indirizzo di consegna"
                    v-model="form.indirizzo"
                    required
                >
            </div>
            <div class="form-group">
                <label for="recapito" class="mt-2">Inserisci un recapito</label>
                <input
                    class="form-control"
                    id="recapito"
                    name="recapito"
                    placeholder="Inserisci numero di telefono"
                    type="number"
                    v-model="form.recapito"
                    required
                >
            </div>
            <div class="form-group">
                <input type="hidden" name="data_ordine">
            </div>
    
            <button v-if="this.snitch == false" class="btn btn-info px-3 rounded" @click="checkData">
                Inserisci i dati 
            </button>
            <router-link v-if="this.snitch == true" :to="{name:'payment', params: {cart: this.total, id:this.restaurant_id}}"  class="btn btn-success btn-block" >
                <h5 class="text-white text-center button" @click="sendForm">Procedi al pagamento</h5> 
            </router-link>
        </form>     
    </div> 
</div>
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
            total: this.$route.params.cart,
            restaurant_id: this.$route.params.id, 
            snitch: false,
            
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
        checkData(){
            if(this.form.nome != '' && this.form.indirizzo != '' && this.form.cognome != '' && this.form.recapito != '' ){
                return this.snitch = true;
            }
        }
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
    .bg-form{
        height:100vh;
    }
</style>