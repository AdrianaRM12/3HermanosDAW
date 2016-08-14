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
		$this->db->order_by('fecha','asc');
        if($id != null){
            $this->db->where('id_Venta', $id);
        }
       
        $sql = $this->db->get();
        
        if($sql->num_rows() > 0){
            return $sql->result();
        }
    }
	
	
//------------------------------------------Agregar venta----------------------------//
    public function agrVenta($total, $idV, $idCaj, $idC, $fech, $idCl){
        
       $data = array(
        'id_Venta' => 0,
        'Total' => $total,
        'id_Vendedor' => $idV,
		'id_Cajero' => $idCaj, 
        'id_Cajero' => $idC,
		'Fecha' => $fech,
		'id_Cliente' => $idCl
       );
        
       return $this->db->insert('venta', $data);
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
	
	
//------------------------------------------Reportes ----------------------------// 

	public function generarXML(){
			$this->load->dbutil();
			
			$consulta = $this->db->get('venta');
			
			$config = array (
				'root' => 'Venta',
				'element' => 'venta',
				'newline' => "\n",
				'tab'  => "\t"
			);
			
			$xml = $this->dbutil->xml_from_result($consulta, $config);//<----
			return $xml;
			
			
		}
		
	public function generarEXCEL(){
		$fields = $this->db->field_data('venta');
		$this->db->order_by('fecha','asc');
		$query =$this->db->get('venta');	
		return array("fields" => $fields, "query" => $query);
	}	

//------------------------------------------Eliminar venta admin----------------------------//
    public function delVenta($id){
        $this->db->where('id_Venta', $id);
        $this->db->delete('venta');
    }
	


	}// FIN DE LA CLASE