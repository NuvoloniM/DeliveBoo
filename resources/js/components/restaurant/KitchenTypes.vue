<template>
    <div class="container">
        <h2>
            Le categorie piu' amate
        </h2>
        <h4>
            Trova i ristoranti piu' amati della tua citta'
        </h4>
        
            <span v-for="type in types" :key="'a'+type.id">
                {{type.tipologia}}
            </span>    
        
        
    </div>
</template>

<script>
    
    import axios from 'axios';
    export default {
        name: 'KitchenTypes',
        data(){
            return{
                types: [],
            }
        },
        methods: {
            getTypes(){
                axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                // riempio l'array vuoto in data con gli elementi presi con axios
                console.log(res.data.restaurants_types);
                 this.types = res.data.restaurants_types;
                })
            }
        },
        mounted(){
            this.getTypes()
        }
    };
</script>

<style scoped>

</style>