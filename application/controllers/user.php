<!--�û�-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function user_profile()
    {
        $this->load->view('user/user_profile');
    }
    public function user_questions()
    {
        $this->load->view('user/user_questions');
    }
    public function user_vips()
    {
        $info = array(
            'master_id' => 1,
            'online_state' => false,   //是否在线，在线为true
            'username' => "开普勒",
            'concerns_count' => "104",
            'fans_count' => "2000",
            'vips_count' => "1190",
            'questions_count' => "2388",
            'satisfication_rate' => "80%",
            'response_time' => "2",
            'signature' => "生活源于自然,成功源于专业,理财源于全面,具备全面的金融理财学识,精通投资策略分析和资产配置",
    );
        $data['vips'] = array($info, $info, $info);
        $this->load->view('user/user_vips', $data);
    }

}

