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

	public function hapus($id){
		$query = array(
			'id' => $id
		);
		$hapus = parent::model('SuratModel')->hapus($query);
		if ($hapus > 0 ){
			parent::alert('alert','sukses_hapus');
			redirect('persuratan');
		} else {
			parent::alert('alert','gagal_hapus');
			redirect('persuratan');
		}
	}

}
