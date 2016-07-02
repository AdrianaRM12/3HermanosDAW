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
        $this->load->view('venta',$data);
    }
	
//------------------------------------------Actualizar venta----------------------------//
	
	public function actVenta(){
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
    
    public function frmUpVenta($id=null){
        
        $data['venta']= $this->Venta_model->getVenta($id);
        
        $this->load->view('admin/venta/frmUpVenta', $data);
        
    }
	
//------------------------------------------Eliminar venta----------------------------//
    public function delVenta($id){
        $this->Venta_model->delVenta($id);
        
        redirect('venta/getVenta');
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