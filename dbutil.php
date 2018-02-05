<?php
	class DB {
		private $pdo = null;

		function connect( $dsn, $username, $password) {
			if($this->pdo==null) {
				$this->pdo = new PDO( $dsn, $username, $password);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		}

		function  close() {
			$this->pdo = null;
		}

		function select($query ,$bindParams, $className) {
			$stmt = $this->pdo->prepare($query);
			$stmt->execute($bindParams);
			$result = $stmt->fetchAll(PDO::FETCH_CLASS,$className);
			return $result;
		}

		function insert($query ,$bindParams) {
			$stmt = $this->pdo->prepare($query);
			return $stmt->execute($bindParams);
		}

	} 
?>