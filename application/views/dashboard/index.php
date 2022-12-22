<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PUSJAK LLATP</title>

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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
					<img style="width: 50px !important; height: 50px;" src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo">
                </div>
                <div class="sidebar-brand-text mx-3">PUSJAK LLATP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-eye"></i>
                    <span>Lihat Dashboard</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('dashboard')?>">Dashboard TU</a>
                        <a class="collapse-item" href="<?= base_url('dashboard-ptpp')?>">Dashboard KTP</a>
                        <a class="collapse-item" href="<?= base_url('dashboard-pe')?>">Dashboard LLA</a>
						<a class="collapse-item" href="<?= base_url('dashboard-agenda')?>">Dashboard Agenda</a>
                    </div>
                </div>
            </li>

			<?php if($this->session->userdata('level') == 'staff') {?>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

			<li class="nav-item">
                <a class="nav-link" href="<?= base_url('') ?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Admin Dashboard</span>
                </a>
            </li>
			<?php } ?>

			<li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>">
                    <i class="fas fa-fw fa-door-open"></i>
                    <span>Keluar</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
				<div class="container-fluid">

<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
	
	<h2 class="h3 mb-0 text-gray-800"><img style="width: 50px !important; height: 50px;" src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo"> Pusat Kebijakan Lalu Lintas, Angkutan dan Transportasi Perkotaan</h2>
	<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
	class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>

</div> -->
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

			<div class="col-xl-10 col-lg-10" id="absensi">
				<div class="row">
				<!-- Earnings (Monthly) Card Example -->
				<div class="col-xl-2 col-md-6 mb-4">
					<div class="card border-left-danger shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-lg font-weight-bold text-danger text-uppercase mb-1">
										TB</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran->TB ?? 0 ?></div>
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
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran->CUTI ?? 0 ?></div>
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
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran->DL ?? 0 ?></div>
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
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran->PKP ?? 0 ?></div>
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
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kehadiran->S ?? 0 ?></div>
								</div>
								<div class="col-auto">
									<i class="fas fa-comments fa-2x text-gray-300"></i>
								</div>
							</div>
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
									<?php foreach($kegiatan_tu as $row): ?>
									<tr>
										<td><?= $row->nama_kegiatan ?></td>
										<td><?= $row->progress ?></td>
										<td><?= $row->keterangan ?></td>
									</tr>
									<?php endforeach; ?>
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
										<th >Unit Kerja</th>
										<th >Uraian</th>
										<th >Disposisi</th>
										<th >Catatan</th>
										<th >Follow up</th>
										<th >Link Surat</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($surat as $row): ?>
									<tr>
										<td><?= $row->unit_kerja ?></td>
										<td><?= $row->uraian ?></td>
										<td><?= $row->disposisi ?></td>
										<td><?= $row->catatan ?></td>
										<td><?= $row->follow_up ?></td>
										<td><a href="<?= $row->url_surat ?>">Download</a></td>
									</tr>
									<?php endforeach; ?>
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
				<h5>Rp <?= number_format($anggaran->total_anggaran) ?></h5>
				<h5 style="color: black;">Realisasi</h5>
				<h5>Rp <?= number_format($anggaran->realisasi_anggaran) ?></h5>
			</div>

			<!-- Card Body -->
			<div class="card-body">
				<table>
					<tr>
						<th>Nama Berkas</th>
					</tr>
					<?php foreach($berkas as $row):?>
					<tr>
						<td><a href="<?= $row->url_berkas; ?>"><?= $row->nama_berkas; ?></a></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>


</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
		// $(document).ready(function(){
		// 	$("#date-filter").on('change', function(){
		// 		var date = $('#date-filter').val();
		// 		if(date != ''){
		// 			$.ajax({
		// 				url:"<?= base_url('dashboard-tu-date')?>",
		// 				method:"POST",
		// 				data:{tanggal:date},
		// 				success:function(data){
		// 					$('#kegiatan').html(data);
		// 				}
		// 			});
		// 		} else {
		// 			alert("Mohon Pilih Tanggal");
		// 		}
		// 	});
		// });


		// $(document).ready(function(){
		// 	$("#date-filter").on('change', function(){
		// 		var date = $('#date-filter').val();
		// 		if(date != ''){
		// 			$.ajax({
		// 				url:"<?= base_url('dashboard-tu-surat-date')?>",
		// 				method:"POST",
		// 				data:{tanggal:date},
		// 				success:function(data){
		// 					$('#surat').html(data);
		// 				}
		// 			});
		// 		} else {
		// 			alert("Mohon Pilih Tanggal");
		// 		}
		// 	});
		// });

		$(document).ready(function(){
			$("#date-filter").on('change', function(){
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-tu-kehadiran')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#absensi').html(data);
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
					// $.ajax({
					// 	url:"<?= base_url('dashboard-tu-date')?>",
					// 	method:"POST",
					// 	data:{tanggal:date},
					// 	success:function(data){
					// 		$('#kegiatan').html(data);
					// 	}
					// });

					// $.ajax({
					// 	url:"<?= base_url('dashboard-tu-surat-date')?>",
					// 	method:"POST",
					// 	data:{tanggal:date},
					// 	success:function(data){
					// 		$('#surat').html(data);
					// 	}
					// });

					$.ajax({
						url:"<?= base_url('dashboard-tu-kehadiran')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#absensi').html(data);
						}
					});
				}
		}
	</script>

</body>

</html>