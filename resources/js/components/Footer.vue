<template>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="">
                        <img class="img-fluid" width="100" src="../../../public/img/magnapp-logo.png" alt="">
                    </a>
                </div>
                <div class="col">
                    <p>
                        Scopri MagnApp
                    </p>
                    <ul>
                        <li>
                            <a href="">
                                La nostra storia
                            </a>
                        </li>
                        <li>
                            <a href="">
                                I nostri partner
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Contattaci
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <p>
                        Scarica MagnApp sul tuo cellulare!
                    </p>
                    <div>
                        <a href="">
                            <img class="img-fluid" width="150" src="../../../public/img/logo-android.png" alt="">
                        </a>    
                    </div>
                    <div>
                        <a href="">
                            <img class="img-fluid" width="150" src="../../../public/img/logo-apple.png" alt="">
                        </a>    
                    </div>
                    
                </div>
            </div>            
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'Footer',
    }

</script>
<style lang="scss" scoped>
    .container{
        width: 80%;
        margin: 5vh auto;
        // background-color: azure;

        .row{

            .col{
                text-align: center;

                ul{
                    list-style-type: none;

                    li{

                        a{
                            text-decoration: none;
                            color: white;
                        }
                    }
                }
            }
        }
        
    }
    *{
        color: white;
    }
</style>
