<?php

class KehadiranController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('KehadiranModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function kehadiran()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_kehadiran'])){
    		$data = array(
    			'TB' => parent::post('tb') ?? 0,
    			'CUTI' => parent::post('cuti') ?? 0,
    			'DL' => parent::post('dl') ?? 0,
    			'PKP' => parent::post('pkp') ?? 0,
    			'S' => parent::post('s') ?? 0,
    			'tanggal_kehadiran' => parent::post('tanggal_kehadiran'),
			);

			$simpan = parent::model('KehadiranModel')->tambah($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kehadiran');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kehadiran');
			}
		} else if (isset($_POST['simpan']) && isset($_POST['id_kehadiran'])){
            $data = array(
    			'TB' => parent::post('tb') ?? 0,
    			'CUTI' => parent::post('cuti') ?? 0,
    			'DL' => parent::post('dl') ?? 0,
    			'PKP' => parent::post('pkp') ?? 0,
    			'S' => parent::post('s') ?? 0,
    			'tanggal_kehadiran' => parent::post('tanggal_kehadiran'),
			);

			$simpan = parent::model('KehadiranModel')->update($_POST['id_kehadiran'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kehadiran');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kehadiran');
			}
        } else {
			$data['title'] = 'Kehadiran';
			$data['kehadiran'] = parent::model('KehadiranModel')->lihat_semua();

			parent::template('tu/kehadiran',$data);
		}
    }

	public function hapus($id){
		$query = array(
			'id' => $id
		);
		$hapus = parent::model('KehadiranModel')->hapus($query);
		if ($hapus > 0 ){
			parent::alert('alert','sukses_hapus');
			redirect('kehadiran');
		} else {
			parent::alert('alert','gagal_hapus');
			redirect('kehadiran');
		}
	}

}
