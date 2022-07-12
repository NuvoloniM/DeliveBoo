<template>
    <div>
        
        <div class="p-3">
            <div class="row">
                <div class="col-8">
                     <div class="row">
                        <div class="col-4" v-for="dish in menu" :key="dish.id">
                            <div class="card" style="width: 18rem;">
                            <img :src="`${dish.immage}`" class="card-img-top" :alt="`${dish.nome_prodotto}`">
                            <div class="card-body">
                                <h5 class="card-title">{{dish.nome_prodotto}}</h5>
                                <p class="card-text"> {{dish.prezzo}}</p>
                                <!-- <a v-if="isIsCart(dish)" class="btn btn-danger">remove from cart</a> -->
                                <a @click="addToCart(dish), getPrice(dish)" class="btn btn-primary">Aggiungi al carrello </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-4">
                    <!-- <div v-if="this.carrello.length=0">Non ci sono prodotti nel carrello</div> -->
                    <div>
                        <ul class="list-group">
                            <div class="w-100 bg-primary"> <h2 class="text-white text-center">Carrello</h2> </div>
                            <li class="list-group-item" v-if="carrello.length == 0">
                                <h4 class="text-center">il carrello è vuoto</h4>
                            </li>
                            <li class="list-group-item d-flex justify-content-between" v-for="(dish, index) in carrello" :key="index">
                                <span class="me-2">{{dish.data.nome_prodotto}}</span>
                                <span>{{dish.data.prezzo}}</span>
                                <span class="text-danger" @click="removeAllFromCart(index),getPrice(dish)"> rimuovi tutto </span>
                                <span class="text-warning" @click="removeFromCart(dish,index), getPrice(dish)"> - </span>
                                <span class="text-primary" @click="addInCart(dish), getPrice(dish)"> + </span>
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
        // isInCart(elem){
        //     this.carrello.forEach(element=>{
        //         if (element.data == elem) {
        //             return true;
        //         }
        //     })
        // },
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

</style>