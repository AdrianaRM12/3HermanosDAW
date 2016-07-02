<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta_model extends CI_Model{

    public function __construct() {
        parent::__construct();
    }
//------------------------------------------Obtener venta----------------------------//
    public function getVenta($id = null){
        $this->db->select('*');
        $this->db->from('venta');
        if($id != null){
            $this->db->where('id_Venta', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
//------------------------------------------Actualizar venta----------------------------//
	 public function actVenta($id, $total, $ven, $caj, $cal, $fecha, $client){
       
       $data = array(
           'Total' => $total,
           'id_Vendedor' => $ven,
           'id_Cajero' => $caj,
		   'id_Calzado' => $cal,
		   'Fecha' => $fecha,
		   'id_Cliente' => $client
       );
       $this->db->where('id_Venta',$id);
       return $this->db->update('venta', $data);
    }
//------------------------------------------Cerrar sesion----------------------------//
    public function delVenta($id){
        $this->db->where('id_Venta', $id);
        $this->db->delete('venta');
    }

	}