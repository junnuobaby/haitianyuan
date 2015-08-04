<!--注册-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

//    加载注册页面
    public function index()
    {
        $this->load->view('pages/register');
    }
//    注册完成后，加载信息完善页面
    public function user_info()
    {
        $this->load->view('pages/register_user_info');
    }


}

