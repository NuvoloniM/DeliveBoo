<template>
    <div>
        <h1>Dimmi che funzioni</h1>
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
                            <li class="list-group-item d-flex justify-content-between" v-for="dish in carrello" :key="dish.id">
                                <span class="me-2">{{dish.data.nome_prodotto}}</span>
                                <span>{{dish.data.prezzo}}</span>
                                <span> quantità {{dish.quantità}}</span>
                            </li>
                            <li class="list-group-item text-center pt-2" v-if="carrello.length > 0">
                                <h3 class="text-black fw-5"> Prezzo totale: <span>{{totalPrice}}</span></h3>
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
    data(){
        return{
            count: 0,
            menu: [],
            carrello:[],
            totalPrice: 0,
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
                })
        },
        addToCart(elem){
            console.log(elem);
            this.count = 0;
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
            }
           
                // if (!this.carrello.includes(elem)) {
                //     const item = {
                //         'quantità':1,
                //         'data': elem,
                //      } 
                //     this.carrello.push(item); 
                //     console.log(this.carrello);
                // } else {
                //     prompt("c'è gia");
                // };
                
            // if (this.carrello.includes(elem)) {
            //     prompt("c'è già");
            // } else {
            //     const item = {
            //         'quantità':1,
            //         'data': elem,
            //     } 
            //    this.carrello.push(item); 
            // }
            // return this.carrello;
        },
        getPrice(){
            let somma = 0
            this.carrello.forEach(elm => {                
                somma += parseInt(elm.data.prezzo*elm.quantità)
                console.log(typeof(somma))
            }); 
            return this.totalPrice = somma           
        }
    },
    mounted(){
        this.getDish();
    }
}
</script>

<style lang="scss" scoped>

</style>