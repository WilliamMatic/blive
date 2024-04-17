<?php

require 'models/class/Contrant.php';
require 'models/class/ContrantHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new ContrantHydrate($db);

$listAll = $manager->getList();