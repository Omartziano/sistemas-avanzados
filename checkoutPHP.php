<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* ---------- SERVER CONF ---------- */
$servername = "localhost";
$username = "root";
$password = "Joako2393.";
$dbname = "sistemas avanzados";

/* ---------- POST VALUES ---------- */
$postFechaVta = $_POST['fechaVenta'];
$postImporteVta = $_POST['importeVenta'];
$postUserName = $_POST['userName'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//--------------------------comienza joako
//se inserta primero la venta para asociarlla con los detalles de ventas
$sql = "INSERT INTO venta values (null,NOW(), CAST((SUBSTRING('" . $postImporteVta . "',2,30)) AS DECIMAL(65,2))," . "(SELECT idUsuario FROM usuario where usuarioUsuario='" . $postUserName . "'))"; //le quite las comillas simples al id usuario porque es numero no se si este bien 
//se recorren los articulos del carrito y se va haciendo el insert por cada  uno

$idVenta = "SELECT idVenta FROM VENTA WHERE fechaVenta=" . $postFechaVta . "and idUsuario= (SELECT idUsuario FROM usuario where usuarioUsuario='" . $postUserName . "'))";

for ($row = 0; $row < sizeof($_SESSION['cartProducts']); $row++) {

    $realRow = $row + 1;
    for ($col = 0; $col < sizeof($_SESSION['cartProducts'][$row]); $col++) {
        //echo "\n".$_SESSION['cartProducts'][$row][$col];
        if (col == 1) {
            $nombreProducto = $_SESSION['cartProducts'][$row][$col];
        } else if (col == 4) {
            $cantidad = $_SESSION['cartProducts'][$row][$col];
        }
    }

    //se agrega el registro 
    $sql = "INSERT INTO detalleventa values (" . $idVenta . ",SELECT idProducto FROM usuario where nombreProducto='" . $nombreProducto . "')," . $cantidad . ")";
}



//---------------------------------termina joako

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    session_set_cookie_params(0);
    session_start();
    $_SESSION["username"] = $postUsername;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
