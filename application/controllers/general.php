<!--��½-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('pages/settle');
    }
    public function settle()
    {
        $data['auth_state'] = 0;
        $this->load->view('settle/step_1', $data);
    }

}

