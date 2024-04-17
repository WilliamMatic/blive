<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Admin.php';
require '../../class/AdminHydrate.php';
require '../../fonctions/db.php';

$db = db();


$admin = new Admin(array(
	'id' => $_GET['id'],
));

$manager = new AdminHydrate($db);

$manager->delete($admin);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../admin");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../admin");
	exit();
}