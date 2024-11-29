<?php

namespace model;

use PDO;
use PDOException;

class Database
{
	protected \PDOStatement $stmt;
	public PDO $conn;
	public function __construct(array $config ,string $db = "mysql",string $username = "root",string $password = "")
	{

		$dsn = $db . ":" . http_build_query($config, "", ";");
		$this->conn = new PDO($dsn, $username, $password,[
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]);
		// set the PDO error mode to exception
		$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}
	public function query(string $query,array $params = []): Database
	{
		$this->stmt = $this->conn->prepare($query);

		$this->stmt->execute($params);
		return $this;
	}
	public function get(): false|array
	{
		return $this->stmt->fetchAll();
	}

	public function find()
	{
		return $this->stmt->fetch();
	}
	public function findOrFail()
	{
		$result = $this->find();
		if (!$result){
			Router::abort();
			exit();
		}
		return $result;
	}
}