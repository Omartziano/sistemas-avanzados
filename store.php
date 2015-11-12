<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Store | Doran Took My Money</title>
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
            <div class="row">
                <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
                    <ul class="collapsible" data-collapsible="expansible">
                        <li id="games-filter">
                            <div class="collapsible-header store-collapsible active"><i class="material-icons">reorder</i>Games</div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="Diablo" />
                                    <label for="Diablo">Diablo</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="League of Legends" />
                                    <label for="League of Legends">League of Legends</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="HearthStone" />
                                    <label for="HearthStone">HearthStone</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Smite" />
                                    <label for="Smite">Smite</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Heroes of the Storm" />
                                    <label for="Heroes of the Storm">Heroes of the Storm</label>
                                </p>
<!--                                <p>
                                    <input type="checkbox" id="World of Warcraft" />
                                    <label for="World of Warcraft">World of Warcraft</label>
                                </p>-->
                            </div>
                        </li>
                        <li id="collectibles-filter">
                            <div class="collapsible-header store-collapsible active"><i class="material-icons">reorder</i>Categories</div>
                            <div class="collapsible-body">
                                <p>
                                    <input type="checkbox" id="Plush" />
                                    <label for="Plush">Plush</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Figures" />
                                    <label for="Figures">Figures</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Statues" />
                                    <label for="Statues">Statues</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Shirts" />
                                    <label for="Shirts">Shirts</label>
                                </p>
                                <p>
                                    <input type="checkbox" id="Accessories" />
                                    <label for="Accessories">Accessories</label>
                                </p>
                            </div>
                        </li>
                    </ul>
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
                        $sql = "SELECT nombreProducto, categoriaProducto, precioProducto, existenciaProducto, idJuegoProducto, imagenProducto, idJuego, nombreJuego, idCategoria_Producto, nombre_Categoria FROM producto, juego, categoria_producto WHERE idJuegoProducto = idJuego and idCategoria_Producto = categoriaProducto;";
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
                        if ($rowLimit > 1 && $rowLimit < 5) {
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
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
        var gameNameFilters = new Array();
        var productCategoryFilters = new Array();
        var didClickOnFilter = false;
        $(document).on("change", "input:checkbox", function () {
            didClickOnFilter = true;
            for (var i = 0; i < $('#productsContainer').children().length; i++) {
                for (var j = 0; j < $('#productsContainer').children().eq(i).children().length; j++) {
                    $('#productsContainer').children().eq(i).children().eq(j).fadeOut();
                }
            }
            if ($(this).parents().eq(2).attr("id") == "games-filter") {
                if ($(this).prop('checked')) {
                    gameNameFilters.push($(this).attr('id'));
                } else {
                    var index = gameNameFilters.indexOf($(this).attr('id'));
                    if (index > -1) {
                        gameNameFilters.splice(index, 1);
                    }
                }
                displayFilters("data-game-name", gameNameFilters);
                $('#collectibles-filter>div:last-child>p>input').prop('checked', false);
                productCategoryFilters = new Array();
            } else {
                if ($(this).prop('checked')) {
                    productCategoryFilters.push($(this).attr('id'));
                } else {
                    var index = productCategoryFilters.indexOf($(this).attr('id'));
                    if (index > -1) {
                        productCategoryFilters.splice(index, 1);
                    }
                }
                displayFilters("data-product-category", productCategoryFilters);
                $('#games-filter>div:last-child>p>input').prop('checked', false);
                gameNameFilters = new Array();
            }
            if(didClickOnFilter == true && gameNameFilters.length == 0 && productCategoryFilters == 0){
                for (var i = 0; i < $('#productsContainer').children().length; i++) {
                    for (var j = 0; j < $('#productsContainer').children().eq(i).children().length; j++) {
                        $('#productsContainer').children().eq(i).children().eq(j).fadeIn();
                    }
                }
            }
            
        });
        function displayFilters(filterType, filters) {
            for (var i = 0; i < $('#productsContainer').children().length; i++) {
                for (var j = 0; j < $('#productsContainer').children().eq(i).children().length; j++) {
                    for (var k = 0; k < filters.length; k++) {
                        if ($('#productsContainer').children().eq(i).children().eq(j).attr(filterType) == filters[k]) {
                            $('#productsContainer').children().eq(i).children().eq(j).fadeIn(100);
                        }
                    }
                }
            }
        }
        /*$(document).on("change", "input:checkbox", function () {
         if(window.location.href.indexOf('?') > -1){
         var paramNum = (window.location.href.match(/&/g) || []).length;
         window.location.href = window.location.href + "&filter"+(paramNum+1)+"="+$(this).attr('id');
         }else{
         window.location.href = window.location.href + "?filter0="+$(this).attr('id');
         }
         var dataObject = { 
         addedFilter: $(this).attr('id')};
         $.ajax({
         url: "filterPHP.php",
         type: 'POST',
         data: dataObject,
         success: function (data) {
         console.log(data);
         },
         error: function(XMLHttpRequest, textStatus, errorThrown) { 
         alert("Status: " + textStatus); alert("Error: " + errorThrown); 
         }  
         });
         });
         $(document).ready(function(){
         if(window.location.href.indexOf('?') > -1){
         var paramNum = (window.location.href.match(/&/g) || []).length;
         if(paramNum > 0){
         paramNum+=1;
         }else{
         paramNum=1;
         }
         for(var i = 0; i < paramNum; i++){
         $('input#'+getUrlParameter('filter'+i)).prop('checked', true);
         }
         }
         });*/
    </script>
</body>
</html>

