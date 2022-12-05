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

	public function hapus($id){
		$query = array(
			'id' => $id
		);
		$hapus = parent::model('AnggaranModel')->hapus($query);
		if ($hapus > 0 ){
			parent::alert('alert','sukses_hapus');
			redirect('anggaran');
		} else {
			parent::alert('alert','gagal_hapus');
			redirect('anggaran');
		}
	}

}
