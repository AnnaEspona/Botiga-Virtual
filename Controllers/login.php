<?php
require_once('Model/Model.php');
$password = $_POST["password"];
$usuari = $_POST["usuari"];
$hash = password_hash($password,PASSWORD_DEFAULT)."\n";
$pass = agafarPassword($conn,$usuari);
echo $pass[0]['Password'];
$validat = password_verify($pass[0]['Password'],$hash);
if ($validat==True) {
	echo "tot be";
}
else {
	echo "la contrasenya o l'usuari no són correctes, or both";
}
?>
