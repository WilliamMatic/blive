<?php 

try {
	
	require 'db.php';
	$db = db();

	$_GET['email'] = htmlspecialchars(trim($_GET['email']));
	$_GET['password'] = htmlspecialchars(trim($_GET['password']));

	$_GET['password'] = hash('sha512', $_GET['password']);

	$req = $db->prepare("SELECT * FROM tb_users WHERE email = ? AND password = ? AND status = 1");
	$req->execute([  $_GET['email'], $_GET['password'] ]);

	if ($req->rowCount() < 1) {
		
		echo "Utilisateur introuvable";
		exit();

	}else{
		$result = $req->fetchAll();
		echo json_encode($result);
	}
	
} catch (Exception $e) {
	echo "Une erreur est survenue! Veuillez ressayer plus tard";
	die($e);
}