<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* ---------- SERVER CONF ---------- */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemas avanzados";

/* ---------- POST VALUES ---------- */
$postFechaVta = $_POST['fechaVenta'];
$postImporteVta = $_POST['importeVenta'];
$postUserName = $_POST['userName'];

session_set_cookie_params(0);
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//--------------------------comienza joako
//se inserta primero la venta para asociarlla con los detalles de ventas
$fechaNow = "SELECT NOW();";
if ($results = $conn->query($fechaNow)) {
    $row = $results->fetch_array();
    $fechaNow = $row[0];
}
$sql = "INSERT INTO venta values (null,'" . $fechaNow . "', CAST((SUBSTRING('" . $postImporteVta . "',2,30)) AS DECIMAL(65,2))," . "(SELECT idUsuario FROM usuario where usuarioUsuario='" . $postUserName . "'))"; //le quite las comillas simples al id usuario porque es numero no se si este bien 
//se recorren los articulos del carrito y se va haciendo el insert por cada  uno

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$idVenta = "SELECT idVenta FROM venta WHERE fechaVenta='" . $fechaNow . "' and idUsuario = (SELECT idUsuario FROM usuario where usuarioUsuario='" . $postUserName . "')";

if ($results = $conn->query($idVenta)) {
    $row = $results->fetch_array();
    $idVenta = $row[0];
} else {
    echo "Errors";
}

//echo $idVenta;die();
$cantidad = 0;
for ($row = 0; $row < sizeof($_SESSION['cartProducts']); $row++) {
    $realRow = $row + 1;
    for ($col = 0; $col < sizeof($_SESSION['cartProducts'][$row]); $col++) {
        //echo "\n".$_SESSION['cartProducts'][$row][$col];
        if ($col == 0) {
            $nombreProducto = $_SESSION['cartProducts'][$row][$col];
        } else if ($col == 3) {
            $cantidad = $_SESSION['cartProducts'][$row][$col];
        }
    }
    $idProducto = "SELECT idProducto FROM producto where nombreProducto='" . $nombreProducto . "'";
    if ($results = $conn->query($idProducto)) {
        $row = $results->fetch_array();
        $idProducto = $row[0];
    } else {
        echo "Errors";
    }
    //se agrega el registro 
    $sql = "INSERT INTO detalleventa values (" . $idVenta . ", " . $idProducto . "," . $cantidad . ")";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
unset($_SESSION['cartProducts']);

$conn->close();
