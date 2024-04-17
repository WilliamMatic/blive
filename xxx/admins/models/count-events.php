<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->prepare(" SELECT COUNT(*) AS events FROM tb_astuce WHERE datepublish BETWEEN ? AND ? ");
$req->execute([ $_SESSION['datedeb'], $_SESSION['datefin'] ]);