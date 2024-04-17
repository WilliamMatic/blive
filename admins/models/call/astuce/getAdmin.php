<?php

require 'models/class/Admin.php';
require 'models/class/AdminHydrate.php';

$db = db();

$manager = new AdminHydrate($db);

$adminAll = $manager->getList();