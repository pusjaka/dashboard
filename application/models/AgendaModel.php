<?php

class AgendaModel extends GLOBAL_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua_dashboard(){
		return parent::get_array_of_table('agenda');
	}

	public function lihat_semua(){
		$query = $this->db->query("SELECT * FROM agenda ORDER BY id DESC");
		return $query->result(); // return berupa array objek
	}

	public function tambah($data){
		return parent::insert_with_status('agenda',$data);
	}

	public function lihat_anggota($query){
		return parent::get_array_of_row('pusjak_agenda',$query);
	}

	public function lihat_simpanan($query){
		return parent::get_object_of_row('pusjak_agenda',$query);
	}

	public function lihat_pinjaman($query){
		return parent::get_object_of_row('pusjak_agenda',$query);
	}

	public function update_agenda($id,$data){
		return parent::update_table_with_status('agenda','id',$id,$data);
	}

	public function hapus($query){
		return parent::delete_row_with_status('agenda',$query);
	}
}
