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
					<img style="width: 50px !important; height: 50px;"
						src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo">
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
					<div class="d-sm-flex align-items-center justify-content-between mb-4">

						<!-- <h2 class="h3 mb-0 text-gray-800"><img style="width: 50px !important; height: 50px;"
								src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo"> Pusat Kebijakan
							Lalu
							Lintas, Angkutan dan Transportasi Perkotaan</h2> -->
						<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
	class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->

					</div>
					<div class="row">
						<div class="col-xl-12 col-lg-12">
							<div class="col-xl-12 col-lg-12">
								<div class="card shadow mb-4">
									<!-- Card Header - Dropdown -->
									<div
										class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
										<h6 class="m-0 font-weight-bold text-primary">Kegiatan Bidang Kebijakan
											Transportasi Perkotaan</h6>
										<input type="text" id="searchInput3" class="col-4 form-control"
											placeholder="Cari"><input class="datepicker form-control col-lg-2"
											id="date-filter" type="date" value="11/17/2022">
									</div>
									<!-- Card Body -->
									<div class="card-body">
										<!-- <div class="chart-area">
					<canvas id="myAreaChart"></canvas>
					</div> -->
										<div class="table-responsive" id="kegiatan">
											<table class="table table-bordered" id="dataTable-kegiatan-pe" width="100%"
												cellspacing="0">
												<thead>
													<tr>
														<th>Kegiatan</th>
														<th>PIC</th>
														<th>Tingkat Prioritas</th>
														<th>Status</th>
														<th>Timeline</th>
														<th>Biaya</th>
														<th>Completion</th>
														<th width="20%">Deskripsi Update</th>
														<th>Update Terakhir</th>
													</tr>
												</thead>
												<tbody>
													<?php foreach($kegiatan_ptpp as $row): ?>
													<tr>
														<td><a href="#"
														class="userinfo" data-id="<?= $row->id ?>"><?= $row->nama_kegiatan; ?></a>
														</td>
														<td><?= $row->PIC; ?></td>
														<td><?= $row->tingkat_prioritas; ?></td>
														<td><?= $row->progress; ?></td>
														<td><?= $row->tanggal_kegiatan; ?> s/d
															<?= $row->tanggal_kegiatan_end; ?></td>
														<td>Rp <?= number_format($row->biaya); ?></td>
														<td><?= $row->completion; ?>%</td>
														<td><?= $row->keterangan; ?></td>
														<td><?= $row->updated_at; ?></td>
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

	<!-- Modal -->
	<div class="modal fade" id="empModal" role="dialog">
		<div class="modal-dialog modal-xl">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Detail Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal delete -->
	<div id="modal" class="modal">
		<div class="modal-content center">
			<div class="row">
				<div class="col s12 m12 center">
					<h5 class="more-text">Detail Kegiatan</h5>
					<h5 class="divider"></h5>
				</div>
			</div>

			<div class="row">

			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" name="simpan"
				class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
			<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
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
		$(document).ready(function () {
			$("#date-filter").on('change', function () {
				var date = $('#date-filter').val();
				if (date != '') {
					$.ajax({
						url: "<?= base_url('dashboard-ptpp-kegiatan-date')?>",
						method: "POST",
						data: {
							tanggal: date
						},
						success: function (data) {
							$('#kegiatan').html(data);
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
			if (date != '') {
				$.ajax({
					url: "<?= base_url('dashboard-ptpp-kegiatan-date')?>",
					method: "POST",
					data: {
						tanggal: date
					},
					success: function (data) {
						$('#kegiatan').html(data);
					}
				});
			}
		}
	</script>

	<script>
		$(document).ready(function(){

			$('.userinfo').click(function(){
			
				const id_kegiatan = $(this).data('id');
				$('#empModal').modal('show'); 
				// AJAX request
				$.ajax({
					url: '<?= base_url('dashboard-ptpp-detail-kegiatan')?>',
					type: 'POST',
					data: {idk: id_kegiatan},
					success: function(response){ 
						// Add response in Modal body
						$('.modal-body').html(response);

						// Display Modal
						$('#empModal').modal('show'); 
					}
				});
			});
		});
	</script>

</body>

</html>