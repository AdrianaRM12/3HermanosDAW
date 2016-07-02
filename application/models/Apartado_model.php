<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartado_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener apartado----------------------------//
    public function getApartado($id = null){
        $this->db->select('*');
        $this->db->from('apartado');
        if($id != null){
            $this->db->where('id_Apartado', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar apartado----------------------------//
    public function addApartado($totalA, $idC){
        
       $data = array(
         'id_Apartado' => 0,
		 'Abono_total' => $totalA,
         'id_Cliente' => $idC
       
         
       );
        
       return $this->db->insert('apartado', $data);
    }
//------------------------------------------Actualizar apartado----------------------------//
	 public function upApartado($id, $totalA, $idC){
       
       $data = array(
           'Abono_total' => $totalA,
           'id_Cliente' => $idC
          
		   
		   
       );
       $this->db->where('id_Apartado',$id);
       return $this->db->update('apartado', $data);
    }
//------------------------------------------Borrar apartado----------------------------//
    public function delApartado($id){
        $this->db->where('id_Apartado', $id);
        $this->db->delete('apartado');
    }

	}