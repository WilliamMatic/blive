<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class VilleHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Ville $ville,){

		$req = $this->db->prepare("
			SELECT * FROM tb_ville WHERE designation = ? AND pays = ?
		");
		$req->execute([ $ville->designation(), $ville->pays() ] );

		if ($req->rowCount() > 0) {
				
			$_SESSION['error'] = "La designation du ville existe déjà";

		}else{
			try {
				
				$req = $this->db->prepare("
					INSERT INTO tb_ville (designation, pays, status) VALUES (?,?,?)
				");
				$dateadded = date('Y-m-d');
				$req->execute([ $ville->designation(), $ville->pays(), 1 ] );
						
				$_SESSION['success'] = "Une ville vient d'être ajouter";
				
			} catch (Exception $e) {
				$_SESSION['error'] = "Insertion échouée";
			}
		}

	}

	public function getPays(Ville $ville)
	{
		$q = $this->db->prepare('
				SELECT * FROM tb_pays WHERE id = ?
			');
		$q->execute([ $ville->pays() ]);
		return $q;
	}

	public function getList(Ville $ville)
	{
		$grades = array();
		$q = $this->db->prepare('
				SELECT * FROM tb_ville WHERE pays = ?
				ORDER BY designation
			');
		$q->execute([ $ville->pays() ]);
		return $q;
	}
			
	public function delete(ville $ville)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_ville WHERE id = ? AND pays = ?');
			$request->execute([ $ville->id(), $ville->pays() ]);

			if ($request->rowCount() < 1) {
				$_SESSION['error'] = "Cette ville n'existe pas";
			}else{
				$request = $this->db->prepare('DELETE FROM tb_ville WHERE id = ? AND pays = ?');
				$request->execute([ $ville->id(), $ville->pays() ]);
						
				$_SESSION['success'] = "ville supprimée";
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