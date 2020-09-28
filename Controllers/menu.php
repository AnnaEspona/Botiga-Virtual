<?php

require_once('Model/connection.php');
require_once('Model/Model.php');

$series=array();	
$series = getMenu($conn);

require ('Vista/menu.php');
?>