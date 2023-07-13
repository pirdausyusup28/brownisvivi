<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
    }

    public function index()
    {
        $this->load->view('menu');
        $this->load->view('viewregister');
    }

    public function profil()
    {
        $ses = $this->session->userdata('id');
        $data['p'] = $this->Muser->profil($ses);
        $this->load->view('menu');
        $this->load->view('viewprofil',$data);
    }

    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                    'password' => $this->input->post('password', TRUE)
            );
        $hasil = $this->Muser->cek_usercs($data);
        // var_dump($data);
        // die;
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['id'] = $sess->id;
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $this->session->set_userdata($sess_data);
            }
            $this->session->set_flashdata('msg','Selamat Registrasi sudah berhasil, sekrang anda sudah bisa berbelanja di Tehsijeunishop.id');
            redirect('Home');     
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    public function savedata()
    {
        /*Check submit button */
        if($this->input->post('save'))
        {
            $data['username']=$this->input->post('username');
            $data['alamat']=$this->input->post('alamat');
            $data['notelp']=$this->input->post('notelp');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $response=$this->Muser->saveregistrasi($data);
                if($response==true){ 
                        $data = array('username' => $this->input->post('username', TRUE),
                        'password' => $this->input->post('password', TRUE)
                );
                $hasil = $this->Muser->cek_usercs($data);
                if ($hasil->num_rows() == 1) {
                    foreach ($hasil->result() as $sess) {
                        $sess_data['logged_in'] = 'Sudah Loggin';
                        $sess_data['id'] = $sess->id;
                        $sess_data['username'] = $sess->username;
                        $sess_data['level'] = $sess->level;
                        $this->session->set_userdata($sess_data);
                    }
                    redirect('Home');
                }
                else {
                    echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
                }
            }
            else{
                    echo "<script>alert('Registrasi Failed');</script>";
                    redirect('Login','refresh');
            }
        }
    }

    public function updatedataprofil()
    {
        /*Check submit button */
        if($this->input->post('save'))
        {
            $data['id']=$this->input->post('id');
            $data['username']=$this->input->post('username');
            $data['alamat']=$this->input->post('alamat');
            $data['notelp']=$this->input->post('notelp');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $response = $this->Muser->updateprofil($data);
            redirect('Home','refresh');
        }
    }
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */