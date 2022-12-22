<?php

class KegiatanModel extends GLOBAL_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lihat_semua_kegiatan_tu(){
		$query = $this->db->query("SELECT * FROM kegiatan_tu ORDER BY tanggal_kegiatan DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_semua_kegiatan_ptpp(){
		$query = $this->db->query("SELECT * FROM kegiatan_ptpp ORDER BY id DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_log_kegiatan_ptpp($id, $bidang){
		$query = $this->db->query("SELECT * FROM log_status_kegiatan WHERE id_kegiatan = $id AND bidang_kegiatan = '$bidang' ORDER BY id DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_log_kegiatan_pe($id, $bidang){
		$query = $this->db->query("SELECT * FROM log_status_kegiatan WHERE id_kegiatan = $id AND bidang_kegiatan = '$bidang' ORDER BY id DESC");
		return $query->result(); // return berupa array objek
	}

	public function lihat_semua_kegiatan_pe(){
		$query = $this->db->query("SELECT * FROM kegiatan_pe ORDER BY tanggal_kegiatan DESC");
		return $query->result(); // return berupa array objek
	}

	public function tambah_kegiatan_tu($data){
		return parent::insert_with_status('kegiatan_tu',$data);
	}

	public function update_kegiatan_tu($id, $data){
		return parent::update_table_with_status('kegiatan_tu', 'id', $id, $data);
	}

	public function update_kegiatan_ptpp($id, $data){
		return parent::update_table_with_status('kegiatan_ptpp', 'id', $id, $data);
	}

	public function update_log_kegiatan_ptpp($id, $data){
		return parent::update_table_with_status('log_status_kegiatan', 'id', $id, $data);
	}

	public function update_log_kegiatan_pe($id, $data){
		return parent::update_table_with_status('log_status_kegiatan', 'id', $id, $data);
	}

	public function update_kegiatan_pe($id, $data){
		return parent::update_table_with_status('kegiatan_pe', 'id', $id, $data);
	}

	public function tambah_kegiatan_ptpp($data){
		return parent::insert_with_status('kegiatan_ptpp',$data);
	}

	public function tambah_sub_kegiatan_ptpp($data){
		return parent::insert_with_status('log_status_kegiatan',$data);
	}

	public function tambah_sub_kegiatan_pe($data){
		return parent::insert_with_status('log_status_kegiatan',$data);
	}

	public function tambah_kegiatan_pe($data){
		return parent::insert_with_status('kegiatan_pe',$data);
	}

	public function hapus($url, $query){
		return parent::delete_row_with_status($url, $query);
	}
}
