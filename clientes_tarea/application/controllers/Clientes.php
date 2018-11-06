<?php
class Clientes extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("ClientesModel");
        $this->load->library('session');
    }

    public function agregar(){
        $this->load->view("encabezado");
        $this->load->view("clientes/agregar");
        $this->load->view("pie");
    }

    public function guardarCambios(){
        $resultado = $this->ClientesModel->guardarCambios(
            $this->input->post("id"),
            $this->input->post("nombre"),
            $this->input->post("apellido"),
            $this->input->post("telefono")
        );
        if($resultado){
            $mensaje = "Cliente actualizado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al actualizar el cliente";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("clientes/");
    }

    public function editar($id){
        $cliente = $this->ClientesModel->uno($id);
        if(null === $cliente){
            $this->session->set_flashdata(array(
                "mensaje" => "El cliente que quieres editar no existe",
                "clase" => "danger",
            ));
            redirect("clientes/");
        }
        $this->load->view("encabezado");
        $this->load->view("clientes/editar", array("cliente" => $cliente));
        $this->load->view("pie");
    }

    public function eliminar($id){
        $resultado = $this->ClientesModel->eliminar($id);
        if($resultado){
            $mensaje = "cliente eliminado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al eliminar el cliente";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("clientes/");
    }

    public function index(){
        
        $this->load->view("encabezado");
        $this->load->view("clientes/listar", array(
            "clientes" => $this->ClientesModel->todos()
        ));
        $this->load->view("pie");
    }

    public function guardar(){
        $resultado = $this->ClientesModel->nuevo(
            $this->input->post("id"),
            $this->input->post("nombre"),
            $this->input->post("apellido"),
            $this->input->post("telefono")
            );
        if($resultado){
            $mensaje = "cliente guardado correctamente";
            $clase = "success";
        }else{
            $mensaje = "Error al guardar el cliente";
            $clase = "danger";
        }
        $this->session->set_flashdata(array(
            "mensaje" => $mensaje,
            "clase" => $clase,
        ));
        redirect("clientes/");
        
    }
}
?>