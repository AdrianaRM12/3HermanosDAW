<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VentaC extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Venta_model');
        $this->load->helper('form');
    }
  
//------------------------------------------Obtener venta----------------------------//
	public function getVenta($id = null){
        $data['venta'] = $this->Venta_model->getVenta($id);
        $this->load->view('cajero/venta',$data);
    }
	

//------------------------------------------Agregar venta----------------------------//
	public function agreVenta(){
	$this->load->view('cajero/agreVenta');
	}
	
	public function agrVenta(){
	
	$this->form_validation->set_rules('total','Total','trim|required|numeric');
	$this->form_validation->set_rules('idVen','Id del vendedor','trim|required');
	$this->form_validation->set_rules('idCajero','Id del cajero','trim|required');
	$this->form_validation->set_rules('idCal','Id del calzado','trim|required|numeric');
	$this->form_validation->set_rules('fecha','fecha','trim|required');
	
	if($this->form_validation->run() === false){
			$this->load->view('cajero/agreVenta');
		
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

	
//------------------------------------------Actualizar venta cajero----------------------------//
	
	public function actualizarV($id=null){
        
        $data['venta']= $this->Venta_model->getVenta($id);
        
        $this->load->view('cajero/actVenta', $data);
        
    }
	
		
	public function actVentaC($id=null){
	
	$this->form_validation->set_rules('total','Total','trim|required|numeric');
	$this->form_validation->set_rules('idVen','Id del vendedor','trim|required');
	$this->form_validation->set_rules('idCaj','Id del cajero','trim|required');
	$this->form_validation->set_rules('idCal','Id del calzado','trim|required|numeric');
	$this->form_validation->set_rules('fecha','fecha','trim|required');
	$id = $this->input->post('id');
		if($this->form_validation->run() === false){
				
			
          $data['venta']= $this->Venta_model->getVenta($id);
		 
        
		$this->load->view("cajero/actVenta", $data);
			
			}else{
		
			$id = $this->input->post('id');
			$total = $this->input->post('total');
			$ven = $this->input->post('idVen');
			$caj = $this->input->post('idCaj');
			$cal = $this->input->post('idCal');
			$fecha = $this->input->post('fecha');
			$client = $this->input->post('idClient');
			
			$this->Venta_model->actVenta($id, $total, $ven, $caj, $cal, $fecha, $client);
			
			redirect('ventaC/getVenta');
			
			}
    
	}
	

//------------------------------------------Eliminar venta admin----------------------------//
    public function delVenta($id){
        $this->Venta_model->delVenta($id);
        
        redirect('venta/getVenta');
    }
	
//------------------------------------------Eliminar venta Cajero----------------------------//
    public function delVentaC($id){
        $this->Venta_model->delVenta($id);
        
        redirect('VentaC/getVenta');
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