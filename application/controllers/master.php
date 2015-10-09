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

//    加载理财师主页
    public function master_homepage()
    {
        $this->load->view('master/master_homepage');
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

}

