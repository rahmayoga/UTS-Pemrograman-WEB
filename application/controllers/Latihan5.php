<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Latihan5 extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = 'Aplikasi ';
		$this->template->display('content', $data);
			}
}