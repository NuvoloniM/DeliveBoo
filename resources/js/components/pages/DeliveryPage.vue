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
    max-width: 100%;
    overflow-x: hidden;

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
                left: -20%;
                opacity: 1;
            }
            10% {
                left: -6%;
                opacity: 1;
            }
            20% {
                left: 8%;
                opacity: 1;
            }
            30% {
                left: 22%;
                opacity: 1;
            }
            40% {
                left: 36%;
                opacity: 1;
            }
            50% {
                left: 50%;
                opacity: 1;
            }
            60% {
                left: 64%;
                opacity: 1;
            }
            70% {
                left: 78%;
                opacity: 1;
            }
            80% {
                left: 92%;
                opacity: 1;
            }
            90% {
                left: 106%;
                opacity: 1;
            }
            100% {
                left: 120%;
                opacity: 1;
            }
        }

        img {
            width: 100%;
        }
    }
}
</style>
