<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Venta_model');
        $this->load->helper('form');
    }
  
//------------------------------------------Obtener venta----------------------------//
	public function getVenta($id = null){
        $data['venta'] = $this->Venta_model->getVenta($id);
        $this->load->view('admin/venta/venta',$data);
    }
	
//------------------------------------------Agregar venta----------------------------//
	public function agrVenta(){
	$this->load->view('admin/venta/agrVenta');
	}
	
	public function agreVenta(){
	
	$this->form_validation->set_rules('total','Total','trim|required|numeric');
	$this->form_validation->set_rules('idVen','Id del vendedor','trim|required');
	$this->form_validation->set_rules('idCajero','Id del cajero','trim|required');
	$this->form_validation->set_rules('idCal','Id del calzado','trim|required|numeric');
	$this->form_validation->set_rules('fecha','fecha','trim|required');
	
	if($this->form_validation->run() === false){
			$this->load->view('admin/venta/agrVenta');
		
		}else{
	
        $total = $this->input->post('total');
        $idV = $this->input->post('idVen');
		$idCaj = $this->input->post('idCajero');
        $idC = $this->input->post('idCal');
		$fech = $this->input->post('fecha');
		$idCl = $this->input->post('idCli');
		
        
        $this->Venta_model->agrVenta($total, $idV, $idCaj, $idC, $fech, $idCl);
        
        //$this->getUsuario();
        redirect('ventaC/getVenta');
        
		}
	}

		

//------------------------------------------Actualizar venta----------------------------//
	public function frmUpVenta($id=null){
        
        $data['venta']= $this->Venta_model->getVenta($id);
        
        $this->load->view('admin/venta/frmUpVenta', $data);
        
    }
	
	public function actVenta($id=null){
	
	$this->form_validation->set_rules('total','Total','trim|required|numeric');
	$this->form_validation->set_rules('idVen','Id del vendedor','trim|required');
	$this->form_validation->set_rules('idCajero','Id del cajero','trim|required');
	$this->form_validation->set_rules('idCal','Id del calzado','trim|required|numeric');
	$this->form_validation->set_rules('fecha','fecha','trim|required');
	$id= $this->input->post('id');
	
	if($this->form_validation->run() === false){
			$data['venta']= $this->Venta_model->getVenta($id);
			$this->load->view('admin/venta/frmUpVenta', $data);
		
		}else{
	
	
        $id = $this->input->post('id');
        $total = $this->input->post('total');
        $ven = $this->input->post('idVen');
        $caj = $this->input->post('idCaj');
		$cal = $this->input->post('idCal');
		$fecha = $this->input->post('fecha');
		$client = $this->input->post('idClient');
        
        $this->Venta_model->actVenta($id, $total, $ven, $caj, $cal, $fecha, $client);
        
        redirect('venta/getVenta');
        
		}
	}
    
   
	
//------------------------------------------Eliminar venta----------------------------//
    public function delVenta($id){
        $this->Venta_model->delVenta($id);
        
        redirect('venta/getVenta');
    }
	
	
	
//------------------------------------------Reportes XML venta----------------------------//

	public function generarXML(){
		$reporte = $this->input->post('reporteV');
		$xml = $this->Venta_model->generarXML();
		$this->load->helper('download');
		$reporte .='.xml';
		force_download('ReporteVenta', $xml);
	}
	


//------------------------------------------Reportes EXCEL veta----------------------------//

	public function generarEXCEL(){
		$this->load->helper('mysql_to_excel');
		to_excel($this->Venta_model->generarEXCEL(),"ReporteVenta");
	
	}
	
//------------------------------------------Cerrar sesion----------------------------//
 
	
	 public function cerrarSesion(){
        $user_array = array(
                'autentificado' => FALSE
                );
                $this->session->set_userdata($user_array);
                redirect('Usuario/index');
    }
	
	}