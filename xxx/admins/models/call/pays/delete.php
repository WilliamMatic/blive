<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Pays.php';
require '../../class/PaysHydrate.php';
require '../../fonctions/db.php';

$db = db();


$pays = new Pays(array(
	'id' => $_GET['id'],
));

$manager = new PaysHydrate($db);

$manager->delete($pays);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../country");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../country");
	exit();
}