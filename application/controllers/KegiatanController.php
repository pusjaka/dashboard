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
    	if (isset($_POST['simpan']) && !isset($_POST['id_kegiatan'])){
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
		} else if (isset($_POST['simpan']) && isset($_POST['id_kegiatan'])){
			$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
			
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
				'updated_at' => $date->format('Y-m-d H:i:s'),
			);

			$simpan = parent::model('KegiatanModel')->update_kegiatan_ptpp($_POST['id_kegiatan'], $data);

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

    public function subkegiatan_ptpp($id)
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_sub_kegiatan'])){
    		$data = array(
    			'nama_proses' => parent::post('nama_kegiatan'),
    			'status' => parent::post('status_kegiatan'),
    			'completion' => parent::post('completion'),
    			'deskripsi' => parent::post('keterangan'),
    			'id_kegiatan' => parent::post('id_kegiatan'),
    			'bidang_kegiatan' => parent::post('bidang_kegiatan'),
    			'tanggal_mulai' => parent::post('tanggal_kegiatan'),
    			'tanggal_selesai' => parent::post('tanggal_kegiatan_end'),
			);

			$simpan = parent::model('KegiatanModel')->tambah_sub_kegiatan_ptpp($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-ptpp/log/'.parent::post('id_kegiatan').'');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-ptpp/log/'.parent::post('id_kegiatan').'');
			}

		} else if (isset($_POST['simpan']) && isset($_POST['id_sub_kegiatan'])){
			$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
			
			$data = array(
    			'nama_proses' => parent::post('nama_kegiatan'),
    			'status' => parent::post('status_kegiatan'),
    			'completion' => parent::post('completion'),
    			'deskripsi' => parent::post('keterangan'),
    			'id_kegiatan' => parent::post('id_kegiatan'),
    			//'bidang_kegiatan' => parent::post('bidang_kegiatan'),
    			'tanggal_mulai' => parent::post('tanggal_kegiatan'),
    			'tanggal_selesai' => parent::post('tanggal_kegiatan_end'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
			);

			$simpan = parent::model('KegiatanModel')->update_log_kegiatan_ptpp($_POST['id_sub_kegiatan'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-ptpp/log/'.parent::post('id_kegiatan').'');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-ptpp/log/'.parent::post('id_kegiatan').'');
			}
		} else {
			$data['title'] = 'Kegiatan KTP';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_log_kegiatan_ptpp($id, 'KTP');
			$data['id_kegiatan'] = $id;

			parent::template('ptpp/sub_kegiatan',$data);
		}
    }

	public function subkegiatan_pe($id)
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_sub_kegiatan'])){
    		$data = array(
    			'nama_proses' => parent::post('nama_kegiatan'),
    			'status' => parent::post('status_kegiatan'),
    			'completion' => parent::post('completion'),
    			'deskripsi' => parent::post('keterangan'),
    			'id_kegiatan' => parent::post('id_kegiatan'),
    			'bidang_kegiatan' => parent::post('bidang_kegiatan'),
    			'tanggal_mulai' => parent::post('tanggal_kegiatan'),
    			'tanggal_selesai' => parent::post('tanggal_kegiatan_end'),
			);

			$simpan = parent::model('KegiatanModel')->tambah_sub_kegiatan_pe($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-pe/log/'.parent::post('id_kegiatan').'');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-pe/log/'.parent::post('id_kegiatan').'');
			}

		} else if (isset($_POST['simpan']) && isset($_POST['id_sub_kegiatan'])){
			$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
			
			$data = array(
    			'nama_proses' => parent::post('nama_kegiatan'),
    			'status' => parent::post('status_kegiatan'),
    			'completion' => parent::post('completion'),
    			'deskripsi' => parent::post('keterangan'),
    			'id_kegiatan' => parent::post('id_kegiatan'),
    			//'bidang_kegiatan' => parent::post('bidang_kegiatan'),
    			'tanggal_mulai' => parent::post('tanggal_kegiatan'),
    			'tanggal_selesai' => parent::post('tanggal_kegiatan_end'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
			);

			$simpan = parent::model('KegiatanModel')->update_log_kegiatan_pe($_POST['id_sub_kegiatan'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('kegiatan-pe/log/'.parent::post('id_kegiatan').'');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('kegiatan-pe/log/'.parent::post('id_kegiatan').'');
			}
		} else {
			$data['title'] = 'Kegiatan LLA';
			$data['kegiatan'] = parent::model('KegiatanModel')->lihat_log_kegiatan_pe($id, 'LLA');
			$data['id_kegiatan'] = $id;

			parent::template('pe/sub_kegiatan',$data);
		}
    }

    public function kegiatan_pe()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_kegiatan'])){
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
		} else if (isset($_POST['simpan']) && isset($_POST['id_kegiatan'])){
			$date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
			
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
				'updated_at' => $date->format('Y-m-d H:i:s'),
			);

			$simpan = parent::model('KegiatanModel')->update_kegiatan_pe($_POST['id_kegiatan'], $data);

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

	public function hapus($id, $url){
		$query = array(
			'id' => $id
		);
		$hapus = parent::model('KegiatanModel')->hapus('kegiatan_'.$url, $query);
		if ($hapus > 0 ){
			parent::alert('alert','sukses_hapus');
			redirect('kegiatan-'.$url);
		} else {
			parent::alert('alert','gagal_hapus');
			redirect('kegiatan-'.$url);
		}
	}

	public function hapus_sub_kegiatan($id,$id_kegiatan,$bidang){
		$query = array(
			'id' => $id,
		);

		$hapus = parent::model('KegiatanModel')->hapus('log_status_kegiatan', $query);
		if ($hapus > 0 ){
		
			parent::alert('alert','sukses_hapus');
			if($bidang == 'KTP'){
				redirect('kegiatan-ptpp/log/'.$id_kegiatan);
			}else{
				redirect('kegiatan-pe/log/'.$id_kegiatan);
			}
		} else {
			parent::alert('alert','gagal_hapus');
			if($bidang == 'KTP'){
				redirect('kegiatan-ptpp/log/'.$id_kegiatan);
			}else{
				redirect('kegiatan-pe/log/'.$id_kegiatan);
			}
		}
	}

}
