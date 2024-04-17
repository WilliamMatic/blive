<?php

session_start();

if ($_POST['password'] != $_POST['confirmpassword']) {
	$_SESSION['error'] = "Les deux mots de passe ne sont pas identiques";
	header("Location: ../../../reset-admin");
	exit();
}

if ($_POST['code'] != $_SESSION['codegenerate']) {
	$_SESSION['error'] = "Code non reconnu";
	header("Location: ../../../reset-admin");
	exit();
}

header("Access-Control-Allow-Origin: *");

require '../../../admin/models/class/Admin.php';
require '../../../admin/models/class/AdminHydrate.php';
require '../../../admin/models/fonctions/db.php';

$db = db();


$admin = new Admin(array(
	'email' => $_POST['email'],
	'password' => $_POST['password'],
	'passwordConfirm' => $_POST['confirmpassword'],
));

$manager = new AdminHydrate($db);

$manager->ResetPassword($admin);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../reset-admin");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../reset-admin");
	exit();
}