<!--注册-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/register');
    }

    public function user_choose()
    {
        $this->load->view('pages/jump_page');
    }

    public function user_info()
    {
        $this->load->view('pages/register_user_info');
    }


}

