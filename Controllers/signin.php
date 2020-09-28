<?php
require_once('Model/connection.php');
require_once('Model/Model.php');
function test_input($data){
	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}
$nom = test_input($_POST["nom"]);
$usuari = test_input($_POST["usuari"]);
$password = test_input($_POST["password"]);
$contrasenya = password_hash($password,PASSWORD_DEFAULT)."\n";

$email = test_input($_POST["email"]);
$telefon = test_input($_POST["telefon"]);
$adreca = test_input($_POST["adreca"]);
$poblacio = test_input($_POST["poblacio"]);
$codiPostal = test_input($_POST["codiPostal"]);
$targeta = test_input($_POST["targeta"]);
$comprobacio = ferSignIn($conn,$nom,$usuari,$contrasenya,$email,$telefon,$adreca,$poblacio,$codiPostal,$targeta);

echo $comprobacio;
  ?>
