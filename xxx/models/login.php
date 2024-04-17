<?php 

session_start();

try {
	
	require 'db.php';
	$db = db();

	$_POST['email'] = htmlspecialchars(trim($_POST['email']));
	$_POST['password'] = htmlspecialchars(trim($_POST['password']));

	$_POST['password'] = hash('sha512', $_POST['password']);

	$req = $db->prepare("SELECT * FROM tb_users WHERE email = ? AND password = ? AND status = 1");
	$req->execute([  $_POST['email'], $_POST['password'] ]);

	if ($res = $req->fetch(PDO::FETCH_OBJ)) {
		
		$_SESSION['id'] = $res->id;
		$_SESSION['nom'] = $res->nom;
		$_SESSION['phone'] = $res->phone;
		$_SESSION['email'] = $res->email;
		$_SESSION['avatar'] = $res->avatar;
		$_SESSION['password'] = $res->password;

		header("Location: ../home");
		exit();

	}else{
		$_SESSION['error'] = "Compte introuvable";
		header("Location: ../login.html");
		exit();
	}
	
} catch (Exception $e) {
	$_SESSION['error'] = $e;
	die($e);
}