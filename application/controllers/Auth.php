<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->CekLogin();
    }

    public function CekLogin(Type $var = null)
    {
        if (!empty($_SESSION['user'])) {
            $this->Leveling();
        } else {
            redirect('/login');
        }
    }

    public function Register()
    {
        $this->load->view('Auth/register');
    }

    public function addusers()
    {
        $data=$_POST;
        $data += array(
            'level' => 'tamu'
        );
        
        // var_dump($data);die;
        $this->db->insert('t_user', $data);
        redirect('/Auth/login');
    }

	public function index()
	{
		$this->CekLogin();
	}

	public function login()
	{
		$this->load->view('Auth/login');
	}

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user']);

        redirect('/Auth/login');
    }
    
    public function cekusers()
    {
        // var_dump($_POST);
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $login=$this->db->get('t_user')->result();
        if (empty($login)) {
            redirect('/Auth/login');
        }
        $_SESSION['user']=$login[0];
        
        $this->Leveling();
    }
    public function Leveling ()
    {
        if ($_SESSION['user']->level=="tamu") {
            redirect('/Tamu/Landing_Page');
        }
        if ($_SESSION['user']->level=="resepsionis") {
            redirect('/Resepsionis/Landing_page');
        }
        if ($_SESSION['user']->level=="admin") {
            redirect('/Admin/Landing_page');
        }
    }
    
}
