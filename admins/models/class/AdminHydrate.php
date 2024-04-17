<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class AdminHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function getList()
	{
		$grades = array();
		$q = $this->db->query('
				SELECT * FROM tb_admin
				ORDER BY nom
			');
		return $q;
	}

	public function getAdmin(Admin $admin)
	{
		$q = $this->db->prepare('
				SELECT * FROM tb_admin
				WHERE tb_admin = ?
			');
		$q->execute([$admin->id()]);
		return $q;
	}
			
	public function delete(Admin $admin)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_admin WHERE id = ?');
			$request->execute([ $admin->id() ]);

			if ($res = $request->fetch(PDO::FETCH_OBJ)) {
				
				$request = $this->db->prepare('DELETE FROM tb_admin WHERE id = ?');
				$request->execute([ $admin->id() ]);

				unlink('../../../assets/avatar/'.$res->avatar);
						
				$_SESSION['success'] = "Admin supprimée";

			}else{
				$_SESSION['error'] = "Cet admin n'existe pas";
			}

		} catch (Exception $e) {
			$_SESSION['error'] = "Suppression échouée";
		}

	}

	public function SendCode(Admin $admin)
	{
		$req = $this->db->prepare("SELECT * FROM tb_admin WHERE email = ?");
		$req->execute([ $admin->email() ]);

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
				
				$_SESSION['sendcodesuccess'] = $code;
				$_SESSION['codegenerate'] = $code;

				$_SESSION['success'] = "Mail envoyé avec sucès";
				$_SESSION['emailreset'] = $admin->email();

			}else{

				unset($_SESSION['sendcodesuccess']);
				unset($_SESSION['emailreset']);
				$_SESSION['error'] = "Le mail ne pas envoyé";

			}

		}else{

			unset($_SESSION['sendcodesuccess']);
			unset($_SESSION['emailreset']);
			$_SESSION['error'] = "Adresse email introuvable";

		}
	}

	public function ResetPassword(Admin $admin)
	{
		$req = $this->db->prepare("SELECT * FROM tb_admin WHERE email = ?");
		$req->execute([ $admin->email() ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {

			$req = $this->db->prepare("UPDATE tb_admin SET pwd = ? WHERE email = ?");
			$password = hash('sha512', $admin->password());
			$req->execute([ $password, $admin->email() ]);

			$_SESSION['success'] = "Mot de passe réinitialisé avec succès";

		}else{
			$_SESSION['error'] = "Adresse email introuvable";
		}	
	}

	public function Login(Admin $admin)
	{
		$req = $this->db->prepare("SELECT * FROM tb_admin WHERE pwd = ? AND email = ? AND status = 1");
		$password = hash('sha512', $admin->password());
		$req->execute([ $password, $admin->email() ]);

		if ($res = $req->fetch(PDO::FETCH_OBJ)) {
			
			$_SESSION['id'] = $res->id;
			$_SESSION['nom'] = $res->nom;
			$_SESSION['telephone'] = $res->telephone;
			$_SESSION['email'] = $res->email;
			$_SESSION['avatar'] = $res->avatar;
			$_SESSION['pwd'] = $res->pwd;
			$_SESSION['status'] = $res->status;

			$_SESSION['success'] = "Connexion éffectuée";

		}else{
			$_SESSION['error'] = "Adresse email ou Mot de passe introuvable";
		}	
	}

	public function Logout()
	{
		session_destroy();
		unset($_SESSION['id']);
		unset($_SESSION['nom']);
		unset($_SESSION['telephone']);
		unset($_SESSION['email']);
		unset($_SESSION['avatar']);
		unset($_SESSION['pwd']);
		unset($_SESSION['status']);

		$_SESSION['success'] = "Deconnexion éffectuée";
	}

	public function setDb(PDO $db)
	{
		$this->db = $db;
	}


}