<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener usuario----------------------------//
    public function getUsuario($id = null){
        $this->db->select('*');
        $this->db->from('usuario');
        if($id != null){
            $this->db->where('idUsuario', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Agregar usuario----------------------------//
    public function addUsuario($u, $p, $e){
        
       $data = array(
         'idUsuario' => 0,
           'username' => $u,
           'password' => $p,
           'email' => $e
       );
        
       return $this->db->insert('Usuario', $data);
    }
 //------------------------------------------Actualizar usuario----------------------------//
    public function upUsuario($i,$u, $p, $e){
       
       $data = array(
           'username' => $u,
           'password' => $p,
           'email' => $e
       );
       $this->db->where('idUsuario',$i);
       return $this->db->update('Usuario', $data);
    }
 //------------------------------------------Eliminar usuario----------------------------//
    public function delUsuario($id){
        $this->db->where('idUsuario', $id);
        $this->db->delete('Usuario');
    }
 //------------------------------------------Privilegios----------------------------//
    public function cambiarStatus($id, $status){
       $data = array(
            'uStatus' => $status
            );
        $this->db->where('idUsuario', $id);
        $this->db->update('Usuario', $data);
    }
 //------------------------------------------Login----------------------------//
    public function login($user, $pass){
        $this->db->select('*');
        $this->db->from('Usuario');
        $this->db->where('username', $user);
        $this->db->where('password', $pass);
        
        $sql = $this->db->get();
        
        if($sql->num_rows()>0){
            return $sql->row();
        }else{
            return null;
        }
    }
}//Fin class





















