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
            <div class="row">

                <div class="col s12 m4 l3"> 
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="http://i.blogs.es/2d5264/facebook-image/original.jpg">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">User Name

                        </div>
                    </div>
                    <div class="collection">
                        <a href="#!" class="collection-item" id="b_profile">Profile</a>
                        <a href="#!" class="collection-item" id="b_cart">My Cart</a>
                        <a href="#!" class="collection-item" id="b_history">History</a>

                    </div>
                </div>

                <div class="col s12 m8 l9"> 

                    <div class="row" id="s_profile">
                        <div class="collection">
                            <a class="collection-item"><h5>Profile</h5></a>
                        </div>
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input disabled  id="icon_prefix" type="text" class="fullname validate">
                                    <label for="icon_prefix">Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">grade</i>
                                    <input disabled id="icon_telephone" type="tel" class="username validate">
                                    <label for="icon_telephone">Username</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input disabled id="password" type="password" class="password validate">
                                    <label for="icon_telephone">Password</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row" id="s_cart">
                        <div class="collection">
                            <a class="collection-item"><h5>My Cart</h5></a>
                        </div>
                        <table class="responsive-table centered striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Serial #</th>
                                    <th data-field="name">Product Name</th>
                                    <th data-field="name">Quantity</th>
                                    <th data-field="price">Price</th>
                                    <th data-field="total">Line Total</th>
                                    <th data-field="opcion">Options</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>product name</td>
                                    <td>
                                        <select class="browser-default">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </td>
                                    <td>$0.87</td>
                                    <td>$0.87</td>
                                    <td><a href="#!" class="btn waves-effect red lighten-1">Delete</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="row" id="s_history">
                        <div class="collection">
                            <a class="collection-item"><h5>History</h5></a>
                        </div>
                        <table class="responsive-table centered striped">
                            <thead>
                                <tr>
                                    <th data-field="id">Serial #</th>
                                    <th data-field="name">Date</th>
                                    <th data-field="total">Line Total</th>
                                    <th data-field="opcion">Options</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>27/10/2015</td>
                                    <td>$0.87</td>
                                    <td><a href="#!" class="btn waves-effect red lighten-1">Describe</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

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
        $(document).ready(function () {
            $('#s_profile').hide();
            $('#s_cart').hide();
            $('#s_history').hide();

            $("#b_profile").click(function () {
                $('#s_cart').hide();
                $('#s_history').hide();
                $('#s_profile').show(3000);
            });
            $("#b_cart").click(function () {
                $('#s_profile').hide();
                $('#s_history').hide();
                $('#s_cart').show(3000);
            });
            $("#b_history").click(function () {
                $('#s_profile').hide();
                $('#s_cart').hide();
                $('#s_history').show(3000);
            });
        });


    </script>

</body>
</html>

