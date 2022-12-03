<?php

class BerkasController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('BerkasModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_berkas'])){
    		$data = array(
    			'nama_berkas' => parent::post('nama_berkas'),
    			'url_berkas' => parent::post('url_berkas'),
			);

			$simpan = parent::model('BerkasModel')->tambah_berkas($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('berkas');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('berkas');
			}
		} else if(isset($_POST['simpan']) && isset($_POST['id_berkas'])){
			$data = array(
    			'nama_berkas' => parent::post('nama_berkas'),
    			'url_berkas' => parent::post('url_berkas'),
			);

			$simpan = parent::model('BerkasModel')->update_anggaran($_POST['id_berkas'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('berkas');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('berkas');
			}
		} else {
			$data['title'] = 'Berkas';
			$data['berkas'] = parent::model('BerkasModel')->lihat_semua_berkas();

			parent::template('berkas/dashboard',$data);
		}
    }

}
