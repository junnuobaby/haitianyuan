<!--�û�-->
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
//    ���������޸�ҳ��
    public function master_profile()
    {
        $this->load->view('master/master_profile');
    }
    //    ���ʦ������ҳ
    public function master_homepage()
    {
        $this->load->view('master/master_homepage');
    }
    public function  vip_price()
    {
        $this->load->view('master/vip_price');
    }


}

