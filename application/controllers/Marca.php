<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Marca_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener marca----------------------------//
    public function getMarca($id = null){
        $data['marca'] = $this->Marca_model->getMarca($id);
        $this->load->view('admin/marca/marca',$data);
    }
//------------------------------------------Agregar marca----------------------------//
    public function agrMarca(){
        $this->load->view('admin/marca/agrMarca');
    }
    

    public function addMarca(){
        $nom = $this->input->post('nombre');
       
        $this->Marca_model->addMarca($nom);
        

        redirect('marca/getMarca');
        
    }
//------------------------------------------Actualizar cajero----------------------------//
  public function actMarca($id=null){
        
        $data['marca']= $this->Marca_model->getMarca($id);
        
        $this->load->view('admin/marca/frmUpMarca', $data);
        
    }
 
 
    public function upMarca(){
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
       
        
        $this->Marca_model->upMarca($id, $nom);
        
       redirect('marca/getMarca');
	  
        
    }
//------------------------------------------Eliminar cajero----------------------------//
    public function delMarca($id){
        $this->Marca_model->delMarca($id);
        
		
		
        redirect('marca/getMarca');
		
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
  