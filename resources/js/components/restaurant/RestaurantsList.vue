<template>
    <div class="sfondo">
        <div class="container mt-3">
            <div class="row pt-3">
                <div class="col-6 mt-2 rounded-lg" v-for="restaurant in restaurants" :key="restaurant.id">
                    <div class="d-flex flex-column justify-content-around">
                        <div class="img rounded-lg" :style="`background-image: url(storage/${restaurant.immagine})`">
                            <img src="" alt="">
                        </div>
                        <div class="name mt-3">
                            <h2 class="white">
                                {{ restaurant.nome_attivita }}
                            </h2>
                        </div>
                        <div class="mt-3 mb-4 white">
                            <span>
                                {{ restaurant.indirizzo }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="card" v-for="restaurant in restaurants" :key="restaurant.id">
            <img :src="`${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
            <div class="card-header">
                
                {{ restaurant.nome_attivita }}
            </div>
            <div class="card-body">
                <p class="card-title">
                    {{ restaurant.indirizzo}}
                </p>

            </div>
        </div> -->
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
    }
   },
   methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                // riempio l'array vuoto in data con gli elementi presi con axios
                console.log(res.data.restaurants);
                 this.restaurants = res.data.restaurants;
                })
        }
   },
   mounted(){
    this.getRestaurants()
   }
}
</script>

<style lang="scss" scoped>
    .col-6 {
        border: 1px solid cyan;
        text-align: center;
    }
    .img{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 400px;
    }
    .white{
        color: white;
    }
    .container-restaurant{
        margin-top: 12vh;
    }
    .sfondo{
        background-color: rgb(25, 159, 214);
    }
</style>