<template>
    <div>
        <!-- ciclo i dati dell'array posts !!ricordarsi :key -->
            <div class="card" v-for="restaurant in restaurants" :key="restaurant.id">
                <img :src="`${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
                <div class="card-header">
                    <!-- essendomi passato anche i dati di categoria posso rihiamarli -->
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body">
                    <p class="card-title">
                        {{ restaurant.indirizzo}}
                    </p>

                </div>
            </div>
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

</style>