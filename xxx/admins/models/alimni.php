<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->query("SELECT * FROM tb_candidat");