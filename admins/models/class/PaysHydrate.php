<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class PaysHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Pays $pays){

		$req = $this->db->prepare("
			SELECT * FROM tb_pays WHERE designation = ?
		");
		$req->execute([ $pays->designation() ] );

		if ($req->rowCount() > 0) {
				
			$_SESSION['error'] = "La designation du pays existe déjà";

		}else{
			try {
				
				$req = $this->db->prepare("
					INSERT INTO tb_pays (designation, status) VALUES (?,?)
				");
				$dateadded = date('Y-m-d');
				$req->execute([ $pays->designation(), 1 ] );
						
				$_SESSION['success'] = "Un pays vient d'être ajouter";
				
			} catch (Exception $e) {
				$_SESSION['error'] = "Insertion échouée";
			}
		}

	}

	public function getList()
	{
		$grades = array();
		$q = $this->db->query('
				SELECT tb_pays.*, COUNT(tb_ville.id) AS nbrvilles 
				FROM tb_pays LEFT JOIN tb_ville ON tb_ville.pays = tb_pays.id
				GROUP BY tb_pays.id
				ORDER BY tb_pays.designation
			');
		return $q;
	}
			
	public function delete(Pays $pays)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_pays WHERE id = ?');
			$request->execute([$pays->id()]);

			if ($request->rowCount() < 1) {
				$_SESSION['error'] = "Ce pays n'existe pas";
			}else{
				$request = $this->db->prepare('DELETE FROM tb_pays WHERE id = ?');
				$request->execute([ $pays->id() ]);
						
				$_SESSION['success'] = "pays supprimé";
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