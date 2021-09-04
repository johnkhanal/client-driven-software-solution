<?php 
	class modelZoo{
		public $pdo; 
		public $table;
		
		function __construct($pdo, $table){
			$this->pdo = $pdo;
			$this->table = $table;
		}
		
		function insert($data) {
		    $key = array_keys($data);
		    $values = implode(', ', $key);
		    $valuesWithColon = implode(', :', $key);
		    $query = 'INSERT INTO '.$this->table.' ('.$values.') VALUES (:'.$valuesWithColon.')';
		    $stmt = $this->pdo->prepare($query);
		    $stmt->execute($data);
		}
		
		function update($data, $primaryKey){
		    $query = 'UPDATE '.$this->table.' SET ';
		    $parameters = [];
		    foreach ($data as $key => $value) {
		         $parameters[] = $key . ' = :'. $key;
		    }
		    $query .= implode(', ', $parameters);
		    $query .= ' WHERE ' .$primaryKey. ' = :primaryKey';
		    $data['primaryKey'] = $data[$primaryKey];
		    $stmt = $this->pdo->prepare($query);
		    $stmt->execute($data);
		}

		function save($data, $primaryKey=''){
		    try {
		        $this->insert($data);
		    }
		    catch (Exception $e) {
		        $this->update($data, $primaryKey);
		    }
		}

		function find($field, $value) {
	        $stmt = $this->pdo->prepare('SELECT * FROM '.$this->table.' WHERE '.$field.' = :value');
	        $criteria = [
	                'value' => $value
	        ];
	        $stmt->execute($criteria);
	        return $stmt;
		}

		function findAll() {
	        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table );
	        $stmt->execute();
	        return $stmt;
		}

		function findAllDesc($field) {
	        $stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table. ' ORDER BY '. $field. ' DESC ');
	        $stmt->execute();
	        return $stmt;
		}

		function delete($field, $value){
		    $stmt = $this->pdo->prepare('DELETE FROM '.$this->table.' WHERE '.$field.' = :value');
		    $criteria = [
		        	'value' => $value
		   		];
		    $stmt->execute($criteria);
		    return $stmt;
		}
	}
?>