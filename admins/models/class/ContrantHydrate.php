<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class ContrantHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Contrant $contrant){

		$req = $this->db->prepare("
			SELECT * FROM tb_contrant WHERE designation = ?
		");
		$req->execute([ $contrant->designation() ] );

		if ($req->rowCount() > 0) {
				
			$_SESSION['error'] = "La designation du contrant existe déjà";

		}else{
			try {
				
				$req = $this->db->prepare("
					INSERT INTO tb_contrant (designation, status) VALUES (?,?)
				");
				$dateadded = date('Y-m-d');
				$req->execute([ $contrant->designation(), 1 ] );
						
				$_SESSION['success'] = "Un contrant vient d'être ajouter";
				
			} catch (Exception $e) {
				$_SESSION['error'] = "Insertion échouée";
			}
		}

	}

	public function getList()
	{
		$grades = array();
		$q = $this->db->query('SELECT * FROM tb_contrant ORDER BY designation');
		return $q;
	}
			
	public function delete(Contrant $contrant)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_contrant WHERE id = ?');
			$request->execute([$contrant->id()]);

			if ($request->rowCount() < 1) {
				$_SESSION['error'] = "Ce contrant n'existe pas";
			}else{
				$request = $this->db->prepare('DELETE FROM tb_contrant WHERE id = ?');
				$request->execute([ $contrant->id() ]);
						
				$_SESSION['success'] = "Contrant supprimé";
			}

		} catch (Exception $e) {
			$_SESSION['error'] = "Suppression échouée";
		}

	}

	public function setDb(PDO $db)
	{
		$this->db = $db;
	}


}