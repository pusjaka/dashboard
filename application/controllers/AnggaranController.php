<?php

class AnggaranController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('AnggaranModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_anggaran'])){
    		$data = array(
    			'total_anggaran' => parent::post('total_anggaran'),
    			'realisasi_anggaran' => parent::post('realisasi_anggaran'),
    			'tanggal_anggaran' => parent::post('tanggal_anggaran'),
			);

			$simpan = parent::model('AnggaranModel')->tambah_anggaran($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('anggaran');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('anggaran');
			}
		} else if(isset($_POST['simpan']) && isset($_POST['id_anggaran'])){
			$data = array(
    			'total_anggaran' => parent::post('total_anggaran'),
    			'realisasi_anggaran' => parent::post('realisasi_anggaran'),
    			'tanggal_anggaran' => parent::post('tanggal_anggaran'),
			);

			$simpan = parent::model('AnggaranModel')->update_anggaran($_POST['id_anggaran'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('anggaran');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('anggaran');
			}
		} else {
			$data['title'] = 'Anggaran';
			$data['anggaran'] = parent::model('AnggaranModel')->lihat_semua_anggaran();

			parent::template('anggaran/dashboard',$data);
		}
    }

    public function kegiatan_ptpp()
    {
    	if (isset($_POST['simpan'])){
    		$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
			);

			$simpan = parent::model('KegiatanModel')->tambah_kegiatan_ptpp($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-ptpp');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-ptpp');
			}
		} else {
			$data['title'] = 'Kegiatan PTPP';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_ptpp();

			parent::template('ptpp/kegiatan',$data);
		}
    }

    public function kegiatan_pe()
    {
    	if (isset($_POST['simpan'])){
    		$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
			);

			$simpan = parent::model('KegiatanModel')->tambah_kegiatan_pe($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-pe');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-pe');
			}
		} else {
			$data['title'] = 'Kegiatan PE';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_pe();

			parent::template('pe/kegiatan',$data);
		}
    }

    public function simpananQurbanAqikah()
    {
        $data['title'] = 'Simpanan Aqikah/Qurban';
        $data['aqikahQurban'] = parent::model('SimpananModel')->lihat_semua()->result_array();

        parent::template('simpanan/aqikahQurban',$data);
    }

    public function simpananUmrah()
    {
        $data['title'] = 'Simpanan Aqikah/Qurban';
        $data['umrah'] = parent::model('SimpananModel')->lihat_semua()->result_array();

        parent::template('simpanan/umrah',$data);
    }

    public function simpananIdulFitri()
    {
        $data['title'] = 'Simpanan Aqikah/Qurban';
        $data['idulFitri'] = parent::model('SimpananModel')->lihat_semua()->result_array();

        parent::template('simpanan/idulFitri',$data);
    }

    public function simpananWadiah()
    {
        $data['title'] = 'Simpanan Aqikah/Qurban';
        $data['wadiah'] = parent::model('SimpananModel')->lihat_semua()->result_array();

        parent::template('simpanan/wadiah',$data);
    }

}
