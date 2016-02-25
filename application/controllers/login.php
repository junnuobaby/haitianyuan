<!--��½-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['nav_mode'] = 'login';
        $this->load->view('pages/login', $data);
    }

    public function weibo_login()
    {
        $this->load->view('pages/weibo_login');
    }

    public function qq_login()
    {
        $this->load->view('pages/qq_login');
    }
    public function find_pwd($step)
    {
        if($step == 1){
            $this->load->view('pages/find_pwd_1');
        }elseif($step == 2){
            $this->load->view('pages/find_pwd_2');
        }elseif($step == 3){
            $this->load->view('pages/find_pwd_3');
        }
    }

}

