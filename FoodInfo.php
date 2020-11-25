<?php
//get data first
$ID =$_POST["ID"];
$Name =$_POST["Name"];
$Price =$_POST["Price"];
$Quantity =$_POST["Quantity"];
$Calorie =$_POST["Calorie"];

//connect to db
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pset3";

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO food_info(ID, Name, Price, Quantity, Calorie)
  VALUES ('$ID', '$Name', '$Price', '$Quantity', '$Calorie')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>
