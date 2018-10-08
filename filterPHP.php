<?php
/* ---------- POST VALUES ----------*/
$postFilter = $_POST['filterValue'];

session_set_cookie_params(0);
session_start();
if(empty($_SESSION['filters'])){
    $filter = array($postFilter);
    $_SESSION['filters'] = $order;
}else{
    array_push($_SESSION['filters'], $postFilter);
}
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemas avanzados";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nombreProducto, precioProducto, existenciaProducto, imagenProducto FROM producto WHERE nombreProducto = 'Corki Hat';";
$results = $conn->query($sql);
$datos = $results->fetch_object();
echo "<div class='col s12 m4'>
    <div id='plush' class='hoverable icon-block productDetails'>
            <h2 class='center brown-text'><img class='activator' src='data:image/jpg; base64, ".base64_encode($datos->imagenProducto)."' /></h2>
            <h5>PRODUCT</h5>
            <hr>
            <p><span class='store-card-price'>$10</span></p>
            <p class='secondary-product-info stockValue'>X items in stock</p>
        </div>
    </div>";*/