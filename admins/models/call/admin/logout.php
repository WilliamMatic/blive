<?php

session_start();

require '../../class/Admin.php';
require '../../class/AdminHydrate.php';
require '../../fonctions/db.php';

$db = db();

$manager = new AdminHydrate($db);

$manager->Logout();

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	unset($_SESSION['success']);
	header("Location: ../../../");
	exit();
}