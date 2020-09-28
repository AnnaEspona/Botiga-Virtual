<?php
session_start();
$action = NULL;

if (isset($_GET['action'])) {
	$action = $_GET['action'];
}

$isAjax = false;

if (isset($_GET['is_ajax'])){
	$isAjax=true;
}
if($isAjax==false){
	require_once('Vista/header.php');	
}

switch ($action) {
	case 'list_products':
		$id_serie = NULL;
		if (isset($_GET['category_id'])){
			$id_serie = $_GET['category_id'];
		}
		require('Controllers/productes.php');
		break;
	case 'product':
		$id_producte = NULL;
		if (isset($_GET['product_id'])){
			$id_producte = $_GET['product_id'];
		}
		require('Controllers/prod.php');
		break;
	case 'signIn':
		require('Vista/signIn.php');
		break;
	case 'enviar':
		require('Controllers/signin.php');
	case 'logejarse':
		require('Controllers/login.php');
	default:
		require('Vista/portada.php');
		break;

}

if ($isAjax==false){
	require_once('Vista/footer.php');
}
?>
