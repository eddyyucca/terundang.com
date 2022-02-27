<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index($invite = null)
    {
        // $isi = $invite("_", " ", $invite);
        $data['undang'] = $invite;
        $this->load->view('index', $data);
        // $this->load->view('template/header', $data);
        // $this->load->view('admin/index', $data);
        // $this->load->view('template/footer', $data);
    }
    public function mengundang($invite = null)
    {
        // $isi = $invite("_", " ", $invite);
        $data['undang'] = $invite;
        $this->load->view('index', $data);
        // $this->load->view('template/header', $data);
        // $this->load->view('admin/index', $data);
        // $this->load->view('template/footer', $data);
    }
    public function ucapan()
    {


        $data = array(
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "isi" => $this->input->post('isi'),
            "kehadiran" => $this->input->post('kehadiran'),
        );
        $this->db->insert('ucapan', $data);
        return redirect('home/mengundang');
    }
}
