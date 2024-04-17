<?php

require 'models/class/Astuce.php';
require 'models/class/AstuceHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new AstuceHydrate($db);

$listAll = $manager->getList();