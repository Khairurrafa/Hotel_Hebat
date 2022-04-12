<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function Landing_page()
    {
        $this->load->view('Resepsionis/resp_landing_page');
    }
    public function Data_Tamu()
    {
        $pesan_kamar = $this->db->get('t_pesan_kamar')->result();
        $data=[];
        foreach ($pesan_kamar as $key => $peskam) {;
            $data[$key]=array(
                'tamu'=>$peskam
            );
        }
        
        $this->load->view('Resepsionis/data_tamu', ['data'=>$data]);
    }           
}