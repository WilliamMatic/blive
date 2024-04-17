<?php 

declare(strict_types=1);

/**
 * Includes all contract
 */
class SecteurHydrate
{

	private $db; // Instance de PDO
	public function __construct($db)
	{
		$this->setDb($db);
	}

	public function add(Secteur $secteur){

		$req = $this->db->prepare("
			SELECT * FROM tb_secteur WHERE designation = ?
		");
		$req->execute([ $secteur->designation() ] );

		if ($req->rowCount() > 0) {
				
			$_SESSION['error'] = "La designation du secteur existe déjà";

		}else{
			try {
				
				$req = $this->db->prepare("
					INSERT INTO tb_secteur (designation, icon, status) VALUES (?,?,?)
				");
				$dateadded = date('Y-m-d');
				$req->execute([ $secteur->designation(), $secteur->icon(), 1 ] );
						
				$_SESSION['success'] = "Un secteur vient d'être ajouter";
				
			} catch (Exception $e) {
				$_SESSION['error'] = "Insertion échouée";
			}
		}

	}

	public function getList()
	{
		$q = $this->db->query('SELECT * FROM tb_secteur ORDER BY designation');
		return $q;
	}

	public function getSecteur(Secteur $secteur)
	{
		$q = $this->db->prepare('SELECT * FROM tb_secteur WHERE id = ? AND status = 1');
		$q->execute([$secteur->id()]);
		return $q;
	}
			
	public function delete(Secteur $secteur)
	{
		try {
			
			$request = $this->db->prepare('SELECT * FROM tb_secteur WHERE id = ?');
			$request->execute([$secteur->id()]);

			if ($request->rowCount() < 1) {
				$_SESSION['error'] = "Ce secteur n'existe pas";
			}else{
				$request = $this->db->prepare('DELETE FROM tb_secteur WHERE id = ?');
				$request->execute([ $secteur->id() ]);
						
				$_SESSION['success'] = "Secteur supprimé";
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