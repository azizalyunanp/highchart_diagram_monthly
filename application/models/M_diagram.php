<?php
class M_diagram extends CI_Model {


	function barang() {
		$this->db->select('*');
		$this->db->from('tbl_barang');
		return $this->db->get();
	}

	function laporan($id) {
		return $this->db->query("SELECT id_brg,MONTH(tanggal),sum(total) as totals FROM `tbl_laporan` WHERE id_brg = $id GROUP by id_brg,MONTH(tanggal) ORDER BY  MONTH(tanggal)");
	}
}