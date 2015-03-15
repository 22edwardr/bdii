<?php
class bd{
	public $con;
	public $database;
	public $result;
	public function conectar(){
		$this->con = mysql_connect('localhost','root','');
		if (!$this->con){
			die('ERROR DE CONEXION CON MYSQL: ' . mysql_error());
		}
		$this->database = mysql_select_db('bdii',$this->con);
		if (!$this->database){
			die('ERROR CONEXION CON BD: '.mysql_error());
		}
		
		return $this->con;
	}

	public function comandosql($string){
		$result=mysql_query($string,$this->conectar());
		if (!$result){
			die('ERROR CONEXION CON BD: '.mysql_error());
		}
		return $result;
	}
	public function desconectar(){
		mysql_close($this->con);
	}
}
?>