<template>
    <header>
        <div class="stick_nav fixed-top"></div>

            <!-- importo una navbar di bootstrap -->
            <nav class="navbar navbar-expand-lg navbar justify-content-between fixed-top" >
                <!-- non uso più il tag a per i link della navbar ma direttamente router-link -->
                <!-- => per gestire rotte front end uso :to="{name: ' nome dato in routes.vue'}" -->
                <!-- => per gestire rotte backend continuo ad usare il tag a e l'href" -->
                <div>
                    <router-link class="navbar-brand" :to="{ name: 'home' }">
                        <img
                            :src="require('../../../public/img/magnapp-logo.png')"
                            width="45"
                            alt=""
                        />
                        <img
                            :src="require('../../../public/img/magnapp-pitto.png')"
                            width="100"
                            alt=""
                        />
                    </router-link>
                </div>
    
                <!-- hamburgher menu -->
                <div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <router-link class="nav-link" :to="{ name: 'home' }"
                                    >Home</router-link
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/restaurants">Admin</a>
                            </li>
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Registrati</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>
</template>

<script>
    export default {
        name: "Header",
    };
</script>

<style scoped>
    header {
        height: 75px;    
    }
    a{
        color: white;
    }
    /* scritte nere quando ci passo sopra */
    /* a:hover{
        color: black;
    } */
    .stick_nav{
        background-color: black;
        opacity: 0.2;
        height: 75px;
    }
</style>
