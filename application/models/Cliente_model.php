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
		$this->db->order_by('Nombre','asc');
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
//------------------------------------------Reportes ----------------------------// 

	public function generarXML(){
			$this->load->dbutil();
			
			$consulta = $this->db->get('cliente');
			
			$config = array (
				'root' => 'Cliente',
				'element' => 'cliente',
				'newline' => "\n",
				'tab'  => "\t"
			);
			
			$xml = $this->dbutil->xml_from_result($consulta, $config);
			return $xml;
			
			
		}
		
	public function generarEXCEL(){
		$fields = $this->db->field_data('cliente');
		$this->db->order_by('Nombre','asc');
		$query =$this->db->get('cliente');	
		return array("fields" => $fields, "query" => $query);
	}	

	
//------------------------------------------Borrar cliente----------------------------//
    public function delCliente($id){
        $this->db->where('id_Cliente', $id);
        $this->db->delete('cliente');
    }

	}