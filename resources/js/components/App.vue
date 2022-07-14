<template>
    <div>
        <Header />
                
        <main>
            <router-view></router-view>
            <!-- <RestaurantList/> -->
        </main>
    </div>
</template>
<script>
import Header from "./Header.vue";
import RestaurantList from "./restaurant/RestaurantsList.vue";
export default {
    name: "App",
    components: {
        Header,                
        RestaurantList,
    },
    //MODIFICA per FILTRAGGIO
    data(){
        return{
            inputResult:'',
            restaurantArray:[],
        }
    },
    methods:{
    }
    
};
</script>
<style scoped>
    *{
        background: rgb(11,99,184);
        background: linear-gradient(0deg, rgba(11,99,184,1) 18%, rgba(75,138,191,1) 45%, rgba(255,255,255,1) 100%);
    }
</style>
