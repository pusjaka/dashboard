<?php

class AnggaranModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua_anggaran(){
		$query = $this->db->query("SELECT * FROM anggaran ORDER BY tanggal_anggaran DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_current_anggaran(){
		$query = $this->db->query("SELECT * FROM anggaran WHERE year(tanggal_anggaran) = ".date('Y')." ORDER BY tanggal_anggaran DESC");
		return $query->row(); // return berupa array objek
	}

	public function tambah_anggaran($data){
		return parent::insert_with_status('anggaran',$data);
	}
	
	public function update_anggaran($id,$data){
		return parent::update_table_with_status('anggaran','id',$id,$data);
	}

	public function hapus($query){
		return parent::delete_row_with_status('anggaran',$query);
	}
}
