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
                <a id="logo-container" href="../sistemas-avanzados/index.html" class="brand-logo"><img src="img/logo/porosunnyrays.png" class="display-logo"/><span>Doran Took My Money</span></a>
                <ul class="right hide-on-med-and-down tabs">
                    <li class="tab col s3"><a href="#" class="waves-effect waves-light">Home</a></li>
                    <li class="tab col s3"><a href="#" class="waves-effect waves-light">News</a></li>
                    <li class="tab col s3"><a href="#" class="waves-effect waves-light">Events</a></li>
                    <li class="tab col s3"><a href="#" class="waves-effect waves-light">Store</a></li>
                    <li class="tab col s3"><a href="#" class="active waves-effect waves-light">Contact</a></li>
                    <li class="tab col s3"><a href="#" class="waves-effect waves-light">LogIn</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#" class="waves-effect waves-light">Home</a></li>
                    <li><a href="#" class="waves-effect waves-light">News</a></li>
                    <li><a href="#" class="waves-effect waves-light">Events</a></li>
                    <li><a href="#" class="waves-effect waves-light">Store</a></li>
                    <li><a href="#" class="waves-effect waves-light">Contact</a></li>
                    <li><a href="#" class="waves-effect waves-light">LogIn</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>

        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="collection">
                        <a class="collection-item"><h5>Contact Form</h5></a>
                    </div>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telephone</label>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right">Email</label>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                                <label for="icon_prefix2">Message</label>
                            </div>
                        </div>
                    </form>
                </div>

                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
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
                            <li><a class="white-text" href="../sistemas-avanzados/news.html">News</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/events.html">Events</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/store.html">Store</a></li>
                            <li><a class="white-text" href="../sistemas-avanzados/contact.html">Contact</a></li>
                            <!--<li><a class="white-text" href="../sistemas-avanzados/news.html">FAQs</a></li>-->
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

    </body>
</html>
