<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/* ---------- SERVER CONF ----------*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemas avanzados";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT nombreProducto, precioProducto, existenciaProducto, imagenProducto FROM producto;";
$stringResult;
if ($results = $conn->query($sql)) {
    $stringResult = $results->fetch_all();
//    $i = 0;
//    while ($fila = $results->fetch_row()) {
//        $stringResult[i] = $fila;
//        printf ("%s (%s)\n", $fila[0], $fila[1]);
//    }
    echo json_encode($stringResult);
//    if($row[1] == $postPass){
//        session_set_cookie_params(0);
//        session_start();
//        $_SESSION["username"] = $postUsername;
//        echo "Success";
//    }else{
//        echo "Fail";
//    }
//    echo "Usuario: ".$row[0]." Pass: ".$row[1];die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();