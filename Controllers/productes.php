<?php

require_once('Model/connection.php');
require_once('Model/Model.php');

$productes = array();
$productes = getProductes($conn, $id_serie);

require ('Vista/productes.php');
?>
