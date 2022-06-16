<?php
require 'database.php';


$vestegingsnaam = $_POST['vestegingsnaam'];
$bedrijfsnaam = $_POST['bedrijfsnaam'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$telefoonnummer = $_POST['telefoonnummer'];
$reactie = $_POST['reactie'];

$sql = "INSERT INTO reacties (vestegingsplaats, bedrijfsnaam, adres, postcode, telefoonnummer, datum, reactie)
VALUES ('$vestegingsnaam', '$bedrijfsnaam','$adres', '$postcode', '$telefoonnummer', NOW(), '$reactie')";

// Voer de INSERT INTO STATEMENT uit
mysqli_query($conn, $sql);

echo "Inserted successfully";
mysqli_close($conn); // Sluit de database verbinding

header('Jeffrey_CV_website_eindproject.php');
