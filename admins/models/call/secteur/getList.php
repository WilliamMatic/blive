<?php

require 'models/class/Secteur.php';
require 'models/class/SecteurHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new SecteurHydrate($db);

$listAll = $manager->getList();