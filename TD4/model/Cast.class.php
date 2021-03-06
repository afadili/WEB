<?php
require_once 'MyPDO.imac.movies.include.php'; 

/**
 * Classe Cast
 */
class Cast {

	/***********************ATTRIBUTS***********************/
	
	// Identidiant
	private $id=null;
	// Prénom
	private $firstname=null;
	// Nom
	private $lastname=null;
	// Année de naissance
	private $birthYear=null;
	// Année de décès
	private $deathYear=null;

	/*********************CONSTRUCTEURS*********************/
	
	// Constructeur non accessible
	function __construct() {}

	/**
	 * Usine pour fabriquer une instance de Cast à partir d'un id (via la bdd)
	 * @param int $id identifiant du cast à créer (bdd)
	 * @return Cast instance correspondant à $id
	 * @throws Exception s'il n'existe pas cet $id dans a bdd
	 */
	public static function createFromId($id){
		
		 $stmt = MyPDO::getInstance()->prepare("SELECT * FROM Cast WHERE id=?");
		 $stmt->execute(array($id));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Cast");
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
		return $this->id;
	}

	/**
	 * Getter sur le prénom
	 * @return string $firstname
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * Getter sur le nom
	 * @return string $lastname
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * Getter sur l'année de naissance
	 * @return int $birthYear
	 */
	public function getBirthYear() {
		return $this->birthYear;
	}

	/**
	 * Getter sur l'année de décès
	 * @return int $deathYear (null si vivant)
	 */
	public function getDeathYear() {
		return $this->deathYear;
	}
	
	/**
	 * Vérifie si le cast est vivant.e
	 * @return bool
	 */
	public function isAlive() {
		return $this->deathYear == null;
	}

	/*******************GETTERS COMPLEXES*******************/

	/**
	 * Récupère tous les enregistrements de la table Cast de la bdd
	 * Tri par ordre alphabétique sur le nom puis sur le prénom
	 * @return array<Cast> liste d'instances de Cast
	 */
	public static function getAll() {
		 $stmt = MyPDO::getInstance()->prepare("SELECT * FROM Cast");
		 $stmt->execute();
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Cast");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("Id n'existe pas dans la bdd");
	}

	/**
	 * Récupère tou.te.s les réalisateurs/réalisatrices d'un film
	 * Tri par ordre alphabétique selon le nom puis le prénom
	 * @param  $idMovie identifiant du film
	 * @return array<Cast> liste des instances de Cast
	 */
	public static function getDirectorsFromMovieId($idMovie) {
		 $stmt = MyPDO::getInstance()->prepare("
		 	SELECT * 
		 	FROM Cast 
		 	JOIN Director ON Cast.id = idDirector 
		 	WHERE idMovie=?
		 ");
		 $stmt->execute(array($idMovie));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Cast");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("Id n'existe pas dans la bdd");
	}

	/**
	 * Récupère tou.te.s les réalisateurs/réalisatrices d'un film avec leur rôle
	 * Tri par ordre alphabétique selon le nom puis le prénom
	 * @param  $idMovie identifiant du film
	 * @return array<Cast> liste d'instances de Cast
	 */
	public static function getActorsFromMovieId($idMovie) {
		 $stmt = MyPDO::getInstance()->prepare("
		 	SELECT * 
		 	FROM Cast 
		 	JOIN Actor ON Cast.id = idActor
		 	WHERE idMovie=?
		 ");
		 $stmt->execute(array($idMovie));
		 $stmt->setFetchMode(PDO::FETCH_CLASS,"Cast");
		 if (($object = $stmt->fetchAll()) !== false)
			return $object;
		 else
			throw new Exception("Id n'existe pas dans la bdd");
	}

}
