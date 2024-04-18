<?php  

require 'fonctions/db.php';
$db = db();

$req = $db->prepare("
		SELECT tb_astuce.*, DATE_FORMAT(tb_astuce.date_event, '%d-%m-%Y') AS datepub, tb_admin.nom AS adminname, 
		tb_secteur.designation AS secteurname FROM tb_astuce 
		INNER JOIN tb_admin ON tb_astuce.admin = tb_admin.id 
		INNER JOIN tb_secteur ON tb_secteur.id = tb_astuce.secteur
		WHERE tb_astuce.status = 1 AND tb_astuce.titre LIKE ?
		ORDER BY tb_astuce.titre
	");
$date = date('Y-m-d');
$req->execute([ '%'.$_GET['v'].'%' ]);