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
        <script src="js/highcharts.js"></script>
        <script src="js/highcharts-more.js"></script>

        <script src="js/map.js"></script>
        <script src="js/data.js"></script>
        <script src="js/world.js"></script>

    </head>
    <body>
        <nav class="black" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="../sistemas-avanzados/index.php" class="brand-logo"><img src="img/logo/porosunnyrays.png" class="display-logo"/><span>Doran Took My Money</span></a>
                <ul class="right hide-on-med-and-down tabs">
                    <li class="tab col s3"><a id="homeLink" class="waves-effect waves-light">Home</a></li>
                    <li class="tab col s3"><a id="newsLink" class="waves-effect waves-light">News</a></li>
                    <li class="tab col s3"><a id="eventsLink" class="waves-effect waves-light">Events</a></li>
                    <li class="tab col s3"><a id="storeLink" class="waves-effect waves-light">Store</a></li>
                    <li class="tab col s3"><a id="contactLink" class="waves-effect waves-light">Contact</a></li>
                    <?php
                    session_set_cookie_params(0);
                    session_start();
                    if (empty($_SESSION["username"])) {
                        echo "<li class='tab col s3'><a id='logInLink' class='waves-effect waves-light'>LogIn</a></li>";
                    } else {
                        echo "<li class='tab col s3'><a id='logInLink' class='active waves-effect waves-light' style='font-size: 10px'>" . $_SESSION["username"] . "</a></li>";
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

        <div class="row">
            <div class="col s12 m4 l3"> 
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="http://i.blogs.es/2d5264/facebook-image/original.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo $_SESSION["username"]; ?></span>
                    </div>
                </div>
                <div class="collection">
                    <a href="#!profile" class="collection-item active" id="b_profile">Profile</a>
                    <a href="#!dash" class="collection-item" id="b_cart">Dashboard</a>

                </div>
            </div>

            <div class="col s12 m8 l9"> 

                <div class="col s4 m8 l9" id="s_profile">
                    <div class="collection">
                        <a class="collection-item"><h5>Profile</h5></a>
                    </div>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "sistemas avanzados";
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT idUsuario, nombreUsuario, usuarioUsuario, contrasenaUsuario, emailUsuario FROM usuario where usuarioUsuario = '" . $_SESSION['username'] . "';";
                    $results = $conn->query($sql);
                    $datos = $results->fetch_object();
                    ?>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input disabled  id="icon_prefix" type="text" class="fullname validate">
                                <label for="icon_prefix"><?php echo $datos->nombreUsuario; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">grade</i>
                                <input disabled id="icon_telephone" type="tel" class="username validate">
                                <label for="icon_telephone"><?php echo $datos->usuarioUsuario; ?></label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">vpn_key</i>
                                <input disabled id="password" type="password" class="password validate">
                                <label for="icon_telephone"><?php echo $datos->contrasenaUsuario; ?></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input disabled id="email" type="email" class="validate">
                                <label for="email" data-error="wrong" data-success="right"><?php echo $datos->emailUsuario; ?></label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row" id="s_cart">
                    <div id="DSSChart" ></div>
                </div>
                <div class="col s3 m8 l9" id="s_cart">
                    <div class="col s3 m8 l9" id="container" ></div>
                    <div class="col s3 m8 l9" id="polar" ></div>     
                    <div id="estimacion"></div>
                    <div id="comb" ></div>
                    <div id="comparacion" ></div>
                    <div id="container" ></div> 
                    <div id="top" ></div>
                    <div id="visitas"></div>
                </div>
                <!--<div class="row" id="s_cart">
                    <div id="container" ></div>
                </div>
                <div class="row" id="s_cart">
                    <div class="col s6 m6 17" id="polar" ></div>     
                    <div class="col s6 m6 17" id="estimacion"></div>
                </div>-->
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
        var JSONDSSObj;
        var numberOfSalesByMonth = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var salesAmountAverageByMonth = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $(function () {
            $.ajax({
                url: "getDSSInfoPHP.php",
                type: 'GET',
                success: function (data) {
                    JSONDSSObj = $.parseJSON(data);
                    for (var i = 0; i < JSONDSSObj.length; i++) {
                        var saleMonth = new Date(JSONDSSObj[i]['fechaVenta']);
                        numberOfSalesByMonth[saleMonth.getMonth()]++;
                        salesAmountAverageByMonth[saleMonth.getMonth()] += parseInt(JSONDSSObj[i]['importeVenta']);
                    }
                    console.log(numberOfSalesByMonth);
                    console.log(salesAmountAverageByMonth);
                    displayCharts();
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }
            });
        });
        function displayCharts() {
            $('#DSSChart').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    text: 'Latest Sales Status by Month'
                },
                xAxis: [{
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        crosshair: true
                    }],
                yAxis: [{// Primary yAxis
                        labels: {
                            format: '{value}USD $',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        },
                        title: {
                            text: 'Purchase Amount',
                            style: {
                                color: Highcharts.getOptions().colors[1]
                            }
                        }
                    }, {// Secondary yAxis
                        title: {
                            text: 'Total Sales',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        labels: {
                            format: '{value} Qty',
                            style: {
                                color: Highcharts.getOptions().colors[0]
                            }
                        },
                        opposite: true
                    }],
                tooltip: {
                    shared: true
                },
                legend: {
                    layout: 'vertical',
                    align: 'left',
                    x: 120,
                    verticalAlign: 'top',
                    y: 100,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                },
                series: [{
                        name: 'Total Sales',
                        type: 'column',
                        yAxis: 1,
                        //data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                        data: numberOfSalesByMonth,
                        tooltip: {
                            valueSuffix: ' qty'
                        }

                    }, {
                        name: 'Purchase Amount',
                        type: 'spline',
                        //data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                        data: salesAmountAverageByMonth,
                        tooltip: {
                            valueSuffix: 'USD $'
                        }
                    }]
            });

            $('#polar').highcharts({
                chart: {
                    polar: true,
                    type: 'line'
                },
                title: {
                    text: 'Budget',
                    x: -80
                },
                pane: {
                    size: '80%'
                },
                xAxis: {
                    categories: ['Shirts', 'Figures', 'Plush', 'Accessories'],
                    tickmarkPlacement: 'on',
                    lineWidth: 0
                },
                yAxis: {
                    gridLineInterpolation: 'polygon',
                    lineWidth: 0,
                    min: 0
                },
                tooltip: {
                    shared: true,
                    pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
                },
                legend: {
                    align: 'right',
                    verticalAlign: 'top',
                    y: 70,
                    layout: 'vertical'
                },
                series: [{
                        name: 'Allocated Budget',
                        data: [43000, 19000, 60000, 35000],
                        pointPlacement: 'on'
                    }, {
                        name: 'Actual Spending',
                        data: [50000, 39000, 42000, 31000],
                        pointPlacement: 'on'
                    }]

            });
            $.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=world-population.json&callback=?', function (data) {

                var mapData = Highcharts.geojson(Highcharts.maps['custom/world']);

                // Correct UK to GB in data
                $.each(data, function () {
                    if (this.code === 'UK') {
                        this.code = 'GB';
                    }
                });

                $('#container').highcharts('Map', {
                    chart: {
                        borderWidth: 1
                    },
                    title: {
                        text: 'World Sales'
                    },
                    subtitle: {
                        text: 'Sales by Location in 2015'
                    },
                    legend: {
                        enabled: false
                    },
                    mapNavigation: {
                        enabled: true,
                        buttonOptions: {
                            verticalAlign: 'bottom'
                        }
                    },
                    series: [{
                            name: 'Countries',
                            mapData: mapData,
                            color: '#009688',
                            enableMouseTracking: false
                        }, {
                            type: 'mapbubble',
                            mapData: mapData,
                            name: 'Sales 2015',
                            joinBy: ['iso-a2', 'code'],
                            data: data,
                            minSize: 4,
                            maxSize: '12%',
                            tooltip: {
                                pointFormat: '{point.code}: {point.z} dollars'
                            }
                        }]
                });

            });
            $('#estimacion').highcharts({
                xAxis: {
                    min: 0,
                    max: 8
                },
                yAxis: {
                    min: 0
                },
                title: {
                    text: 'forecasts for the periods 2015'
                },
                series: [{
                        type: 'line',
                        name: 'Regression Line',
                        data: [[1, 5266.68], [7, 13067]],
                        marker: {
                            enabled: false
                        },
                        states: {
                            hover: {
                                lineWidth: 0
                            }
                        },
                        enableMouseTracking: false
                    }, {
                        type: 'scatter',
                        name: 'Period sales',
                        data: [0, 7000, 9000, 5000, 11000, 10000, 13000],
                        marker: {
                            radius: 4
                        }
                    }]
            });
            $('#comb').highcharts({
                title: {
                    text: 'Total products selling 2015 in Mexico'
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                series: [{
                        type: 'column',
                        name: 'LOL',
                        data: [3, 2, 1, 3, 4, 3, 7, 5, 3, 6, 8, 2]
                    }, {
                        type: 'column',
                        name: 'Diablo',
                        data: [2, 3, 5, 7, 6, 2, 4, 3, 6, 2, 0, 7]
                    }, {
                        type: 'column',
                        name: 'HOS',
                        data: [4, 3, 3, 9, 0, 1, 7, 6, 4, 8, 3, 0]
                    }, {
                        type: 'column',
                        name: 'DOTA',
                        data: [5, 3, 3, 1, 2, 6, 2, 3, 4, 5, 8, 6]
                    }, {
                        type: 'column',
                        name: 'HS',
                        data: [4, 7, 2, 5, 0, 5, 3, 2, 6, 4, 7, 8]
                    }, {
                        type: 'column',
                        name: 'SMITE',
                        data: [4, 3, 3, 9, 0, 4, 4, 2, 6, 8, 6, 3]
                    }, {
                        type: 'spline',
                        name: 'Average',
                        data: [3, 2.67, 3, 6.33, 3.33, 3.5, 4.5, 3.5, 4.3, 4.16, 5.3, 4.3],
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[3],
                            fillColor: 'white'
                        }
                    }]
            });
            $('#comparacion').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'hourly sales during two days'
                },
                subtitle: {
                    text: 'May 31 and and June 1, 2015 at two locations '
                },
                xAxis: {
                    type: 'datetime',
                    labels: {
                        overflow: 'justify'
                    }
                },
                yAxis: {
                    title: {
                        text: 'hourly sales (s/h)'
                    },
                    minorGridLineWidth: 0,
                    gridLineWidth: 0,
                    alternateGridColor: null,
                    plotBands: [{// Light air
                            from: 0.3,
                            to: 1.5,
                            color: 'rgba(68, 170, 213, 0.1)',
                            label: {
                                text: 'Light sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// Light breeze
                            from: 1.5,
                            to: 3.3,
                            color: 'rgba(0, 0, 0, 0)',
                            label: {
                                text: 'Light sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// Gentle breeze
                            from: 3.3,
                            to: 5.5,
                            color: 'rgba(68, 170, 213, 0.1)',
                            label: {
                                text: 'Gentle sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// Moderate breeze
                            from: 5.5,
                            to: 8,
                            color: 'rgba(0, 0, 0, 0)',
                            label: {
                                text: 'Moderate sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// Fresh breeze
                            from: 8,
                            to: 11,
                            color: 'rgba(68, 170, 213, 0.1)',
                            label: {
                                text: 'considerate sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// Strong breeze
                            from: 11,
                            to: 14,
                            color: 'rgba(0, 0, 0, 0)',
                            label: {
                                text: 'Strong sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }, {// High wind
                            from: 14,
                            to: 15,
                            color: 'rgba(68, 170, 213, 0.1)',
                            label: {
                                text: 'High sales',
                                style: {
                                    color: '#606060'
                                }
                            }
                        }]
                },
                tooltip: {
                    valueSuffix: ' '
                },
                plotOptions: {
                    spline: {
                        lineWidth: 4,
                        states: {
                            hover: {
                                lineWidth: 5
                            }
                        },
                        marker: {
                            enabled: false
                        },
                        pointInterval: 3600000, // one hour
                        pointStart: Date.UTC(2015, 4, 31, 0, 0, 0)
                    }
                },
                series: [{
                        name: 'MEX',
                        data: [0.2, 0.8, 0.8, 0.8, 1, 1.3, 1.5, 2.9, 1.9, 2.6, 1.6, 3, 4, 3.6, 4.5, 4.2, 4.5, 4.5, 4, 3.1, 2.7, 4, 2.7, 2.3, 2.3, 4.1, 7.7, 7.1, 5.6, 6.1, 5.8, 8.6, 7.2, 9, 10.9, 11.5, 11.6, 11.1, 12, 12.3, 10.7, 9.4, 9.8, 9.6, 9.8, 9.5, 8.5, 7.4, 7.6]

                    }, {
                        name: 'US',
                        data: [0, 0, 0.6, 0.9, 0.8, 0.2, 0, 0, 0, 0.1, 0.6, 0.7, 0.8, 0.6, 0.2, 0, 0.1, 0.3, 0.3, 0, 0.1, 0, 0, 0, 0.2, 0.1, 0, 0.3, 0, 0.1, 0.2, 0.1, 0.3, 0.3, 0, 3.1, 3.1, 2.5, 1.5, 1.9, 2.1, 1, 2.3, 1.9, 1.2, 0.7, 1.3, 0.4, 0.3]
                    }],
                navigation: {
                    menuItemStyle: {
                        fontSize: '10px'
                    }
                }
            });
            $('#container').highcharts({
                chart: {
                    type: 'area'
                },
                title: {
                    text: 'Dependency percentage'
                },
                xAxis: {
                    categories: ['LOL', 'DIABLO', 'HOS', 'HS', 'SMITE', 'DOTA', ''],
                    tickmarkPlacement: 'on',
                    title: {
                        enabled: false
                    }
                },
                yAxis: {
                    title: {
                        text: 'Percent'
                    }
                },
                tooltip: {
                    pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.percentage:.1f}%</b> ({point.y:,.0f} millions)<br/>',
                    shared: true
                },
                plotOptions: {
                    area: {
                        stacking: 'percent',
                        lineColor: '#ffffff',
                        lineWidth: 1,
                        marker: {
                            lineWidth: 1,
                            lineColor: '#ffffff'
                        }
                    }
                },
                series: [{
                        name: 'LOL',
                        data: [502, 635, 809, 947, 1402, 3634]
                    }, {
                        name: 'DIABLO',
                        data: [106, 107, 111, 133, 221, 767]
                    }, {
                        name: 'HOS',
                        data: [163, 203, 276, 408, 547, 729]
                    }, {
                        name: 'HS',
                        data: [18, 31, 54, 156, 339, 818]
                    }, {
                        name: 'SMITE',
                        data: [2, 2, 2, 6, 13, 30]
                    }, {
                        name: 'DOTA',
                        data: [2, 2, 2, 6, 13, 30]
                    }]
            });
            $('#top').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Top 5 purchased items Nov-2015'
                },
                xAxis: {
                    categories: ['Teemo Hat', 'Draven Poro Plush', 'Stitches Plush', 'Kha-zix Figure', ' Butcher BBQ Apron'],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'sales',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: 'sales'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 80,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
                credits: {
                    enabled: false
                },
                series: [{
                        name: 'Year 2015',
                        data: [107, 31, 635, 203, 2]
                    }]
            });
            $('#visitas').highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Visits from categories 2015'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: [{
                        name: 'Visits',
                        colorByPoint: true,
                        data: [{
                                name: 'Plush',
                                y: 56.33
                            }, {
                                name: 'Figures',
                                y: 24.03,
                                sliced: true,
                                selected: true
                            }, {
                                name: 'Stattues',
                                y: 10.38
                            }, {
                                name: 'Shirts',
                                y: 4.77
                            }, {
                                name: 'Accessories',
                                y: 0.93
                            }]
                    }]
            });
        }
        $(document).ready(function () {
            if (getUrlParameter('viewCart') == "true") {
                $('#s_profile').hide();
                $('#s_cart').show();
                $('.collection-item').removeClass('active');
                $('.collection-item').eq(1).addClass('active');
            } else {
                $('#s_profile').show();
                $('#s_cart').hide();
            }
            $("#b_profile").click(function () {
                $('#s_cart').hide();
                $('#s_profile').show(500);
            });
            $("#b_cart").click(function () {
                $('#s_profile').hide();
                $('#s_cart').show(500);
            });

            if ($('.cart-tbody').children().children().text().indexOf("No items") >= 0) {
                $('#checkOutProducts').addClass("disabled");
            } else {
                $('#checkOutProducts').removeClass("disabled");
            }
            var total = 0;
            for (var i = 0; i < $('.cart-tbody').children().length; i++) {
                var price = $('.cart-tbody').children().eq(i).children().eq(3).text();
                var units = $('.cart-tbody').children().eq(i).children().eq(4).text();
                price = price.replace(/[^0-9\.]/g, '');
                total = total + (price * units);
            }
            $('#shopTotal').text('$' + total);
        });
        $(document).on('click', '.collection-item', function () {
            $('.collection-item').removeClass('active');
            $(this).addClass('active');
        });
        $(document).on('click', '#eraseFromCart', function () {
            //alert($(this).attr('data-id'));
            var dataObject = {
                removedID: $(this).attr('data-id')};
            $.ajax({
                url: "removeFromCartPHP.php",
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
        });
        $(document).on('click', '#checkOutProducts', function () {
            var d = new Date();
            var curr_date = d.getDate();
            var curr_month = d.getMonth();
            var curr_year = d.getFullYear();
            var dataObject = {
                fechaVenta: curr_date + "-" + curr_month + "-" + curr_year,
                importeVenta: $('#shopTotal').text(),
                userName: $('#logInLink').text()};
            $.ajax({
                url: "checkoutPHP.php",
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
        });
    </script>
    <script>
        $(function () {
            $('#estimacion').highcharts({
                xAxis: {
                    min: 0,
                    max: 8
                },
                yAxis: {
                    min: 0
                },
                title: {
                    text: 'forecasts for the periods 2015'
                },
                series: [{
                        type: 'line',
                        name: 'Regression Line',
                        data: [[1, 5266.68], [7, 13067]],
                        marker: {
                            enabled: false
                        },
                        states: {
                            hover: {
                                lineWidth: 0
                            }
                        },
                        enableMouseTracking: false
                    }, {
                        type: 'scatter',
                        name: 'Period sales',
                        data: [0, 7000, 9000, 5000, 11000, 10000, 13000],
                        marker: {
                            radius: 4
                        }
                    }]
            });
        });
    </script>
</body>
</html>

