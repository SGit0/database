<?php
$servername = "10.69.80.85";
$username = "user";
$password = "password";
$dbname = "stage";


$Xnom = $_POST['prenom'];
$Xprenom = $_POST['nom'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query($sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('$Xnom', '$Xprenom')");


$conn->close();
?>
