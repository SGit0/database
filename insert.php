<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query($sql = "INSERT INTO stagiaire (nom, prenom) VALUES (\"$_POST['nom']\", \"$_POST['prenom']\")");


$conn->close();
?>
