<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Contrant.php';
require '../../class/ContrantHydrate.php';
require '../../fonctions/db.php';

$db = db();


$contrant = new Contrant(array(
	'id' => $_GET['id'],
));

$manager = new ContrantHydrate($db);

$manager->delete($contrant);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../contracts");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../contracts");
	exit();
}