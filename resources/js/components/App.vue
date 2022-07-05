<template>
    <div>
        <Header/>
        <main>
            <router-view></router-view>
            <!-- <RestaurantList/> -->
        </main>
    </div>
</template>
<script>
import Header from './Header.vue';
import RestaurantList from './restaurant/RestaurantsList.vue';
export default{
    name: 'App',
    components: {
        Header,
        RestaurantList,
    }
}
</script>
