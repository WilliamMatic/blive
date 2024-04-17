<?php  

try {
	
	require 'db.php';
	$db = db();

	$req = $db->prepare("
			SELECT tb_astuce.*, DATE_FORMAT(tb_astuce.date_event, '%d-%m-%Y') AS datepub, tb_admin.nom AS adminname, 
			tb_secteur.designation AS secteurname FROM tb_astuce 
			INNER JOIN tb_admin ON tb_astuce.admin = tb_admin.id 
			INNER JOIN tb_secteur ON tb_secteur.id = tb_astuce.secteur
			WHERE tb_astuce.date_event >= ? AND tb_astuce.status = 1
			ORDER BY tb_astuce.id DESC
		");
	$date = date('Y-m-d');
	$req->execute([ $date ]);

	if ($req->rowCount() < 1) {
		
		echo "Aucun live disponible";
		exit();

	}else{
		$result = $req->fetchAll();
		echo json_encode($result);
	}

} catch (Exception $e) {
	echo "Affichage des lives échouées";
	exit();
}