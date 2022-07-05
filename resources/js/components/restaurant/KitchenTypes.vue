<template>
    <div class="container-fluid body">
        <div class="container-fluid">
            <h2>
                Le categorie piu' amate
            </h2>
            <h3>
                Trova i ristoranti piu' amati della tua citta'
            </h3>    
        </div>
        
        <div class="d-flex categories container-fluid justify-content-center" >
            <h4 class="category" v-for="type in types" :key="type.id">
                <a class="link" href="http://">
                    {{type.tipologia}}  
                </a>     
            </h4>
            
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'KitchenTypes',
        data() {
            return {
                types: [],
            }
        },
        methods: {
            getTypes() {
                axios.get('http://127.0.0.1:8000/api/restaurants')
                    .then((res) => {
                        // riempio l'array vuoto in data con gli elementi presi con axios
                        console.log(res.data.restaurants_types);
                        this.types = res.data.restaurants_types;
                    })
            }
        },
        mounted() {
            this.getTypes()
        }
    };

</script>

<style scoped>    
    .categories{
        width: 80%;
        margin: 0 auto;  
        overflow-x: auto;            
    }
    .category{
        /* width: auto; */
        margin: 4vh 3vh;
    }
    .link{
        text-decoration: none;
        color: black;
    }
    h4:hover{
        transform: scale(1.5); 
        transition-duration: 0.5s;
        
    }
</style>
