<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	
	
	$route['login'] = 'AuthController/login';
	$route['logout'] = 'AuthController/logout';


	/*
	 * laporan routes modul
	 * */
	$route['laporan-anggota'] = 'LaporanController/anggota';
	$route['laporan-simpanan'] = 'LaporanController/simpananAnggota';
	$route['laporan-pinjaman'] = 'LaporanController/pinjamanAnggota';
	$route['laporan-tagihan-koperasi'] = 'LaporanController/tagihanKoperasi';

    /*
    * angsuran routes modul
    * */
    $route['angsuran-mudharabah'] = 'AngsuranController/angsuranMudharabah';
    $route['angsuran-murabahah'] = 'AngsuranController/angsuranMurabahah';
    $route['angsuran-musyarakah'] = 'AngsuranController/angsuranMusyarakah';
    $route['angsuran-ijarah'] = 'AngsuranController/angsuranIjarah';

    /*
     * pinjaman routes modul
     * */
    // view
	$route['pinjaman-mudharabah'] = 'PinjamanController/pinjamanMudharabah';
	$route['pinjaman-murabahah'] = 'PinjamanController/pinjamanMurabahah';
	$route['pinjaman-musyarakah'] = 'PinjamanController/pinjamanMusyarakah';
	$route['pinjaman-ijarah'] = 'PinjamanController/pinjamanIjarah';

    // insert
	$route['pinjaman-mudharabah/tambah'] = 'PinjamanController/tambahMudharabah';

	//disposisi
	$route['pinjaman/setuju/(:any)'] = 'PinjamanController/setuju/$1';
	$route['pinjaman/tolak/(:any)'] = 'PinjamanController/tolak/$1';

	/*
	 * kehadiran routes modul
	 * */
	$route['kehadiran'] = 'KehadiranController/kehadiran';
	$route['kehadiran/hapus/(:any)'] = 'KehadiranController/hapus/$1';


	/*
	 * kegiatan routes Modul
	 * */
	$route['kegiatan-tu'] = 'KegiatanController/kegiatan_tu';
	$route['kegiatan-ptpp'] = 'KegiatanController/kegiatan_ptpp';
	$route['kegiatan-pe'] = 'KegiatanController/kegiatan_pe';
	$route['kegiatan/hapus/(:any)/(:any)'] = 'KegiatanController/hapus/$1/$2';
	$route['subkegiatan/hapus/(:any)/(:any)/(:any)'] = 'KegiatanController/hapus_sub_kegiatan/$1/$2/$3';

	$route['kegiatan-ptpp/log/(:any)'] = 'KegiatanController/subkegiatan_ptpp/$1';
	$route['kegiatan-pe/log/(:any)'] = 'KegiatanController/subkegiatan_pe/$1';

	/*
	 * persuratan routes Modul
	 * */
	$route['persuratan'] = 'SuratController/dashboard';
	$route['persuratan/hapus/(:any)'] = 'SuratController/hapus/$1';

	/*
	 * anggaran routes Modul
	 * */
	$route['anggaran'] = 'AnggaranController/dashboard';
	$route['anggaran/hapus/(:any)'] = 'AnggaranController/hapus/$1';

	/*
	 * berkas routes Modul
	 * */
	$route['berkas'] = 'BerkasController/dashboard';
	$route['berkas/hapus/(:any)'] = 'BerkasController/hapus/$1';	

	/*
	 * dashboard-tu routes Modul
	 * */
	$route['dashboard'] = 'DashboardController/dashboard';
	$route['dashboard-tu-date'] = 'DashboardController/get_dashboard_tu';
	$route['dashboard-tu-surat-date'] = 'DashboardController/get_dashboard_tu_surat';
	$route['dashboard-tu-kehadiran'] = 'DashboardController/get_dashboard_tu_kehadiran';
	$route['dashboard-agenda'] = 'AgendaController/dashboard';

	/*
	 * agenda routes Modul
	 * */
	$route['agenda/load'] = 'AgendaController/load';
	$route['agenda'] = 'AgendaController/index';
	$route['agenda/hapus/(:any)'] = 'AgendaController/hapus/$1';

	/*
	 * dashboard-ptpp routes Modul
	 * */
	$route['dashboard-ptpp'] = 'DashboardController/dashboard_ptpp';
	$route['dashboard-ptpp-kegiatan-date'] = 'DashboardController/get_dashboard_ptpp_kegiatan';
	$route['dashboard-ptpp-detail-kegiatan'] = 'DashboardController/get_detail_kegiatan_ptpp';

	/*
	 * dashboard-pe routes Modul
	 * */
	$route['dashboard-pe'] = 'DashboardController/dashboard_pe';
	$route['dashboard-pe-kegiatan-date'] = 'DashboardController/get_dashboard_pe_kegiatan';
	$route['dashboard-pe-detail-kegiatan'] = 'DashboardController/get_detail_kegiatan_pe';

	$route['ubah-password'] = 'AuthController/change_password';

	/*
	 * anggota routes Modul
	 * */
	$route['anggota'] = 'AnggotaController';
	$route['anggota/tambah'] = 'AnggotaController/tambah';
	$route['anggota/ubah/(:any)'] = 'AnggotaController/ubah/$1';
	$route['anggota/hapus/(:any)'] = 'AnggotaController/hapus/$1';
	$route['anggota/(:any)'] = 'AnggotaController/detail/$1';

	$route['default_controller'] = 'AdminController';
	$route['404_override'] = '';
	$route['translate_uri_dashes'] = FALSE;

