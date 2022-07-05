<template>
    <section class="d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h2>Cerca il tuo ristorante</h2>
            <input type="text" />
        </div>
    </section>
</template>

<script>
export default {
    name: "Jumbo",
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
