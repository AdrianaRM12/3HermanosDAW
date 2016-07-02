<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener proveedor----------------------------//
    public function getProveedor($id = null){
        $this->db->select('*');
        $this->db->from('proveedor');
        if($id != null){
            $this->db->where('id_Proveedor', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar proveedor----------------------------//
    public function addProveedor($nom, $tel, $dir, $idM){
        
       $data = array(
         'id_Proveedor' => 0,
		 'Nombre' => $nom,
         'Telefono' => $tel,
         'Direccion' => $dir,
         'id_Marca' => $idM
       );
        
       return $this->db->insert('proveedor', $data);
    }
//------------------------------------------Actualizar proveedor----------------------------//
	 public function upProveedor($id, $nom, $tel, $dir, $idM){
       
       $data = array(
           'Nombre' => $nom,
           'Telefono' => $tel,
           'Direccion' => $dir,
		   'id_Marca' => $idM
		   
       );
       $this->db->where('id_Proveedor',$id);
       return $this->db->update('proveedor', $data);
    }
//------------------------------------------Borrar proveedor----------------------------//
    public function delProveedor($id){
        $this->db->where('id_Proveedor', $id);
        $this->db->delete('proveedor');
    }

	}