<?php

session_start();

header("Access-Control-Allow-Origin: *");
require '../../fonctions/addastuce.php';

add();

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../tips");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../tips");
	exit();
}