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
$postName = $_POST['name'];
$postUsername = $_POST['username'];
$postPass = $_POST['pass'];
$postEmail = $_POST['email'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "INSERT INTO usuario (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";*/

$sql = "INSERT INTO usuario values (null,'".$postName."', '".$postUsername."', '".$postPass."', '".$postEmail."', 'usuario')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

session_set_cookie_params(0);
session_start();
$_SESSION["username"] = $postUsername;