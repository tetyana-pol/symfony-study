<?php

class Database
{
	public $isConn; protected $datab; public $pdo;
	
	function __construct($username='usercompany', $password='usercompany',$host='localhost', 
																			$dbname='php_1_04_company')
	{$this->isConn=True;
	try{
		$this->pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
			
		}  catch (PDOException $e){
			throw new Exception($e->getMessage());
		}            
	}

	public function __destruct() {
		$this->pdo=Null; $this->isConn=False;
	} 
	
	public function select($what,$from,$where = null,$order = null)
	{    try{   
		$sql = 'SELECT '.$what.' FROM '.$from;
		if($where != null) $sql .= ' WHERE '.$where;
		if($order != null) $sql .= ' ORDER BY '.$order;
		$stmt=$this->pdo->query($sql);
		if ($stmt->rowCount()>1) {return $stmt->fetchAll();} else {return $stmt->fetch();}}
		catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function selectRow($what,$from,$where = null,$order = null)
	{    try{   
		$sql = 'SELECT '.$what.' FROM '.$from;
		if($where != null) $sql .= ' WHERE '.$where;
		if($order != null) $sql .= ' ORDER BY '.$order;
		$stmt=$this->pdo->query($sql);
		return $stmt->fetch();}
		catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	 public function insert($table,$dat) {
        if( $dat !== null )
        $data = array_values( $dat );
        //grab keys
        $cols=array_keys($dat);
        $col=implode(', ', $cols);
        //grab values and change it value
        $mark=array();
        foreach ($data as $key) {
          $keys='?';
          $mark[]=$keys;
        }
        $im=implode(', ', $mark);
		try{
        $ins = $this->pdo->prepare("INSERT INTO $table ($col) values ($im)");
        $ins->execute($data);
    		return $this->pdo->lastInsertId();
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function delete($table,$where = null)
	{
		$sql = 'DELETE FROM '.$table.' WHERE '.$where;
		if($where == null)
	{
		$sql = 'DELETE '.$table;
	}
		try{
			$stmt=$this->pdo->prepare($sql);
			$stmt->execute();
			return $this->stmt;
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function update($table, $dat, $where) 
	{ 
		$update = 'UPDATE '.$table.' SET ';
		$numValues = count($dat);
		foreach ($dat as $key=>$value) 
		{ 
			$up[]=$key.'="'.$value.'"';
		} 
		for ($i=0; $i<count($up); $i++){
		$rows = implode(',',$up);} 
		$update .=$rows.' WHERE '.$where;
		try{
			$stmt=$this->pdo->prepare($update);
			$stmt->execute();
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function getRow($query, $param=[]){
		try{
			$stmt=$this->pdo->prepare($query);
			$stmt->execute($param);
			return $stmt->fetch();
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function getRows($query, $param=[]){
		try{
			$stmt=$this->pdo->prepare($query);
			$stmt->execute($param);
			return $stmt->fetchAll();
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function insertRow($query, $param=[]){
		try{
			$stmt=$this->pdo->prepare($query);
			$stmt->execute($param);
			return $this->pdo->lastInsertId();
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function deleteRow($query, $param=[]){
		try{
			$stmt=$this->pdo->prepare($query);
			$stmt->execute($param);
			return $this->stmt;
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
	public function updateRow($query, $param=[]){
		try{
			$stmt=$this->pdo->prepare($query);
			$stmt->execute($param);
			return $this->stmt;
		} catch(PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
}
?>