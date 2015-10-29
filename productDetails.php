<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Doran Took My Money</title>
        <link rel="shortcut icon" href="img/logo/poro.png">

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <li class="tab col s3"><a id="homeLink" class="waves-effect waves-light">Home</a></li>
                    <li class="tab col s3"><a id="newsLink" class="waves-effect waves-light">News</a></li>
                    <li class="tab col s3"><a id="eventsLink" class="waves-effect waves-light">Events</a></li>
                    <li class="tab col s3"><a id="storeLink" class="active waves-effect waves-light">Store</a></li>
                    <li class="tab col s3"><a id="contactLink" class="waves-effect waves-light">Contact</a></li>
                    <?php
                    session_set_cookie_params(0);
                    session_start();
                    if (empty($_SESSION["username"])) {
                        echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light'>LogIn</a></li>";
                    } else {
                        echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light' style='font-size: 10px'>" . $_SESSION["username"] . "</a></li>";
                    }
                    ?>
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

        <div class="container">
            <div class="row valign-wrapper">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sistemas avanzados";
                $productID = $_GET['prodId'];
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT nombreProducto, categoriaProducto, precioProducto, existenciaProducto, DescripcionProducto, idJuegoProducto, imagenProducto FROM producto where nombreProducto = '" . $productID . "';";
                $results = $conn->query($sql);
                while ($datos = $results->fetch_object()) {
                    ?>
                    <div class="col s12 m6">
                        <div class="hoverable icon-block">
                            <h2 class="center brown-text"><img class="activator" src="data:image/jpg; base64, <?php echo base64_encode($datos->imagenProducto); ?>" /></h2>
                        </div>
                    </div>
                    <div class="col s12 m6 valign">
                        <div class="icon-block">
                            <h5><?php echo $datos->nombreProducto; ?></h5>
                            <hr>
                            <h6><span class="secondary-product-info">Category: </span>
                                <span class="store-card-price"><?php
                                    //echo $datos->nombreProducto; 
                                    $sql1 = "SELECT nombre_Categoria FROM categoria_producto where idCategoria_Producto = '" . $datos->categoriaProducto . "';";
                                    $results1 = $conn->query($sql1);
                                    $datos1 = $results1->fetch_object();
                                    echo $datos1->nombre_Categoria;
                                    ?></span>
                            </h6>
                            <h6><span class="secondary-product-info">Provided by: </span>  
                                <span class="store-card-price"><?php
                                    //echo $datos->nombreProducto; 
                                    $sql1 = "SELECT nombreJuego FROM juego where idJuego = '" . $datos->idJuegoProducto . "';";
                                    $results1 = $conn->query($sql1);
                                    $datos1 = $results1->fetch_object();
                                    echo $datos1->nombreJuego;
                                    ?></span>
                            </h6>
                            <p class="description"><?php echo $datos->DescripcionProducto; ?></p>
                            <p><span class="store-card-price-big">$<?php echo $datos->precioProducto; ?></span></p>
                            <p class="secondary-product-info stockValue"><?php echo $datos->existenciaProducto; ?> items in stock</p>
                            <div class="valign-wrapper">
                                <div class="input-field col s4">
                                    <select class="prodQuantity">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <label>Quantity</label>
                                </div>
                                <button id="addProductToCart" class="col s8 btn waves-effect waves-light valign" type="submit" name="action">Add to Cart
                                    <i class="material-icons right">shopping_cart</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>


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
                        <li><a class="white-text" href="http://na.leagueoflegends.com/">League Of Legends</a></li>
                        <li><a class="white-text" href="http://blog.dota2.com/">Dota 2</a></li>
                        <li><a class="white-text" href="http://us.battle.net/d3/en/">Diablo III</a></li>
                        <li><a class="white-text" href="http://www.smitegame.com/">Smite</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by Electronic Systems Department - <a class="brown-text text-lighten-3" href="http://www.uaa.mx/">Universidad Autónoma de México</a>
            </div>
        </div>
    </footer>
    <script src="js/navbar.js"></script>
    <script>
        $(document).ready(function () {
            $('select').material_select();
            var stockString = $('.stockValue').text().split(" ");
            var stock = stockString[0];
            if (stock == "0") {
                $('.stockValue').css("cssText", "color: #FF6161 !important;");
                $('#addProductToCart').addClass('disabled');
            }
        });
        (function ($) {
            var $window = $(window),
                    $row = $('.container .row');
            $(window).on('resize', function () {
                if ($window.width() < 601) {
                    $row.removeClass('valign-wrapper');
                } else
                    $row.addClass('valign-wrapper');
            });
        }(jQuery));
        $(document).on("click", "#addProductToCart", function () {
            if ($('#logInLink').text().toString() == "LogIn") {
                Materialize.toast('Only registered users can purchase items... Please Log In or Register.', 3000);
            } else {
                var stockString = $('.stockValue').text().split(" ");
                var stock = stockString[0];
                if (parseInt($('.prodQuantity').eq(1).val()) > parseInt(stock)) {
                    Materialize.toast('Not enough items in stock... Please provide another item quantity', 3000);
                } else {
                    var dataObject = {
                        prodID: getUrlParameter('prodId'),
                        prodDesc: $('p.description').text(),
                        prodPrice: $('span.store-card-price-big').text(),
                        qty: $('.prodQuantity').eq(1).val()};
                    $.ajax({
                        url: "addToCartPHP.php",
                        type: 'POST',
                        data: dataObject,
                        success: function (data) {
                            window.location.href = "../sistemas-avanzados/profile.php?viewCart=true";
                        },
                        error: function (XMLHttpRequest, textStatus, errorThrown) {
                            alert("Status: " + textStatus);
                            alert("Error: " + errorThrown);
                        }
                    });
                }
            }
        });
    </script>
</body>
</html>

