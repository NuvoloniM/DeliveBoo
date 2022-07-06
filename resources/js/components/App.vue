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
    
};
</script>
<style scoped>
    *{
        background-color: rgb(25, 159, 214)
    }
</style>
