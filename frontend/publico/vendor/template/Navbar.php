<?php
session_start();
if ($black == 1) {
?>
    <link rel="stylesheet" href="vendor/css/Navbar_Black.css">
<?php
} else {

?>
    <link rel="stylesheet" href="vendor/css/Navbar_Verde.css">
<?php
}
?>


<!-- Inicia Header -->
<header>
    <!-- Toggle menu -->
    <div class="menus">
        <div class="main-title text-left">
            <img src="imagenes/c.png" height="100px">
            <h3 style="color: #000000;"><strong>CORONA <br>LOBBY</strong></h3><br>
        </div>
        <a class="hover-target" href="index.php">Inicio</a>
        <a class="hover-target" href="blog.php">Blog</a>
        <a class="hover-target" href="boletos.php">Boletos</a>
        <a class="hover-target" href="torneos.php" target="blank">Experiencia</a>
        <a class="hover-target" href="login.php" target="blank">Login</a>

    </div>


    <div class="menu__toggler hover-target magnetic"><span></span></div>

    <nav>
        <!-- Logo -->
        <!--<div class="logo hover-target"> -->
        <div class="scr copyright-top" style="top: 8vh; left: 9%;">
            <a class="load-spiral" href="index.php">
                <?php
                if ($black == 1) {
                ?>
                    <img src="imagenes/logo.png" width="200px" alt="logo">
                <?php
                } else {
                ?>
                    <img src="imagenes/logov.png" width="200px" alt="logo">
                <?php
                }
                ?>

            </a>
        </div>
        <!--</div>-->
        <!-- Menu bar -->
        <div class="toggle-btn magnetic hover-target">
            <div class="burger-menu">
                <span class="one"></span>
                <span class="two"></span>
                <span class="tre"></span>
            </div>
        </div>
        <!-- Social -->

        <?php
        if ($black == 1) {
        ?>
            <div class="scr socials">
                <div class="list-social">
                    <ul>
                        <li class="hover-target"><a href="https://es-la.facebook.com/CoronaCapital/" target="_blank">Facebook</a></li>
                        <li class="hover-target"><a href="https://www.instagram.com/coronacapital/?hl=es/" target="_blank">Instagram</a></li>
                        <li class="hover-target"><a href="https://thecooldown.gg/">Cool Down</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="scr copyright-top">
                <p>Grupo Modelo &copy; 2022</p>

            </div>
        <?php
        }
        ?>
        <div class="bg-nav"></div>






        <!-- menu -->
        <div class="manu-container">
            <div class="menu">
                <div class="data">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="links text-left text-lg-left">
                                    <ul>
                                        <li>
                                            <p>01</p><a class="menu-link hover-target load-spiral" href="index.php">Inicio</a>
                                        </li>
                                        <li>
                                            <p>02</p><a class="menu-link hover-target load-spiral" href="boletos.php" target="blank">Boletos</a>
                                        </li>
                                        <?php if (!$_SESSION) { ?>

                                            <li>
                                                <p>03</p><a class="menu-link hover-target load-spiral" href="acceso.php">Login</a>
                                            </li>
                                        <?php } else { ?>
                                            <li>
                                                <p>03</p><a class="menu-link hover-target load-spiral" href="torneos.php">Experiencia</a>
                                            </li>
                                            <li>
                                                <p>04</p><a class="menu-link hover-target load-spiral" href="#">Un gusto <?php echo $_SESSION['Nombre']; ?>!</a>
                                            </li>
                                            <li>
                                                <p>05</p><a class="menu-link hover-target load-spiral" href="../../backend/controladores/acceso.php?cerrar">Cerrar sesión</a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-4 offset-md-2 centered text-right">
                                <div class="address-menu">

                                    <h3>EXPO GUADALAJARA</h3>
                                    <h4>Av. Mariano Otero #1499 CP.44550, Verde Valle, 44550 Guadalajara, Jal.</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>


</header>
<!-- End Header -->

<!-- Toggle menu -->
<div class="menus">
    <div class="main-title text-left">
        <h3 style="color: #000000;"><strong>CORONA <br>LOBBY</strong></h3><br>
    </div>
    <?php if ($_SESSION) { ?>
        <a class="hover-target"  target="blank">¡Hola de nuevo <?php echo $_SESSION['Nombre'] ?>!</a>
    <?php } ?>
    <a class="hover-target" href="index.php">Inicio</a>
    <a class="hover-target" href="boletos.php">Boletos</a>
    <?php if (!$_SESSION) { ?>
        <a class="hover-target" href="acceso.php" target="blank">Login</a>
    <?php } else { ?>
        <a class="hover-target" href="torneos.php" target="blank">Experiencia</a>
        <a class="hover-target" href="../../backend/controladores/acceso.php?cerrar" target="blank">Cerrar sesión</a>
    <?php } ?>
</div>

<a href="https://api.whatsapp.com/send?phone=3312275516&text=Tengo%20dudas%20sobre%20CoronaLobby%F0%9F%91%BE" target="blank">
    <img src="imagenes/w.png" class="hover-target magnetic" style="position: fixed;
    bottom: 90px;
    left: 20px;
    border-radius: 100%;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    -ms-border-radius: 100%;
    -o-border-radius: 100%;
    z-index: 102;
    height: 50px;
    width: 50px;
    outline: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    background: #fff;" alt="">
</a>


<div class="menu__toggler hover-target magnetic"><span></span></div>