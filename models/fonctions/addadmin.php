<?php 

function add(){

	$_POST['name'] = htmlspecialchars(trim($_POST['name']));
	$_POST['phone'] = htmlspecialchars(trim($_POST['phone']));
	$_POST['email'] = htmlspecialchars(trim($_POST['email']));

	require 'db.php';
	$db = db();

	if ( isset($_FILES['avatar']['name']) && !empty($_FILES['avatar']['name']) ) {

		if ($_FILES['avatar']['size'] <= 5000000) {

			$infosfichier = pathinfo($_FILES['avatar']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg');
			
			if (in_array($extension_upload, $extensions_autorisees)) {
				
				$id_avatar = $_POST['email'].'_'.uniqid();
				$avatar = $id_avatar.'.'.$extension_upload;

				try {

					$req = $db->prepare("SELECT * FROM tb_admin WHERE telephone = ?");
					$req->execute([ $_POST['phone'] ]);

					if ($res = $req->rowCount() > 0 ) {
						
						$_SESSION['error'] = "Numéro de telephone déjà utilisé";

					}else{

						$req = $db->prepare("SELECT * FROM tb_admin WHERE email = ?");
						$req->execute([ $_POST['email'] ]);

						if ($res = $req->rowCount() > 0 ) {
							
							$_SESSION['error'] = "Adresse email déjà prise";

						}else{
							
							if ( preg_match("/^[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*@[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*(?:\.[A-Za-z]{2,})$/", $_POST['email']) ) {
								
								$req = $db->prepare("INSERT INTO tb_admin(nom, telephone, email, avatar, pwd) VALUES (?,?,?,?,?) ");
								$pwd = hash('sha512', $_POST['phone']);
								$req->execute([ $_POST['name'], $_POST['phone'], $_POST['email'], $avatar, $pwd ]);

								move_uploaded_file($_FILES['avatar']['tmp_name'], '../../../assets/avatar/' . $avatar);

								$_SESSION['success'] = "Admin ajouter";

							}else{
								$_SESSION['error'] = "L'adresse email est invalide";
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