<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Admin
{

	private int $id;
	private string $nom;
	private string $telephone;
	private $email;
	private string $avatar;

	private string $password;
	private string $passwordConfirm;
	
	function __construct(array $data)
	{
		$this->hydrate($data);
	}

	public function hydrate(array $data){
		foreach ($data as $key => $value){
			$method = 'set'.ucfirst($key);
			if (method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

	// getters

	public function id(): int
	{
		return $this->id;
	}

	public function nom(): string
	{
		return $this->nom;
	}

	public function telephone(): string
	{
		return $this->telephone;
	}

	public function email()
	{
		return $this->email;
	}

	public function avatar(): string
	{
		return $this->avatar;
	}

	public function password(): string
	{
		return $this->password;
	}

	public function passwordConfirm(): string
	{
		return $this->passwordConfirm;
	}


	// Setters
	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant de la ville doit être superieur à 0";
		}

	}

	public function setNom($nom)
	{
		if (isset($nom) && !empty($nom) ) {
			
			$nom = htmlspecialchars(trim($nom));

			if (strlen($nom) <= 255) {
				
				$this->nom = $nom;

			}else{
				$_SESSION['error'] = "Le nom est trop long";
			}

		}else{
			$_SESSION['error'] = "Le nom est obligatoire";
		}

	}

	public function setTelephone($telephone)
	{
		if (isset($telephone) && !empty($telephone) ) {
			
			$telephone = htmlspecialchars(trim($telephone));

			if (strlen($telephone) <= 20) {
				
				$this->telephone = $telephone;

			}else{
				$_SESSION['error'] = "Le numéro de telephone est trop long";
			}

		}else{
			$_SESSION['error'] = "Le numéro de telephone est obligatoire";
		}

	}

	public function setEmail($email)
	{
		if ( isset($email) && !empty($email) && preg_match("/^[a-z0-9]+(?:\.[a-z0-9]+)*@[a-z0-9]+(?:\.[a-z0-9]+)*(?:\.[a-z]{2,})$/", $email) ) {

			$this->email = $email;

		}else{
			$_SESSION['error'] = "L'adresse email est invalide";
		}

	}

	public function setAvatar($avatar)
	{
		if (isset($avatar) && !empty($avatar) ) {
			
			$avatar = htmlspecialchars(trim($avatar));

			if (strlen($avatar) <= 255) {
				
				$this->avatar = $avatar;

			}else{
				$_SESSION['error'] = "Avatar trop long";
			}

		}else{
			$_SESSION['error'] = "L'avatar est obligatoire";
		}

	}

	public function setPassword($password)
	{
		if (isset($password) && !empty($password) ) {
			
			$password = htmlspecialchars(trim($password));

			if (strlen($password) <= 255) {
				
				$this->password = $password;

			}else{
				$_SESSION['error'] = "Mot de passe trop long";
			}

		}else{
			$_SESSION['error'] = "Mot de passe est obligatoire";
		}

	}

	public function setPasswordConfirm($passwordConfirm)
	{
		if (isset($passwordConfirm) && !empty($passwordConfirm) ) {
			
			$passwordConfirm = htmlspecialchars(trim($passwordConfirm));

			if (strlen($passwordConfirm) <= 255) {
				
				$this->passwordConfirm = $passwordConfirm;

			}else{
				$_SESSION['error'] = "Mot de passe trop long";
			}

		}else{
			$_SESSION['error'] = "Mot de passe est obligatoire";
		}

	}


}