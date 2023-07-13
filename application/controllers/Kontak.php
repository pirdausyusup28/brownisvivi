<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk');
    }

    public function index()
    {
        $data['kontak'] = $this->Mproduk->getkontak();
        $this->load->view('menu');
        $this->load->view('viewkontak',$data);
    }


}

/* End of file Kontak.php */
/* Location: ./application/controllers/Kontak.php */