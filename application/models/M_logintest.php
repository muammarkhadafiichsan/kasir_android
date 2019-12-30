<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class M_logintest extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function cek_login($username, $password)
    {
        // $hash = $this->db->query("SELECT password FROM pengguna WHERE email='$email'");
        // $pass = password_verify($password, $hash);
        // $password = password_hash($password);

        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $data = $this->db->get('login_kasir')->row_array();
        return $data;
    }
    function cek_trans($id_transaksi)
    {
        // $hash = $this->db->query("SELECT password FROM pengguna WHERE email='$email'");
        // $pass = password_verify($password, $hash);
        // $password = password_hash($password);

        $this->db->where('id_transaksi', $id_transaksi);
        $data = $this->db->get('transaksi')->row_array();
        return $data;
    }
    function cek_total($nama_pelanggan)
    {
        // $hash = $this->db->query("SELECT password FROM pengguna WHERE email='$email'");
        // $pass = password_verify($password, $hash);
        // $password = password_hash($password);

        $this->db->where('nama_pelanggan', $nama_pelanggan);

        $data = $this->db->get('keranjang')->row_array();
        return $data;
    }
}
