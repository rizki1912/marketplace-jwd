<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){

    parent:: __construct();
	
	$this->load->model(array('produk_model'));
    $this->load->library('form_validation');
    
  }

	
	public function index()
	{

		$produk = $this->produk_model->get_all_produk();

		$data = array(
			'page' => 'produk/index',
			'judul' => 'Produk',
			'produk' => $produk
		);

		$this->load->view('theme/index', $data);
	}


  public function add()
	{
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga Produk', 'required');
		$this->form_validation->set_rules('stok', 'Stok Produk', 'required');

		if ($this->form_validation->run() == false) {
			$data = array(
				'page' => 'produk/add',
				'judul' => 'Tambah Data Produk'
			);
	
			$this->load->view('theme/index', $data);
		} else {

			$input = array(
				'nama_produk' => $this->input->post('nama_produk'),
				'kategori_produk' => $this->input->post('kategori_produk'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok')
			);

			$this->produk_model->create_produk($input);

			redirect('produk');
		}

		
	}

	
    // Menampilkan form edit produk
    public function edit($id)
    {

		$produk = $this->produk_model->get_produk_by_id($id);

		$data = array(
			'page' => 'produk/edit',
			'judul' => 'Produk',
			'produk' => $produk
		);

		$this->load->view('theme/index', $data);
    }
    
    // Mengupdate data produk
    public function update($id)
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
    $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');
    $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
    $this->form_validation->set_rules('stok', 'Stok Produk', 'required');

    if ($this->form_validation->run() == false) {
        $data = array(
            'page' => 'produk/edit',
            'judul' => 'Edit Data Produk'
        );

        $this->load->view('theme/index', $data);
    } else {
        $input = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'kategori_produk' => $this->input->post('kategori_produk'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok')
        );

        $this->produk_model->update_produk($id, $input);

        redirect('produk');
    }
    }
    
    // Menghapus data produk
    public function delete($id)
    {
        $this->produk_model->delete_produk($id);
        redirect('produk');
    }

}
