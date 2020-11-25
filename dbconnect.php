<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pset3";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    $conn = null;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

// Create connection
//$conn = new mysqli($servername, $username, $password, $database);

// Check connection
//if ($conn->connect_error) {
 // die("Connection failed: " . $conn->connect_error);
//}else{
  //  echo "Connected successfully";
//}
?>