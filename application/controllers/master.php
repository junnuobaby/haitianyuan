<!--用户-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }
//    个人资料修改页面
    public function master_profile()
    {
        $this->load->view('master/master_profile');
    }
    //    理财师个人主页
    public function master_homepage()
    {
        $this->load->view('master/master_homepage');
    }
    public function  vip_price()
    {
        $this->load->view('master/vip_price');
    }


}

