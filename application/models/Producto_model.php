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
		$this->db->order_by('nombre','asc');
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

	
//------------------------------------------Paginacion del calzado----------------------------//
 

	public function pag($pag, $segmento){
		
			$sql=$this->db->get('calzado', $pag,$segmento);
			if($sql->num_rows()>0){
				foreach ($sql->result() as $f){
					$data[] = $f;
		}
		return $data;
		
		}
	
	}	
	
	public function filas(){
	
		$sql = $this->db->get('calzado');
		return $sql->num_rows();
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
		echo
		'<script>
			alert "Eliminado";
		</script>';
		
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
	
	
 
//------------------------------------------Reportes ----------------------------// 

	public function reporteProd(){
			$this->load->dbutil();
			
			$consulta = $this->db->get('calzado');
			
			$config = array (//el nombre que se utilice aqui tambien ira en el xml --->
				'root' => 'Calzado',
				'element' => 'calzado',
				'newline' => "\n",
				'tab'  => "\t"
			);
			
			$xml = $this->dbutil->xml_from_result($consulta, $config);//<----
			return $xml;
			
			
		}
		
	public function generarEXCEL(){
		$fields = $this->db->field_data('calzado');
		$query =$this->db->get('calzado');	
		return array("fields" => $fields, "query" => $query);
	}
	
}//Fin class





















