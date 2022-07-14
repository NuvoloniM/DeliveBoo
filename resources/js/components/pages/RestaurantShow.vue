<template>
    <div class="p-3 main_container">
        <div class="d-flex contenitore-generale text-align-center text-center">
            <div class="piatti d-flex">
                <div class="container container-piatti">
                    <div class="row row-piatti d-flex flex-wrap justify-content-center">
                        <div class="col-3 d-flex flex-column rounded-lg p-2" v-for="dish in menu" :key="dish.id">
                            <div class="dish_img">
                                <img class="img-fluid rounded" :src="`/storage/${dish.immage}`" alt="">
                            </div>
                            <div class="nome mt-3">
                                {{dish.nome_prodotto}}
                            </div>    
                            <div class="mt-3">
                                <div class="prezzo_salmon">
                                    &euro;  {{dish.prezzo}}
                                </div>
                            </div>
                            <div class="mt-3">
                                <a @click="addToCart(dish), getPrice(dish)" class="pointer">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carrello">
                <div class="container container-carrello">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h3>
                                Il Tuo Ordine
                            </h3>
                            <p v-if="carrello.length == 0">
                                Il carrello e' vuoto
                            </p>
                            <div v-for="(dish, index) in carrello" :key="index">
                              <div class="cart_item mb-2">
                                <div class="mt-3 row">
                                    <div class="col-12 ">
                                        <span class="text-danger pointer blue mr-3" @click="removeAllFromCart(index),getPrice(dish)">X</span>
                                        <span>{{dish.data.nome_prodotto}}</span>  
                                        <span class="mx-1 item_quantita"> {{dish.data.prezzo}}</span>  
                                    </div>
                                </div>
                                <div class="mt-3 row"> 
                                    <div class="col-12">
                                        <span class=" pointer white mr-3" @click="removeFromCart(dish,index), getPrice(dish)">-</span>
                                        <span class="pointer white mr-3" @click="addInCart(dish), getPrice(dish)">+</span>
                                        <span>{{dish.quantità}}</span>
                                    </div>
                                </div>                                
                              </div>
                            </div>
                            <p class="mt-4" v-if="carrello.length > 0">
                                TOTALE: <span>{{totalPrice}}</span>
                            </p>
                            <p @click="deleteCart()" v-if="carrello.length > 0" class="pointer text-danger">
                                Svuota carrello
                            </p>
                            <button class="btn btn-info" v-if="carrello.length != 0">
                                <router-link :to="{name:'form' ,params: {cart: this.totalPrice, id: this.restaurant_id}}">Completa il tuo ordine</router-link>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: 'RestaurantShow',
    components: {
    },
    data(){
        return{
            count: 0,
            menu: [],
            restaurant_id: '',
            carrello:[],
            totalPrice: 0,
            hostedFieldInstance: false,
        }
    },
    methods: {
        getDish(){
            // chiamata ad axios con parametro dinamico, tramite show mi passo il singolo id che mi serve 
            // metodo di route per ottenere il paramentro $route.params -> me lo sonon passato dall'index, dal bottone show
            // vinee tutto gestito da api.php->postcontroller@show
            axios.get(`http://127.0.0.1:8000/api/restaurants/${ this.$route.params.id }`)
                .then((res) => {
                    console.log(res.data);
                    // console.log(data);
                    this.menu = res.data;
                    this.restaurant_id = this.$route.params.id;
                })
        },
        addToCart(elem){
            console.log(elem);
            if (this.carrello.length == 0) {
                let item = {
                'quantità': 1,
                'data': elem,
               }
                this.carrello.push(item);
            } else {
                 this.carrello.forEach(element => {
                    if (element.data == elem) {
                        return this.count += 1;
                    }
                });
                if (this.count == 0) {
                    let item = {
                        'quantità': 1,
                        'data': elem,
                    }
                    this.carrello.push(item);
                } else {
                    let index = this.carrello.findIndex(x => x.data == elem);
                    this.carrello[index].quantità +=1;
                    console.log(this.carrello);
                };
                this.count = 0;
            }
        },
        addInCart(elem){
            elem.quantità += 1;
        },
        removeAllFromCart(elem,index){
            this.totalPrice -= elem.prezzo*elem.quantità;
            this.carrello.splice(index,1);
        },
        removeFromCart(elem,index){
            if(elem.quantità > 0){
                elem.quantità -= 1;
                this.totalPrice -= elem.prezzo;
                if(elem.quantità == 0){
                    this.carrello.splice(index,1);
                }
            }
        },
        getPrice(){
            let somma = 0
            this.carrello.forEach(elm => {                
                somma += parseInt(elm.data.prezzo*elm.quantità)
                console.log(typeof(somma))
            }); 
            return this.totalPrice = somma           
        },
        deleteCart(){
            this.carrello = [];
        },
        payWithCreditCard() {
        if(this.hostedFieldInstance)
        {
            this.error = "";
            this.nonce = "";
            
            this.hostedFieldInstance.tokenize().then(payload => {
                console.log(payload);
                this.nonce = payload.nonce;
            })
            .catch(err => {
                console.error(err);
                this.error = err.message;
            })
        }
   }
    },
    mounted(){
        this.getDish();
    }
}
</script>

<style lang="scss" scoped>
    .main_container{
        min-height: calc(100vh - 75px);
    }
    .dish_img{
        height: 200px;
        img{
            height: 100%;
            width: 100%;
        }
    }
    .col-3{
        border: 1px solid cyan;
    }
    @media(max-width: 900px){
        .contenitore-generale{
            flex-direction: column;            
        }
        .container-piatti{
            width: 100%;
        }              
    }
    @media(max-width: 1000px){
        .col-3{
            min-width: 200px;
        }
    }
    *{
        background-color: rgb(25, 159, 214);
        color: white;
    }
    .contenitore-generale{
        margin-top: 5vh;

        .piatti{
            width: 65%;
            .container-piatti{
                .row-piatti{
                    .col-3{
                        margin: 10px;                        
                        text-align: center;
                        a{
                            text-decoration: none;
                        }
                    }
                }
            }
        }
   
        .carrello{
            position: fixed;
            right: 10px;
            overflow-y: auto;
            border: 2px solid black;
            padding: 50px;
            border-radius: 20px;
            max-height: 500px;
            width: 35%;
            .container-carrello{
                .row{
                    .col-12{
                        text-align: center;
                        .white{
                            color: white;
                        }
                    }
                }
            }
        }
        .cart_item{
            border-bottom: 2px solid black;
            padding: 15px;
        }
        .item_quantita{
            padding:0 8px;
            background-color: lightsalmon ;
            border-radius: 20px;
        }
    }
    .prezzo_salmon{
        color: lightsalmon;
    }
    .pointer:hover {
        cursor: pointer;
        color: blue;
    }

    .blue {
        color: rgb(25, 159, 214);
    }

</style>
