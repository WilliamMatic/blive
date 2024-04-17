<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Ville.php';
require '../../class/VilleHydrate.php';
require '../../fonctions/db.php';

$db = db();


$Ville = new Ville(array(
	'id' => $_GET['id'],
	'pays' => $_GET['pays'],
));

$manager = new VilleHydrate($db);

$manager->delete($Ville);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../city-".$_GET['pays']);
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../city-".$_GET['pays']);
	exit();
}