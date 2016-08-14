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
//------------------------------------------Agregar apartado ADMIN----------------------------//
    public function addApartado($totalA, $totalAp, $idC, $fech){
        
       $data = array(
         'id_Apartado' => 0,
		 'Abono_total' => $totalA,
		 'Total_AP' => $totalAp,
         'id_Cliente' => $idC,
		 'Fecha' => $fech
       
         
       );
        
		
	   
       return $this->db->insert('apartado', $data); 
	      
	  
	   
	   
	   
    }
//------------------------------------------Agregar apartado CAJERO----------------------------//
    public function addApartadoC($abono, $total, $idC){
        
       $data = array(
         'id_Apartado' => 0,
		 'Abono_total' => $abono,
		 'Total_AP' => $total,
         'id_Cliente' => $idC
       
         
       );
         
       return $this->db->insert('apartado', $data); 
	   
	   
    }
//------------------------------------------Actualizar apartado----------------------------//
	 public function upApartado($id, $totalA, $totalAP, $idC){
       
       $data = array(
           'Abono_total' => $totalA,
		   'Total_AP' => $totalAP,
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
	
	
//------------------------------------------Estado del apartado----------------------------//
    public function cambiarStatus($id, $status){
       $data = array(
            'aStatus' => $status
            );
        $this->db->where('id_Apartado', $id);
        $this->db->update('Apartado', $data);
    }
	
//------------------------------------------Reportes ----------------------------// 

	public function generarXML(){
			$this->load->dbutil();
			
			$consulta = $this->db->get('apartado');
			
			$config = array (
				'root' => 'Apartado',
				'element' => 'apartado',
				'newline' => "\n",
				'tab'  => "\t"
			);
			
			$xml = $this->dbutil->xml_from_result($consulta, $config);
			return $xml;
			
			
		}
		
	public function generarEXCEL(){
		$fields = $this->db->field_data('apartado');
		$this->db->order_by('fecha','asc');
		$query =$this->db->get('apartado');	
		return array("fields" => $fields, "query" => $query);
	}	


	}