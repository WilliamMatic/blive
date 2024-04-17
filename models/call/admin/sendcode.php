<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../../admin/models/class/Admin.php';
require '../../../admin/models/class/AdminHydrate.php';
require '../../../admin/models/fonctions/db.php';

$db = db();


$admin = new Admin(array(
	'email' => $_POST['email'],
));

$manager = new AdminHydrate($db);

$manager->SendCode($admin);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../reset-admin");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../reset-admin");
	exit();
}