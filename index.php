<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>Home | Doran Took My Money</title>
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
                            echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light'>".$_SESSION["username"]."</a></li>";
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
                                <p><a href="#">Read More...</a></p>
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
                                <p><a href="#">Read More...</a></p>
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
                                <img class="activator" src="img/news/blog_frankfurt_major_announcement.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Announcing The Frankfurt Major<i class="material-icons right">more_vert</i></span>
                                <p><a href="#">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Announcing The Frankfurt Major<i class="material-icons right">close</i></span>
                                <p>Attendance to the Frankfurt Major will be open to the public and will not require a ticket for any day except for the day of the finals, which will take place on Saturday, November 21st. </p>
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
                                <p><a href="#">Read More...</a></p>
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
                                <p><a href="#">Read More...</a></p>
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
                                <p><a href="#">Read More...</a></p>
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
                <div class="row">
                    <div class="col s12 m4">
                        <div class="hoverable icon-block">
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
                </div>

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
        <script>
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        </script>

    </body>
</html>
