<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Ville
{

	private int $id;
	private int $pays;
	private string $designation;
	
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

	public function pays(): int
	{
		return $this->pays;
	}

	public function designation(): string
	{
		return $this->designation;
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

	public function setPays($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->pays = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant du pays doit être superieur à 0";
		}

	}

	public function setDesignation($designation)
	{
		if (isset($designation) && !empty($designation) ) {
			
			$designation = htmlspecialchars(trim($designation));

			if (strlen($designation) <= 255) {
				
				$this->designation = $designation;

			}else{
				$_SESSION['error'] = "La designation est trop long";
			}

		}else{
			$_SESSION['error'] = "La designation est obligatoire";
		}

	}


}