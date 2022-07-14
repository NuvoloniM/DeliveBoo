<template>
    <section class="d-flex justify-content-center align-items-start">
        <div class="text-center">
            <h1 class="text-primary mt-5">Il tuo ordine è stato recepito:</h1>
            <br />
            <h1 class="text-primary">il rider arriverà al più presto!</h1>
        </div>
        <div class="box">
            <img
                :src="require('../../../../public/img/moto-movie.png')"
                class="motorino"
                alt=""
            />
        </div>
    </section>
</template>

<script>
export default {
    name: "DeliveryPage",
};
</script>

<style lang="scss" scoped>
section {
    background-image: url("../../../../public/img/sfondo-napoli2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 90vh;
    width: 100%;
    position: relative;

    .box {
        position: absolute;
        bottom: 0;
        left: -500px;
        width: 500px;
        animation-name: verso-dx;
        animation-duration: 3000ms;
        animation-iteration-count: infinite;
        animation-timing-function: linear;

        @keyframes verso-dx {
            0% {
                left: 0%;
                opacity: 1;
            }
            50% {
                left: 50%;
                opacity: 1;
            }
            100% {
                left: 65%;
                opacity: 0;
            }
        }

        img {
            width: 100%;
        }
    }
}
</style>
