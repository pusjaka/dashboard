<?php

class DashboardController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('AnggaranModel', 'SuratModel', 'KegiatanModel', 'KehadiranModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
		$data['title'] = 'Dashboard TU';
		$data['anggaran'] = parent::model('AnggaranModel')->lihat_semua_anggaran();
		$data['surat'] = parent::model('SuratModel')->lihat_semua_surat();
		$data['kegiatan_tu'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_tu();
		$data['kegiatan_ptpp'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_ptpp();
		$data['kegiatan_pe'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_pe();
		$data['kehadiran'] = parent::model('KehadiranModel')->lihat_semua();

		parent::dashboardPage('dashboard/index',$data);
    }

	public function get_dashboard_tu(){
		if(isset($_POST["tanggal"])){
			$output = '';
			$query_kegiatan = $this->db->query("SELECT * FROM kegiatan_tu WHERE tanggal_kegiatan = '".$_POST['tanggal']."' ORDER BY tanggal_kegiatan DESC");
			$result = $query_kegiatan->result();

			$output .= " 
					<table class='table table-bordered' id='dataTable-surat-tu' width='100%' cellspacing='0'>
										<thead>
											<tr>
												<th >Nama Kegiatan</th>
												<th >Progress</th>
												<th >Keterangan</th>
											</tr>
										</thead>
										<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $row){
					$output .= '
						<tr>
							<td>'.$row->nama_kegiatan.'</td>
							<td>'.$row->progress.'</td>
							<td>'.$row->keterangan.'</td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="5">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
			 
		}
	}

	public function get_dashboard_tu_surat(){
		if(isset($_POST["tanggal"])){
			$output = '';

			$query_surat = $this->db->query("SELECT * FROM surat WHERE tanggal_surat = '".$_POST['tanggal']."' ORDER BY tanggal_surat DESC");
			$result = $query_surat->result();

			$output .= " 
					<table class='table table-bordered' id='dataTable-surat-tu' width='100%' cellspacing='0'>
										<thead>
											<tr>
												<th >Unit Kerja</th>
												<th >Uraian</th>
												<th >Disposisi</th>
												<th >Catatan</th>
												<th >Follow Up</th>
												<th >Link Surat</th>
											</tr>
										</thead>
										<tbody>
			";

			if($query_surat->num_rows() > 0){
				foreach($result as $row){
					$output .= '
						<tr>
							<td>'.$row->unit_kerja.'</td>
							<td>'.$row->uraian.'</td>
							<td>'.$row->disposisi.'</td>
							<td>'.$row->catatan.'</td>
							<td>'.$row->follow_up.'</td>
							<td><a href="'.$row->url_surat.'">Download</a></td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="5">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
			 
		}
	}

	public function get_dashboard_pe_kegiatan(){
		if(isset($_POST["tanggal"])){
			$output = '';

			$query_kegiatan = $this->db->query("SELECT * FROM kegiatan_pe WHERE tanggal_kegiatan = '".$_POST['tanggal']."' ORDER BY tanggal_kegiatan DESC");
			$result = $query_kegiatan->result();

			$output .= " 
			<table class='table table-bordered' id='dataTable-kegiatan-pe' width='100%' cellspacing='0'>
								<thead>
									<tr>
										<th >Tanggal</th>
										<th >Nama Kegiatan</th>
										<th >Progress</th>
										<th >Keterangan</th>
										<th class='center'>AKSI</th>
									</tr>
								</thead>
								<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $row){
					$output .= '
						<tr>
							<td>'.$row->tanggal_kegiatan.'</td>
							<td>'.$row->nama_kegiatan.'</td>
							<td>'.$row->progress.'</td>
							<td>'.$row->keterangan.'</td>
							<td><div class="row">
								<a href="#" class="btn-flat waves-effect waves-orange col l6 center" title="ubah data">
									<i class="mdi-content-create orange-text"></i>
								</a>
							</div></td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="5">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
		}
	}

	public function get_dashboard_ptpp_kegiatan(){
		if(isset($_POST["tanggal"])){
			$output = '';

			$query_kegiatan = $this->db->query("SELECT * FROM kegiatan_ptpp WHERE tanggal_kegiatan = '".$_POST['tanggal']."' ORDER BY tanggal_kegiatan DESC");
			$result = $query_kegiatan->result();

			$output .= " 
			<table class='table table-bordered' id='dataTable-kegiatan-pe' width='100%' cellspacing='0'>
								<thead>
									<tr>
										<th >Tanggal</th>
										<th >Nama Kegiatan</th>
										<th >Progress</th>
										<th >Keterangan</th>
									</tr>
								</thead>
								<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $row){
					$output .= '
						<tr>
							<td>'.$row->tanggal_kegiatan.'</td>
							<td>'.$row->nama_kegiatan.'</td>
							<td>'.$row->progress.'</td>
							<td>'.$row->keterangan.'</td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="5">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
		}
	}

	public function get_dashboard_tu_kehadiran(){
		$query_kehadiran = $this->db->query("SELECT * FROM kehadiran WHERE tanggal_kehadiran = '".$_POST['tanggal']."' ORDER BY tanggal_kehadiran DESC");
		$result = $query_kehadiran->result();

		$data = array(
			'cuti' => $result[0]->CUTI,
			'tb' => $result[0]->TB,
			'dl' => $result[0]->DL,
			'pkp' => $result[0]->PKP,
			's' => $result[0]->S,
		);
	}

	public function dashboard_ptpp()
    {
		$data['title'] = 'Dashboard PTPP';
		$data['kegiatan_ptpp'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_ptpp();

		parent::dashboardPage('dashboard_ptpp/index',$data);
    }

	public function dashboard_pe()
    {
		$data['title'] = 'Dashboard PE';
		$data['kegiatan_pe'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_pe();

		parent::dashboardPage('dashboard_pe/index',$data);
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
