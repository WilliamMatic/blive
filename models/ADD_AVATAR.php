<?php 

try {

	require 'db.php';
	$db = db();

	$req = $db->prepare("

		SELECT * FROM tb_users WHERE id = ?
		");

	$req->execute([ $_POST['id'] ]);

	if ($res = $req->fetch(PDO::FETCH_OBJ)) {

		if ($res->avatar == "" || $res->avatar == null || empty($res->avatar)) {
			$infosfichier = pathinfo($_FILES['photo']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg');

			$id_photo = uniqid().'_'.uniqid();
			$photo = $id_photo.'.'.$extension_upload;
			
			$req = $db->prepare("UPDATE tb_users SET avatar = ? WHERE id = ?");
			$req->execute([ $photo, $_POST['id'] ]);

			move_uploaded_file($_FILES['photo']['tmp_name'], "../admins/assets/avatar/".$photo);

			echo "succès";
			exit();
		}else{

			$infosfichier = pathinfo($_FILES['photo']['name']);
			$extension_upload = $infosfichier['extension'];
			$extensions_autorisees = array('PNG', 'png', 'JPG', 'jpg', 'JPEG', 'jpeg');

			$id_photo = uniqid().'_'.uniqid();
			$photo = $id_photo.'.'.$extension_upload;

			$req = $db->prepare("UPDATE tb_users SET avatar = ? WHERE id = ?");
			$req->execute([ $photo, $_POST['id'] ]);

			unlink("../admins/assets/avatar/".$res->avatar);

			move_uploaded_file($_FILES['photo']['tmp_name'], "../admins/assets/avatar/".$photo);

			echo "succès";
			exit();
		}

	}
	
} catch (Exception $e) {
	echo "Une erreur est survenue! Veuillez ressayer plus tard";
	exit();
}