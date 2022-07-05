<template>
    <div>
        <KitchenTypes/>
        <!-- importo l'index dei post, sarà questa ora la nostra home page -->
        <RestaurantsList/>
    </div>
</template>

<script>
import RestaurantsList from '../restaurant/RestaurantsList.vue'
import KitchenTypes from '../restaurant/KitchenTypes.vue'
export default{
    name: 'HomePage',
    components: {
        RestaurantsList,
        KitchenTypes
    }
}
</script>
