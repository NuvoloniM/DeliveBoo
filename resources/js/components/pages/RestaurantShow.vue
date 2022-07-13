<template>
    <div class="p-3">
        <!-- <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-4" v-for="dish in menu" :key="dish.id">
                        <div class="card" style="width: 18rem;">
                            <img :src="`${dish.immage}`" class="card-img-top" :alt="`${dish.nome_prodotto}`">
                            <div class="card-body">
                                <h5 class="card-title">{{dish.nome_prodotto}}</h5>
                                <p class="card-text"> {{dish.prezzo}}</p>
                                <a @click="addToCart(dish), getPrice(dish)" class="btn btn-primary">Aggiungi al carrello
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div>
                <ul class="list-group">
                    <div class="w-100 bg-primary">
                        <h2 class="text-white text-center">Carrello</h2>
                    </div>
                    <li class="list-group-item" v-if="carrello.length == 0">
                        <h4 class="text-center">il carrello è vuoto</h4>
                    </li>
                    <li class="list-group-item d-flex justify-content-between" v-for="(dish, index) in carrello"
                        :key="index">
                        <span class="me-2">{{dish.data.nome_prodotto}}</span>
                        <span>{{dish.data.prezzo}}</span>
                        <span class="text-danger pointer blue" @click="removeAllFromCart(index),getPrice(dish)"> rimuovi
                            tutto </span>
                        <span class=" pointer blue" @click="removeFromCart(dish,index), getPrice(dish)"> - </span>
                        <span class="text-primary pointer blue" @click="addInCart(dish), getPrice(dish)"> + </span>
                        <span> quantità {{dish.quantità}}</span>
                    </li>
                    <li class="list-group-item text-center pt-2" v-if="carrello.length > 0">
                        <h3 class="text-black fw-5"> Prezzo totale: <span>{{totalPrice}}</span></h3>
                        <h5 class="btn btn-danger" @click="deleteCart()">Svuota carrello </h5>
                    </li>
                </ul>
            </div>
        </div> -->


        <!-- <div>
            <div class="box d-flex">
                <div class="col1 ">
                    <div class="row">
                        <div class="col ">
                            <div class="row">
                                <div class="col" v-for="dish in menu" :key="dish.id">
                                    <div class="card">
                                        <img :src="`${dish.immage}`" class="card-img-top"
                                            :alt="`${dish.nome_prodotto}`">
                                        <div class="card-body">
                                            <h5 class="card-title">{{dish.nome_prodotto}}</h5>
                                            <p class="card-text"> {{dish.prezzo}}</p>
                                            <a @click="addToCart(dish), getPrice(dish)" class="btn btn-primary">Aggiungi
                                                al carrello </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="container">
                        <ul class="list-group">
                            <div class="w-100 bg-primary">
                                <h2 class="text-white text-center">Carrello</h2>
                            </div>
                            <li class="list-group-item" v-if="carrello.length == 0">
                                <h4 class="text-center">il carrello è vuoto</h4>
                            </li>
                            <li class="list-group-item d-flex justify-content-between" v-for="(dish, index) in carrello"
                                :key="index">
                                <span class="me-2">{{dish.data.nome_prodotto}}</span>
                                <span>{{dish.data.prezzo}}</span>
                                <span class="text-danger pointer blue" @click="removeAllFromCart(index),getPrice(dish)">
                                    rimuovi tutto </span>
                                <span class=" pointer blue" @click="removeFromCart(dish,index), getPrice(dish)"> -
                                </span>
                                <span class="text-primary pointer blue" @click="addInCart(dish), getPrice(dish)"> +
                                </span>
                                <span> quantità {{dish.quantità}}</span>
                            </li>
                            <li class="list-group-item text-center pt-2" v-if="carrello.length > 0">
                                <h3 class="text-black fw-5"> Prezzo totale: <span>{{totalPrice}}</span></h3>
                                <h5 class="btn btn-danger" @click="deleteCart()">Svuota carrello </h5>
                            </li>
                            <button class="btn btn-primary">
                                <router-link :to="{name:'form' ,params: {cart: this.totalPrice, id: this.restaurant_id}}" class="btn btn-info">Completa il tuo ordine</router-link>
                            </button>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="d-flex contenitore-generale text-align-center text-center">
            <div class="piatti d-flex">
                <div class="container container-piatti">
                    <div class="row row-piatti d-flex flex-wrap justify-content-center">
                        <div class="col-3 d-flex flex-column rounded-lg" v-for="dish in menu" :key="dish.id">
                            <div class="img">
                                <img class="img-fluid rounded-lg" :src="`${dish.immage}`" alt="">
                            </div>
                            <div class="nome mt-3">
                                {{dish.nome_prodotto}}
                            </div>    
                            <div class="mt-3">
                                {{dish.prezzo}}
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
                                CARRELLO
                            </h3>
                            <p v-if="carrello.length == 0">
                                Il carrello e' vuoto
                            </p>
                            <div v-for="(dish, index) in carrello" :key="index">
                                <div class="mt-3 row">
                                    <div class="col-12 ">
                                        <span class="text-danger pointer blue mr-3" @click="removeAllFromCart(index),getPrice(dish)">X</span>
                                        <span>{{dish.data.nome_prodotto}}</span>  
                                        <span> {{dish.data.prezzo}}</span>  
                                    </div>
                                </div>
                                <div class="mt-3 row"> 
                                    <div class="col-12 border-p">
                                        <span class=" pointer white mr-3" @click="removeFromCart(dish,index), getPrice(dish)">-</span>
                                        <span class="pointer white mr-3" @click="addInCart(dish), getPrice(dish)">+</span>
                                        <span>{{dish.quantità}}</span>
                                    </div>
                                </div>                                
                                
                            </div>
                            <!-- <p v-for="(dish, index) in carrello" :key="index">
                                <span class="me-2">{{dish.data.nome_prodotto}}</span>
                                <span>{{dish.data.prezzo}}</span>
                                <span class="text-danger pointer blue" @click="removeAllFromCart(index),getPrice(dish)"> 
                                    rimuovi tutto 
                                </span>
                                <span class=" pointer white" @click="removeFromCart(dish,index), getPrice(dish)">  -  </span>
                                <span class="pointer white" @click="addInCart(dish), getPrice(dish)">  +  </span>
                                <span> quantità {{dish.quantità}}</span>
                            </p> -->
                            <p class="mt-4" v-if="carrello.length > 0">
                                TOTALE: <span>{{totalPrice}}</span>
                            </p>
                            <p @click="deleteCart()" v-if="carrello.length > 0" class="pointer text-danger">
                                Svuota carrello
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- fomr pagamento da cancelare  -->

        <div class="alert alert-danger" v-if="error">
            {{ error }}
        </div>

        <form>
            <div class="form-group">
                <label for="amount">Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                    <input type="number" id="amount" class="form-control" placeholder="Enter Amount">
                </div>
            </div>
                <hr />
            <div class="form-group">
                <label>Credit Card Number</label>
                <div id="creditCardNumber" class="form-control"></div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label>Expire Date</label>
                        <div id="expireDate" class="form-control"></div>
                    </div>
                    <div class="col-6">
                        <label>CVV</label>
                        <div id="cvv" class="form-control"></div>
                    </div>
                </div>
            </div>
            <div class="card bg-light">
                <div class="card-header">Payment Information</div>
                <div class="card-body">
                    <div class="alert alert-success" v-if="nonce">
                        Successfully generated nonce.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-block" @click.prevent="payWithCreditCard">Pay with Credit Card</button>
        </form>
    </div>
