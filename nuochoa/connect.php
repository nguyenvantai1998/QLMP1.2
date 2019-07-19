<?php
$servername = "localhost";
$username = "root";
$password = "";
$options=array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
try {
    $conn = new PDO("mysql:host=$servername;dbname=qlmp1.0", $username, $password,$options);
    
    //echo "connected: ";
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}

?>
