<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result =  $this->db->where('username', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('login_admin');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
