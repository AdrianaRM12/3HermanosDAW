<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cajero extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Cajero_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener cajero----------------------------//
    public function getCajero($id = null){
        $data['cajero'] = $this->Cajero_model->getCajero($id);
        $this->load->view('admin/cajero/cajero',$data);
    }
//------------------------------------------Agregar cajero----------------------------//
    public function agrCajero(){
        $this->load->view('admin/cajero/agrCajero');
    }
    

    public function addCajero(){
        $nom = $this->input->post('nombre');
       
        $this->Cajero_model->addCajero($nom);
        

        redirect('cajero/getCajero');
        
    }
//------------------------------------------Actualizar cajero----------------------------//
  public function actCajero($id=null){
        
        $data['cajero']= $this->Cajero_model->getCajero($id);
        
        $this->load->view('admin/cajero/frmUpCajero', $data);
        
    }
 
 
    public function upCajero(){
		$id = $this->input->post('id');
        $nom = $this->input->post('nombre');
       
        
        $this->Cajero_model->upCajero($id, $nom);
        
       redirect('cajero/getCajero');
	  
        
    }
//------------------------------------------Eliminar cajero----------------------------//
    public function delCajero($id){
        $this->Cajero_model->delCajero($id);
        
		
		
        redirect('cajero/getCajero');
		
    }
	
//------------------------------------------Login----------------------------//   
    public function login(){
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        
        $usuario = $this->Usuario_model->login($user, $pass);
        
        if($usuario){
            $user_array = array(
                    'idUsuario' => $usuario->idUsuario,
                    'username' => $usuario->username,
                    'autentificado' => TRUE
                );
            $this->session->set_userdata($user_array);
            redirect('usuario/logueado');
        }else{
           redirect('Usuario/index'); 
        }
    }
    
    public function logueado(){
        if($this->session->userdata('autentificado')){
            $data['nombre'] = $this->session->userdata('username');
            $this->load->view('admin/logueado', $data);
        }else{
            redirect('Usuario/index');
        }
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
  