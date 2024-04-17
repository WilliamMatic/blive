<?php

session_start();

header("Access-Control-Allow-Origin: *");
require '../../fonctions/addadmin.php';

add();

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../admin");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../admin");
	exit();
}