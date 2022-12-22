<?php

class DashboardController extends GLOBAL_Controller{

    public function __construct()
    {
        parent::__construct();
        $model = array('AnggaranModel', 'SuratModel', 'KegiatanModel', 'KehadiranModel', 'BerkasModel');
		$this->load->model($model);
		if (!parent::hasLogin()) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
    }

    public function dashboard()
    {
		$data['title'] = 'Dashboard TU';
		$data['anggaran'] = parent::model('AnggaranModel')->lihat_current_anggaran();
		$data['surat'] = parent::model('SuratModel')->lihat_semua_surat();
		$data['kegiatan_tu'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_tu();
		$data['kehadiran'] = parent::model('KehadiranModel')->lihat_current();
		$data['berkas'] = parent::model('BerkasModel')->lihat_semua_berkas();

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

	public function get_detail_kegiatan_pe(){
		$output = '';

			$query_kegiatan = $this->db->query("SELECT * FROM log_status_kegiatan WHERE id_kegiatan = '".$_POST['idk']."' AND bidang_kegiatan = 'LLA' ORDER BY id DESC");
			$result = $query_kegiatan->result();

			$output .= " 
			<table class='table table-bordered' id='dataTable-kegiatan-pe' width='100%' cellspacing='0'>
								<thead>
									<tr>
										<th>Nama Sub Kegiatan</th>
										<th>Status</th>
										<th>Timeline</th>
										<th>Completion</th>
										<th>Deskripsi</th>
										<th>Update Terakhir</th>
									</tr>
								</thead>
								<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $value){
					$output .= '
						<tr>
							<td class="grey-text text-darken-1">'.$value->nama_proses.'</td>
							<td class="grey-text text-darken-1">'.$value->status.'</td>
							<td class="grey-text text-darken-1">'.$value->tanggal_mulai.' s/d '.$value->tanggal_selesai.'</td>
							<td class="grey-text text-darken-1">'.$value->completion.' %</td>
							<td class="grey-text text-darken-1">'.$value->deskripsi.'</td>
							<td class="grey-text text-darken-1">'.$value->updated_at.'</td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="6">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
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
										<th >Nama Kegiatan</th>
										<th >PIC</th>
										<th >Tingkat Prioritas</th>
										<th >Status</th>
										<th >Timeline</th>
										<th >Biaya</th>
										<th >Completion</th>
										<th >Deskripsi Update</th>
										<th >Update Terakhir</th>
									</tr>
								</thead>
								<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $row){
					$output .= '
						<tr>
							<td>'.$row->nama_kegiatan.'</td>
							<td>'.$row->PIC.'</td>
							<td>'.$row->tingkat_prioritas.'</td>
							<td>'.$row->progress.'</td>
							<td>'.$row->tanggal_kegiatan.' - '.$row->tanggal_kegiatan_end.'</td>
							<td>'.$row->biaya.'</td>
							<td>'.$row->completion.'</td>
							<td>'.$row->keterangan.'</td>
							<td>'.$row->updated_at.'</td>
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

	public function get_detail_kegiatan_ptpp(){
		$output = '';

			$query_kegiatan = $this->db->query("SELECT * FROM log_status_kegiatan WHERE id_kegiatan = '".$_POST['idk']."' AND bidang_kegiatan = 'KTP' ORDER BY id DESC");
			$result = $query_kegiatan->result();

			$output .= " 
			<table class='table table-bordered' id='dataTable-kegiatan-pe' width='100%' cellspacing='0'>
								<thead>
									<tr>
										<th>Nama Sub Kegiatan</th>
										<th>Status</th>
										<th>Timeline</th>
										<th>Completion</th>
										<th>Deskripsi</th>
										<th>Update Terakhir</th>
									</tr>
								</thead>
								<tbody>
			";

			if($query_kegiatan->num_rows() > 0){
				foreach($result as $value){
					$output .= '
						<tr>
							<td class="grey-text text-darken-1">'.$value->nama_proses.'</td>
							<td class="grey-text text-darken-1">'.$value->status.'</td>
							<td class="grey-text text-darken-1">'.$value->tanggal_mulai.' s/d '.$value->tanggal_selesai.'</td>
							<td class="grey-text text-darken-1">'.$value->completion.' %</td>
							<td class="grey-text text-darken-1">'.$value->deskripsi.'</td>
							<td class="grey-text text-darken-1">'.$value->updated_at.'</td>
						</tr>
					';
				}
			} else {
				$output .= '
					<tr>
						<td colspan="6">Data Tidak Ditemukan</td>
					</tr>
				';
			}
			$output .= '</tbody> </table>';
			
			echo $output;
	}

	public function get_dashboard_tu_kehadiran(){
		$query_kehadiran = $this->db->query("SELECT * FROM kehadiran WHERE tanggal_kehadiran = '".$_POST['tanggal']."' ORDER BY tanggal_kehadiran DESC");
		$result = $query_kehadiran->result();

		// $data = array(
		// 	'cuti' => $result[0]->CUTI,
		// 	'tb' => $result[0]->TB,
		// 	'dl' => $result[0]->DL,
		// 	'pkp' => $result[0]->PKP,
		// 	's' => $result[0]->S,
		// );
		$tb = $result[0]->TB ?? 0;
		$cuti = $result[0]->CUTI ?? 0;
		$dl = $result[0]->DL ?? 0;
		$pkp = $result[0]->PKP ?? 0;
		$s = $result[0]->S ?? 0;

		$output = '<div class="row"><div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-lg font-weight-bold text-danger text-uppercase mb-1">
								TB</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">'.$tb.'</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-lg font-weight-bold text-success text-uppercase mb-1">
								CUTI</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">'.$cuti.'</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
								DINAS LUAR</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">'.$dl.'</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
								PKP</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">'.$pkp.'</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-2 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
								SAKIT</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">'.$s.'</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div></div>';

		echo $output;

	}

	public function dashboard_ptpp()
    {
		$data['title'] = 'Dashboard KTP';
		$data['kegiatan_ptpp'] = parent::model('KegiatanModel')->lihat_semua_kegiatan_ptpp();

		parent::dashboardPage('dashboard_ptpp/index',$data);
    }

	public function dashboard_pe()
    {
		$data['title'] = 'Dashboard LLA';
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

}
