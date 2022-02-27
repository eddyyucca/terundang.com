<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kesalahan extends CI_Controller
{

    public function index()
    {
        $this->load->view('404');
    }
}

/* End of file Kesalahan.php */
