<template>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col col1">
                    <a href="">
                        <!-- <img class="img-fluid" width="100" src="../../../public/img/magnapp-logo.png" alt=""> -->
                    </a>
                </div>
                <div class="col">                                        
                        <ul>
                            <li>
                                <a href="">
                                    Scopri MagnApp    
                                </a>
                            </li>
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
        width: 100%;
        margin: 5vh auto;        

        .row{

            .col1{
                background-image: url("../../../public/img/magnapp-logo.png");
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
            }

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
