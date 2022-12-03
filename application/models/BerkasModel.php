<?php

class BerkasModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua_berkas(){
		$query = $this->db->query("SELECT * FROM berkas ORDER BY created_at DESC");
		return $query->result(); // return berupa array objek
	}

	public function tambah_berkas($data){
		return parent::insert_with_status('berkas',$data);
	}
	
	public function update_berkas($id,$data){
		return parent::update_table_with_status('berkas','id',$id,$data);
	}

	public function hapus($query){
		return parent::delete_row_with_status('berkas',$query);
	}
}
