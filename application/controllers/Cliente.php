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
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('telefono');
		$dir = $this->input->post('direccion');
		
		
       
        $this->Cliente_model->addCliente($nom, $tel, $dir);
        

        redirect('cliente/getCliente');
        
    }
//------------------------------------------Actualizar cliente----------------------------//
  public function actCliente($id=null){
        
        $data['cliente']= $this->Cliente_model->getCliente($id);
        
        $this->load->view('admin/cliente/frmUpCliente', $data);
        
    }
 
 
    public function upCliente(){
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('telefono');
		$dir = $this->input->post('direccion');
		
       
        
        $this->Cliente_model->upCliente($id, $nom, $tel, $dir);
        
       redirect('cliente/getCliente');
	  
        
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
  