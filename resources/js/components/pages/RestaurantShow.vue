<template>
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
        </div>


        <div>
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
                        </ul>
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
        data() {
            return {
                count: 0,
                menu: [],
                carrello: [],
                totalPrice: 0,
            }
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
        mounted() {
            this.getDish();
        }
    }

</script>

<style lang="scss" scoped>
    .card {
        text-align: center;
    }

    .box {
        // height: 200px;

        .col1 {
            background-color: yellow;
            // height: 200px;
            width: 70%;
        }

        .col2 {
            background-color: purple;
            // height: 200px;
            width: 30%;
        }
    }

    .col {
        width: calc(100% / 3);
    }










    .pointer:hover {
        cursor: pointer;
    }

    .blue {
        color: rgb(25, 159, 214);
    }

</style>
