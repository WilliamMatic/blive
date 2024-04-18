<?php 

$db = db();

$request = $db->query("
		SELECT DISTINCT tb_astuce.secteur AS secteur, tb_secteur.designation AS secteurname
		FROM tb_astuce INNER JOIN tb_secteur ON tb_astuce.secteur = tb_secteur.id
");
