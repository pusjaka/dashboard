<?php

class AgendaController extends GLOBAL_Controller
{
    public function __construct()
    {
        parent::__construct();
		$model = array('AgendaModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
        $data['title'] = 'Daftar Agenda ';
		$data['agenda'] = null;

        parent::dashboardPage('agenda/index',$data);
    }

	public function load(){
		$agenda = parent::model('AgendaModel')->lihat_semua_dashboard();

		foreach($agenda as $row):
			$events[] = array(
				'id' => $row['id'],
				'title' => $row['nama'],
				'start' => str_replace(' ', 'T', $row['start_date']),
				'end' => str_replace(' ', 'T', $row['end_date']),
				'backgroundColor' => $row['color'] ?? '#ffff80',
				'lokasi' => $row['lokasi'],
				'pic' => $row['pic'],
				'peserta' => $row['jumlah_peserta'],
				'description' => $row['deskripsi'],
			);
		endforeach;

		echo json_encode($events);
	}

	public function index()
    {
    	if (isset($_POST['simpan']) && !isset($_POST['id_agenda'])){

    		$data = array(
    			'nama' => parent::post('nama_agenda'),
    			'start_date' => date("Y-m-d", strtotime(parent::post('tanggal_mulai'))).' '.parent::post('waktu_mulai').':00',
    			'end_date' => date("Y-m-d", strtotime(parent::post('tanggal_selesai'))).' '.parent::post('waktu_selesai').':00',
    			'lokasi' => parent::post('lokasi'),
    			'pic' => parent::post('pic'),
    			'jumlah_peserta' => parent::post('peserta'),
    			'urgensi' => parent::post('urgensi'),
    			'deskripsi' => parent::post('deskripsi'),
				'color' => parent::post('color')
			);

			$simpan = parent::model('AgendaModel')->tambah($data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('agenda');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('agenda');
			}
		} else if(isset($_POST['simpan']) && isset($_POST['id_agenda'])){

    		$data = array(
    			'nama' => parent::post('nama_agenda'),
    			'start_date' => date("Y-m-d", strtotime(parent::post('tanggal_mulai'))).' '.parent::post('waktu_mulai').':00',
    			'end_date' => date("Y-m-d", strtotime(parent::post('tanggal_selesai'))).' '.parent::post('waktu_selesai').':00',
    			'lokasi' => parent::post('lokasi'),
    			'pic' => parent::post('pic'),
    			'jumlah_peserta' => parent::post('peserta'),
    			'urgensi' => parent::post('urgensi'),
    			'deskripsi' => parent::post('deskripsi'),
				'color' => parent::post('color')
			);

			$simpan = parent::model('AgendaModel')->update_agenda($_POST['id_agenda'], $data);

			if ($simpan > 0 ){
				parent::alert('alert','sukses_tambah');
				redirect('agenda');
			} else {
				parent::alert('alert','gagal_tambah');
				redirect('agenda');
			}
		} else {
			$data['title'] = 'Agenda';
			$data['agenda'] = parent::model('AgendaModel')->lihat_semua();

			parent::template('agenda/dashboard',$data);
		}
    }

	public function hapus($id){
		$query = array(
			'id' => $id
		);
		$hapus = parent::model('AgendaModel')->hapus($query);
		if ($hapus > 0 ){
			parent::alert('alert','sukses_hapus');
			redirect('agenda');
		} else {
			parent::alert('alert','gagal_hapus');
			redirect('agenda');
		}
	}

    public function detail($id)
    {
        $data['title'] = 'Data anggota ';
		$query = array(
			'anggota_id' => $id
		);
		$data['anggota'] = parent::model('AnggotaModel')->lihat_anggota($query);
		$querySimpanan = array(
			'simpanan_anggota_id' => $id
		);
		$data['simpanan'] = parent::model('AnggotaModel')->lihat_simpanan($querySimpanan)->result_array();
		$queryPinjaman = array(
			'pinjaman_anggota_id' => $id
		);
		$data['pinjaman'] = parent::model('AnggotaModel')->lihat_pinjaman($queryPinjaman)->result_array();

        parent::template('anggota/detail',$data);
    }

}
