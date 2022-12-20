<?php
	/**
	 * Created by PhpStorm.
	 * User: ibag
	 * Date: 7/13/2019
	 * Time: 2:02 PM
	 */

	class AuthController extends GLOBAL_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('AuthModel');
		}
		
		/*
		 * login, register, logout
		 * autentikasi pengguna sales, adminSales, adminGudang dan Superadmin
		 *
		 * **/
		public function login()
		{
			if (parent::hasLogin()){
				redirect(base_url());
			}else{
				if (isset($_POST['login'])){
					$username = parent::post('username');
					$password = parent::post('password');
					
					$dataPengguna = parent::model('AuthModel')->get_pengguna($username,md5($password));
					
					if ($dataPengguna->num_rows() > 0){
						$pengguna = $dataPengguna->row_array();
						
						$sessionData = array(
							'user_id' => $pengguna['pengguna_id'],
							'username' => $pengguna['pengguna_username'],
							'name' => $pengguna['pengguna_nama'],
							'level' => $pengguna['pengguna_hak_akses'],
							'login' => true
						);
						
						$this->session->set_userdata($sessionData);

							parent::alert('alert','user-welcome');
							if($sessionData['level'] == 'staff'){
								redirect(base_url());
							} else if($sessionData['level'] == 'user'){
								redirect(base_url('dashboard'));
							}
					}else{
						parent::alert('alert','error-login');
					}
				}
				
				$data['title'] = 'Masuk - Sistem PUSJAK';
				parent::authPage('auth/login',$data);
				
			}
		}

		public function change_password()
		{

				if (isset($_POST['submit'])){
					//$username = parent::post('username');
					$password = parent::post('password_lama');
					
					$dataPengguna = parent::model('AuthModel')->get_pengguna($this->session->userdata('username'),md5($password));
					
					if ($dataPengguna->num_rows() > 0 && parent::post('password_baru') == parent::post('password_validate')){
						//$pengguna = $dataPengguna->row_array();
						
						$data = array(
							'Pengguna_password' => md5(parent::post('password_baru')),
						);
			
						$simpan = parent::model('AuthModel')->ubah_pengguna($this->session->userdata('user_id'), $data);
			
						if ($simpan > 0 ){
							parent::alert('alert','sukses_tambah');
							redirect('ubah-password');
						} else {
							parent::alert('alert','gagal_tambah');
							redirect('ubah-password');
						}
						parent::alert('alert','error-login');
					}else if($dataPengguna->num_rows() <= 0 && parent::post('password_baru') == parent::post('password_validate')) {
						var_dump('Password lama anda salah!');die;
					}else{
						var_dump('Ulangi password baru anda dengan benar!');die;
					}
					
				}else{

					$data['title'] = 'Ubah Password';
					parent::template('auth/ubahPassword',$data);

				}
				
			
		}
		
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
