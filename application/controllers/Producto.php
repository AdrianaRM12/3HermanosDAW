<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
        $this->load->helper('form');
    }
    

//------------------------------------------Obtener producto----------------------------//
    public function getProducto($id = null){
        $data['producto'] = $this->Producto_model->getProducto($id);
        $this->load->view('admin/producto/producto',$data);
    }
    
//------------------------------------------Agregar producto----------------------------//
    public function agrCalzado(){
        $this->load->view('admin/producto/agrCalzado');
    }
    

    public function addCalzado(){
        $n = $this->input->post('nombre');
        $p = $this->input->post('precio');
        $d = $this->input->post('descripcion');
		$c = $this->input->post('categoria');
		$s = $this->input->post('stock');
		$m = $this->input->post('marca');
		
        
        $this->Producto_model->addCalzado($n, $p, $d, $c, $s, $m);
        
        //$this->getProducto();
        redirect('producto/getProducto');
        
    }
 //------------------------------------------Actualizar producto----------------------------//
  public function UpProducto($id=null){
        
        $data['producto']= $this->Producto_model->getProducto($id);
        
        $this->load->view('admin/producto/UpProducto', $data);
        
    }
 
 
    public function actProducto(){
		$id = $this->input->post('id');
        $n = $this->input->post('nombre');
        $p = $this->input->post('precio');
        $d = $this->input->post('descripcion');
		$c = $this->input->post('id_Categoria');
		$s = $this->input->post('Stock');
		$m = $this->input->post('id_Marca');
        
        $this->Producto_model->actProducto($id, $n, $p, $d, $c, $s, $m);
        
       redirect('producto/getProducto');
	  
        
    }
    
   
    
//------------------------------------------Eliminar producto----------------------------//
    public function delProducto($id){
        $this->Producto_model->delProducto($id);
        
		
		
        redirect('producto/getproducto');
		
    }
    
  
    
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
    
    public function cerrarSesion(){
        $user_array = array(
                'autentificado' => FALSE
                );
                $this->session->set_userdata($user_array);
                redirect('Usuario/index');
    }
}


































