<?php

require 'models/class/Secteur.php';
require 'models/class/SecteurHydrate.php';

$db = db();

$manager = new SecteurHydrate($db);

$secteurAll = $manager->getList();