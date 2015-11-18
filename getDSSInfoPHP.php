<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemas avanzados";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM venta";
$sth = mysqli_query($conn, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);
/*if ($results = mysqli_query($conn, $sql)) {
    echo json_encode($results);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/