                    </div>
                    <!--end container-->

                    </section>
                    <!-- END CONTENT -->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
                    <!-- START RIGHT SIDEBAR NAV-->
                    <aside id="right-sidebar-nav">
                    	<ul id="chat-out" class="side-nav rightside-navigation">
                    		<li class="li-hover">
                    			<a href="#" data-activates="chat-out" class="chat-close-collapse right"><i
                    					class="mdi-navigation-close"></i></a>
                    			<div id="right-search" class="row">
                    				<form class="col s12">
                    					<div class="input-field">
                    						<i class="mdi-action-search prefix"></i>
                    						<input id="icon_prefix" type="text" class="validate">
                    						<label for="icon_prefix">Search</label>
                    					</div>
                    				</form>
                    			</div>
                    		</li>
                    		<li class="li-hover">
                    			<ul class="chat-collapsible" data-collapsible="expandable">
                    				<li>
                    					<div class="collapsible-header teal white-text active"><i
                    							class="mdi-social-whatshot"></i>Recent Activity</div>
                    					<div class="collapsible-body recent-activity">
                    						<div class="recent-activity-list chat-out-list row">
                    							<div class="col s3 recent-activity-list-icon"><i
                    									class="mdi-action-add-shopping-cart"></i>
                    							</div>
                    							<div class="col s9 recent-activity-list-text">
                    								<a href="#">just now</a>
                    								<p>Jim Doe Purchased new equipments for zonal office.</p>
                    							</div>
                    						</div>
                    						<div class="recent-activity-list chat-out-list row">
                    							<div class="col s3 recent-activity-list-icon"><i
                    									class="mdi-device-airplanemode-on"></i>
                    							</div>
                    							<div class="col s9 recent-activity-list-text">
                    								<a href="#">Yesterday</a>
                    								<p>Your Next flight for USA will be on 15th August 2015.</p>
                    							</div>
                    						</div>
                    						<div class="recent-activity-list chat-out-list row">
                    							<div class="col s3 recent-activity-list-icon"><i
                    									class="mdi-action-settings-voice"></i>
                    							</div>
                    							<div class="col s9 recent-activity-list-text">
                    								<a href="#">5 Days Ago</a>
                    								<p>Natalya Parker Send you a voice mail for next conference.</p>
                    							</div>
                    						</div>
                    						<div class="recent-activity-list chat-out-list row">
                    							<div class="col s3 recent-activity-list-icon"><i
                    									class="mdi-action-store"></i>
                    							</div>
                    							<div class="col s9 recent-activity-list-text">
                    								<a href="#">Last Week</a>
                    								<p>Jessy Jay open a new store at S.G Road.</p>
                    							</div>
                    						</div>
                    						<div class="recent-activity-list chat-out-list row">
                    							<div class="col s3 recent-activity-list-icon"><i
                    									class="mdi-action-settings-voice"></i>
                    							</div>
                    							<div class="col s9 recent-activity-list-text">
                    								<a href="#">5 Days Ago</a>
                    								<p>Natalya Parker Send you a voice mail for next conference.</p>
                    							</div>
                    						</div>
                    					</div>
                    				</li>
                    			</ul>
                    		</li>
                    	</ul>
                    </aside>
                    <!-- LEFT RIGHT SIDEBAR NAV-->

                    </div>
                    <!-- END WRAPPER -->

                    </div>
                    <!-- END MAIN -->

                    <!-- ================================================
            Scripts
            ================================================ -->

                    <!-- jQuery Library -->
                    <script type="text/javascript" src="<?= base_url('assets/js/plugins/jquery-1.11.2.min.js')?>">
                    </script>
                    <!--materialize js-->
                    <script type="text/javascript" src="<?= base_url('assets/js/materialize.min.js')?>"></script>
                    <!--scrollbar-->
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
                    <!--numeral js-->
                    <script type="text/javascript" src="<?= base_url('assets/js/plugins/numeral/numeral.min.js')?>">
                    </script>
                    <!-- easy autocomplete -->
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/easy-autocomplete/jquery.easy-autocomplete.js')?>">
                    </script>
                    <script type="text/javascript" src="<?= base_url('assets/js/app/anggotaSearch.js?v=1.0.0')?>">
                    </script>

                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/jquery-input-mask/jquery.mask.js')?>"></script>
                    <script type="text/javascript" src="<?= base_url('assets/js/app/maskConfig.js')?>"></script>
                    <!-- dataTables js plugins-->
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/dtables/jquery.dataTables.min.js')?>"></script>
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/dtables/dataTables.material.min.js')?>"></script>
                    <!-- dataTables js plugins-->
                    <script type="text/javascript" src="<?= base_url('assets/js/plugins/printThis.js')?>"></script>
                    <!-- chartist -->
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/chartist-js/chartist.min.js')?>"></script>

                    <!-- sparkline -->
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
                    <script type="text/javascript"
                    	src="<?= base_url('assets/js/plugins/sparkline/sparkline-script.js')?>"></script>


                    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
                    <script type="text/javascript" src="<?= base_url('assets/js/plugins.min.js')?>"></script>
                    <!--custom-script.js - Add your own theme custom JS-->
                    <script type="text/javascript" src="<?= base_url('assets/js/custom-script.js')?>"></script>
                    <!-- Toast Notification -->
                    <script type="text/javascript">
                    	setInterval(function () {
                    		$('.user-welcome').fadeOut('slow');
                    	}, 2500);
                    	setInterval(function () {
                    		$('#card-alert').fadeOut('slow');
                    	}, 2500);

                    	function printContent(el) {
                    		var restorepage = document.body.innerHTML;
                    		var printcontent = document.getElementById(el).innerHTML;
                    		document.body.innerHTML = printcontent;
                    		window.print();
                    		document.body.innerHTML = restorepage;
                    	}
                    </script>
                    <script type="text/javascript">
                    	$(document).ready(function () {

                    		var baseURL = window.location.origin + '/order-app';

                    		$('#pelanggan-table').DataTable({
                    			"order": [
                    				[1, "asc"]
                    			],
                    			"pageLength": 10,
                    			language: {
                    				url: baseURL + '/assets/js/plugins/dtables/indonesia.json'
                    			},
                    			columnDefs: [{
                    				targets: [0, 1, 2],
                    				className: 'mdl-data-table__cell--non-numeric'
                    			}]
                    		});

                    		$('#barang-table').DataTable({
                    			"order": [
                    				[5, "asc"]
                    			],
                    			"pageLength": 10,
                    			language: {
                    				url: baseURL + '/assets/js/plugins/dtables/indonesia.json'
                    			},
                    			columnDefs: [{
                    				targets: [0, 1, 2],
                    				className: 'mdl-data-table__cell--non-numeric'
                    			}]
                    		});

                    		$('#barang-table1').DataTable({
                    			"order": [
                    				[5, "asc"]
                    			],
                    			"pageLength": 10,
                    			language: {
                    				url: baseURL + '/assets/js/plugins/dtables/indonesia.json'
                    			},
                    		});

                    		$('#barang-table2').DataTable({
                    			"pageLength": 10,
                    			language: {
                    				url: baseURL + '/assets/js/plugins/dtables/indonesia.json'
                    			},
                    		});

                    		$('#pesanan-table').DataTable({
                    			"order": [
                    				[5, "desc"]
                    			],
                    			"pageLength": 10,
                    			language: {
                    				url: baseURL + '/assets/js/plugins/dtables/indonesia.json'
                    			},
                    			columnDefs: [{
                    				targets: [0, 1, 2],
                    				className: 'mdl-data-table__cell--non-numeric'
                    			}]
                    		});
                    	});
                    </script>

                    <!-- begin kehadiran -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const tanggal = $(this).data('date');
                    			const tb = $(this).data('tb');
                    			const cuti = $(this).data('cuti');
                    			const dl = $(this).data('dl');
                    			const pkp = $(this).data('pkp');
                    			const s = $(this).data('s');
                    			// Set data to Form Edit
                    			$('.id').val(id);
                    			$('.tanggal').val(tanggal);
                    			$('.tb').val(tb);
                    			$('.cuti').val(cuti);
                    			$('.dl').val(dl);
                    			$('.pkp').val(pkp);
                    			$('.s').val(s);
                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		// $('.btn-delete').on('click', function () {
                    		// 	// get data from button edit
                    		// 	const id = $(this).data('id');
                    		// 	// Set data to Form Edit
                    		// 	$('.productID').val(id);
                    		// 	// Call Modal Edit
                    		// 	$('#deleteModal').modal('show');
                    		// });

                    	});
                    </script>
                    <!-- end kehadiran -->

                    <!-- begin anggaran -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit1').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const tanggal = $(this).data('date');
                    			const ta = $(this).data('ta');
                    			const real = $(this).data('real');

                    			// Set data to Form Edit
                    			$('.id').val(id);
                    			$('.tanggal').val(tanggal);
                    			$('.ta').val(ta);
                    			$('.real').val(real);

                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		// $('.btn-delete').on('click', function () {
                    		// 	// get data from button edit
                    		// 	const id = $(this).data('id');
                    		// 	// Set data to Form Edit
                    		// 	$('.productID').val(id);
                    		// 	// Call Modal Edit
                    		// 	$('#deleteModal').modal('show');
                    		// });

                    	});
                    </script>
                    <!-- end anggaran -->

                    <!-- begin surat -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit2').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const tanggal = $(this).data('date');
                    			const uk = $(this).data('uk');
                    			const uraian = $(this).data('uraian');
                    			const disposisi = $(this).data('disposisi');
                    			const catatan = $(this).data('catatan');
                    			const fu = $(this).data('follow_up');
                    			const url = $(this).data('url');

                    			// Set data to Form Edit
                    			$('.id').val(id);
                    			$('.tanggal').val(tanggal);
                    			$('.uk').val(uk);
                    			$('.uraian').val(uraian);
                    			$('.disposisi').val(disposisi);
                    			$('.catatan').val(catatan);
                    			$('.fu').val(fu);
                    			$('.url').val(url);

                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		$('.btn-delete').on('click', function () {
                    			console.log("button delete triggered!");
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const base = '<?= base_url(' / ') ?>';
                    			const url = $(this).data('url');
                    			const base_url = base + 'kegiatan/hapus/' + id + '/' + url;
                    			// Set data to Form Edit
                    			$('.delete-a').attr("href", base_url);
                    			//$('.delete-a').href(base_url+'/'+id);
                    		});

                    		// get Delete Product
                    		$('.btn-delete-tu').on('click', function () {
                    			console.log("button delete triggered!");
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const base = '<?= base_url(' / ') ?>';
                    			const url = $(this).data('url');
                    			const base_url = base + url + '/hapus/' + id;
                    			// Set data to Form Edit
                    			$('.delete-a').attr("href", base_url);
                    			//$('.delete-a').href(base_url+'/'+id);
                    		});

                    	});
                    </script>
                    <!-- end surat -->

                    <!-- begin kegiatan tu -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit2').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const tanggal = $(this).data('date');
                    			const kegiatan = $(this).data('kegiatan');
                    			const progress = $(this).data('progress');
                    			const keterangan = $(this).data('keterangan');
                    			const tanggal_kegiatan = $(this).data('date');

                    			// Set data to Form Edit
                    			$('.id_kegiatan').val(id);
                    			$('.tanggal').val(tanggal);
                    			$('.kegiatan').val(kegiatan);
                    			//$('.progress').val(progress);
                    			$('.keterangan').val(keterangan);
                    			$('.tanggal_kegiatan').val(tanggal_kegiatan);

                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		// $('.btn-delete').on('click', function () {
                    		// 	// get data from button edit
                    		// 	const id = $(this).data('id');
                    		// 	// Set data to Form Edit
                    		// 	$('.productID').val(id);
                    		// 	// Call Modal Edit
                    		// 	$('#').modal('show');
                    		// });

                    	});
                    </script>
                    <!-- end kegiatan tu -->

                    <!-- begin kegiatan ptpp -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit2').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const kegiatan = $(this).data('kegiatan');
                    			const pic = $(this).data('pic');
                    			const completion = $(this).data('completion');
                    			const biaya = $(this).data('biaya');
                    			const tgl_awal = $(this).data('date_awal');
                    			const tgl_akhir = $(this).data('date_akhir');
                    			const keterangan = $(this).data('keterangan');
                    			//const update = $(this).data('update');

                    			// Set data to Form Edit
                    			$('.id_kegiatan').val(id);
                    			$('.kegiatan').val(kegiatan);
                    			//$('.progress').val(progress);
                    			$('.pic').val(pic);
                    			$('.completion').val(completion);
                    			$('.biaya').val(biaya);
                    			$('.date_awal').val(tgl_awal);
                    			$('.date_akhir').val(tgl_akhir);
                    			$('.keterangan').val(keterangan);

                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		// $('.btn-delete').on('click', function () {
                    		// 	// get data from button edit
                    		// 	const id = $(this).data('id');
                    		// 	// Set data to Form Edit
                    		// 	$('.productID').val(id);
                    		// 	// Call Modal Edit
                    		// 	$('#deleteModal').modal('show');
                    		// });

                    	});
                    </script>
                    <!-- end kegiatan ptpp -->

                    <!-- begin kegiatan pe -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit2').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const kegiatan = $(this).data('kegiatan');
                    			const pic = $(this).data('pic');
                    			const completion = $(this).data('completion');
                    			const biaya = $(this).data('biaya');
                    			const tgl_awal = $(this).data('date_awal');
                    			const tgl_akhir = $(this).data('date_akhir');
                    			const keterangan = $(this).data('keterangan');
                    			//const update = $(this).data('update');

                    			// Set data to Form Edit
                    			$('.id_kegiatan').val(id);
                    			$('.kegiatan').val(kegiatan);
                    			//$('.progress').val(progress);
                    			$('.pic').val(pic);
                    			$('.completion').val(completion);
                    			$('.biaya').val(biaya);
                    			$('.date_awal').val(tgl_awal);
                    			$('.date_akhir').val(tgl_akhir);
                    			$('.keterangan').val(keterangan);

                    			// Call Modal Edit
                    			//$('#modal-edit').modal('show');
                    		});

                    		// get Delete Product
                    		// $('.btn-delete').on('click', function () {
                    		// 	// get data from button edit
                    		// 	const id = $(this).data('id');
                    		// 	// Set data to Form Edit
                    		// 	$('.productID').val(id);
                    		// 	// Call Modal Edit
                    		// 	$('#deleteModal').modal('show');
                    		// });

                    	});
                    </script>
                    <!-- end kegiatan ptpp -->

                    <!-- begin agenda -->
                    <script>
                    	$(document).ready(function () {

                    		// get Edit Product
                    		$('.btn-edit2').on('click', function () {
                    			// get data from button edit
                    			const id = $(this).data('id');
                    			const nama = $(this).data('nama');
                    			const dstart = $(this).data('dstart');
                    			const tstart = $(this).data('tstart');
                    			const dend = $(this).data('dend');
                    			const tend = $(this).data('tend');
                    			const lokasi = $(this).data('lokasi');
                    			const pic = $(this).data('pic');
                    			const peserta = $(this).data('peserta');
                    			const urgensi = $(this).data('urgensi');
                    			const deskripsi = $(this).data('deskripsi');

                    			// Set data to Form Edit
                    			$('.id_agenda').val(id);
                    			$('.nama_agenda').val(nama);
                    			$('.tanggal_mulai').val(dstart);
                    			$('.waktu_mulai').val(tstart);
                    			$('.tanggal_selesai').val(dend);
                    			$('.waktu_selesai').val(tend);
                    			$('.lokasi').val(lokasi);
                    			$('.pic').val(pic);
                    			$('.peserta').val(peserta);
                    			$('.urgensi').val(urgensi);
                    			$('.deskripsi').val(deskripsi);
                    		});

                    	});
                    </script>
                    <!-- end agenda -->

                    <script>
                    	document.getElementById('confirm').onkeyup = function () {
                    		var password = $("#password").val();
                    		var confirm_password = $("#confirm").val();
                    		if (password != confirm_password) {
                    			$("#confirm").css({
                    				'border-color': "red",
                    				'border-width': 'medium'
                    			});
                    		} else {
                    			$("#confirm").css({
                    				'border-color': "#00E676",
                    				'border-width': 'medium'
                    			});
                    		}
                    	}
                    </script>
                    </body>

                    </html>
