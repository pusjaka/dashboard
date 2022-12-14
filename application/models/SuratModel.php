<?php

class SuratModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua_surat(){
		$query = $this->db->query("SELECT * FROM surat ORDER BY id DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_current_surat(){
		$query = $this->db->query("SELECT * FROM surat ORDER BY tanggal_surat DESC");
		return $query->result(); // return berupa array objek
	}

	public function tambah_surat($data){
		return parent::insert_with_status('surat',$data);
	}

	
	public function hapus($query){
		return parent::delete_row_with_status('surat',$query);
	}
}
