<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Categoria_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener categoria----------------------------//
    public function getCategoria($id = null){
        $data['categoria'] = $this->Categoria_model->getCategoria($id);
        $this->load->view('admin/categoria/categoria',$data);
    }
//------------------------------------------Agregar categoria----------------------------//
    public function agrCategoria(){
        $this->load->view('admin/categoria/agrCategoria');
    }
    

    public function addCategoria(){
        $nom = $this->input->post('nombre');
		$des = $this->input->post('descripcion');
		
		
		
       
        $this->Categoria_model->addCategoria($nom, $des);
        

        redirect('categoria/getCategoria');
        
    }
//------------------------------------------Actualizar categoria----------------------------//
  public function actCategoria($id=null){
        
        $data['categoria']= $this->Categoria_model->getCategoria($id);
        
        $this->load->view('admin/categoria/frmUpCategoria', $data);
        
    }
 
 
    public function upCategoria(){
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
		$desc= $this->input->post('desc');
	
		
       
        
        $this->Categoria_model->upCategoria($id, $nom, $desc);
        
       redirect('categoria/getCategoria');
	  
        
    }
//------------------------------------------Eliminar categoria----------------------------//
    public function delCategoria($id){
        $this->Categoria_model->delCategoria($id);
        
		
		
        redirect('categoria/getCategoria');
		
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
  