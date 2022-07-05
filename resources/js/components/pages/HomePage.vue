<template>
    <div>
        <!-- importo l'index dei post, sarà questa ora la nostra home page -->
        <RestaurantsList/>
    </div>
</template>

<script>
import RestaurantsList from '../restaurant/RestaurantsList.vue'
export default{
    name: 'HomePage',
    components: {
        RestaurantsList
    }
}
</script>
