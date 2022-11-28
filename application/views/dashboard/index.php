<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

	<style>
		.dataTables_info {
			display: none !important;
		}
	</style>
</head>

<body id="page-top" style="margin: 10px;">
	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
            
			<h2 class="h3 mb-0 text-gray-800"><img style="width: 50px !important; height: 50px;" src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo"> Pusat Kebijakan Lalu Lintas, Angkutan dan Transportasi Perkotaan</h2>
			<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->

		</div>
		<div class="row">
			<div class="col-xl-10 col-lg-10">
				<!-- Content Row -->
				<div class="row">

                    <!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
											Tanggal</div>
										<!-- <div class="h5 mb-0 font-weight-bold text-gray-800">17/11/2022</div> -->
                                        <input class="datepicker form-control" id="date-filter" type="date" value="11/17/2022">
										<!-- <button class="btn btn-primary" id="filter">go</button> -->
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-danger shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-danger text-uppercase mb-1">
											TB</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">40</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-calendar fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-success text-uppercase mb-1">
											CUTI</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pending Requests Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
											DINAS LUAR</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-comments fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pending Requests Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
											PKP</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-comments fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pending Requests Card Example -->
					<div class="col-xl-2 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
											SAKIT</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-comments fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Content Row -->

				<div class="row">

					<!-- Area Chart -->
					<div class="col-xl-12 col-lg-12">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Kegiatan Sub Kordinator Tata Usaha</h6>
                                <input type="text" id="searchInput1" class="col-4 form-control" placeholder="Cari">
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<!-- <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div> -->
								<div class="table-responsive" id="kegiatan">
									<table class="table table-bordered" id="dataTable-kegiatan-tu" width="100%"cellspacing="0">
										<thead>
											<tr>
												<th>Kegiatan</th>
												<th>Progress</th>
												<th>Keterangan</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
											<tr>
												<td>Garrett Winters Garrett Winters Garrett Winters</td>
												<td>Accountant</td>
												<td>Tokyo</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Surat</h6>
                                <input type="text" id="searchInput2" class="col-4 form-control" placeholder="Cari">
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<!-- <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div> -->
								<div class="table-responsive" id="surat">
									<table class="table table-bordered" id="dataTable-surat-tu" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th >Tanggal</th>
												<th >Unit Kerja</th>
												<th >Uraian</th>
												<th >Disposisi</th>
												<th >Catatan</th>
												<th >Follow up</th>
												<th >Link Surat</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td><a href="#">Download</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Pie Chart -->
			<div class="col-xl-2 col-lg-2">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Penyerapan Dana LLATP</h6>
						<div class="dropdown no-arrow">
							<a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
								aria-labelledby="dropdownMenuLink">
								<div class="dropdown-header">Dropdown Header:</div>
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</div>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-pie pt-4 pb-2">
							<canvas id="myPieChart"></canvas>
						</div>
						<div class="mt-4 text-center small">
							<span class="mr-2">
								<i class="fas fa-circle text-primary"></i> Total Anggaran
							</span>
							<span class="mr-2">
								<i class="fas fa-circle text-success"></i> Realisasi
							</span>
						</div>
						<br>
						<h5 style="color: black;">Total Anggaran</h3>
						<h5>Rp 50,000,000</h5>
						<h5 style="color: black;">Realisasi</h5>
						<h5>Rp 20,000,000</h5>
					</div>

					<!-- Card Body -->
					<div class="card-body">
						<table>
							<tr>
								<th>Nama Berkas</th>
							</tr>
							<tr>
								<td><a href="#">Kebijakan berkendara</a></td>
							</tr>
							<tr>
								<td><a href="#">Kebijakan berkendara 2</a></td>
							</tr>
							<tr>
								<td><a href="#">Kebijakan berkendara 3</a></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>


	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/js/demo/chart-area-demo.js') ?>"></script>
	<script src="<?= base_url('assets/js/demo/chart-pie-demo.js') ?>"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('assets/js/demo/datatables-demo.js') ?>"></script>

	
	<script>
		$(document).ready(function(){
			$("#date-filter").on('change', function(){
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-tu-date')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#kegiatan').html(data);
						}
					});
				} else {
					alert("Mohon Pilih Tanggal");
				}
			});
		});


		$(document).ready(function(){
			$("#date-filter").on('change', function(){
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-tu-surat-date')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#surat').html(data);
						}
					});
				} else {
					alert("Mohon Pilih Tanggal");
				}
			});
		});

		$(document).ready(function(){
			$("#date-filter").on('change', function(){
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-tu-kehadiran')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							//$('#surat').html(data);
							console.log(data);
						}
					});
				} else {
					alert("Mohon Pilih Tanggal");
				}
			});
		});

		setInterval(ajaxCall, 10000); //300000 MS == 5 minutes

		function ajaxCall() {
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-tu-date')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#kegiatan').html(data);
						}
					});

					$.ajax({
						url:"<?= base_url('dashboard-tu-surat-date')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#surat').html(data);
						}
					});

					$.ajax({
						url:"<?= base_url('dashboard-tu-kehadiran')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							//$('#surat').html(data);
							console.log(data);
						}
					});
				}
		}
	</script>

</body>

</html>