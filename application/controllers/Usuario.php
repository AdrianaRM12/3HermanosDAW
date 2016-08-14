<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->helper('form');
    }
    
    public function index(){
        $this->load->view('admin/usuarios/frmLogin');
    }
	
	
	
 //------------------------------------------Obtener usuario----------------------------//
    public function getUsuario($id = null){
        $data['usuario'] = $this->Usuario_model->getUsuario($id);
        $this->load->view('admin/usuarios/usuario',$data);
    }
	
//------------------------------------------Agregar usuario----------------------------//
    
    public function frmUsuario(){
        $this->load->view('admin/usuarios/frmUsuario');
    }
 
    public function addUsuario(){
	
	$this->form_validation->set_rules('username','Usuario','trim|required');
	$this->form_validation->set_rules('password','Contraseña','trim|required');
	$this->form_validation->set_rules('email','Correo','trim|required');
	
		if($this->form_validation->run() === false){
			$this->load->view('admin/usuarios/frmUsuario');
		
		}else{
        $u = $this->input->post('username');
        $pa = $this->input->post('password');
		$p = $this->encrypt->encode($pa);
        $e = $this->input->post('email');
        
        $this->Usuario_model->addUsuario($u, $p, $e);
        
        //$this->getUsuario();
        redirect('usuario/getUsuario');
        
		}
	}
 //------------------------------------------Actualizar usuario----------------------------//
     public function frmUpUsuario($id=null){
        
        $data['usuario']= $this->Usuario_model->getUsuario($id);
        
        $this->load->view('admin/usuarios/frmUpUsuario', $data);
        
    }
	
	public function upUsuario($id=null){
	$this->form_validation->set_rules('username','Usuario','trim|required');
	$this->form_validation->set_rules('password','Contraseña','trim|required');
	$this->form_validation->set_rules('email','Correo','trim|required');
	$id = $this->input->post('id');
	
		if($this->form_validation->run() === false){
			$data['usuario']= $this->Usuario_model->getUsuario($id);
        
			$this->load->view('admin/usuarios/frmUpUsuario', $data);
		
        
		}else{
	
		
        $i = $this->input->post('id');
        $u = $this->input->post('username');
        $pa = $this->input->post('password');
			$p = $this->encrypt->encode($pa);
        $e = $this->input->post('email');
		
		
        
        $this->Usuario_model->upUsuario($i, $u, $p, $e);
        
        redirect('usuario/getUsuario');
        
		}
	}
    
   
    
//------------------------------------------Eliminar usuario----------------------------//
    public function delUsuario($id){
        $this->Usuario_model->delUsuario($id);
        
        redirect('usuario/getusuario');
    }
 //------------------------------------------Privilegios usuario----------------------------//  
    public function cambiarStatus($id, $status){
        $status = ($status == 0) ? 1 : 0;
        
        $this->Usuario_model->cambiarStatus($id, $status);
        
        redirect('usuario/getUsuario');
    }
   
//------------------------------------------Login administrador----------------------------//   
    public function login(){
	$this->form_validation->set_rules('username','Usuario','trim|required');
	$this->form_validation->set_rules('password','Contraseña','trim|required');
	
		if($this->form_validation->run() === false){
			
			$this->load->view('admin/usuarios/frmLogin');
		
		}else{
		
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
        
			$usuario = $this->Usuario_model->login($user, $pass);
        
        if($usuario){
			
            $user_array = array(
                    'idUsuario' => $usuario->idUsuario,
                    'username' => $usuario->username,
					'privilegios' =>$usuario->uStatus,
					
                    'autentificado' => TRUE
                );
				$lo=$usuario->uStatus;
            $this->session->set_userdata($user_array);
			
		if($lo == 1){
			redirect('usuario/logueado');
		}else{
		redirect('usuario/entrar');
		}
		
            
        }else{
			
			redirect('Usuario');
			
        }
		}
		
	}
		
    public function logueado(){
        if($this->session->userdata('autentificado')){
			$data ['calendario'] = $this->calendar->generate();
            $data['nombre'] = $this->session->userdata('username');
            $this->load->view('admin/logueado', $data);
        }else{
            redirect('Usuario/index');
        }
    }
	
	

   public function entrar(){
        if($this->session->userdata('autentificado')){
			$data ['calendario'] = $this->calendar->generate();
            $data['nombre'] = $this->session->userdata('username');
            $this->load->view('cajero/entrar', $data);
			
        }else{
            redirect('Controlador/logCajero');
        }
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


































