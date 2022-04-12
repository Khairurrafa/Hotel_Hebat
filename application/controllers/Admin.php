<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index()
	{
		$this->load->view('welcome_message');
	}

    public function Landing_page()
    {
        $this->load->view('Admin/landing_page');
    }
    public function Kamar()
    {
        $data_kamar = $this->db->get('t_tipe_kamar')->result();
        $data=[];
        foreach ($data_kamar as $key => $kamar) {;
            $data[$key]=array(
                'kamar'=>$kamar
            );
        }

        $this->load->view('Admin/kamar', ['data'=>$data]);
    }
    public function TambahKamar()
    {
        $this->load->view('Admin/tambah_kamar');
    }
    public function TambahDataKamar()
    {
        $data= array(
            'nama_kamar' => $_POST['nama_kamar'], 
            'harga' => $_POST['harga'], 
            'img_room' => $_POST['img_room'], 
        );
        $this->db->insert('t_tipe_kamar', $data);
        redirect('Admin/Kamar');
    }
    public function HapusKamar()
    {
        $this->db->where('id', $_GET['id']);
        $this->db->delete('t_tipe_kamar');
        redirect('Admin/Kamar');
    }
    public function EditKamar()
    {
        $this->db->where('id', $_GET['id']);
        $data_kamar = $this->db->get('t_tipe_kamar')->result();
        $data=[];
        foreach ($data_kamar as $key => $kamar) {;
            $data[$key]=array(
                'kamar'=>$kamar
            );
        }
        $this->load->view('Admin/edit_kamar', ['data'=>$data]);
    }
    public function EditDataKamar()
    {
        $data= array(
            'nama_kamar' => $_POST['nama_kamar'], 
            'harga' => $_POST['harga'], 
            'img_room' => $_POST['img_room']
        );
        $this->db->where('id', $_POST['id']);
        $this->db->update('t_tipe_kamar', $data);
        redirect('Admin/Kamar');
    }
    public function FasilitasKamar()
    {
        $data_faskam = $this->db->get('t_faskam')->result();
        $data=[];
        foreach ($data_faskam as $key => $faskam) {;
            $data[$key]=array(
                'faskam'=>$faskam
            );
        }
        $this->load->view('Admin/faskam', ['data'=>$data]);
    }
    public function TambahFaskam()
    {
        $this->load->view('Admin/tambah_faskam');
    }
    public function TambahDataFaskam()
    {
        $data= array(
            'id_tipekamar' => $_POST['id_tipekamar'], 
            'nama_faskam' => $_POST['nama_faskam'], 
            'kategori' => $_POST['kategori'], 
        );
        $this->db->insert('t_faskam', $data);
        redirect('Admin/FasilitasKamar');
    }
    public function HapusFaskam()
    {
        $this->db->where('id', $_GET['id']);
        $this->db->delete('t_faskam');
        redirect('Admin/FasilitasKamar');
    }
    public function EditFaskam()
    {
        $this->db->where('id', $_GET['id']);
        $data_faskam = $this->db->get('t_faskam')->result();
        $data=[];
        foreach ($data_faskam as $key => $faskam) {;
            $data[$key]=array(
                'faskam'=>$faskam
            );
        }
        $this->load->view('Admin/edit_faskam', ['data'=>$data]);
    }
    public function EditDataFaskam()
    {
        $data= array(
            'id_tipekamar' => $_POST['id_tipekamar'], 
            'nama_faskam' => $_POST['nama_faskam'], 
            'kategori' => $_POST['kategori'], 
        );
        $this->db->where('id', $_POST['id']);
        $this->db->update('t_faskam', $data);
        redirect('Admin/FasilitasKamar');
    }
    public function FasilitasHotel()
    {
        $data_fashot = $this->db->get('t_fashot')->result();
        $data=[];
        foreach ($data_fashot as $key => $fashot) {;
            $data[$key]=array(
                'fashot'=>$fashot
            );
        }
        $this->load->view('Admin/fashot', ['data'=>$data]);
    }
    public function TambahFashot()
    {
        $this->load->view('Admin/tambah_fashot');
    }
    public function TambahDataFashot()
    {
        $data= array(
            'nama_fashot' => $_POST['nama_fashot'], 
            'keterangan' => $_POST['keterangan'], 
            'img_fashot' => $_POST['img_fashot'], 
        );
        $this->db->insert('t_fashot', $data);
        redirect('Admin/FasilitasHotel');
    }
    public function HapusFashot()
    {
        $this->db->where('id', $_GET['id']);
        $this->db->delete('t_fashot');
        redirect('Admin/FasilitasHotel');
    }
    public function EditFashot()
    {
        $this->db->where('id', $_GET['id']);
        $data_fashot = $this->db->get('t_fashot')->result();
        $data=[];
        foreach ($data_fashot as $key => $fashot) {;
            $data[$key]=array(
                'fashot'=>$fashot
            );
        }
        $this->load->view('Admin/edit_fashot', ['data'=>$data]);
    }
    public function EditDataFashot()
    {
        $data= array(
            'nama_fashot' => $_POST['nama_fashot'], 
            'keterangan' => $_POST['keterangan'], 
            'img_fashot' => $_POST['img_fashot'], 
        );
        $this->db->where('id', $_POST['id']);
        $this->db->update('t_fashot', $data);
        redirect('Admin/FasilitasHotel');
    }
   
}