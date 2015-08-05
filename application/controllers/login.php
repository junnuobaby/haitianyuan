<!--µÇÂ½-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/weibo_login');
    }


    public function weibo_login()
    {
        $this->load->view('pages/weibo_login');
    }

    public function qq_login()
    {
        $this->load->view('pages/qq_login');
    }

}

