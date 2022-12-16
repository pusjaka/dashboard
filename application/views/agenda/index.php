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

	<link href="<?= base_url('assets/plugins/fullcalendar/fullcalendar.css') ?>" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/plugins/fullcalendar/custom-fullcalendar.advance.css') ?>" rel="stylesheet"
		type="text/css" />
	<link href="<?= base_url('assets/plugins/flatpickr/flatpickr.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/plugins/flatpickr/custom-flatpickr.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/forms/theme-checkbox-radio.css') ?>" rel="stylesheet" type="text/css" />

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

					<!-- <div class="row">
						<div class="col-xl-12 col-lg-12">
							
						</div>
					</div> -->
					<div id="calendar"></div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- The Modal -->
			<div id="addEventsModal" class="modal animated fadeIn">

				<div class="modal-dialog modal-dialog-centered">

					<!-- Modal content -->
					<div class="modal-content">

						<div class="modal-body">

							<span class="close">&times;</span>

							<div class="add-edit-event-box">
								<div class="add-edit-event-content">
									<h5 class="add-event-title modal-title">Add Events</h5>
									<h5 class="edit-event-title modal-title">Detail Agenda</h5>

									<form class="">

										<div class="row">

											<div class="col-md-12">
												<label for="start-date" class="">Nama Agenda:</label>
												<div class="d-flex event-title">
													<input id="write-e" type="text" placeholder="Enter Title"
														class="form-control" name="task" disabled>
												</div>
											</div>

											<div class="col-md-6 col-sm-6 col-12">
												<div class="form-group start-date">
													<label for="start-date" class="">Mulai:</label>
													<div class="d-flex">
														<input id="start-date" placeholder="Start Date"
															class="form-control" type="text" disabled>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-12">
												<div class="form-group end-date">
													<label for="end-date" class="">Sampai:</label>
													<div class="d-flex">
														<input id="end-date" placeholder="End Date" type="text"
															class="form-control" disabled>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<label for="start-date" class="">Deskripsi Agenda:</label>
												<div class="d-flex event-description">
													<textarea id="taskdescription" placeholder="Enter Description"
														rows="3" class="form-control" name="taskdescription"
														disabled></textarea>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="event-badge">
													<p class="">Urgensi:</p>

													<div class="d-sm-flex d-block">
														<!-- <div class="n-chk">
															<label class="new-control new-radio radio-primary">
																<input type="radio" class="new-control-input"
																	name="marker" value="bg-primary">
																<span class="new-control-indicator"></span>Umum
															</label>
														</div> -->

														<div class="n-chk">
															<label class="new-control new-radio radio-danger"
																style="color: #e74a3b;">
																<input type="radio" class="new-control-input"
																	name="marker" value="bg-danger" checked="checked">
																<span class="new-control-indicator"></span>Penting
															</label>
														</div>
													</div>

												</div>
											</div>
										</div>

									</form>
								</div>
							</div>

						</div>

						<div class="modal-footer">
							<!-- <button id="discard" class="btn" data-dismiss="modal">Discard</button> -->
							<!-- <button id="add-e" class="btn">Add Task</button> -->
							<!-- <button id="edit-event" class="btn">Save</button> -->
						</div>

					</div>

				</div>

			</div>

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


	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?= base_url('assets/plugins/fullcalendar/moment.min.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/flatpickr/flatpickr.js') ?>"></script>
	<script src="<?= base_url('assets/plugins/fullcalendar/fullcalendar.min.js') ?>"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.min.js"></script> -->
	<!--  BEGIN CUSTOM SCRIPTS FILE  -->

	<!--  END CUSTOM SCRIPTS FILE  -->


	<script>
		$(document).ready(function () {
			$("#date-filter").on('change', function () {
				var date = $('#date-filter').val();
				if (date != '') {
					$.ajax({
						url: "<?= base_url('dashboard-tu-kehadiran')?>",
						method: "POST",
						data: {
							tanggal: date
						},
						success: function (data) {
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
			if (date != '') {
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
					url: "<?= base_url('dashboard-tu-kehadiran')?>",
					method: "POST",
					data: {
						tanggal: date
					},
					success: function (data) {
						$('#absensi').html(data);
					}
				});
			}
		}
	</script>

	<script>
		$(document).ready(function () {

			// Get the modal
			var modal = document.getElementById("addEventsModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");

			// Get the Add Event button
			var addEvent = document.getElementById("add-e");
			// Get the Edit Event button
			var editEvent = document.getElementById("edit-event");
			// Get the Discard Modal button
			var discardModal = document.querySelectorAll("[data-dismiss='modal']")[0];

			// Get the Add Event button
			var addEventTitle = document.getElementsByClassName("add-event-title")[0];
			// Get the Edit Event button
			var editEventTitle = document.getElementsByClassName("edit-event-title")[0];

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// Get the all <input> elements insdie the modal
			var input = document.querySelectorAll('input[type="text"]');
			var radioInput = document.querySelectorAll('input[type="radio"]');

			// Get the all <textarea> elements insdie the modal
			var textarea = document.getElementsByTagName('textarea');

			// Create BackDrop ( Overlay ) Element
			function createBackdropElement() {
				var btn = document.createElement("div");
				btn.setAttribute('class', 'modal-backdrop fade show')
				document.body.appendChild(btn);
			}

			// Reset radio buttons

			function clearRadioGroup(GroupName) {
				var ele = document.getElementsByName(GroupName);
				for (var i = 0; i < ele.length; i++)
					ele[i].checked = false;
			}

			// Reset Modal Data on when modal gets closed
			function modalResetData() {
				modal.style.display = "none";
				for (i = 0; i < input.length; i++) {
					input[i].value = '';
				}
				for (j = 0; j < textarea.length; j++) {
					textarea[j].value = '';
					i
				}
				clearRadioGroup("marker");
				// Get Modal Backdrop
				var getModalBackdrop = document.getElementsByClassName('modal-backdrop')[0];
				document.body.removeChild(getModalBackdrop)
			}

			// When the user clicks on the button, open the modal
			// btn.onclick = function() {
			//     modal.style.display = "block";
			//     addEvent.style.display = 'block';
			//     editEvent.style.display = 'none';
			//     addEventTitle.style.display = 'block';
			//     editEventTitle.style.display = 'none';
			//     document.getElementsByTagName('body')[0].style.overflow = 'hidden';
			//     createBackdropElement();
			//     enableDatePicker();
			// }

			// Clear Data and close the modal when the user clicks on Discard button
			discardModal.onclick = function () {
				modalResetData();
				document.getElementsByTagName('body')[0].removeAttribute('style');
			}

			// Clear Data and close the modal when the user clicks on <span> (x).
			span.onclick = function () {
				modalResetData();
				document.getElementsByTagName('body')[0].removeAttribute('style');
			}

			// Clear Data and close the modal when the user clicks anywhere outside of the modal.
			window.onclick = function (event) {
				if (event.target == modal) {
					modalResetData();
					document.getElementsByTagName('body')[0].removeAttribute('style');
				}
			}

			newDate = new Date()
			monthArray = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']

			function getDynamicMonth(monthOrder) {
				var getNumericMonth = parseInt(monthArray[newDate.getMonth()]);
				var getNumericMonthInc = parseInt(monthArray[newDate.getMonth()]) + 1;
				var getNumericMonthDec = parseInt(monthArray[newDate.getMonth()]) - 1;

				if (monthOrder === 'default') {

					if (getNumericMonth < 10) {
						return '0' + getNumericMonth;
					} else if (getNumericMonth >= 10) {
						return getNumericMonth;
					}

				} else if (monthOrder === 'inc') {

					if (getNumericMonthInc < 10) {
						return '0' + getNumericMonthInc;
					} else if (getNumericMonthInc >= 10) {
						return getNumericMonthInc;
					}

				} else if (monthOrder === 'dec') {

					if (getNumericMonthDec < 10) {
						return '0' + getNumericMonthDec;
					} else if (getNumericMonthDec >= 10) {
						return getNumericMonthDec;
					}
				}
			}


			/* initialize the calendar
			-----------------------------------------------------------------*/
			var calendar = $('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				events: "<?php echo base_url(); ?>agenda/load",
				locale: 'id',
				editable: true,
				eventLimit: true,
				eventMouseover: function (event, jsEvent, view) {
					$(this).attr('id', event.id);

					$('#' + event.id).popover({
						template: '<div class="popover popover-primary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
						title: event.title,
						content: '<b>Lokasi: </b>'+event.lokasi+'<br>'+'<b>PIC: </b>'+event.pic+'<br>'+'<b>Jumlah Peserta: </b>'+event.peserta+'<br>'+'<b>Deskripsi: </b>'+event.description+'<br>',
						placement: 'top',
						html: true,
					});

					$('#' + event.id).popover('show');
				},
				eventMouseout: function (event, jsEvent, view) {
					$('#' + event.id).popover('hide');
				},
				eventClick: function (info) {

					// addEvent.style.display = 'none';
					// editEvent.style.display = 'block';

					addEventTitle.style.display = 'none';
					editEventTitle.style.display = 'block';
					modal.style.display = "block";
					document.getElementsByTagName('body')[0].style.overflow = 'hidden';
					createBackdropElement();

					// Calendar Event Featch
					var eventTitle = info.title;
					var eventDescription = info.description;

					// Task Modal Input
					var taskTitle = $('#write-e');
					var taskTitleValue = taskTitle.val(eventTitle);

					var taskDescription = $('#taskdescription');
					var taskDescriptionValue = taskDescription.val(eventDescription);

					var taskInputStarttDate = $("#start-date");
					var taskInputStarttDateValue = taskInputStarttDate.val(info.start.format(
						"YYYY-MM-DD HH:mm:ss"));

					var taskInputEndDate = $("#end-date");
					var taskInputEndtDateValue = taskInputEndDate.val(info.end.format(
						"YYYY-MM-DD HH:mm:ss"));

					var startDate = flatpickr(document.getElementById('start-date'), {
						enableTime: true,
						dateFormat: "Y-m-d H:i",
						defaultDate: info.start.format("YYYY-MM-DD HH:mm:ss"),
					});

					var abv = startDate.config.onChange.push(function (selectedDates, dateStr, instance) {
						var endtDate = flatpickr(document.getElementById('end-date'), {
							enableTime: true,
							dateFormat: "Y-m-d H:i",
							minDate: dateStr
						});
					})

					var endtDate = flatpickr(document.getElementById('end-date'), {
						enableTime: true,
						dateFormat: "Y-m-d H:i",
						defaultDate: info.end.format("YYYY-MM-DD HH:mm:ss"),
						minDate: info.start.format("YYYY-MM-DD HH:mm:ss")
					});

					$('#edit-event').off('click').on('click', function (event) {
						event.preventDefault();
						/* Act on the event */
						var radioValue = $("input[name='marker']:checked").val();

						var taskStartTimeValue = document.getElementById("start-date").value;
						var taskEndTimeValue = document.getElementById("end-date").value;

						info.title = taskTitle.val();
						info.description = taskDescription.val();
						info.start = taskStartTimeValue;
						info.end = taskEndTimeValue;
						info.className = radioValue;

						$('#calendar').fullCalendar('updateEvent', info);
						modal.style.display = "none";
						modalResetData();
						document.getElementsByTagName('body')[0].removeAttribute('style');
					});
				}
			})


			function enableDatePicker() {
				var startDate = flatpickr(document.getElementById('start-date'), {
					enableTime: true,
					dateFormat: "Y-m-d H:i",
					minDate: new Date()
				});

				var abv = startDate.config.onChange.push(function (selectedDates, dateStr, instance) {

					var endtDate = flatpickr(document.getElementById('end-date'), {
						enableTime: true,
						dateFormat: "Y-m-d H:i",
						minDate: dateStr
					});
				})

				var endtDate = flatpickr(document.getElementById('end-date'), {
					enableTime: true,
					dateFormat: "Y-m-d H:i",
					minDate: new Date()
				});
			}


			function randomString(length, chars) {
				var result = '';
				for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
				return result;
			}
			$("#add-e").off('click').on('click', function (event) {
				var radioValue = $("input[name='marker']:checked").val();
				var randomAlphaNumeric = randomString(10,
					'0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
				var inputValue = $("#write-e").val();
				var inputStarttDate = document.getElementById("start-date").value;
				var inputEndDate = document.getElementById("end-date").value;

				var arrayStartDate = inputStarttDate.split(' ');

				var arrayEndDate = inputEndDate.split(' ');

				var startDate = arrayStartDate[0];
				var startTime = arrayStartDate[1];

				var endDate = arrayEndDate[0];
				var endTime = arrayEndDate[1];

				var concatenateStartDateTime = startDate + 'T' + startTime + ':00';
				var concatenateEndDateTime = endDate + 'T' + endTime + ':00';

				var inputDescription = document.getElementById("taskdescription").value;
				var myCalendar = $('#calendar');
				myCalendar.fullCalendar();
				var myEvent = {
					timeZone: 'UTC',
					allDay: false,
					id: randomAlphaNumeric,
					title: inputValue,
					start: concatenateStartDateTime,
					end: concatenateEndDateTime,
					className: radioValue,
					description: inputDescription
				};
				myCalendar.fullCalendar('renderEvent', myEvent, true);
				modal.style.display = "none";
				modalResetData();
				document.getElementsByTagName('body')[0].removeAttribute('style');
			});


			// Setting dynamic style ( padding ) of the highlited ( current ) date

			function setCurrentDateHighlightStyle() {
				getCurrentDate = $('.fc-content-skeleton .fc-today').attr('data-date');
				if (getCurrentDate === undefined) {
					return;
				}
				splitDate = getCurrentDate.split('-');
				if (splitDate[2] < 10) {
					$('.fc-content-skeleton .fc-today .fc-day-number').css('padding', '3px 8px');
				} else if (splitDate[2] >= 10) {
					$('.fc-content-skeleton .fc-today .fc-day-number').css('padding', '3px 4px');
				}
			}
			setCurrentDateHighlightStyle();

			const mailScroll = new PerfectScrollbar('.fc-scroller', {
				suppressScrollX: true
			});

			var fcButtons = document.getElementsByClassName('fc-button');
			for (var i = 0; i < fcButtons.length; i++) {
				fcButtons[i].addEventListener('click', function () {
					const mailScroll = new PerfectScrollbar('.fc-scroller', {
						suppressScrollX: true
					});
					$('.fc-scroller').animate({
						scrollTop: 0
					}, 100);
					setCurrentDateHighlightStyle();
				})
			}
		});
	</script>


</body>

</html>