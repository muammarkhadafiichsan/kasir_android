<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();



        $this->load->model("Model_login");
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|is_unique[akun.nama]');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[akun.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header1');
            $this->load->view('admin/form_registrasi');
            $this->load->view('admin/footer');
        } else {
            $data = array(

                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1
            );
            $this->db->insert('akun', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
           Data Berhasil ditambahkan, silahkan login!
          </div>');
            redirect('auth/login');
        }
    }
}
