<?php

require 'models/class/Admin.php';
require 'models/class/AdminHydrate.php';
require 'models/fonctions/db.php';

$db = db();

$manager = new AdminHydrate($db);

$listAll = $manager->getList();