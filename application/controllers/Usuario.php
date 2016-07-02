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
    
    public function frmUsuario(){
        $this->load->view('frmUsuario');
    }
 //------------------------------------------Agregar usuario----------------------------//
    public function addUsuario(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $e = $this->input->post('email');
        
        $this->Usuario_model->addUsuario($u, $p, $e);
        
        //$this->getUsuario();
        redirect('usuario/getUsuario');
        
    }
 //------------------------------------------Actualizar usuario----------------------------//
    public function upUsuario(){
        $i = $this->input->post('id');
        $u = $this->input->post('username');
        $p = $this->input->post('password');
        $e = $this->input->post('email');
        
        $this->Usuario_model->upUsuario($i, $u, $p, $e);
        
        redirect('usuario/getUsuario');
        
    }
    
    public function frmUpUsuario($id=null){
        
        $data['usuario']= $this->Usuario_model->getUsuario($id);
        
        $this->load->view('frmUpUsuario', $data);
        
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
	
	
//------------------------------------------Login cajero----------------------------//  


    public function loginCajero(){
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
            redirect('usuario/entrar');
        }else{
           redirect('Usuario/index'); 
        }
    }
    
   public function entrar(){
        if($this->session->userdata('autentificado')){
            $data['nombre'] = $this->session->userdata('username');
            $this->load->view('entrar', $data);
        }else{
            redirect('Usuario/index');
        }
    }
	
 //------------------------------------------Cerrar sesion----------------------------//
    public function cerrarSesion(){
        $user_array = array(
                'autentificado' => FALSE
                );
                $this->session->set_userdata($user_array);
                redirect('Controlador');
    }
}


































