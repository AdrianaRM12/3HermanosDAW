<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener Categoria----------------------------//
    public function getCategoria($id = null){
        $this->db->select('*');
        $this->db->from('categoria');
        if($id != null){
            $this->db->where('id_Categoria', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar categoria----------------------------//
    public function addCategoria($nom, $desc){
        
       $data = array(
         'id_Categoria' => 0,
		 'Nombre' => $nom,
         'Descripcion' => $desc
         
       );
        
       return $this->db->insert('categoria', $data);
    }
//------------------------------------------Actualizar categoria----------------------------//
	 public function upCategoria($id, $nom, $desc){
       
       $data = array(
           'Nombre' => $nom,
           'Descripcion' => $desc
         	   
		   
       );
       $this->db->where('id_Categoria',$id);
       return $this->db->update('categoria', $data);
    }
//------------------------------------------Borrar categoria----------------------------//
    public function delCategoria($id){
        $this->db->where('id_Categoria', $id);
        $this->db->delete('categoria');
    }

	}