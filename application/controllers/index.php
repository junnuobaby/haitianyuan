<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('pages/index');
	}
    public function authentication()
    {
        $this->load->view('pages/authentication');
    }
    public function ht_info()
    {
        $this->load->view('info/lcs_info');
    }
    public function ht_vip()
    {
        $this->load->view('info/vip');
    }
}
