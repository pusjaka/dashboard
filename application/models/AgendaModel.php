<?php

class AgendaModel extends GLOBAL_Model{

	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua(){
		return parent::get_array_of_table('pusjak_agenda');
	}

	public function tambah($data){
		return parent::insert_with_status('pusjak_agenda',$data);
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

	public function ubah($id,$data){
		return parent::update_table_with_status('pusjak_agenda','agenda_id',$id,$data);
	}

	public function hapus($query){
		return parent::delete_row_with_status('pusjak_agenda',$query);
	}
}
