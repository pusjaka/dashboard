<?php

class KehadiranModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua(){
		$query = $this->db->query("SELECT * FROM kehadiran ORDER BY tanggal_kehadiran DESC");
		return $query->result(); // return berupa array objek
	}

	public function tambah($data){
		return parent::insert_with_status('kehadiran',$data);
	}

	public function update($id,$data){
		return parent::update_table_with_status('kehadiran','id',$id,$data);
	}

	public function hapus($query){
		return parent::delete_row_with_status('simkopsis_anggota',$query);
	}
}
