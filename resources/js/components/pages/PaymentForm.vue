<template>
    <div>
        <div class="alert alert-danger" v-if="error">
            {{ error }}
        </div>

        <form>
            <div class="form-group">
                <label for="amount">Amount</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                    <input type="number" id="amount" class="form-control" placeholder="Enter Amount" :value="`${totale}`" disabled>
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
            <button class="btn btn-primary btn-block" @click.prevent="payWithCreditCard">
                <router-link :to="{name: 'bye'}">paga e Bella!</router-link>
            </button>
        </form>
    </div>
</template>

<style scoped>

</style>


<script>
import braintree from 'braintree-web';
//import axios from 'axios';
    export default {
        name: 'PaymentForm',
        data() {
            return {
            hostedFieldInstance: false,
            nonce: '',
            error:'',
            totale: this.$route.params.cart,
            }
        },
        methods: {
            payWithCreditCard() {
                if (this.hostedFieldInstance) {
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
            },

        },
        mounted() {
            // this.getDish();
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
                .catch(err => {});
        }
    }

</script>