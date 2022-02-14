<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
        // $this->load->view('template/header', $data);
        // $this->load->view('admin/index', $data);
        // $this->load->view('template/footer', $data);
    }
}
