<?php

class Database{

	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $name = DB_NAME;

	private $dbh;
	private $error;
	private $stmt;

	// Setup DB connection, connection options and PDO instance
	public function __construct(){

		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;

		// Set options
		$options = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		// PDO Instance
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}catch(PDOException $e){
			$this->error = $e->getMessage();
		}
	}

	// Run query
	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	// Bind params
	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

	// Execute query
	public function execute(){
		return $this->stmt->execute();
	}

	// Fetch all rows
	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	// Fetch single row
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}