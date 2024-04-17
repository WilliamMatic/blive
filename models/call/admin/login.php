<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../../admins/models/class/Admin.php';
require '../../../admins/models/class/AdminHydrate.php';
require '../../../admins/models/fonctions/db.php';

$db = db();


$admin = new Admin(array(
	'email' => $_POST['email'],
	'password' => $_POST['password'],
));

$manager = new AdminHydrate($db);

$manager->Login($admin);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {

	unset($_SESSION['success']);
	header("Location: ../../../admins");
	exit();

}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	
	header("Location: ../../../login-admin");
	exit();

}