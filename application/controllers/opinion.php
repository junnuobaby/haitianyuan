<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opinion extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    //接收发表的观点数据
    public function pub_opinion()
    {
        $title = $_POST['op_title'];
        $content = $_POST['op_content'];
        $kwords = $_POST['op_kwords'];
        $auth = $_POST['op_auth'];
        $arr = array('status' => 1, 'msg' => 'ok');
        echo '发表成功';
    }

//    加载已发表观点
    public function index()
    {
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
        $view_list = array($view, $view, $view, $view, $view);
        $data['op'] = $view_list;
        $this->load->view('master/published_opinion', $data);
    }

    public function auth()
    {
        $title = $_POST['change_auth'];
        echo $title;
    }
    public function single_opinion($opinion_id)
    {
        //生成一个测试用的观点
        $view = array(
            "op_id" => 1,
            "master_name" => "君诺宝宝",
            "op_title" => "第三期计划上线，跟紧大时代，狙击牛市龙头",
            "op_content" => "我一直认为，股票市场同房地产一样，做为一个重要的资本市场，是财富再分配的核心场所。如何理解这句话，其实质意义就是如果
    本轮牛市你没有深度参与，那将同身边参与这轮牛市的人拉开巨大的财富鸿沟。去年12月份的券商股，今年的互联网等相关的概念股，短短的1-3个
    月就有翻倍的上涨，再加上杠杆工具的结合，其赚钱效应就已经将那些没有参与市场的人的财富远远甩在了后面。",
            "op_timestamp" => "2015-09-09 20:25",
            "op_kwords" => "A股",
            "op_auth" => 0,
        );
        $data['opinion'] = $view;
        $this->load->view('master/single_opinion', $data);
    }


}

