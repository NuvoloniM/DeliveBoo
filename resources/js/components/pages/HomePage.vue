<template>
    <div>
        <Jumbo @input-result="inputFunction" />
        <!-- <KitchenTypes @TypesArray="getTypes" /> -->
        <!-- importo l'index dei post, sarà questa ora la nostra home page -->
        <RestaurantsList 
        :filtro="this.input"
        :array="this.selectedTypes"
        />
        <Footer/>
    </div>
</template>

<script>
import RestaurantsList from '../restaurant/RestaurantsList.vue'
import KitchenTypes from '../restaurant/KitchenTypes.vue'
import Jumbo from '../Jumbo.vue'
import Footer from '../Footer.vue'
export default{
    name: 'HomePage',
    components: {
        RestaurantsList,
        Jumbo,
        KitchenTypes,
        Footer
    },
    data(){
        return{
            input:'',
            selectedTypes: [],
        }
    },    
    methods:{
        inputFunction(testo){
            return this.input = testo;
            
        },
        getTypes(elm){
            this.selectedTypes = elm
        }
    }
}
</script>
