<template>
    
    <div class="d-flex container">
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
            <h4 class="category" v-for="(type, index) in types" :key="index">
                <a @click="compare(type.id, index)" style="cursor: pointer;">
                    {{type.tipologia}}  
                </a>     
            </h4>
            
        </div>
    </div>
        <div class="row personal d-flex flex-wrap justify-content-start ">
            <!-- ciclo i dati dell'array posts !!ricordarsi :key -->
            <div class="card " v-for="restaurant in filtraggio" :key="restaurant.id" >
                <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
                <div class="card-header ">
                    <!-- essendomi passato anche i dati di categoria posso rihiamarli -->
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body ">
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
        inputRestaurant: '',
        prova:[],
        types:[],
    }
   },
   methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                // riempio l'array vuoto in data con gli elementi presi con axios
                console.log(res.data);
                 this.restaurants = res.data.restaurants
                 this.types = res.data.restaurants_types;
                })
        },
        restaurantFilter(){
        },
        compare(id){
            console.log(id);
            this.prova=[];
            this.restaurants.forEach((element) => {
                let index = this.restaurants.indexOf(element);
                console.log(`Questa la posizione di element ${index}`);
                element.restaurant_type.forEach((obj) =>{
                    console.log(`questo è obj.id : ${obj.id}` );
                    if (obj.id == id){
                        this.prova.push(element);
                        console.log(this.prova);
                    } 
                }
                )
                // if(!element.restaurant_type.){
                //     return this.restaurants.splice(index,1);
                // }
            })
            this.restaurants = []
            this.prova.forEach((element)=>
            this.restaurants.push(element));
            console.log(this.restaurants);            // this.prova = [];
            // let res = [];
            // this.restaurants.forEach((elm, index) => {
            //     elm.restaurant_type.forEach(obj => {
            //         console.log(obj);
            //         let typeId = []
            //         typeId = obj.id
            //         console.log(typeId)
            //          if(this.array.includes(typeId)){
            //             //  count = count + 1
            //             //  console.log("e incluso")
            //             this.prova.push(elm)
            //          } else{
            //              console.log("NOOOOOOOOOOOO")
            //          }
            //     });
                
            // });
            // console.log(this.prova)
            //  res = this.restaurants.filter(item => this.prova.includes(item));
            //     console.log(res)
            //     this.restaurants = [];
            //     res.forEach(elem =>
            //     this.restaurants.push(elem));
            //     console.log(this.restaurants);
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
    // height: 40vh; 
   }
   .card:hover{
    transform: scale(1.2);
    transition-duration: 0.5s;
   }
</style>