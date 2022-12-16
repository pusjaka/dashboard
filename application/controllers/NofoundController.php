<?php

class NofoundController extends GLOBAL_Controller
{
	public function index()
    {
    	$this->load->view('errors/html/error_404');
    }

}
