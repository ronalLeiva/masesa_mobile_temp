<?php
class Conexion{

	private 	$host;
    private     $baseDeDatos = '';
    private 	$usuario     = '';
    private 	$password    = '';
	private 	$db;

	function __construct(){
        $this->host 	= "mysql:host=localhost; dbname=$this->baseDeDatos;charset=utf8";
	}
	public function conecta(){
		try {
			// Conexión a Mysql
            $this->db = new PDO($this->host,$this->usuario,$this->password);
            $this->db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

            return $this->db;

	    } catch (PDOException $e) {
	        print "<p>Error: No puede conectarse con la base de datos.</p>\n";
	        exit();
	    }
	}

}