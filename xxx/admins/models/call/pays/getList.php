<?php

require 'models/class/Pays.php';
require 'models/class/PaysHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new PaysHydrate($db);

$listAll = $manager->getList();