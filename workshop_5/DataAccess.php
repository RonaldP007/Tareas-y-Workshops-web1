<?php 
class Conexion extends mysqli{
	private $db_host = 'localhost';
	private $db_user = 'admin';
	private $db_pass = '12345';
    private $db_name = 'prueba';
    
	public function __construct(){
		parent:: __construct($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
		$this->set_charset('utf-8');
		$this->connect_errno ? die('Error en la conexion'. mysqli_connect_errno()) : $m = 'Conectado ;D';
		//echo $m;
	}
}
?>