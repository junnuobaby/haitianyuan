<!--加载关于我们，用户帮助等静态的信息页面-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('info/aboutus');
    }
    public function aboutus()
    {
        $this->load->view('info/aboutus');
    }
    public function contactus()
    {
        $this->load->view('info/contactus');
    }
    public function lcs()
    {
        $this->load->view('info/lcs');
    }
    public function user_help()
    {
        $this->load->view('info/user_help');
    }
}
