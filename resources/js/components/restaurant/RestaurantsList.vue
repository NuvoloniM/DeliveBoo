<template>
    
    <div>
        <div class="container-fluid body">
        <div class="container-fluid">
            <div class="title container-fluid text-white">
                <h2>
                    Le categorie piu' amate
                </h2>
                <h3>
                    Trova i ristoranti piu' apprezzati della bella Napoli!
                </h3>      
            </div>
              
        </div>
        
        <div class="d-flex categories container-fluid justify-content-center text-white" >
            <h4 class="category" v-for="(type, index) in types" :key="index">
                <a @click="idCheck(type)" :class="(type.active == true)? 'active': ''" class="rest_type">
                    {{type.tipologia}}  
                </a>     
            </h4>
            
        </div>
    </div>
        <div class="row personal d-flex flex-wrap justify-content-start text-dark">
            <div class="card " v-for="restaurant in filtraggio" :key="restaurant.id" >
                <img :src="`/storage/${restaurant.immagine}`" class="card-img-top" :alt="`${restaurant.nome_attivita}`">
                <div class="card-header ">
                    {{ restaurant.nome_attivita }}
                </div>
                <div class="card-body ">
                    <p class="card-text">
                        {{ restaurant.indirizzo}}                        
                    </p>
                    <div class="overflow-x">
                        <ul class="list-group text-dark">
                            <li class="list-group-item" v-for="categorie in restaurant.restaurant_type" :key="categorie.id">
                                {{categorie.tipologia}}
                            </li>
                        </ul>
                    </div>
                    <div class="link py-5">
                        <router-link :to="{ name: 'menu', params: { id: restaurant.id } }" class="btn btn-primary blue">Vedi il Menù</router-link>
                    </div>
                </div>
            </div>        
        </div>
    </div>
    
</template>

<script>
import axios from 'axios';
export default {
   name: 'RestaurantsList' ,
   data(){
    return {
        restaurants: [],
        allRestaurant:[],
        inputRestaurant: '',
        prova:[],
        types:[],
        selectedType: [],
        count: 0,
        found: false,
    }
   },
   methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                 this.restaurants = res.data.restaurants
                 this.allRestaurants = res.data.restaurants
                 this.types = res.data.restaurants_types;
                 this.types.forEach(elem =>
                 elem.active = false  )
                })
        },
        idCheck(type){
             if(this.selectedType.length == 0){
                this.selectedType.push(type.id)
                type.active = !type.active
                this.compare(type.id);
            }else if(this.selectedType.includes(type.id)){
                let x = this.selectedType.indexOf(type.id);
                this.selectedType.splice(x,1);
                type.active = !type.active
                this.compare(type.id)
            }else if(this.selectedType.length >= 3){
                alert('non puoi selezionare più di 3 categorie');
            } else{
                this.selectedType.push(type.id);
                type.active = !type.active
                this.compare(type.id);
            }
        },
        compare(){
            this.prova=[];
            this.restaurants=[];
            if(this.selectedType.length == 0){
                this.restaurants = this.allRestaurants;
            } else {
                this.allRestaurants.forEach((element) => {
                    console.log(element);
                    let restId = [];
                    element.restaurant_type.forEach(obj=>{
                        restId.push(obj.id);
                    })
                    restId.sort((a,b)=>{
                        return a-b;
                    })
                    console.log(`array tipi del ristorante ${restId}`);
                    this.selectedType.sort((a,b)=>{
                        return a-b;
                    })
                    console.log(`array tipi ordinat ${this.selectedType}`)
                    this.found = this.selectedType.every(v => restId.includes(v));
                    console.log(this.found);
                    if(this.found) this.prova.push(element);
                })
                this.restaurants=[];
                this.prova.forEach((element)=>
                this.restaurants.push(element));
            }
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
    .categories{
        width: 80%;
        margin: 0 auto;  
        padding-left: 10px;
        overflow-x: auto;            
    }
    .category{
        margin: 4vh 3vh;
        cursor: pointer;  
    }
    .link{
        text-decoration: none;
        color: white;
    }
    h4:hover{
        transform: scale(1.3); 
        transition-duration: 0.5s;
        
    }
    .title{
        width: 50%;
        margin: 5vh auto;
        text-align: center;
    }

    .rest_type{
        text-decoration: none;
        color:#fff;
         border: 1px solid ;
        border-radius: 50px;
        padding: 5px 10px;
    }
    .active {
    background: #fff;
    color: rgb(25, 159, 214);
    box-shadow: 5px 5px 10px rgb(9, 111, 151);;
    }
</style>
