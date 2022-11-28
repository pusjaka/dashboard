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

			<h2 class="h3 mb-0 text-gray-800"><img style="width: 50px !important; height: 50px;"
					src="<?= base_url('assets/images/logo_pusjak.png')?>" alt="pusjak logo"> Pusat Kebijakan Lalu Lintas, Angkutan dan Transportasi Perkotaan</h2>
			<!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->

		</div>
		<div class="row">
			<div class="col-xl-12 col-lg-12">
				<div class="col-xl-12 col-lg-12">
					<div class="card shadow mb-4">
						<!-- Card Header - Dropdown -->
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Kegiatan Bidang Kebijakan Lalu Lintas dan Angkutan</h6>
							<input type="text" id="searchInput3" class="col-4 form-control" placeholder="Cari"><input class="datepicker form-control col-lg-2" id="date-filter" type="date" value="11/17/2022">
						</div>
						<!-- Card Body -->
						<div class="card-body">
							<!-- <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                            </div> -->
							<div class="table-responsive" id="kegiatan">
								<table class="table table-bordered" id="dataTable-kegiatan-pe" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>Kegiatan</th>
											<th>PIC</th>
											<th>Tingkat Prioritas</th>
											<th>Status</th>
											<th>Timeline</th>
											<th>Biaya</th>
											<th>Completion</th>
											<th>Deskripsi</th>
											<th>Update Terakhir</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Kegiatan A</td>
											<td>Pak Anang</td>
											<td>High</td>
											<td>In Progress</td>
											<td>27/11/2022 - 29/11/2022</td>
											<td>Rp 50,000,000</td>
											<td>70%</td>
											<td>Tahap Pemantauan</td>
											<td>28/11/2022</td>
										</tr>
										<tr>
											<td>Kegiatan B</td>
											<td>Pak Anang</td>
											<td>High</td>
											<td>In Progress</td>
											<td>27/11/2022 - 29/11/2022</td>
											<td>Rp 50,000,000</td>
											<td>70%</td>
											<td>Tahap Pemantauan</td>
											<td>28/11/2022</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
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
						url:"<?= base_url('dashboard-pe-kegiatan-date')?>",
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

		setInterval(ajaxCall, 10000); //300000 MS == 5 minutes

		function ajaxCall() {
				var date = $('#date-filter').val();
				if(date != ''){
					$.ajax({
						url:"<?= base_url('dashboard-pe-kegiatan-date')?>",
						method:"POST",
						data:{tanggal:date},
						success:function(data){
							$('#kegiatan').html(data);
						}
					});
				}
		}
	</script>

</body>

</html>