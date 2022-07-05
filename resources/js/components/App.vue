<template>
    <div>
        <Header />
        <Jumbo />        
        <main>
            <router-view></router-view>
            <!-- <RestaurantList/> -->
        </main>
    </div>
</template>
<script>
import Header from "./Header.vue";
import Jumbo from "./Jumbo.vue";
import RestaurantList from "./restaurant/RestaurantsList.vue";
export default {
    name: "App",
    components: {
        Header,
        Jumbo,        
        RestaurantList,
    },
};
</script>
