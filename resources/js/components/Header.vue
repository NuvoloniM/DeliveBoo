
<template>
    <header>
        <!-- importo una navbar di bootstrap -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- non uso più il tag a per i link della navbar ma direttamente router-link -->
            <!-- => per gestire rotte front end uso :to="{name: ' nome dato in routes.vue'}" -->
            <!-- => per gestire rotte backend continuo ad usare il tag a e l'href" -->
            <router-link class="navbar-brand" :to="{ name: 'home' }">DeliveBoo</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="/admin">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">registrati</a>
                    </li>
                </ul>
            </div>
            
        </nav>
    </header>
</template>

<script>
export default{
    name: "Header"
}
</script>