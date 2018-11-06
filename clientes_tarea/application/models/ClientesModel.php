<?php
    class ClientesModel extends CI_Model{
        public $id;
        public $nombre;
        public $apellido;
        public $telefono;

        public function __construct(){
            $this->load->database();
        }

        public function nuevo($id, $nombre, $apellido, $telefono){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->telefono = $telefono;
            return $this->db->insert('cliente', $this);
        }

        public function guardarCambios($id, $nombre, $apellido, $telefono){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->telefono = $telefono;
            return $this->db->update('cliente', $this, array("id" => $id));
        }

        public function todos(){
            return $this->db->get("cliente")->result();
        }

        public function eliminar($id){
            return $this->db->delete("cliente", array("id" => $id));
        }

        public function uno($id){
            return $this->db->get_where("cliente", array("id" => $id))->row();
        }

    }
?>