<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>News | Doran Took My Money</title>
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
                    <li class="tab col s3"><a id="newsLink" class="active waves-effect waves-light">News</a></li>
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
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="collection">
                        <a class="collection-item">League Of Legends<span class="badge">6</span></a>
                    </div>
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
                                <img class="activator" src="img/news/worldsshopannounce_articlecard_092215.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Welcome to the Worlds Shop<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/store/sales/welcome-worlds-shop" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Welcome to the Worlds Shop<i class="material-icons right">close</i></span>
                                <p>The stage is set and the Summoner’s Cup waits for the best team in the world to claim it. Gear up for the 2015 World Championship with the Worlds Shop, an in-game hub loaded with Icons, Wards, bundles, sales, and a new Championship skin.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/lol.com_.banner.article.f2protation.28sept.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">New free champion rotation: Akali, Azir, Cho'Gath and more!<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/champions-skins/free-rotation/new-free-champion-rotation-akali-azir-chogath-and-more" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">New free champion rotation: Akali, Azir, Cho'Gath and more!<i class="material-icons right">close</i></span>
                                <p>Greetings Summoners! Here are this week's free champions!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/kindred_qa.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Kindred Q&A<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://na.leagueoflegends.com/en/news/community/q/kindred-q-9/29" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Kindred Q&A<i class="material-icons right">close</i></span>
                                <p>If you’re on the hunt for more Kindred information, head over to their Q&A!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="collection">
                        <a class="collection-item">Dota 2<span class="badge">4</span></a>
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
                                <img class="activator" src="img/news/blog_frankfurt_major_announcement.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Announcing The Frankfurt Major<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://blog.dota2.com/2015/09/tickets-on-sale-for-the-frankfurt-major/" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Announcing The Frankfurt Major<i class="material-icons right">close</i></span>
                                <p>Attendance to the Frankfurt Major will be open to the public and will not require a ticket for any day except for the day of the finals, which will take place on Saturday, November 21st. </p>
                            </div>
                        </div>
                    </div>
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
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/blog_dota_levels.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Introducing Dota Levels<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://blog.dota2.com/2015/09/introducing-dota-levels/" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Introducing Dota Levels<i class="material-icons right">close</i></span>
                                <p>As part of today’s update we’re unveiling Dota Levels, the culmination of all of your accomplishments in Dota.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="collection">
                        <a class="collection-item">Diablo III<span class="badge">3</span></a>
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
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/S1OOUQQF34EG1438806256048.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">First Look - Season 4<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://us.battle.net/d3/en/blog/19824753/first-look-season-4-8-11-2015" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">First Look - Season 4<i class="material-icons right">close</i></span>
                                <p>Patch 2.3.0 is headed your way soon, loaded with cool new features for Diablo III. Among all the excitement over what’s ahead for the game, we’ve seen many players ask important questions about what they should expect in Season 4, which we’ll be addressing in the following guide.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="img/news/94GLWU82UKX51440530102474.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">We're hosting a Reddit Q&A , and you're invited!<i class="material-icons right">more_vert</i></span>
                                <p><a href="http://us.battle.net/d3/en/blog/19875308/we%E2%80%99re-hosting-a-reddit-qa-and-you%E2%80%99re-invited-8-27-2015" target="_blank">Read More...</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">We're hosting a Reddit Q&A, and you're invited!<i class="material-icons right">close</i></span>
                                <p>Mark your calendars, nephalem! We’re hosting our second ever Reddit Q&A for Diablo III.</p>
                            </div>
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
            $(".collection-item").hover(function () {
                $("span.badge").css("color", "#fff");
            }, function () {
                $("span.badge").css("color", "#26a69a");
            });
        </script>

    </body>
</html>

