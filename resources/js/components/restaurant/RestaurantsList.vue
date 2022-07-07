<template>
    
    <div class="d-flex  container">
        <div class="row personal d-flex flex-wrap justify-content-start">
            <!-- ciclo i dati dell'array posts !!ricordarsi :key -->
            <div class="card" v-for="restaurant in filtraggio" :key="restaurant.id">
                <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
                <div class="card-header">
                    <!-- essendomi passato anche i dati di categoria posso rihiamarli -->
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body">
                    <p class="card-title">
                        {{ restaurant.indirizzo}}                        
                    </p>
                    <!-- <p>
                        {{restaurant.restaurant_type[0].tipologia}}
                    </p> -->
                    <ul class="list-group">
                        <li class="list-group-item" v-for="categorie in restaurant.restaurant_type" :key="categorie.id">
                            {{categorie.tipologia}}
                        </li>
                    </ul>
                    <router-link :to="{ name: 'menu', params: { id: restaurant.id } }" class="btn btn-primary">View</router-link>
                </div>
            </div>        
        </div>
        <button @click="categoryFilter()">ciao bell</button>
    </div>
</template>

<script>

// importo axios per poter gestire i dati che gli passo tramite controller come se fosse una chiamata ad un api
import axios from 'axios';

export default {
   name: 'RestaurantsList' ,
   data(){
    return {
        restaurants: [],
        inputRestaurant: ''
    }
   },
   methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                // riempio l'array vuoto in data con gli elementi presi con axios
                console.log(res.data);
                 this.restaurants = res.data.restaurants;
                })
        },
        categoryFilter(){
            this.restaurants.forEach((elm, index) => {
                let count = 0
                elm.restaurant_type.forEach(obj => {

                    let typeId = 0
                    typeId = obj.id
                    console.log(typeId)
                     if(this.array.includes(typeId)){
                         count = count + 1
                         console.log("e incluso")
                     } else{
                         console.log("NOOOOOOOOOOOO")
                     }
                });
                if(count == 0){
                    this.restaurants.splice(index, 1)
                }
            });
        }
   },
   mounted(){
    this.getRestaurants()
    console.log(this.filtro)
    console.log()
    console.log( this.restaurants)
   },
   computed:{
    filtraggio(){        
        return this.restaurants.filter(element=>{
            return element.nome_attivita.includes(this.filtro)
        })
    }
   },
   props:{
    filtro: String,
    array: Array,
   }
}
</script>

<style lang="scss" scoped>
   .personal{        
    width: 80%;
    margin: 0 auto;
    text-align: center;
   }
   .card{
    margin: 45px;
    width: calc((100% / 4) - 25px);
    margin: 2vh auto;    
   }
   .card:hover{
    transform: scale(1.2);
    transition-duration: 0.5s;
   }
</style>