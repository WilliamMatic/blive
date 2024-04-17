<?php

session_start();

header("Access-Control-Allow-Origin: *");

require '../../class/Secteur.php';
require '../../class/SecteurHydrate.php';
require '../../fonctions/db.php';

$db = db();


$secteur = new Secteur(array(
	'designation' => trim(htmlspecialchars($_POST['secteur'])),
	'icon' => $_POST["icon"],
));

$manager = new secteurHydrate($db);

$manager->add($secteur);

if (isset($_SESSION['success']) && !empty($_SESSION['success'])) {
	header("Location: ../../../sectors");
	exit();
}

if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
	header("Location: ../../../sectors");
	exit();
}