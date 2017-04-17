<?php
class M_penjualan extends CI_Model {
	function barang() {
		return $this->db->get('tbl_barang');
	}

	function get_nota() {
		$this->db->select_max('nonota');
		$this->db->from('tbl_penjualan');
		return $this->db->get();
	}

	function lihat_jual() {
		return $this->db->get('tbl_penjualan');
	}

	function det_jual($nonota) {
		return $this->db->get_where('tbl_detail_jual',array('nonota' => $nonota));
	}
}