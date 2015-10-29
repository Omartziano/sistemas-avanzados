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

//esto lo hice para sacar el id del usuario con el nombre del usuario porque no sabia si estaba en alguna variable de sesion o no X_X
$idUsuario;
$query = "SELECT idUsuario FROM usuario where usuarioUsuario=" . $postUserName;
$execute = mysql_query($query, $conn);
if ($row = mysql_fetch_array($execute)) {
    //Guardo los datos de la BD en las variables de php
    $idUsuario = $row["idUsuario"];
}

//se inserta primero la venta para asociarlla con los detalles de venta
    $sql = "INSERT INTO venta values (null,'" . $postFechaVta . "', '" . $postImporteVta . "'," . $idUsuario . ")";//le quite las comillas simples al id usuario porque es numero no se si este bien 
    
//se recorren los articulos del carrito y se va haciendo el insert por cada  uno
    
    $idVenta="SELECT idVenta FROM VENTA WHERE fechaVenta=". $postFechaVta ."and idUsuario=". $idUsuario.")";
for ($row = 0; $row < sizeof($_SESSION['cartProducts']); $row++) {

        $realRow = $row + 1;
        for ($col = 0; $col < sizeof($_SESSION['cartProducts'][$row]); $col++) {
            //aqui se llenan las variables que se necesitan para el insert
            //$idProducto
            //$cantidad
        }
        
        //se agrega el registro 
        $sql = "INSERT INTO detalleventa values (". $idVenta . ", " . $idProducto . "," . $cantidad . ")";
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
    