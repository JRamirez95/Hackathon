<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musico extends CI_Controller {

	
	public function registrar()
	{
        $data['instrumentos'] = $this->Musico_model->intrumentos();
        $data['generos'] = $this->Musico_model->generos();

		$this->load->view('musicos/registro', $data);
	}

	public function login()
    {
        $this->load->view('musicos/login');
    }
    
    public function principal()
    {
        $data['instrumentos'] = $this->Musico_model->intrumentos();
        $data['generos'] = $this->Musico_model->generos();

        $this->load->view('musicos/principal', $data);
	}
	
	public function guardar()
    {
        
           
                $config['upload_path']='upload/images/';
                $config['allowed_types']='jpg|png|gif';
                $config['max_size']='1500';
                $config['file_name'] = $_FILES['foto']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload('foto');
                $uploadData=$this->upload->data();

        
		// get the params
        $nombre = $this->input->post('nombre');
        $apellido = $this->input->post('apellido');
        $direccion = $this->input->post('direccion');
        $instrumento = $this->input->post('instrumento');
        $genero = $this->input->post('genero');
        $foto = $uploadData['file_name'];      
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
        
        
        public function buscar() {
            $instrumento = $this->input->post('instru');

            $data ['artistas'] = $this->Musico_model->buscarInstrumento($instrumento);
            
            $this->load->view('musicos/principal', $data);
        
    }
    
   

}
