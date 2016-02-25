<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function load_home($origin, $identity, $kind)
    {
//        $is_fan = true;
        $is_fan = false;
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

        if ($origin == 'web' && $identity == 'master' && $kind == 'qa') {
            //生成一个测试用的问答数组
            $qa = array(
                "id" => 1,
                "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
                "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
                "question_time" => "2015-08-09 20:25",
                "answer_time" => "2015-08-09 22:25",
                "star" => "5"
            );
            $qa_list = array($qa, $qa, $qa, $qa, $qa, $qa, $qa);
            $data1['qa_list'] = $qa_list;
            $data1['is_fan'] = $is_fan;
            $data1['info'] = $info;
            $this->load->view('master/master_homepage', $data1);
        } else if ($origin == 'web' && $identity == 'master' && $kind == 'op') {
            //生成一个测试用的观点数组
            $view = array(
                "op_id" => 1,
                "master_name" => "理财师",
                "op_title" => "第三期计划上线，跟紧大时代，狙击牛市龙头",
                "op_content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
                            本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网等相关的概念股，短短的1-3个
                             月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。",
                "op_timestamp" => "2015-09-09 20:25",
                "op_kwords" => "A股",
                "op_auth" => 0,
            );
            $view_list = array($view, $view);
            $data2['is_fan'] = $is_fan;
            $data2['view_list'] = $view_list;
            $data2['info'] = $info;
            $this->load->view('master/master_opinion', $data2);
        }else if ($origin == 'web' && $identity == 'master' && $kind == 'simulation') {
            $stock = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05);
            $data['user_stocks'] = array($stock, $stock,$stock,$stock);
            $bond = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05, 'day_left'=>10, 'profit_end'=>'2015-12-30','interest'=>'100');
            $data['user_bonds'] = array($bond,$bond);
            $data['info'] = $info;
            $data['is_fan'] = $is_fan;
            $this->load->view('master/master_simulation', $data);
        }
    }

    public function add_fan($web)
    {


        if ($web == 'web') {
            $id = $_GET['master_id'];
            $name = $_GET['username'];
            $json = array('status' => 0, 'msg' => 'success');
            echo json_encode($json);
        }

    }

    public function cancel_fan($web)
    {
        if ($web == 'web') {
            $id = $_GET['master_id'];
            $json = array('status' => 0, 'msg' => 'success');
            echo json_encode($json);
        }
    }

    public function lcs_index()
    {
        $master = array('master_name'=>'君诺宝宝', 'concerns_count' =>'10', 'fans_count'=>'20','online_state'=>true,
            'signature'=>'生活源于自然,成功源于专业,理财源于全面,具备全面的金融理财学识,精通投资策略分析和资产配置','master_id'=>'10002');
        $data['masters'] = array($master, $master, $master, $master, $master);
        $this->load->view('pages/lcs_index', $data);
    }

}
