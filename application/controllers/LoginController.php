<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function index()
    {
        $this->load->view('Auth/login');
    }

    public function store()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        
        $login=$this->db->get('t_user')->result();

        if (empty($login)) {
            redirect('/login');
        }

        $_SESSION['user']=$login[0];

        redirect('/');
    }
}
