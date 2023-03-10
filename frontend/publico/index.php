<!DOCTYPE html>
<html lang="en">

<?php

$black = 1;
include "vendor/template/head.php";
?>

<body>
    <?php
    include "vendor/template/Navbar.php";
    //include "vendor/template/Navbar_Green.php"; 
    ?>
    <!-- Start Content -->
    <div id="spiral">

        <div class="main-head">
            <div id="headmove" class = 'overflow-hidden'>
                <div data-depth="0.2">
                    <div class="bg-right"></div>
                </div>
            </div>
            <div class="heading-text">
                <div class="heading-text-front">
                    <h1>BIENVENIDO A CORONA LOBBY<br>
                        LA EXPERIENCIA GEEK MÁS GRANDE DE LATAM</h1>
                </div>
                <div class="heading-text-back">
                    <h1>BIENVENIDO A CORONA LOBBY<br>
                        LA EXPERIENCIA GEEK MÁS GRANDE DE LATAM</h1>
                </div>
            </div>
        </div>
        <!-- About -->


        <section class="about-page">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-7">
                        <div class="about-text">
                            <div class="main-title text-left">
                                <style>
                                    .main-title::before {
                                        display: none !important
                                    }
                                </style>
                                <h2>DISFRUTA DE NUESTRA <span><br>PRIMERA EDICION</span></h2>
                            </div>

                            <p style="text-align: justify; padding-right: 10%;"> <strong>Un fin de semana con juegos y muuucho salseo.</strong></p><br>
                            <p style="text-align: justify; padding-right: 10%;">Es un gran placer anunciar el nacimiento de Corona Lobby. <br>
                                Nos emocionamos y tiramos la casa por ventana con el evento gaming más grande que se ha visto en Latinoamérica.

                                Es momento de hacer historia y sin ti no sería posible. Caele al camping con tu clan o en
                                modo solitario, de ley conoces nuevos adversarios mientras te refrescas un rato con Corona.

                            </p>

                            <a href="boletos.php" target="_blank" class="load-spiral hover-target">
                                <img style="  margin-top: 5%;" src="imagenes/b1.png" height="50px">
                            </a>
                        </div>

                    </div>
                    <div class="col-lg-5">

                        <img src="imagenes/1.png" height="700px">
                    </div>
                </div>
            </div>

        </section>

        <br><br><br><br>

        <!-- SPONSOR -->

        <br><br><br><br><br>
        <section class="partner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title text-center">

                            <h2>Sponsors <span>(PARTNERS IN CRIME)</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row mt-50">
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/amazon.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/steam.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/citi.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/logitech.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/riot.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/lego.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/ea.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 px-0">
                        <div class="partner-list">
                            <img class="img-fluid" src="imagenes/amd.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <?php include "vendor/template/pie.php"; ?>

    </div>
    <?php include "vendor/template/cursor.php"; ?>

</body>


</html>