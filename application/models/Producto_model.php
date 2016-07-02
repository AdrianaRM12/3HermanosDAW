<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
 //------------------------------------------Obtener producto----------------------------//
    public function getProducto($id = null){
        $this->db->select('*');
        $this->db->from('calzado');
        if($id != null){
            $this->db->where('id_Calzado', $id);
        }
        //get es método pre-establecido de la
        //variable db
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
 //------------------------------------------Agregar producto----------------------------//
    public function addCalzado($n, $p, $d, $c, $s, $m){
        
       $data = array(
        'id_Calzado' => 0,
        'Nombre' => $n,
        'Precio' => $p,
        'Descripcion' => $d,
		'id_Categoria' => $c,
		'Stock' => $s,
		'id_Marca' => $m
		
       );
        
       return $this->db->insert('calzado', $data);
    }
 //------------------------------------------Actualizar producto----------------------------//
    public function actProducto($id, $n, $p, $d, $c, $s, $m){
        //UPDATE Usuario SET 
       $data = array(
	
           'Nombre' => $n,
           'Precio' => $p,
           'Descripcion' => $d,
		   'id_Categoria' => $c,
		   'Stock' => $s,
		   'id_Marca' => $m
		 
       );
	 
       $this->db->where('id_Calzado',$id);
       return $this->db->update('calzado', $data);
	      
    }
 //------------------------------------------Eliminar producto----------------------------//
    public function delProducto($id){
        $this->db->where('id_Calzado', $id);
        $this->db->delete('calzado');
		
    }
    
 //------------------------------------------Login----------------------------// 
    public function login($user, $pass){
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('producto', $user);
        $this->db->where('password', $pass);
        
        $sql = $this->db->get();
        
        if($sql->num_rows()>0){
            return $sql->row();//Solo una fila, la primera
        }else{
            return null;
        }
    }
}//Fin class





















