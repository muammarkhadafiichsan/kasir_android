<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();



        $this->load->model("Model_login");
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header1');
            $this->load->view('admin/form_login');
            $this->load->view('admin/footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $akun = $this->db->get_where('akun', ['username' => $username])->row_array();


            if ($akun) {
                //cek password

                if (password_verify($password, $akun['password'])) {
                    $data = [
                        'username' => $akun['username'],
                        'role_id' => $akun['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    redirect('Admin/dashboard');
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        username belum terdaftar
                   </div>');
                    redirect('Auth/login');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
    public function changePassword()
    {

        $data['akun'] = $this->db->get_where('akun', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/body', $data);
            $this->load->view('admin/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['akun']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('auth/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('akun');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('auth/changepassword');
                }
            }
        }
    }
}
