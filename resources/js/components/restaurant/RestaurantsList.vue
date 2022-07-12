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
                <a @click="idCheck(type)" style="cursor: pointer;" :class="(type.active == true)? 'active': ''">
                    {{type.tipologia}}  
                </a>     
            </h4>
            
        </div>
    </div>
        <div class="row personal d-flex flex-wrap justify-content-start text-dark">
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
                    <ul class="list-group text-dark">
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
        allRestaurant:[],
        inputRestaurant: '',
        prova:[],
        types:[],
        selectedType: [],
        result : 0,
    }
   },
   methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
                .then((res)=>{
                // riempio l'array vuoto in data con gli elementi presi con axios
                console.log(res.data);
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
            
            console.log(this.selectedType);
        },
        compare(){
            this.prova=[];
            if(this.selectedType.length == 0){
                this.getRestaurants()
            } else {
                this.allRestaurants.forEach((element) => {
                    // let index = this.allRestaurants.indexOf(element);
                    element.restaurant_type.forEach((obj) =>{
                        console.log(`questo è obj.id : ${obj.id}` );
                        for (let i = 0; i < this.selectedType.length; i++) { 
                            if (obj.id == this.selectedType[i]){
                                return this.result += 1; 
                            } else {
                                return this.result += 0;
                            }
                        }
                        console.log(this.result);
                        if (this.result == this.selectedType.length) {
                            this.prova.push(element);
                            this.result = 0;
                        }
                    }
                    )
                        
                    // if(!element.restaurant_type.){
                    //     return this.restaurants.splice(index,1);
                    // }
                })
                this.restaurants = [];
                this.prova.forEach((element)=>
                this.restaurants.push(element));
            }
                      // this.prova = [];
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

    .active {
  background: #f00;
  color: #fff;
  font-size: 30px;
}
</style>