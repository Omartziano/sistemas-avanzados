<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Home | Doran Took My Money</title>
        <link rel="shortcut icon" href="img/logo/poro.png">

        <!-- CSS  -->
        <link href="css/icon.css" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
    </head>
    <body>
        <nav class="black" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="../sistemas-avanzados/index.php" class="brand-logo"><img src="img/logo/porosunnyrays.png" class="display-logo"/><span>Doran Took My Money</span></a>
                <ul class="right hide-on-med-and-down tabs">
                    <li class="tab col s3"><a id="homeLink" class="active waves-effect waves-light">Home</a></li>
                    <li class="tab col s3"><a id="newsLink" class="waves-effect waves-light">News</a></li>
                    <li class="tab col s3"><a id="eventsLink" class="waves-effect waves-light">Events</a></li>
                    <li class="tab col s3"><a id="storeLink" class="waves-effect waves-light">Store</a></li>
                    <li class="tab col s3"><a id="contactLink" class="waves-effect waves-light">Contact</a></li>
                    <?php
                        session_set_cookie_params(0);
                        session_start();
                        if(empty($_SESSION["username"])){
                            echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light'>LogIn</a></li>";
                        }else{
                            echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light' style='font-size: 10px'>".$_SESSION["username"]."</a></li>";
                        }
                    ?>
                    <!--<li class="tab col s3"><a id="logInLink" class="waves-effect waves-light">LogIn</a></li>-->
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a id="homeMobileLink" class="waves-effect waves-light">Home</a></li>
                    <li><a id="newsMobileLink" class="waves-effect waves-light">News</a></li>
                    <li><a id="eventsMobileLink" class="waves-effect waves-light">Events</a></li>
                    <li><a id="storeMobileLink" class="waves-effect waves-light">Store</a></li>
                    <li><a id="contactMobileLink" class="waves-effect waves-light">Contact</a></li>
                    <li><a id="logInMobileLink" class="waves-effect waves-light">LogIn</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="img/slider/project_rotator_live_crop.jpg" style="top: 150px;">
                    <div class="caption left-align">
                        <h3>League Of Legends</h3>
                        <h4>MEMORY REPAIR <br>// COMPLETE</h4>
                        <h5 class="light grey-text text-lighten-3">My name is Yi</h5>
                    </div>
                </li>
                <li>
                    <img src="img/slider/bg_thebetaisover.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>DOTA 2</h3>
                        <h4>THE BETA IS OVER</h4>
                        <h5 class="light grey-text text-lighten-3">Get Dota 2 on Steam</h5>
                    </div>
                </li>
                <li>
                    <img src="img/slider/reaper-of-souls.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3>DIABLO III</h3>
                        <h4 class="light grey-text text-lighten-3">Reaper Of Souls Expansion</h4>
                    </div>
                </li>
                <li>
                    <img src="img/slider/Featureshowcase_XingTian.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>SMITE</h3>
                        <h4>Enter Xing Tian</h4>
                        <h5 class="light grey-text text-lighten-3">The Relentless</h5>
                    </div>
                </li>
                <li>
                    <img src="img/slider/preview-lg.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3>Heroes Of The Storm</h3>
                        <h4>Infernal Shrines</h4>
                        <h5 class="light grey-text text-lighten-3">Defeat the guardians!</h5>
                    </div>
                </li>
            </ul>
        </div>

        <div class="container">
            <div class="section">
                <div class="collection">
                    <a class="collection-item"><h5>News Feed</h5></a>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/2015.09.25.articlebanner.champskinsale.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Champion and skin sale: 09.25 - 09.28<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/store/sales/champion-and-skin-sale-0925-0928" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Champion and skin sale: 09.25 - 09.28<i class="material-icons right">close</i></span>
                                <p>Grab these champions and skins on sale for 50% off for a limited time!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/article.header.sept_.2015.bundles_en.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">It’s time for September bundles and Mystery skins!<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/store/sales/its-time-september-bundles-and-mystery-skins" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">It’s time for September bundles and Mystery skins!<i class="material-icons right">close</i></span>
                                <p>September bundles and Mystery skins show up and show off!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/kayle_0_base_1920_2_0.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Positive play icon unlocked<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/game-updates/player-behavior/positive-play-icon-unlocked" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Positive play icon unlocked<i class="material-icons right">close</i></span>
                                <p>When 5.18 dropped, we powered up the instant feedback system and shared that positive players would earn an exclusive Summoner Icon.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/685_blogimage_n54j3456n54.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Gameplay Update 6.85 and More<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://blog.dota2.com/2015/09/gameplay-update-6-85-and-more/" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Gameplay Update 6.85 and More<i class="material-icons right">close</i></span>
                                <p>Gameplay Update 6.85 is here, bringing various balance changes to heroes and items ahead of the Frankfurt Major.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/rebornupdate_blogimage.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Reborn has arrived<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://blog.dota2.com/2015/09/reborn-has-arrived/" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Reborn has arrived<i class="material-icons right">close</i></span>
                                <p>As of yesterday, all Dota 2 players are now running the Reborn update, which includes the Source 2 engine, a rebuilt UI, and Custom Games.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/UX9MW0E436OC1440435261329.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">PATCH 2.3.0 NOW LIVE<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://us.battle.net/d3/en/blog/19859662/patch-230-now-live-8-25-2015" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">PATCH 2.3.0 NOW LIVE<i class="material-icons right">close</i></span>
                                <p>Diablo III patch 2.3.0 is now live in the Americas for PC! Check out the full patch notes below to learn all about the latest changes.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--<div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                    <div class="row center">
                        <a href="#" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
                    </div>
                    <br><br>

                </div>
            </div>
            <div class="parallax"><img src="img/project_rotator_live.jpg" alt="Unsplashed background img 1" style="display: block; transform: translate3d(-35%, 200px, 0px);"></div>
        </div>-->


        <div class="container">
            <div class="section">
                <div class="collection">
                    <a class="collection-item"><h5>Most popular products</h5></a>
                </div>
                <div class="col s12 m8 l9"> <!-- Note that "m4 l3" was added -->
                    <div id="productsContainer">
                        <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "sistemas avanzados";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $rowLimit = 1;
                        //SELECT nombreProducto, categoriaProducto, precioProducto, existenciaProducto, idJuegoProducto, imagenProducto, idJuego, nombreJuego FROM producto, juego WHERE idJuegoProducto = idJuego AND nombreJuego = 'League Of Legends';
                        //SELECT nombreProducto, categoriaProducto, precioProducto, existenciaProducto, idJuegoProducto, imagenProducto, idJuego, nombreJuego, idCategoria_Producto, nombre_Categoria FROM producto, juego, categoria_producto WHERE idJuegoProducto = idJuego and idCategoria_Producto = categoriaProducto
                        $sql = "SELECT nombreProducto, categoriaProducto, precioProducto, existenciaProducto, idJuegoProducto, imagenProducto, idJuego, nombreJuego, idCategoria_Producto, nombre_Categoria FROM producto, juego, categoria_producto WHERE idJuegoProducto = idJuego and idCategoria_Producto = categoriaProducto LIMIT 4;";
                        //$stringResult;
                        $results = $conn->query($sql);
                        while ($datos = $results->fetch_object()) {
                            if ($rowLimit == 1) {
                                ?>
                                <div class="row">
                                    <?php
                                }
                                ?>
                                <div class="col s12 m3" data-game-name="<?php echo $datos->nombreJuego; ?>" data-product-category="<?php echo $datos->nombre_Categoria; ?>">
                                    <div id="<?php echo $datos->nombreProducto; ?>" class="hoverable icon-block productDetails">
                                        <h2 class="center brown-text"><img class="activator" src="data:image/jpg; base64, <?php echo base64_encode($datos->imagenProducto); ?>" /></h2>
                                        <h5><?php echo $datos->nombreProducto; ?></h5>
                                        <hr>
                                        <p><span class="store-card-price">$<?php echo $datos->precioProducto; ?></span></p>
                                        <p class="secondary-product-info stockValue"><?php echo $datos->existenciaProducto; ?> items in stock</p>
                                    </div>
                                </div>
                                <?php
                                $rowLimit++;
                                if ($rowLimit == 5) {
                                    ?>
                                </div>
                                <?php
                                $rowLimit = 1;
                            }
                        }
                    ?>
                    </div>
                </div>
                <!--<div class="row">
                    <div class="col s12 m4">
                        <div class="hoverable icon-block ">
                            <h2 class="center brown-text"><img class="activator" src="img/products/gravesshirtfront_1_.png"></h2>
                            <h5 class="center">Graves Tee (unisex)</h5>
                            <p class="center">US$25.00</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="hoverable icon-block">
                            <h2 class="center brown-text"><img class="activator" src="img/products/corkiflyerhoodie_unisex_1.png"></h2>
                            <h5 class="center">Corki Flyer Hoodie (Unisex)</h5>
                            <p class="center">US$45.00</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="hoverable icon-block">
                            <h2 class="center brown-text"><img class="activator" src="img/products/twistedfateshirtfront_1_.png"></h2>
                            <h5 class="center">Twisted Fate Tee (unisex)</h5>
                            <p class="center">US$25.00 <br>Out of stock</p>
                        </div>
                    </div>
                </div>-->

            </div>
        </div>


        <!--        <div class="parallax-container valign-wrapper">
                    <div class="section no-pad-bot">
                        <div class="container">
                            <div class="row center">
                                <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="container">
                    <div class="section">
        
                        <div class="row">
                            <div class="col s12 center">
                                <h3><i class="mdi-content-send brown-text"></i></h3>
                                <h4>Contact Us</h4>
                                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            </div>
                        </div>
        
                    </div>
                </div>


        <div class="parallax-container valign-wrapper">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="row center">
                        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                    </div>
                </div>
            </div>
        </div>-->

        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Who we are?</h5>
                        <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job.</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Sitemap</h5>
                        <ul>
                            <li><a class="white-text" href="../sistemas-avanzados/news.php">News</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/events.php">Events</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/store.php">Store</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/contact.php">Contact</a></li>
                            <!--<li><a class="white-text" href="../sistemas-avanzados/news.php">FAQs</a></li>-->
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">External</h5>
                        <ul>
                            <li><a class="white-text" href="http://na.leagueoflegends.com/" target="_blank">League Of Legends</a></li>
                            <li><a class="white-text" href="http://blog.dota2.com/" target="_blank">Dota 2</a></li>
                            <li><a class="white-text" href="http://us.battle.net/d3/en/" target="_blank">Diablo III</a></li>
                            <li><a class="white-text" href="http://www.smitegame.com/" target="_blank">Smite</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by Electronic Systems Department - <a class="brown-text text-lighten-3" href="http://www.uaa.mx/" target="_blank">Universidad Autónoma de México</a>
                </div>
            </div>
        </footer>

        <script src="js/navbar.js"></script>
        <script>
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        </script>

    </body>
</html>

