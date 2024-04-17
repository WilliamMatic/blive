<?php

$db = db();

$Ville = new Ville(array(
	'pays' => $_GET['id'],
));

$manager = new VilleHydrate($db);

$listAll = $manager->getList($Ville);