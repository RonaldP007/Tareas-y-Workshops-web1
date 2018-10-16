<?php
include "DataAccess.php";

class Student{

    public $id ;
    public $first_name;
    public $last_name;
    public $email_address;

    public function __construct($id, $first_name, $last_name, $email_address){
        $this->id = $id;
        $this->first = $first_name;
        $this->last = $last_name;
        $this->email = $email_address;
    }

    public function insert(){
		$db = new Conexion();
		$sql = "INSERT INTO estudiante (id, nombre, apellido, correo) VALUES ('$this->id', '$this->first', '$this->last', '$this->email')";
        $db->query($sql);
        $db->close();
    }

    public function update(){
		$db = new Conexion();
		$sql = "UPDATE estudiante SET nombre ='$this->first', apellido ='$this->last', correo = '$this->email' WHERE id = $this->id";
		$db->query($sql);
		$db->close();
    }
    
    public function delete(){
		$db = new Conexion();
		$sql = "DELETE FROM estudiante WHERE id = $this->id";
		$db->query($sql);
		$db->close();
	}

}




?>