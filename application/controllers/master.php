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
//    ע����ɺ󣬼��ظ�����Ϣ
    public function master_profile()
    {
        $this->load->view('master/master_profile');
    }


}

