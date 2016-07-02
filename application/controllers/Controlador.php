<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller{
//definir todos los metodos de llamada a vista
    
    


public function index(){ //cada metodo tiene una vista 
	$data['contenido']='contenido';
         $data['mensaje']="inicio";
	
	$this->load->view('plantilla3Her', $data);
	

	}
        
        public function logCajero(){ //cada metodo tiene una vista 
	$data['contenido']='loginCajero';
         $data['mensaje']="login";
	
	$this->load->view('loginCajero', $data);
	

	}
       

}
	



