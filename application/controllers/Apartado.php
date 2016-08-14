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
	
	$this->form_validation->set_rules('total','Total','trim|required|numeric');
	$this->form_validation->set_rules('totalAp','Total a pagar','trim|required|numeric');
	$this->form_validation->set_rules('fecha','Fecha','trim|required');
	
	

	
		if($this->form_validation->run() === false){
			$this->load->view('admin/Apartado/agrApartado');
		
		}else{
	
        $totalA = $this->input->post('total');
		$totalAp = $this->input->post('totalAp');
		$idC = $this->input->post('idCliente');
		$fech = $this->input->post('fecha');
		
		
		
       
        $this->Apartado_model->addApartado($totalA, $totalAp, $idC, $fech);
        

        redirect('apartado/getApartado');
        
		}
	}
//------------------------------------------Actualizar apartado----------------------------//
  public function actApartado($id=null){
        
        $data['apartado']= $this->Apartado_model->getApartado($id);
        
        $this->load->view('admin/apartado/frmUpApartado', $data);
        
    }
 
 
    public function upApartado($id=null){
	
	$this->form_validation->set_rules('totalA','Abono','trim|required|numeric');
	$this->form_validation->set_rules('totalAP','Total a pagar','trim|required|numeric');
	$id = $this->input->post('id');
	
		if($this->form_validation->run() === false){
			$data['apartado']= $this->Apartado_model->getApartado($id);
			$this->load->view('admin/apartado/frmUpApartado', $data);
		
		}else{
		
		$id = $this->input->post('id');
        $totalA = $this->input->post('totalA');
		$totalAP = $this->input->post('totalAP');
		$idC = $this->input->post('idC');
	
		
       
        
        $this->Apartado_model->upApartado($id, $totalA, $totalAP, $idC);
        
		redirect('apartado/getApartado');
	  
        
		}
	}
	
//------------------------------------------Estado del apartado----------------------------//
	
	  public function cambiarStatus($id, $status){
        $status = ($status == 0) ? 1 : 0;
        
        $this->Apartado_model->cambiarStatus($id, $status);
        
        redirect('apartado/getApartado');
    }
//------------------------------------------Reportes XML apartado----------------------------//

	public function generarXML(){
		$reporte = $this->input->post('reporteA');
		$xml = $this->Venta_model->generarXML();
		$this->load->helper('download');
		$reporte .='.xml';
		force_download('ReporteApartado', $xml);
	}
	


//------------------------------------------Reportes EXCEL apartado----------------------------//

	public function generarEXCEL(){
		$this->load->helper('mysql_to_excel');
		to_excel($this->Venta_model->generarEXCEL(),"ReporteApartado");
	
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
  