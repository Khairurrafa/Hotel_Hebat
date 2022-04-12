<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterController extends CI_Controller {
    public function index()
    {
        $this->load->view('Auth/register');
    }

    public function store()
    {
        $data=$_POST;
        $data['level'] = 'tamu';
        
        $this->db->insert('t_user', $data);
        
        redirect('/login');
    }
}
