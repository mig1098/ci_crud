<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author mig1098@hotmail.com
 * @copyright 2019
 */
class Producto_model extends CI_Model {

    public function listar(){
        $query = $this->db->get('producto');
        
        return $query->result_array();
    }
    
    public function buscar($id){
        $this->db->where('id',$id);
        $query = $this->db->get('producto');
        $row = $query->row_array();
        if(isset($row)){
            return $row;
        }
        return false;
    }
    
    public function actualizar($id,$array){
        $this->db->where('id',$id);
        return $this->db->update('producto',$array);
    }
    
    public function insertar($array){
        return $this->db->insert('producto',$array);
    }
    
    public function eliminar($id){
        $this->db->where('id',$id);
        return $this->db->delete('producto');
    }
    
    
}
