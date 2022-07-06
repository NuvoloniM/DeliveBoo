<template>
    <section class="d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2>Cerca il tuo ristorante</h2>
            <!-- MODIFICA per FILTRAGGIO  -->
            <!-- <input type="text"
                id="filterInput"
                class="form-control"
                v-model="inputRestaurant"
                @keypress="$emit ( 'input-result', inputRestaurant)" 
                    
            /> -->
            <form>
                <div class="form-group">                    
                    <input type="text" 
                    class="form-control" 
                    id="exampleInputEmail1" 
                    aria-describedby="emailHelp"
                    v-model="inputRestaurant">                    
                </div>                
                <button type="submit" class="btn btn-primary"
                        @click.prevent="$emit ('input-result', inputRestaurant)"
                >Submit</button>
            </form>

        </div>
    </section>
</template>

<script>
    export default {
        name: "Jumbo",
        //MODIFICA per FILTRAGGIO
        data() {
            return {
                inputRestaurant: ''
            }
        }
    };

</script>

<style scoped>
    section {
        /* background-color: brown; */
        background-image: url("../../../public/img/jumbo-boo.jpg");
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 500px;
        width: 100%;
    }

    /* section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
} */
    h2 {
        color: white;
    }

</style>
