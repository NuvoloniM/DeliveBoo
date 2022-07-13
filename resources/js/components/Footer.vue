<template>
    <footer>
        <div class="container a1">
            <div class="row d-flex flex-wrap justify-content-center">
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
    .a1{
        width: 100%;
        margin-top: 5vh;  
        padding: 10px 0;      

        .row{

            .col1{
                background-image: url("../../../public/img/magnapp-logo.png");
                background-size: contain;
                background-position: center;
                background-repeat: no-repeat;
            }

            .col{
                text-align: center;
                width: calc(100% / 3);

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

    @media (max-width:770px) {
        .col{
            width: calc(100% / 2);
        }
    }
    *{
        color: white;
    }
</style>
