<?php
class Model_page extends CI_Model
{

	function tampil($table){
		return $this->db->get_where($table);
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function hapus($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function layanan($id){
		$query= $this->db->get_where('layanan',array('kd_layanan'=>$id));
		return $query;
	}

	function pelanggan($id){
		$query= $this->db->get_where('pelanggan',array('kd_pelanggan'=>$id));
		return $query;
	}

}