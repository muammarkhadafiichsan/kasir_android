<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();



        $this->load->model("Model_login");
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header1');
            $this->load->view('form/login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $login_admin = $this->db->get_where('login_admin', ['username' => $username])->row_array();


            if ($login_admin) {
                //cek password

                if (password_verify($password, $login_admin['password'])) {
                    $data = [
                        'username' => $login_admin['username'],
                        'role_id' => $login_admin['role_id']

                    ];
                    $this->session->set_userdata($data);
                    redirect('Body/index');
                } else {

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                        username atau password belum terdaftar 
                   </div>');
                    redirect('login/index');
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }
    public function changePassword()
    {

        $data['login_admin'] = $this->db->get_where('login_admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('form/resetpass', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['login_admin']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('login/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('login_admin');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('auth/changepassword');
                }
            }
        }
    }
}