</template>

<script>
    import axios from 'axios';

import axios from 'axios';
// import PaymentForm from './PaymentForm.vue';
import braintree from 'braintree-web';

export default {
    name: 'RestaurantShow',
    components: {
        // PaymentForm,
    },
    data(){
        return{
            count: 0,
            menu: [],
            restaurant_id: '',
            carrello:[],
            totalPrice: 0,
            hostedFieldInstance: false,
            nonce: '',
            error:'',
        }
    },
    methods: {
        // sendCart(){
        //     axios.post(`http://127.0.0.1:8000/api/restaurants/${ this.$route.params.id }`, this.totalPrice)
        //         .then((res)=>{
        //             console.log(res.config.data);
        //             return  res.config.data;
        //         })
        // },
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
        methods: {
            getDish() {
                // chiamata ad axios con parametro dinamico, tramite show mi passo il singolo id che mi serve 
                // metodo di route per ottenere il paramentro $route.params -> me lo sonon passato dall'index, dal bottone show
                // vinee tutto gestito da api.php->postcontroller@show
                axios.get(`http://127.0.0.1:8000/api/restaurants/${ this.$route.params.id }`)
                    .then((res) => {
                        console.log(res.data);
                        // console.log(data);
                        this.menu = res.data;
                    })
            },
            addToCart(elem) {
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
                        this.carrello[index].quantità += 1;
                        console.log(this.carrello);
                    };
                    this.count = 0;
                }
            },
            addInCart(elem) {
                elem.quantità += 1;
            },
            // isInCart(elem){
            //     this.carrello.forEach(element=>{
            //         if (element.data == elem) {
            //             return true;
            //         }
            //     })
            // },
            removeAllFromCart(elem, index) {
                this.totalPrice -= elem.prezzo * elem.quantità;
                this.carrello.splice(index, 1);
            },
            removeFromCart(elem, index) {
                if (elem.quantità > 0) {
                    elem.quantità -= 1;
                    this.totalPrice -= elem.prezzo;
                    if (elem.quantità == 0) {
                        this.carrello.splice(index, 1);
                    }
                }
            },
            getPrice() {
                let somma = 0
                this.carrello.forEach(elm => {
                    somma += parseInt(elm.data.prezzo * elm.quantità)
                    console.log(typeof (somma))
                });
                return this.totalPrice = somma
            },
            deleteCart() {
                this.carrello = [];
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
       braintree.client.create({
           authorization: "sandbox_hch5bftk_txgvrjhb35ytsksf"
       })
       .then(clientInstance => {
           let options = {
               client: clientInstance,
               styles: {
                   input: {
                       'font-size': '14px',
                       'font-family': 'Open Sans'
                   }
               },
               fields: {
                   number: {
                       selector: '#creditCardNumber',
                       placeholder: 'Enter Credit Card'
                   },
                   cvv: {
                       selector: '#cvv',
                       placeholder: 'Enter CVV'
                   },
                   expirationDate: {
                       selector: '#expireDate',
                       placeholder: '00 / 0000'
                   }
               }
           }
           return braintree.hostedFields.create(options)
       })
       .then(hostedFieldInstance => {
           // @TODO - Use hostedFieldInstance to send data to Braintree
           this.hostedFieldInstance = hostedFieldInstance;
       })
       .catch(err => {
       });
   }
}
</script>

