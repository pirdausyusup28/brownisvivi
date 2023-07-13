<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('client/v_produk');
  }

}


/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */
