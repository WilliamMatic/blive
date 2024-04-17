<?php 

function SendCode($email)
{

	session_start();
	
	if ( isset($email) && !empty($email) && preg_match("/^[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*@[A-Za-z0-9]+(?:\.[A-Za-z0-9]+)*(?:\.[A-Za-z]{2,})$/", $email) ) {

		require 'db.php';
		$db = db();

		$req = $db->prepare("SELECT * FROM tb_admin WHERE email = ?");
		$req->exeute([ $email ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {
			$code = rand(10000, 99999);
			$to = $res->email;
			$subject = 'Votre code de reinitialisation de votre mot de passe est '.$code;
			$message = '<p> Chèr(e)'. $res->nom.',</p><p>Votre code de reinitialisation de votre mot de passe est '. $code.',</p>';
			$headers = 'From: mwindaholding@gmail.com' . "\r\n" .
			    'Reply-To: ngutshinsisili@gmail.com' . "\r\n" .
			    'MIME-Version: 1.0' . "\r\n" .
			    'Content-type: text/html; charset=UTF-8' . "\r\n";

			$result = mail($to, $subject, $message, $headers);

			if ($result) {
				$_SESSION['sendcodesuccess'] = "Mail envoyé avec sucès";
				$_SESSION['success'] = "Mail envoyé avec sucès";
				$_SESSION['emailreset'] = $email;
			}else{
				unset($_SESSION['sendcodesuccess']),
				$_SESSION['error'] = "Le mail ne pas envoyé";
			}

		}else{
			unset($_SESSION['sendcodesuccess']),
			$_SESSION['error'] = "Adresse email introuvable";
		}		

	}else{
		unset($_SESSION['sendcodesuccess']),
		$_SESSION['error'] = "L'adresse email est invalide";
	}
}