<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function Landing_Page() {
        $this->load->view('Tamu/landing_page');
    }

    public function Tipe_Kamar()
    {
        $tipe_kamar = $this->db->get('t_tipe_kamar')->result();
        $data=[];
        foreach ($tipe_kamar as $key => $kamar) {
            $this->db->where('id_tipekamar', $kamar->id);
            $faskam = $this->db->get('t_faskam')->result();
            $data[$key]=array(
                'info_kamar'=>$kamar,
                'f_kamar'=>$faskam,
            );
        }
        $this->load->view('Tamu/tipe_kamar', ['data'=>$data]);
    }
    
    public function Pesan_Kamar() {
        $data['user']=$_SESSION['user'];

        $this->db->where('id', $_GET['id']);
        $tipe_kamar = $this->db->get('t_tipe_kamar')->result();
        $dataKamar=[];
        foreach ($tipe_kamar as $key => $kamar) {
            $this->db->where('id_tipekamar', $kamar->id);
            $faskam = $this->db->get('t_faskam')->result();
            $dataKamar[$key]=array(
                'info_kamar'=>$kamar,
                'f_kamar'=>$faskam,
            );
        }
        $data['kamar']=$dataKamar;
        
        $this->load->view('Tamu/pesanan', ['data'=>$data , 'dataKamar'=>$dataKamar]);
    }
    
    public function Fasilitas_Hotel() {
        $fasilitas_hotel = $this->db->get('t_fashot')->result();
        $data=[];
        foreach ($fasilitas_hotel as $key => $fashot) {
            $data[$key]=array(
                'Fasil_hotel'=>$fashot
            );
        }
        $this->load->view('Tamu/fasilitas_hotel', ['data'=>$data]);
    }

    public function prosBook()
    {
        $date1=date_create($_POST['tgl_cekin']);//mis. tgl chekin
        $date2=date_create($_POST['tgl_cekout']);//mis. tgl chekout
        $diff=date_diff($date1,$date2); //menyimpan didalam fungsi date_diff
        $jumlah_hari=$diff->format("%d%"); //menampilkan jumlah hari

        $data= array(
            'nama_pemesan' => $_POST['nama_pemesan'], 
            'email' => $_POST['email'], 
            'no_tlp' => $_POST['no_tlp'], 
            'nama_tamu' => $_POST['nama_tamu'], 
            'id_kamar' => $_POST['id_kamar'], 
            'tgl_cekin' => $_POST['tgl_cekin'], 
            'tgl_cekout' => $_POST['tgl_cekout'], 
            'jmlh_kamar' => $_POST['jmlh_kamar'], 
            'bayar' => $_POST['harga']*$_POST['jmlh_kamar']*$jumlah_hari, 
            'RefId' => date('ymdhis').$_POST['no_tlp']
        );
        $this->db->insert('t_pesan_kamar', $data);
        redirect('Tamu/DataPesan');
    }

    public function DataPesan()
    {
        $this->db->where('nama_pemesan', $_SESSION['user']->nama_tamu);

        $this->db->select('*');
        $this->db->from('t_pesan_kamar');
        $this->db->join('t_tipe_kamar', 't_tipe_kamar.id = t_pesan_kamar.id_kamar');
        $data_pesan = $this->db->get()->result();
        $data['pesanan']=$data_pesan;
        $this->load->view('Tamu/data_pesan', ['data'=>$data]);
    }
    
    public function Print()
    {
        $this->db->where('id_pesanan', $_GET['id']);

        $this->db->select('*');
        $this->db->from('t_pesan_kamar');
        $this->db->join('t_tipe_kamar', 't_tipe_kamar.id = t_pesan_kamar.id_kamar');
        $print = $this->db->get()->result();
        $data['pesanan']=$print;
        $this->load->view('Tamu/cetak', ['data'=>$data]);   
    }
    public function Delete()
    {
        $this->db->where('id_pesanan', $_GET['id']);
        $this->db->delete('t_pesan_kamar');
        redirect('Tamu/DataPesan');
    }
}
