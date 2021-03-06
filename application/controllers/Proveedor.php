<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Proveedor_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener proveedor----------------------------//
    public function getProveedor($id = null){
        $data['proveedor'] = $this->Proveedor_model->getProveedor($id);
        $this->load->view('admin/proveedor/proveedor',$data);
    }
//------------------------------------------Agregar proveedor----------------------------//
    public function agrProveedor(){
        $this->load->view('admin/proveedor/agrProveedor');
    }
    

    public function addProveedor(){
	
	$this->form_validation->set_rules('nombre','Nombre','trim|required|is_unique[marca.Nombre]');
	$this->form_validation->set_rules('tel','Telefono','trim|required');
	$this->form_validation->set_rules('direccion','Direccion','trim|required');

	
		if($this->form_validation->run() === false){
			$this->load->view('admin/proveedor/agrProveedor');
		
		}else{
	
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('tel');
		$dir = $this->input->post('direccion');
		$idM = $this->input->post('marca');
		
       
        $this->Proveedor_model->addProveedor($nom, $tel, $dir, $idM);
        

        redirect('proveedor/getProveedor');
        
		}
	}
//------------------------------------------Actualizar proveedor----------------------------//
  public function actProveedor($id=null){
        
        $data['proveedor']= $this->Proveedor_model->getProveedor($id);
        
        $this->load->view('admin/proveedor/frmUpProveedor', $data);
        
    }
 
 
    public function upProveedor(){
	$this->form_validation->set_rules('nombre','Nombre','trim|required');
	$this->form_validation->set_rules('tel','Telefono','trim|required');
	$this->form_validation->set_rules('direccion','Direccion','trim|required');
	$this->form_validation->set_rules('idM','Marca','trim|required');
	$id = $this->input->post('id');
	
	
		if($this->form_validation->run() === false){
			 $data['proveedor']= $this->Proveedor_model->getProveedor($id);
			$this->load->view('admin/proveedor/frmUpProveedor', $data);
		
		}else{
	
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
		$tel = $this->input->post('tel');
		$dir = $this->input->post('direccion');
		$idM = $this->input->post('idM');
       
        
        $this->Proveedor_model->upProveedor($id, $nom, $tel, $dir, $idM);
        
       redirect('proveedor/getProveedor');
	  
        
		}
	}
//------------------------------------------Eliminar proveedor----------------------------//
    public function delProveedor($id){
        $this->Proveedor_model->delProveedor($id);
        
		
		
        redirect('proveedor/getProveedor');
		
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
  