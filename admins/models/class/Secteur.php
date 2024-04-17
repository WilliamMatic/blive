<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Secteur
{

	private int $id;
	private string $icon;
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

	public function designation(): string
	{
		return $this->designation;
	}

	public function icon(): string
	{
		return $this->icon;
	}


	// Setters
	public function setId($id)
	{
		$id = (int) $id;

		if ($id > 0) {

			$this->id = $id;
			
		}else{
			$_SESSION['error'] = "L'identifiant du secteur doit être superieur à 0";
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

	public function setIcon($icon)
	{
		if (isset($icon) && !empty($icon) ) {
			
			$icon = htmlspecialchars(trim($icon));

			if (strlen($icon) <= 255) {
				
				$this->icon = $icon;

			}else{
				$_SESSION['error'] = "L'icon est trop long";
			}

		}else{
			$_SESSION['error'] = "L'icon est obligatoire";
		}

	}


}