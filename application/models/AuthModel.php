<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    public function __construct(){                
        $this->USUARIO = 'TBL_USR_USUARIO';
        $this->PERSONA = 'TBL_PER_PERSONA';
    }

	public function login($data){
        $this->db->where('USUARIO',$data['usr']);
        $this->db->where('CONTRASENA', $data['pwd']);
        $res = $this->db->get($this->USUARIO);
        $row = $res->row_array();
        if ($this->db->affected_rows() == 1) {
            $this->db->where('ID', $row['ID_PERSONA']);
            $per = $this->db->get($this->PERSONA);
            return $per->result();
        }else {
            return false;
        }
    }

}