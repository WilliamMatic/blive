<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Astuce
{

	private int $id;
	private string $titre;
	private int $secteur;
	private string $contenue;
	private int $admin;
	
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

	public function titre(): string
	{
		return $this->titre;
	}

	public function secteur(): string
	{
		return $this->secteur;
	}

	public function contenue(): string
	{
		return $this->contenue;
	}

	public function admin(): string
	{
		return $this->admin;
	}


	// Setters
	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant de l'astuce doit être superieur à 0";
		}

	}

	public function setTitre($titre)
	{
		if (isset($titre) && !empty($titre) ) {
			
			$titre = htmlspecialchars(trim($titre));

			if (strlen($titre) <= 255) {
				
				$this->titre = $titre;

			}else{
				$_SESSION['error'] = "Le titre est trop long";
			}

		}else{
			$_SESSION['error'] = "Le titre est obligatoire";
		}

	}


	public function setSecteur($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant du secteur doit être superieur à 0";
		}

	}

	public function setContenue($contenue)
	{
		if (isset($contenue) && !empty($contenue) ) {
			
			$contenue = htmlspecialchars(trim($contenue));

			$this->contenue = $contenue;

		}else{
			$_SESSION['error'] = "Contenue est obligatoire";
		}

	}

	
	public function setAdmin($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant de l'admin doit être superieur à 0";
		}

	}


}