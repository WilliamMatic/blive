<?php 

function add(){

	$_POST['title'] = htmlspecialchars(trim($_POST['title']));
	$_POST['content'] = htmlspecialchars(trim($_POST['content']));

	$_POST['sector'] = (int) $_POST['sector'];
	$_POST['admin'] = (int) $_POST['admin'];

	if ($_POST['sector'] < 1) {
		$_SESSION['error'] = "L'identifiant du secteur doit être superieur à 0";
	}

	if ($_POST['admin'] < 1) {
		$_SESSION['error'] = "L'identifiant de l'admin doit être superieur à 0";
	}

	require 'db.php';
	$db = db();

	if ( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ) {

		if ($_FILES['avatar']['size'] <= 5000000) {

			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg');
			
			if (in_array($extension_upload, $extensions_autorisees)) {
				
				$id_avatar = $_POST['admin'].'_'.uniqid();
				$avatar = $id_avatar.'.'.$extension_upload;

				try {

					$req = $db->prepare("SELECT * FROM tb_astuce WHERE titre = ?");
					$req->execute([ $_POST['titre'] ]);

					if ($res = $req->rowCount() > 0 ) {
						
						$_SESSION['error'] = "Titre déjà utilisé";

					}else{

						$req = $db->prepare("SELECT * FROM tb_admin WHERE id = ?");
						$req->execute([ $_POST['admin'] ]);

						if ($res = $req->rowCount() < 1 ) {
							
							$_SESSION['error'] = "Admin introuvable";

						}else{
							
							$req = $db->prepare("SELECT * FROM tb_secteur WHERE id = ?");
							$req->execute([ $_POST['sector'] ]);

							if ($res = $req->rowCount() < 1 ) {
								
								$_SESSION['error'] = "Secteur introuvable";

							}else{
								
								$req = $db->prepare("INSERT INTO tb_astuce(titre, secteur, contenue, admin, datepublish, avatar) VALUES (?,?,?,?,?,?) ");
								$date = date('Y-m-d');
								$req->execute([ $_POST['title'], $_POST['sector'], $_POST['content'], $_POST['admin'], $date, $avatar ]);

								move_uploaded_file($_FILES['avatar']['tmp_name'], '../../../assets/astuce/' . $avatar);

								$_SESSION['success'] = "Astuce publier";

							}

						}

					}

				} catch (Exception $e) {
					$_SESSION['error'] = "Insertion échouée";
				}

			}else{
				$_SESSION['error'] = "L'avatar doit être au format image";
			}

		}else{
			$_SESSION['error'] = "La taille de L'avatar est trop volumineuse";
		}

	}else{
		$_SESSION['error'] = "L'avatar est obligatoire";
	}
}