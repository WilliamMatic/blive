<?php 

session_start();

$_GET['username'] = htmlspecialchars(trim($_GET['username']));
$_GET['phone'] = htmlspecialchars(trim($_GET['phone']));
$_GET['email'] = htmlspecialchars(trim($_GET['email']));
$_GET['password'] = htmlspecialchars(trim($_GET['password']));

if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
  
	require 'db.php';
	$db = db();

	try {

		$req = $db->prepare("SELECT * FROM tb_users WHERE phone = ?");
		$req->execute([ $_GET['phone'] ]);

		if ($res = $req->rowCount() > 0 ) {
			
			echo "Numéro de telephone déjà utilisé";
			exit();

		}else{

			$req = $db->prepare("SELECT * FROM tb_users WHERE email = ?");
			$req->execute([ $_GET['email'] ]);

			if ($res = $req->rowCount() > 0 ) {
				
				echo "Adresse email déjà prise";
				exit();

			}else{
				
				if ( preg_match("/^[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*@[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*(?:\.[A-Za-z]{2,})$/", $_GET['email']) ) {
					
					$req = $db->prepare("INSERT INTO tb_users(nom, phone, email, password) VALUES (?,?,?,?) ");
					$pwd = hash('sha512', $_GET['password']);
					$req->execute([ $_GET['username'], $_GET['phone'], $_GET['email'], $pwd ]);

					echo "Votre compte a été créé avec succès";
					exit();

				}else{
					echo "L'adresse email est invalide";
					exit();
				}

			}

		}

	} catch (Exception $e) {
		echo "Insertion échouée";
		exit();
	}

} else {
  echo "Adresse email invalide";
  exit();
}