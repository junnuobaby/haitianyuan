<!--�û�-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function master_profile()
    {
        $this->load->view('master/master_profile');
    }

    public function ques_tobeanswered()
    {
        $this->load->view('master/master_qa');
    }

    public function publish_opinion()
    {
        $this->load->view('master/publish_opinion');
    }
    public function published_opinion()
    {
        $this->load->view('master/published_opinion');
    }

//    加载vip支付界面
    public function  vip_price()
    {
        $this->load->view('master/vip_price');
    }

//    加载单个问答页面
    public function  question($id)
    {

    }

//加载单个观点页面,根据id从数据库获得数据
    public function  view($id)
    {
        $data['title'] = '第三期计划上线，跟紧大时代，狙击牛市龙头';
        $data['content'] = '我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网+等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。';
        $data['time'] = '2015-09-09 20:25';
        $data['view_num'] = '512';
        $this->load->view('master/master_opinion', $data);
    }

    public function set_price()
    {
        $data['month_vip'] = 100;
        $data['half_year_vip'] = 580;
        $data['year_vip'] = 1000;
        $this->load->view('master/set_vip_price', $data);
    }

    public function change_price()
    {
        echo 'success';
    }
    public function master_vips()
    {
        $record = array('start_time'=>'2015-07-16', 'term'=>'30天','price'=>'10.00');
        $records = array($record, $record, $record);
        $qa = array(
            "id" => 1,
            "question" => "老师你好，今天大盘强震，后市如何操作？需要减仓规避风险吗？玉龙股份17.6成本，微套，近期能看高吗？后市如何操作。",
            "answer" => "牛市快跌是必然走势，所以短线需要规避几天再抄底，明日估计会有个修正的高开，根据你的仓位做处理，满仓当然要先减仓",
            "question_time" => "2015-08-09 20:25",
            "answer_time" => "2015-08-09 22:25",
        );
        $qa_list = array($qa, $qa, $qa, $qa, $qa, $qa, $qa);
        $vip1 = array(
            'vip_id' => 1,
            'vip_name' => '开普勒',
            'vip_left_days' => '27',
            'records' => $records,
            'qa_list' => $qa_list
        );
        $vip2 = array(
            'vip_id' => 2,
            'vip_name' => '开普勒',
            'vip_left_days' => '27',
            'records' => $records,
            'qa_list' => $qa_list
        );
        $vips = array($vip1, $vip2);
        $data['vips'] = $vips;
        $this->load->view('master/master_vips', $data);
    }


}

