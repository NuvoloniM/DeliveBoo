<template>
    <div class="container-fluid body">
        <div class="container-fluid">
            <div class="title container-fluid">
                <h2>
                    Le categorie piu' amate
                </h2>
                <h3>
                    Trova i ristoranti piu' apprezzati della bella Napoli!
                </h3>      
            </div>
              
        </div>
        
        <div class="d-flex categories container-fluid justify-content-center" >
            <h4 class="category" v-for="type in types" :key="type.id">
                <a class="link" @click="selectedTypes(type), $emit('TypesArray', selectedTypesArray) " style="cursor: pointer;">
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
                selectedTypesArray: [],
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
            },
            selectedTypes(elm) {
                    if(this.selectedTypesArray.includes(elm.id)){
                    alert('hai già selezionato questa categoria')
                    }
                    else if(this.selectedTypesArray.length >= 3){
                        alert('non puoi selezionare più di 3 categorie')
                    }
                    else{
                        this.selectedTypesArray.push(elm.id)
                    }
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
        color: white;
    }
    h4:hover{
        transform: scale(1.5); 
        transition-duration: 0.5s;
        
    }
    .title{
        width: 50%;
        margin: 5vh auto;
        text-align: center;
    }
    *{
        color: white;
    }
</style>
