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

    public function homepage()
    {
        $qa = array(
            "id" => 1,
            "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
            "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
            "question_time" => "2015-08-09 20:25",
            "answer_time" => "2015-08-09 22:25",
            "star" => "5"
        );
        $data['qa_list'] = array($qa);
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
        $stock = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05);
        $data['user_stocks'] = array($stock, $stock,$stock,$stock);
        $bond = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05, 'day_left'=>10, 'profit_end'=>'2015-12-30','interest'=>'100');
        $data['user_bonds'] = array($bond,$bond);
        $this->load->view('user/user_homepage', $data);
    }

}

