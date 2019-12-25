<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();


		$this->load->model("Model_produk");
	}


	public function index()
	{
		$data['produk'] = $this->Model_produk->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
		$this->load->view('form/produk', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_produk()
	{
		$Id = $this->input->post('Id');
		$nama_produk = $this->input->post('nama_produk');
		$harga_modal = $this->input->post('harga_modal');
		$harga_jual = $this->input->post('harga_jual');
		$id_kategori = $this->input->post('id_kategori');


		$gambar = $_FILES['gambar']['name'];
		if ($gambar = '') {
		} else {
			$config['upload_path'] =  './assets/img';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name']     = $_FILES['gambar']['name'];
			$config['max_size']      = 9048; // 9mb

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "Gambar gagal di Upload bray!!!";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'Id' => $Id,
			'nama_produk' => $nama_produk,
			'harga_modal' => $harga_modal,
			'harga_jual' => $harga_jual,
			'gambar' => $gambar,
			'id_kategori' => $id_kategori

		);


		$this->Model_produk->input_produk($data, 'produk');
		redirect('Produk/index');
	}
	public function list()
	{
		$data['produk'] = $this->Model_produk->tampil_data()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('form/list_produk', $data);
		$this->load->view('admin/footer');
	}

	public function edit($Id)
	{
		$where = array('Id' => $Id);
		$data['produk'] = $this->Model_produk->edit_produk($where, 'produk')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('form/edit_produk', $data);
		$this->load->view('admin/footer');
	}

	public function update()
	{
		$Id = $this->input->post('Id');
		$nama_produk = $this->input->post('nama_produk');
		$harga_modal = $this->input->post('harga_modal');
		$harga_jual = $this->input->post('harga_jual');






		$data = array(
			'nama_produk' => $nama_produk,
			'harga_modal' => $harga_modal,
			'harga_jual' => $harga_jual





		);

		$where = array(
			'Id' => $Id
		);

		$this->Model_produk->update($where, $data, 'produk');
		redirect('Produk/list');
	}

	public function hapus($Id)
	{
		$where = array('Id' => $Id);
		$this->Model_produk->hapus($where, 'produk');
		redirect('Produk/list');
	}
}
