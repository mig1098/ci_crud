<?php
/**
 * @author mig1098@hotmail.com
 * @copyright 2019
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        $this->load->model('producto_model');   
    }
    
    public function index()
    {
        $data = array();      
        $data['lista'] = $this->producto_model->listar();
    	$this->load->view('producto_lista',$data);
    }
    
    public function nuevo(){
        $data = array();
        $this->load->view('producto_nuevo',$data);
    }
    
    public function editar($id){
        $data = array();   
        $data['producto'] = $this->producto_model->buscar($id);
        $this->load->view('producto_editar',$data);
    }
    
    public function insertar(){
        $nombre = $this->input->post('nombre');
        $codigo = $this->input->post('codigo');
        $precio = $this->input->post('precio');
        $cantidad = $this->input->post('cantidad');
        $array = array('nombre'=>$nombre,'codigo'=>$codigo,'precio'=>$precio,'cantidad'=>$cantidad);
        $this->producto_model->insertar($array);
        redirect(base_url());
    }
    
    public function actualizar(){
        $nombre = $this->input->post('nombre');
        $codigo = $this->input->post('codigo');
        $precio = $this->input->post('precio');
        $cantidad = $this->input->post('cantidad');
        $id = $this->input->post('id');
        $array = array('nombre'=>$nombre,'codigo'=>$codigo,'precio'=>$precio,'cantidad'=>$cantidad);
        $this->producto_model->actualizar($id,$array);
        redirect(base_url());
    }
    
    public function eliminar($id){
        $this->producto_model->eliminar($id);
        redirect(base_url());
    }
}
