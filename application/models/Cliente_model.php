<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener cliente----------------------------//
    public function getCliente($id = null){
        $this->db->select('*');
        $this->db->from('cliente');
        if($id != null){
            $this->db->where('id_Cliente', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar cliente----------------------------//
    public function addCliente($nom, $tel, $dir){
        
       $data = array(
         'id_Cliente' => 0,
		 'Nombre' => $nom,
         'Telefono' => $tel,
         'Direccion' => $dir
         
       );
        
       return $this->db->insert('cliente', $data);
    }
//------------------------------------------Actualizar cliente----------------------------//
	 public function upCliente($id, $nom, $tel, $dir){
       
       $data = array(
           'Nombre' => $nom,
           'Telefono' => $tel,
           'Direccion' => $dir
		   
		   
       );
       $this->db->where('id_Cliente',$id);
       return $this->db->update('cliente', $data);
    }
//------------------------------------------Borrar cliente----------------------------//
    public function delCliente($id){
        $this->db->where('id_Cliente', $id);
        $this->db->delete('cliente');
    }

	}