<?php 

session_start();

function add(){

	$_POST['title'] = htmlspecialchars(trim($_POST['title']));
	$_POST['content'] = htmlspecialchars(trim($_POST['content']));

	$_POST['sector'] = (int) $_POST['sector'];
	$_POST['admin'] = (int) $_POST['admin'];

	$_POST['price'] = (int) $_POST['price'];
	$_POST['youtube'] = htmlspecialchars(trim($_POST['youtube']));

	if ($_POST['sector'] < 1) {
		$_SESSION['error'] = "L'identifiant du secteur doit être superieur à 0";
		header("Location: ../astuce-edit.php?id=".$_POST['idevent']);
	}

	if ($_POST['admin'] < 1) {
		$_SESSION['error'] = "L'identifiant de l'admin doit être superieur à 0";
		header("Location: ../astuce-edit.php?id=".$_POST['idevent']);
	}

	require 'fonctions/db.php';
	$db = db();

	
	try {

		$req = $db->prepare("SELECT * FROM tb_astuce WHERE titre = ?");
		$req->execute([ $_POST['titre'] ]);

		if ($res = $req->rowCount() > 0 ) {
			
			$_SESSION['error'] = "Titre déjà utilisé";
			header("Location: ../astuce-edit.php?id=".$_POST['idevent']);

		}else{

			$req = $db->prepare("SELECT * FROM tb_admin WHERE id = ?");
			$req->execute([ $_POST['admin'] ]);

			if ($res = $req->rowCount() < 1 ) {
				
				$_SESSION['error'] = "Admin introuvable";
				header("Location: ../astuce-edit.php?id=".$_POST['idevent']);

			}else{
				
				$req = $db->prepare("SELECT * FROM tb_secteur WHERE id = ?");
				$req->execute([ $_POST['sector'] ]);

				if ($res = $req->rowCount() < 1 ) {
					
					$_SESSION['error'] = "Secteur introuvable";
					header("Location: ../astuce-edit.php?id=".$_POST['idevent']);

				}else{
					
					$req = $db->prepare("UPDATE tb_astuce SET titre = ?, price = ?, youtube = ?, secteur = ?, contenue = ?, admin = ?, date_event = ? WHERE id = ? ");
					$date = date('Y-m-d');
					$req->execute([ $_POST['title'], $_POST['price'], $_POST['youtube'], $_POST['sector'], $_POST['content'], $_POST['admin'], $_POST['date'], $_POST['idevent'] ]);


					$_SESSION['success'] = "Evènement modifier";
					header("Location: ../astuce-edit.php?id=".$_POST['idevent']);

				}

			}

		}

	} catch (Exception $e) {
		$_SESSION['error'] = "Insertion échouée";
		header("Location: ../astuce-edit.php?id=".$_POST['idevent']);
	}

}add();