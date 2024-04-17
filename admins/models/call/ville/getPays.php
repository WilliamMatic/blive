<?php

require 'models/class/Ville.php';
require 'models/class/VilleHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$Ville = new Ville(array(
	'pays' => $_GET['id'],
));

$manager = new VilleHydrate($db);

$getPays = $manager->getPays($Ville);