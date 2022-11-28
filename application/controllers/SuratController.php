<?php

class SuratController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('SuratModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
    	if (isset($_POST['simpan'])){
    		$data = array(
    			'unit_kerja' => parent::post('unit_kerja'),
    			'uraian' => parent::post('uraian'),
    			'disposisi' => parent::post('disposisi'),
    			'catatan' => parent::post('catatan'),
    			'follow_up' => parent::post('follow_up'),
    			'url_surat' => parent::post('url_surat'),
    			'tanggal_surat' => parent::post('tanggal_surat'),
			);

			$simpan = parent::model('SuratModel')->tambah_surat($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('persuratan');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('persuratan');
			}
		} else {
			$data['title'] = 'Persuratan';
			$data['surat'] = parent::model('SuratModel')->lihat_semua_surat();

			parent::template('persuratan/dashboard',$data);
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
