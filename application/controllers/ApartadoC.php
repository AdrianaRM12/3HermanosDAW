<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApartadoC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Apartado_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener apartado----------------------------//
    public function getApartado($id = null){
        $data['apartado'] = $this->Apartado_model->getApartado($id);
        $this->load->view('cajero/apartado',$data);
    }
//------------------------------------------Agregar apartado----------------------------//
    public function agrApartado(){
        $this->load->view('cajero/agreApartado');
    }
    

    public function addApartado(){
	
	$this->form_validation->set_rules('abono','Total','trim|required|numeric');
	$this->form_validation->set_rules('totalA','Total a pagar', 'trim|required|numeric');
	$this->form_validation->set_rules('idC','id del cliente','trim|required|numeric');
	
	
	
	if($this->form_validation->run() === false){
			$this->load->view('cajero/agreApartado');
		
		}else{
	
        $abono = $this->input->post('abono');
		$total = $this->input->post('totalA');
		$idC = $this->input->post('idC');
		
       
        $this->Apartado_model->addApartadoC($abono, $total, $idC);
        

        redirect('apartadoC/getApartado');
		
		}
        
    }
//------------------------------------------Actualizar apartado----------------------------//
  public function actApartado($id=null){
        
        $data['apartado']= $this->Apartado_model->getApartado($id);
        
        $this->load->view('cajero/actApartado', $data);
        
    }
 
 
    public function upApartado(){
	
	
	
	
	
		$id = $this->input->post('id');
        $totalA = $this->input->post('AbonoT');
		$idC = $this->input->post('idCliente');
	
		
       
        
        $this->Apartado_model->upApartado($id, $totalA, $idC);
        
       redirect('ApartadoC/getApartado');
	  
        
    }

	
//------------------------------------------Estado del apartado----------------------------//
	
	  public function cambiarStatus($id, $status){
        $status = ($status == 0) ? 1 : 0;
        
        $this->Apartado_model->cambiarStatus($id, $status);
        
        redirect('ApartadoC/getApartado');
    }
//------------------------------------------Eliminar apartado----------------------------//
    public function delApartado($id){
        $this->Apartado_model->delApartado($id);
        
		
		
        redirect('apartadoC/getApartado');
		
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
  