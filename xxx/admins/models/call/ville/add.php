<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Ville.php';
require '../../class/VilleHydrate.php';
require '../../fonctions/db.php';

$db = db();


$ville = new Ville(array(
	'designation' => trim(htmlspecialchars($_POST['ville'])),
	'pays' => $_POST['pays'],
));

$manager = new VilleHydrate($db);

$manager->add($ville);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../city-".$_POST['pays']);
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../city-".$_POST['pays']);
	exit();
}