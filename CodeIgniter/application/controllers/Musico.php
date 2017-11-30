<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musico extends CI_Controller {

	
	public function registrar()
	{
		$this->load->view('musicos/registro');
	}

	public function login()
    {
        $this->load->view('musicos/login');
    }
    
    public function principal()
    {
        $this->load->view('musicos/principal');
	}
	
	public function guardar()
    {
		// get the params
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $direccion = $this->input->post('direccion');
        $instrumento = $this->input->post('instrumento');
        $genero = $this->input->post('genero');
        $foto = $this->input->post('foto');        
        $correo= $this->input->post('correo');
        $pass = $this->input->post('contrasenna');

        $musicos = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'direccion' => $direccion,
            'instrumento' => $instrumento,
            'genero' => $genero,
            'foto' => $foto,            
            'correo' => $correo,
            'contrasenna' => $pass
        );
		// call the model to save
		$r = $this->Musico_model->guardar($musicos);
		
		// redirect
        if ($r) {		
            // $this->session->set_flashdata('message', 'User saved');
            redirect('/Hackathon/CodeIgniter/musico/login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('/Hackathon/CodeIgniter/musico/registrar');
        }
	}
	
	public function logins()	
		{	
			$correo = $this->input->post('correo');
			$pass = $this->input->post('password');
			//$pass= md5($password);	
		   $r = $this->Musico_model->authenticate($correo, $pass);
	
			if ($r == true) {              
				// $this->session->set_flashdata('message', 'User saved');
				redirect('/Hackathon/CodeIgniter/musico/principal');
	
		   
			} else {                
                
				// $this->session->set_flashdata('message', 'There was an error saving the user');
				redirect('/Hackathon/CodeIgniter/musico/login');
			}
        }
        
        public function cargar() {            
            $ins = $this->Musico_model->instrumentos();
            
            $data['instrumentos'] = $ins;     
    
        }
}
