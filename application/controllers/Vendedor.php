<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Vendedor_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener vendedor----------------------------//
    public function getVendedor($id = null){
        $data['vendedor'] = $this->Vendedor_model->getVendedor($id);
        $this->load->view('admin/vendedor/vendedor',$data);
    }
//------------------------------------------Agregar vendedor----------------------------//
    public function agrVendedor(){
        $this->load->view('admin/vendedor/agrVendedor');
    }
    

    public function addVendedor(){
        $nom = $this->input->post('nombre');
       
        $this->Vendedor_model->addVendedor($nom);
        

        redirect('vendedor/getVendedor');
        
    }
//------------------------------------------Actualizar vendedor----------------------------//
  public function actVendedor($id=null){
        
        $data['vendedor']= $this->Vendedor_model->getVendedor($id);
        
        $this->load->view('admin/vendedor/frmUpVendedor', $data);
        
    }
 
 
    public function upVendedor(){
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
       
        
        $this->Vendedor_model->upVendedor($id, $nom);
        
       redirect('vendedor/getVendedor');
	  
        
    }
//------------------------------------------Eliminar vendedor----------------------------//
    public function delVendedor($id){
        $this->Vendedor_model->delVendedor($id);
        
		
		
        redirect('vendedor/getVendedor');
		
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
  