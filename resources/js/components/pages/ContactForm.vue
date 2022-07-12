<template>
    <form class="form-group">
        <h1 class="text-dange">{{total}}</h1>
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

            <div class="form-group">
                <label for="indirizzo">indirizzo</label>
                <input
                    class="form-control"
                    id="indirizzo"
                    v-model="form.indirizzo"
                >
            </div>
            <div class="form-group">
                <input type="hidden" name="data_ordine">
            </div>
            <button class="btn btn-primary" @click="sendForm" type="button">Invia</button>

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
                restaurant_id: this.$route.params.id,

            },
            total: this.$route.params.cart 
            
        }
    },
    methods:{
        sendForm(){
            axios.post(`http://127.0.0.1:8000/api/messages/${ this.$route.params.id }`, this.form)
                .then((res)=>{
                    this.form.nome = '';
                    this.form.indirizzo = '';
                    this.form.cognome = '';
                    this.form.data_ordine = '';
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