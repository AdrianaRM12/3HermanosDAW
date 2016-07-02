<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apartado extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Apartado_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener apartado----------------------------//
    public function getApartado($id = null){
        $data['apartado'] = $this->Apartado_model->getApartado($id);
        $this->load->view('admin/apartado/apartado',$data);
    }
//------------------------------------------Agregar apartado----------------------------//
    public function agrApartado(){
        $this->load->view('admin/apartado/agrApartado');
    }
    

    public function addApartado(){
        $totalA = $this->input->post('total');
		$idC = $this->input->post('idCliente');
		
		
		
       
        $this->Apartado_model->addApartado($totalA, $idC);
        

        redirect('apartado/getApartado');
        
    }
//------------------------------------------Actualizar apartado----------------------------//
  public function actApartado($id=null){
        
        $data['apartado']= $this->Apartado_model->getApartado($id);
        
        $this->load->view('admin/apartado/frmUpApartado', $data);
        
    }
 
 
    public function upApartado(){
		$id = $this->input->post('id');
        $totalA = $this->input->post('AbonoT');
		$idC = $this->input->post('idCliente');
	
		
       
        
        $this->Apartado_model->upApartado($id, $totalA, $idC);
        
       redirect('apartado/getApartado');
	  
        
    }
//------------------------------------------Eliminar apartado----------------------------//
    public function delApartado($id){
        $this->Apartado_model->delApartado($id);
        
		
		
        redirect('apartado/getApartado');
		
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
  