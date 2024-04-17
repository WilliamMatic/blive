<?php 

require 'fonctions/db.php';
$db = db();

$req = $db->prepare("SELECT tb_astuce.*, DATE_FORMAT(tb_astuce.date_event, '%d-%m-%Y') AS publicate_date FROM tb_astuce WHERE id = ? AND status = 1");
$req->execute([ $_GET['id'] ]);