<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musico_model extends CI_Controller

{
    function guardar($user)
    {
      $r = $this->db->insert('musicos', $user);      
      return $r;
    }

    function authenticate($correo, $pass) {
        
        $this -> db -> select('id, correo, contrasenna');
        $this -> db -> from('musicos');
        $this -> db -> where('correo', $correo);
        $this -> db -> where('contrasenna', $pass);
        $this -> db -> limit(1);          
       
         $query = $this -> db -> get();
          
        if($query -> num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
            
    }
}