<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/test');
    }
    public  function get(){
        $pk = $_POST['pk'];
        $name = $_POST['name'];
        $value = $_POST['value'];
        if(!empty($value)) {
            print_r($_POST);
        } else {
            header('HTTP 400 Bad Request', true, 400);
            echo "This field is required!";
        }

    }
    public  function birthday(){
        $pk = $_POST['pk'];
        $name = $_POST['name'];
        $value = $_POST['value'];
        if(!empty($value)) {
            print_r($_POST);
        } else {
            header('HTTP 400 Bad Request', true, 400);
            echo "This field is required!";
        }

    }

    public function play(){
        $name = $_POST['name'];
        if($_POST['value'] == ''){
            echo 'the field is required';

        }
        else if($name == 'name'){
            echo 'hello '.$_POST['value'];
        }
    }
}

