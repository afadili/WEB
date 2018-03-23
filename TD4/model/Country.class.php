<?php
require_once 'MyPDO.imac.movies.include.php'; 

/**
 * Classe Country
 */
class Country {

	/***********************ATTRIBUTS***********************/
	
	// Identifiant
	private $code = null;
	// Nom
	private $name = null;
	/*********************CONSTRUCTEURS*********************/
	
	// Constructeur non accessible
	function __construct() {}

	/**
	 * Usine pour fabriquer une instance de Country à partir d'un id (via la bdd)
	 * @param int $id identifiant du country à créer (bdd)
	 * @return Country instance correspondant à $id
	 * @throws Exception s'il n'existe pas cet $id dans a bdd
	 */
	public static function createFromId($id){

		 $stmt = MyPDO::getInstance()->prepare("SELECT * FROM Country WHERE code=?");
		 $stmt->execute(array($id));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Country");
		 if (($object = $stmt->fetch()) !== false)
			return $object;
		 else
			throw new Exception("Id n'existe pas dans la bdd");
	}

	/********************GETTERS SIMPLES********************/
	
	/**
	 * Getter sur l'identifiant
	 * @return int $id
	 */
	public function getId() {
		return $this->code;
	}

	/**
	 * Getter sur le nom
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}
}