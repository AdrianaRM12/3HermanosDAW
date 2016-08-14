<?php 

class Validaciones extends CI_Controller {
	
//---------------------------------------------Validaciones login cajero----------------------------->
	public function validarLogCajero (){
	
	
	
		$this->form_validation->set_rules('username','Usuario','trim|required');
		$this->form_validation->set_rules('password','Contraseña','trim|required');
	
		if($this->form_validation->run() === false){
			$this->load->view('loginCajero');
		}else{
			
			
		}
	}
	
//---------------------------------------------Validaciones login administrador----------------------->
	public function validarLogAdmin (){
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
                    'autentificado' => TRUE
                );
            $this->session->set_userdata($user_array);
            redirect('usuario/logueado');
        }else{
           redirect('Usuario'); 
        }
		}
	
	}

//---------------------------------------------Validaciones agrear usuarios-------------------------->
	public function validarAddUsuarios(){
		$this->form_validation->set_rules('username','Usuario','trim|required');
		$this->form_validation->set_rules('password','Contraseña','trim|required');
		$this->form_validation->set_rules('email','Correo','trim|required');
		
		if($this->form_validation->run() === false){
			$this->load->view('admin/usuarios/frmUsuario');
		
		}else{
		
		}
	
	}
	
//---------------------------------------------Validaciones actualizar usuarios---------------------->
	public function validarUpUsuarios(){
		$this->form_validation->set_rules('username','Usuario','trim|required');
		$this->form_validation->set_rules('password','Contraseña','trim|required');
		
		
		if($this->form_validation->run() === false){
			$this->load->view('admin/usuarios/frmUpUsuario');
		
		}else{
		
		}
	
	}

	

}