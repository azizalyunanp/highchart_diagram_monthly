<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {	

	function __construct() {
		parent:: __construct();
		$this->load->model('M_penjualan');
	}

	function index() {
		$data = array(
			'barang' => $this->M_penjualan->barang()->result()
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('penjualan',$data);
		$this->load->view('template/footer');
	}

	function add_cart() {
		$data = array(
        	'id'      => $this->input->post('kode_brg',TRUE),
        	'qty'     => $this->input->post('jumlah',TRUE),
        	'price'   => $this->input->post('harga',TRUE),
        	'name'    => $this->input->post('nm_brg',TRUE),
		);
		$this->cart->insert($data);
		redirect('penjualan');
	}

	function get_nota() {
		$c_nota 	= $this->M_penjualan->get_nota()->num_rows();
		$nota 	= $this->M_penjualan->get_nota()->row_array();
		if($c_nota==0) {
			$isi = '1000';
		} else {
			$isi = $nota['nonota'] + 1;
		}
		return $isi;
	}

	function save_cart() {
		$total = 0;
		foreach ($this->cart->contents() as $items) { 
			$data[] = array(
			'nonota' 	=> $this->get_nota(),
        	'id_brg'	=> $items['id'],
        	'jml_beli'  => $items['qty'],
        	'harga'   	=> $items['price'],
        	'nama_brg'  => $items['name'],
			);
		$total += $items['price'];
		}
		$this->db->insert_batch('tbl_detail_jual',$data);

		//SAVE PENJUALAN 
		$data2 = array(
			'nonota' => $this->get_nota(),
			'total'  => $total
		);

		$this->db->insert('tbl_penjualan',$data2);
		$this->del_cart();
		redirect('penjualan');
	}

	function del_cart() {
		foreach ($this->cart->contents() as $items) { 
		$data[] = array(
			'rowid' => $items['rowid'],
			'qty' 	=> 0
		);
		}
		$this->cart->update($data);
	}

	function cek_jual() {
		$data = array(
			'jual' => $this->M_penjualan->lihat_jual()->result() 
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('cek_jual',$data);
		$this->load->view('template/footer');
	}

	function det_jual($id) {
		$data = array(
			'jual' => $this->M_penjualan->det_jual($id)->result() 
		);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('det_jual',$data);
		$this->load->view('template/footer');
	}

}