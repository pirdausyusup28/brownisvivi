<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mproduk');
    }

    public function index()
    {
        $data['visimisi'] = $this->Mproduk->getvisimisi();
        $this->load->view('menu');
        $this->load->view('viewabout',$data);
    }


}

/* End of file About.php */
/* Location: ./application/controllers/About.php */