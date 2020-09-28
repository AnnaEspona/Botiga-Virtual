<?php
function getMenu($conn)
{
	$sql = "SELECT * FROM SeriesAnime";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductes($conn, $serieId = NULL)
{
	$sql = "SELECT * FROM Producte ";
	$productes = array();

	if ($serieId !== NULL)
	{
		$sql .= "WHERE Id_Serie = ?";
		$productes[] = $serieId;
	}
	
	$stmt = $conn->prepare($sql);
	$stmt->execute($productes);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getProd($conn, $prodId = NULL){
	$sql = "SELECT * FROM Producte ";
	$producte = array();

	if ($prodId !== NULL)
	{
		$sql .= "WHERE Id_Producte = ?";
		$producte[] = $prodId;
	}
	
	$stmt = $conn->prepare($sql);
	$stmt->execute($producte);
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function ferSignIn($conn,$nom,$usuari,$password,$email,$telefon,$adreca,$poblacio,$codiPostal,$targeta){
	$sql = "INSERT INTO Client_Registrat (Nom, Usuari, Password, Email, Telefon, Adreca, Poblacio, CodiPostal, Targeta_banc) VALUES (:nom,:usuari,:password,:email,:telefon,:adreca,:poblacio,:codiPostal,:targeta)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':nom',$nom);
	$stmt->bindParam(':usuari',$usuari);
	$stmt->bindParam(':password',$password);
	$stmt->bindParam(':email',$email);
	$stmt->bindParam(':telefon',$telefon);
	$stmt->bindParam(':adreca',$adreca);
	$stmt->bindParam(':poblacio',$poblacio);
	$stmt->bindParam(':codiPostal',$codiPostal);
	$stmt->bindParam(':targeta',$targeta);
	$stmt->execute();
	$comprobacio = "Tot ha surtit bé!";
	return $comprobacio;
}
function agafarPassword($conn,$usuari){
	$sql = "SELECT Password FROM Client_Registrat WHERE Usuari = :usuari";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':usuari',$usuari);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
