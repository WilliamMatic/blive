<?php 

declare(strict_types=1);

/**
 * Includes all exam groups
 */
class Database
{

	public $db;

	public function getConnection()
	{
		return $this->db;
	}


	// Setters
	public function setDb()
	{

		$db = new PDO('mysql:host=localhost;dbname=mwindaholding;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$this->db = $db;
	}

}