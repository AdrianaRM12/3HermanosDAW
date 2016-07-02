<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener vendedor----------------------------//
    public function getVendedor($id = null){
        $this->db->select('*');
        $this->db->from('vendedor');
        if($id != null){
            $this->db->where('id_Vendedor', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar vendedor----------------------------//
    public function addVendedor($nom){
        
       $data = array(
        'id_Vendedor' => 0,
        'Nombre' => $nom
        
		
       );
        
       return $this->db->insert('vendedor', $data);
    }
	
 //------------------------------------------Actualizar vendedor----------------------------//
    public function upVendedor($id, $nom){
        
       $data = array(
	
           'Nombre' => $nom
          
		 
       );
	 
       $this->db->where('id_Vendedor',$id);
       return $this->db->update('vendedor', $data);
	      
    }
	
//------------------------------------------Eliminar vendedor----------------------------//
    public function delVendedor($id){
        $this->db->where('id_Vendedor', $id);
        $this->db->delete('vendedor');
		
    }
    
	
	
	
	}