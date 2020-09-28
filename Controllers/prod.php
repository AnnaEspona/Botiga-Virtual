<?php

require_once('Model/connection.php');
require_once('Model/Model.php');

$prod = array();
$prod = getProd($conn, $id_producte);

require ('Vista/prod.php');
?>
