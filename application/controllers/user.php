<!--�û�-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }
//    ע����ɺ󣬼��ظ�����Ϣ
    public function user_profile()
    {
        $this->load->view('pages/user_profile');
    }


}

