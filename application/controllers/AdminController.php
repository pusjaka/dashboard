<?php

	class AdminController extends GLOBAL_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!parent::hasLogin()) {
				$this->session->set_flashdata('alert', 'belum_login');
				redirect(base_url('login'));
			}else if(parent::hasLogin() && $this->session->userdata['level'] == 'user'){
				redirect(base_url('dashboard'));
			}
		}
		

		public function index()
		{
			$data['title'] = 'Dashboard Admin';

			parent::template('admin/dashboard',$data);
		}
		

	}
