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
//    注册完成后，加载个人信息
    public function master_profile()
    {
        $this->load->view('master/master_profile');
    }


}

