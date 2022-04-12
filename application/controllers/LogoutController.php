<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogoutController extends CI_Controller {
    public function store()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
