<template>
    <div class="d-flex container">
        <div class="row personal d-flex flex-wrap justify-content-start ">
<<<<<<< HEAD
            
            <div class="card d-flex flex-column justify-content-between" v-for="restaurant in filtraggio" :key="restaurant.id">
                <div class="d-flex img">
                    <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">    
                </div>
                
                <div class="card-header name font-grande">
                    
=======
            <!-- ciclo i dati dell'array posts !!ricordarsi :key -->
            <div class="card " v-for="restaurant in filtraggio" :key="restaurant.id" >
                <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
                <div class="card-header ">
                    <!-- essendomi passato anche i dati di categoria posso rihiamarli -->
>>>>>>> 15d7a200da44c067414d996ad6adbac5e0dd5f69
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body address container-fluid">
                    <p class="card-title font-piccolo">
                        {{ restaurant.indirizzo}}                        
<<<<<<< HEAD
                    </p>  
                </div>
                <div class="link margin">
                    <router-link :to="{ name: 'menu', params: { id: restaurant.id } }" class="btn btn-primary blue">View</router-link>
                </div>
            </div>        
        </div>
=======
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
        <button @click="compare()">ciao bell</button>
>>>>>>> 15d7a200da44c067414d996ad6adbac5e0dd5f69
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

<<<<<<< HEAD
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

=======
// importo axios per poter gestire i dati che gli passo tramite controller come se fosse una chiamata ad un api
import axios from 'axios';

export default {
   name: 'RestaurantsList' ,
   data(){
    return {
        restaurants: [],
        inputRestaurant: '',
        prova:[],
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
        restaurantFilter(){
            
        },
        compare(){
            this.prova = [];
            let res = [];
            this.restaurants.forEach((elm, index) => {
                elm.restaurant_type.forEach(obj => {
                    console.log(obj);
                    let typeId = 0
                    typeId = obj.id
                    console.log(typeId)
                     if(this.array.includes(typeId)){
                        //  count = count + 1
                        //  console.log("e incluso")
                        this.prova.push(elm)
                     } else{
                         console.log("NOOOOOOOOOOOO")
                     }
                });
                
            });
            console.log(this.prova)
             res = this.restaurants.filter(item => this.prova.includes(item));
                console.log(res)
                this.restaurants = [];
                res.forEach(elem =>
                this.restaurants.push(elem));
                console.log(this.restaurants);
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
    },
   },
   props:{
    filtro: String,
    array: Array,
   }
}
>>>>>>> 15d7a200da44c067414d996ad6adbac5e0dd5f69
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
