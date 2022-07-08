<template>
    <div class="d-flex container">
        <div class="row personal d-flex flex-wrap justify-content-start ">
            
            <div class="card d-flex flex-column justify-content-between" v-for="restaurant in filtraggio" :key="restaurant.id">
                <div class="d-flex img">
                    <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">    
                </div>
                
                <div class="card-header name font-grande">
                    
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body address container-fluid">
                    <p class="card-title font-piccolo">
                        {{ restaurant.indirizzo}}                        
                    </p>  
                </div>
                <div class="link margin">
                    <router-link :to="{ name: 'menu', params: { id: restaurant.id } }" class="btn btn-primary blue">View</router-link>
                </div>
            </div>        
        </div>
    </div>


    <!-- <div class="container1 d-flex">
            
            <div class="row container d-flex flex-wrap">
                    
                    <div class="col container" v-for="restaurant in filtraggio" :key="restaurant.id" >
                     
                        <div class="locandina d-flex flex-column justify-content-between" >
                        
                            <div class="img">
                                <img class="img-fluid"  :src="`/storage/${restaurant.immagine}`">
                            </div>
                      
                            <div class="name">
                                {{restaurant.nome_attivita}}
                            </div>
                        
                            <div class="address">
                                {{ restaurant.indirizzo}}
                            </div>
                            <router-link :to="{ name: 'menu', params: { id: restaurant.id } }" class="btn btn-primary">View</router-link>
                        </div>
                    </div>
            </div>
        </div> -->
    
</template>

<script>
    // importo axios per poter gestire i dati che gli passo tramite controller come se fosse una chiamata ad un api
    import axios from 'axios';

    export default {
        name: 'RestaurantsList',
        data() {
            return {
                restaurants: [],
                inputRestaurant: ''
            }
        },
        methods: {
            getRestaurants() {
                axios.get('http://127.0.0.1:8000/api/restaurants')
                    .then((res) => {
                        // riempio l'array vuoto in data con gli elementi presi con axios
                        console.log(res.data);
                        this.restaurants = res.data.restaurants;
                    })
            }
        },
        mounted() {
            this.getRestaurants()
            console.log(this.filtro)
        },
        computed: {
            filtraggio() {
                return this.restaurants.filter(element => {
                    return element.nome_attivita.includes(this.filtro)
                })
            }
        },
        props: {
            filtro: String
        }
    }

</script>

<style lang="scss" scoped>
    .personal {
        width: 80%;
        margin: 0 auto;
        text-align: center;
    }

    .card:hover {
        transform: scale(1.1);
        transition-duration: 0.5s;
    }

    .img{
        height: 40%;
    }    

    .name{
        height: 20%;
        background-color: white;
    }

    .margin{
        padding: 10px 0 20px 0;
    }
    .font-piccolo{
        font-size: 15px;
    }
    .font-grande{
        font-size: 25px;
    }
    .blue{
        background-color: rgb(25, 159, 214)
    }
    // .link{
    //     height: 20%;
    // }

    @media (max-width: 8000px) {
        .card {
            width: calc((100% / 4) - 25px);
            margin: 2vh auto;
        }
    }

    @media (max-width: 1100px) {
        .card {
            width: calc((100% / 3) - 25px);
            margin: 2vh auto;
        }
    }

    @media (max-width: 900px) {
        .card {
            width: calc((100% / 2) - 25px);
            margin: 2vh auto;
        }
    }

    @media (max-width: 388px) {
        .card {
            width: calc((100% / 1) - 25px);
            margin: 2vh auto;
        }
    }

</style>
