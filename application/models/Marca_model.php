<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener marca----------------------------//
    public function getMarca($id = null){
        $this->db->select('*');
        $this->db->from('marca');
        if($id != null){
            $this->db->where('id_Marca', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar marca----------------------------//
    public function addMarca($nom){
        
       $data = array(
        'id_Marca' => 0,
        'Nombre' => $nom
        
		
       );
        
       return $this->db->insert('marca', $data);
    }
	
 //------------------------------------------Actualizar marac----------------------------//
    public function upMarca($id, $nom){
        
       $data = array(
	
           'Nombre' => $nom
          
		 
       );
	 
       $this->db->where('id_Marca',$id);
       return $this->db->update('marca', $data);
	      
    }
	
//------------------------------------------Eliminar marca----------------------------//
    public function delMarca($id){
        $this->db->where('id_Marca', $id);
        $this->db->delete('marca');
		
    }
    
	
	
	
	}