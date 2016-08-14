
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Producto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('form');
    }
	


//------------------------------------------Obtener productos----------------------------//
    public function getProducto($id = null){
        $data['producto'] = $this->Producto_model->getProducto($id);
      
	
		$this->load->helper('url');
		$this->benchmark->mark('inicio');
		$pages=3; //registros a mostrar por página 
		$this->load->library('pagination');
		$config['base_url']=base_url() . 'index.php/producto/getProducto';
		$config['total_rows']= $this->Producto_model->filas();
		$config['per_page']= $pages;
		$config['num_links']=3;
		//$config['first_link']='Primero';
		$this->pagination->initialize($config);
		
		
		$data['producto']=$this->Producto_model->pag($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('admin/producto/producto', $data);
		$this->benchmark->mark('fin');
		
		
    }
	
	
    
//------------------------------------------Agregar producto----------------------------//
    public function agrCalzado(){
        $this->load->view('admin/producto/agrCalzado');
    }
    

    public function addCalzado(){
	
	$this->form_validation->set_rules('nombre','Nombre','trim|required|is_unique[calzado.Nombre]');
	$this->form_validation->set_rules('precio','Precio','trim|required|numeric');
	$this->form_validation->set_rules('categoria','Categoria','trim|required|numeric');
	$this->form_validation->set_rules('stock','Stock','trim|required|numeric');
	$this->form_validation->set_rules('marca','Marca','trim|required|numeric');
	
	
	
		if($this->form_validation->run() === false){
			$this->load->view('admin/Producto/agrCalzado');
		
		}else{
        $n = $this->input->post('nombre');
        $p = $this->input->post('precio');
        $d = $this->input->post('descripcion');
		$c = $this->input->post('categoria');
		$s = $this->input->post('stock');
		$m = $this->input->post('marca');
		
        
        $this->Producto_model->addCalzado($n, $p, $d, $c, $s, $m);
        
        //$this->getProducto();
        redirect('producto/getProducto');
        
		}
	}
 //------------------------------------------Actualizar producto----------------------------//
  public function UpProducto($id=null){
        
        $data['producto']= $this->Producto_model->getProducto($id);
        
        $this->load->view('admin/producto/UpProducto', $data);
        
    }
 
 
    public function actProducto(){
	
	$this->form_validation->set_rules('nombre','Nombre','trim|required');
	$this->form_validation->set_rules('precio','Precio','trim|required|numeric');
	$id = $this->input->post('id');

	
		if($this->form_validation->run() === false){
		
			$data['producto']= $this->Producto_model->getProducto($id);
			$this->load->view('admin/Producto/UpProducto', $data);
		
		}else{
		
		$id = $this->input->post('id');
        $n = $this->input->post('nombre');
        $p = $this->input->post('precio');
        $d = $this->input->post('descripcion');
		$c = $this->input->post('id_Categoria');
		$s = $this->input->post('Stock');
		$m = $this->input->post('id_Marca');
        
        $this->Producto_model->actProducto($id, $n, $p, $d, $c, $s, $m);
        
       redirect('producto/getProducto');
	  
        
		}
    }
   
    
//------------------------------------------Eliminar producto----------------------------//
    public function delProducto($id){
        $this->Producto_model->delProducto($id);
        
        redirect('producto/getproducto');
		
    }
    
 //------------------------------------------Login----------------------------//
    
    public function login(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $usuario = $this->Usuario_model->login($user, $pass);
        
        if($usuario){
            $user_array = array(
                    'idUsuario' => $usuario->idUsuario,
                    'username' => $usuario->username,
                    'autentificado' => TRUE
                );
            $this->session->set_userdata($user_array);
            redirect('usuario/logueado');
        }else{
           redirect('Usuario/index'); 
        }
    }
    
    public function logueado(){
        if($this->session->userdata('autentificado')){
            $data['nombre'] = $this->session->userdata('username');
            $this->load->view('admin/logueado', $data);
        }else{
            redirect('Usuario/index');
        }
    }
    
    public function cerrarSesion(){
        $user_array = array(
                'autentificado' => FALSE
                );
                $this->session->set_userdata($user_array);
                redirect('Usuario/index');
    }
	
//------------------------------------------Reportes XML producto----------------------------//

	public function generarXML(){
		$reporte = $this->input->post('reporteP');//aqui resive lo del formulario 
		$xml = $this->Producto_model->reporteProd();
		$this->load->helper('download');//son ayudas son funciones que ya estan programadas
		$reporte .='.xml';
		force_download('ReporteCalzado', $xml);
	}
	


//------------------------------------------Reportes EXCEL producto----------------------------//

	public function generarEXCEL(){
		$this->load->helper('mysql_to_excel');
		to_excel($this->Producto_model->generarEXCEL(),"ReporteCalzado");
	
	}



}




