<style lang="scss" scoped>
    .col-3{
        border: 1px solid cyan;
    }
    .border-p{
        border-bottom: 1px solid blue;
    }
    @media(max-width: 900px){
        .contenitore-generale{
            flex-direction: column;            
        }
        .container-piatti{
            width: 100%;
        }              
    }
    // @media(max-width: 800px){
    //     .col-3{
    //         min-width: 200px;
    //     }
    // }
    @media(max-width: 1000px){
        .col-3{
            min-width: 200px;
        }
    }
    
    // @media(max-width: 800px){
    //     .col-3{
    //         min-width: 150px;
    //     }
    // }
    *{
        background-color: rgb(25, 159, 214);
        color: white;
    }
    .contenitore-generale{
        // background-color: red;
        // height: 300px;
        margin-top: 5vh;

        .piatti{
            // background-color: yellow;
            width: 65%;
            .container-piatti{
                // background-color: orange;
                // height: 300px;
                .row-piatti{
                    // border: 1px solid red;
                    // height: 300px;
                    .col-3{
                        // border: 1px solid black;
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
            // background-color: blue;
            width: 35%;
            .container-carrello{
                // background-color: blue;
                // height: 300px;
                .row{
                    // background-color: purple;
                    // height: 40vh;
                    .col-12{
                        // background-color: red;
                        text-align: center;
                        .white{
                            color: white;
                        }
                    }
                }
            }
        }
    }
    
    
    
    // .card {
    //     text-align: center;
    // }

    // .box {
    //     // height: 200px;

    //     .col1 {
    //         background-color: yellow;
    //         // height: 200px;
    //         width: 70%;
    //     }

    //     .col2 {
    //         background-color: purple;
    //         // height: 200px;
    //         width: 30%;
    //     }
    // }

    // .col {
    //     width: calc(100% / 3);
    // }










    .pointer:hover {
        cursor: pointer;
        color: blue;
    }

    .blue {
        color: rgb(25, 159, 214);
    }

</style>
