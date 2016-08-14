<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener cliente----------------------------//
    public function getCliente($id = null){
        $data['cliente'] = $this->Cliente_model->getCliente($id);
        $this->load->view('admin/cliente/cliente',$data);
    }
//------------------------------------------Agregar cliente----------------------------//
    public function agrCliente(){
        $this->load->view('admin/cliente/agrCliente');
    }
    

    public function addCliente(){
	
	$this->form_validation->set_rules('nombre','Nombre','trim|required|is_unique[cliente.Nombre]');
	$this->form_validation->set_rules('telefono','Telefono','trim|required');
	$this->form_validation->set_rules('direccion','Direccion','trim|required');
	

	
		if($this->form_validation->run() === false){
			$this->load->view('admin/cliente/agrCliente');
		
		}else{
	
	
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('telefono');
		$dir = $this->input->post('direccion');
		
		
       
        $this->Cliente_model->addCliente($nom, $tel, $dir);
        

        redirect('cliente/getCliente');
        
		}
	}
//------------------------------------------Actualizar cliente----------------------------//
  public function actCliente($id=null){
        
        $data['cliente']= $this->Cliente_model->getCliente($id);
        
        $this->load->view('admin/cliente/frmUpCliente', $data);
        
    }
 
 
    public function upCliente(){
	
	$this->form_validation->set_rules('nombre','Nombre','trim|required');
	$this->form_validation->set_rules('telefono','Telefono','trim|required');
	$this->form_validation->set_rules('direccion','Direccion','trim|required');
	
	$id = $this->input->post('id');
	
	
		if($this->form_validation->run() === false){
			$data['cliente']= $this->Cliente_model->getCliente($id);
			$this->load->view('admin/cliente/frmUpCliente', $data);
		
		}else{
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('telefono');
		$dir = $this->input->post('direccion');
		
       
        
        $this->Cliente_model->upCliente($id, $nom, $tel, $dir);
        
       redirect('cliente/getCliente');
	  
        
		}
	}
	
//------------------------------------------Reportes XML cliente----------------------------//

	public function generarXML(){
		$reporte = $this->input->post('reporteC');
		$xml = $this->Cliente_model->generarXML();
		$this->load->helper('download');
		$reporte .='.xml';
		force_download('ReporteCliente.xml', $xml);
	}
	


//------------------------------------------Reportes EXCEL cliente----------------------------//

	public function generarEXCEL(){
		$this->load->helper('mysql_to_excel');
		to_excel($this->Cliente_model->generarEXCEL(),"ReporteCliente");
	
	}
		

//------------------------------------------Eliminar cliente----------------------------//
    public function delCliente($id){
        $this->Cliente_model->delCliente($id);
        
		
		
        redirect('cliente/getCliente');
		
    }
    
 //------------------------------------------cerrar sesion----------------------------//

   public function cerrarSesion(){
        $user_array = array(
                'autentificado' => FALSE
                );
                $this->session->set_userdata($user_array);
                redirect('Usuario/index');
    }
   
	
	}
  