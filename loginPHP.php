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

/* ---------- POST VALUES ----------*/
$postUsername = $_POST['username'];
$postPass = $_POST['pass'];

if(empty($postUsername) || empty($postPass)){
    echo "Fail";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT usuarioUsuario, contrasenaUsuario FROM usuario WHERE usuarioUsuario = '".$postUsername."';";

if ($results = $conn->query($sql)) {
    $row = $results->fetch_array();
    if($row[1] == $postPass){
        session_set_cookie_params(0);
        session_start();
        $_SESSION["username"] = $postUsername;
        echo "Success";
    }else{
        echo "Fail";
    }
//    echo "Usuario: ".$row[0]." Pass: ".$row[1];die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();