<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cajero_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener cajero----------------------------//
    public function getCajero($id = null){
        $this->db->select('*');
        $this->db->from('cajero');
        if($id != null){
            $this->db->where('id_Cajero', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar cajero----------------------------//
    public function addCajero($nom){
        
       $data = array(
        'id_Cajero' => 0,
        'Nombre' => $nom
        
		
       );
        
       return $this->db->insert('cajero', $data);
    }
	
 //------------------------------------------Actualizar cajero----------------------------//
    public function upCajero($id, $nom){
        
       $data = array(
	
           'Nombre' => $nom
          
		 
       );
	 
       $this->db->where('id_Cajero',$id);
       return $this->db->update('cajero', $data);
	      
    }
	
//------------------------------------------Eliminar producto----------------------------//
    public function delCajero($id){
        $this->db->where('id_Cajero', $id);
        $this->db->delete('cajero');
		
    }
    
	
	
	
	}