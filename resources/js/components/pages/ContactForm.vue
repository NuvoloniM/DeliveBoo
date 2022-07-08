<template>
    <form class="form-group">
            <label for="nome">Nome</label>

            <input
                type="text"
                class="form-control"
                id="nome"
                placeholder="inserisci nome"
                v-model="form.name"
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
                name: '',
                indirizzo: '',
                cognome: '',
            }
        }
    },
    methods:{
        sendForm(){
            axios.post('http://127.0.0.1:8000/api/messages', this.form)
                .then((res)=>{
                    this.form.name = '';
                    this.form.indirizzo = '';
                    this.form.cognome = '';
                })
        }
    }
}
</script>
<style lang="scss" scoped>

</style>