<?php

class KegiatanController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('KegiatanModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function kegiatan_tu()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_kegiatan'])){
    		$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
			);

			$simpan = parent::model('KegiatanModel')->tambah_kegiatan_tu($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-tu');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-tu');
			}
		} else if (isset($_POST['simpan']) && isset($_POST['id_kegiatan'])){
			$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
			);

			$simpan = parent::model('KegiatanModel')->update_kegiatan_tu($_POST['id_kegiatan'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-tu');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-tu');
			}
		}else {
			$data['title'] = 'Kegiatan TU';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_tu();

			parent::template('tu/kegiatan',$data);
		}
    }

    public function kegiatan_ptpp()
    {
    	if (isset($_POST['simpan'])){
    		$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'PIC' => parent::post('pic'),
    			'tingkat_prioritas' => parent::post('prioritas'),
    			'biaya' => parent::post('biaya'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'completion' => parent::post('completion'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
    			'tanggal_kegiatan_end' => parent::post('tanggal_kegiatan_end'),
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
			$data['title'] = 'Kegiatan KTP';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_ptpp();

			parent::template('ptpp/kegiatan',$data);
		}
    }

    public function kegiatan_pe()
    {
    	if (isset($_POST['simpan'])){
			$data = array(
    			'nama_kegiatan' => parent::post('nama_kegiatan'),
    			'PIC' => parent::post('pic'),
    			'tingkat_prioritas' => parent::post('prioritas'),
    			'biaya' => parent::post('biaya'),
    			'progress' => parent::post('progress'),
    			'keterangan' => parent::post('keterangan'),
    			'completion' => parent::post('completion'),
    			'tanggal_kegiatan' => parent::post('tanggal_kegiatan'),
    			'tanggal_kegiatan_end' => parent::post('tanggal_kegiatan_end'),
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
			$data['title'] = 'Kegiatan LLA';
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
