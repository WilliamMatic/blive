<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Astuce.php';
require '../../class/AstuceHydrate.php';
require '../../fonctions/db.php';

$db = db();


$astuce = new Astuce(array(
	'id' => $_GET['id'],
));

$manager = new AstuceHydrate($db);

$manager->delete($astuce);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../tips");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../tips");
	exit();
}