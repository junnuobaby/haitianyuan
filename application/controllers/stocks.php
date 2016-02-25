<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function simulation($item)
    {
        if ($item == 'index') {
            $data['nav_mode'] = 'simu_index';
            $this->load->view('stocks/simu_index', $data);
        } elseif ($item == 'buy') {
            $data['nav_mode'] = 'simu_buy';
            $this->load->view('stocks/simu_buy', $data);
        } elseif ($item == 'sell') {
            $data['nav_mode'] = 'simu_sell';
            $this->load->view('stocks/simu_sell', $data);
        } elseif ($item == 'cancel') {
            $data['nav_mode'] = 'simu_cancel';
            $this->load->view('stocks/simu_cancel', $data);
        } elseif ($item == 'done') {
            $data['nav_mode'] = 'simu_done';
            $this->load->view('stocks/simu_done', $data);
        } elseif ($item == 'perform') {
            $data['nav_mode'] = 'simu_perform';
            $this->load->view('stocks/simu_perform', $data);
        }
    }

    public function rules()
    {
        $data['nav_mode'] = 'trading_rules';
        $this->load->view('stocks/trading_rules', $data);
    }

    public function guides()
    {
        $data['nav_mode'] = 'trading_guides';
        $this->load->view('stocks/trading_guides', $data);
    }

    public function hint_list($str)
    {
        if ($str === '0') {
            $res1 = array('code' => '000001', 'name' => '东方财富');
            $res2 = array('code' => '000002', 'name' => '万科A');
            $res3 = array('code' => '000003', 'name' => 'B股指数');
            $hint_list = array($res1, $res2, $res3);
            echo json_encode($hint_list);
        } elseif ($str === '00') {
            $res4 = array('code' => '000004', 'name' => '东方财富');
            $res5 = array('code' => '000005', 'name' => '万科A');
            $res6 = array('code' => '000006', 'name' => 'B股指数');
            $hint_list = array($res4, $res5, $res6);
            echo json_encode($hint_list);
        } elseif ($str === '000') {
            $res7 = array('code' => '000007', 'name' => '东方财富');
            $res8 = array('code' => '000008', 'name' => '万科A');
            $res9 = array('code' => '000009', 'name' => 'B股指数');
            $hint_list = array($res7, $res8, $res9);
            echo json_encode($hint_list);
        } elseif ($str === '300') {
            $res = array('code' => '3000000', 'name' => '上海证券');
            $hint_list = array($res, $res, $res, $res);
            echo json_encode($hint_list);
        }
    }

    public function hint_chinese($str)
    {
        $str = urldecode($str);
        if ($str === '中国') {
            $res1 = array('code' => '3000000', 'name' => '中国平安');
            $res2 = array('code' => '3000002', 'name' => '中国石化');
            $res3 = array('code' => '3000010', 'name' => '中国石油');
            $hint_list = array($res1, $res2, $res3);
            echo json_encode($hint_list);
        }
        elseif($str === '中') {
            $res1 = array('code' => '3000000', 'name' => '中冠a');
            $res2 = array('code' => '3000002', 'name' => '中集集团');
            $res3 = array('code' => '3000010', 'name' => '中航地产');
            $hint_list = array($res1, $res2, $res3);
            echo json_encode($hint_list);
        }
    }

    public function code_info($code){
        $sell = array(10.24, '10.20', 10.19, 10.18, 10.16);
        $buy = array(10.22, 10.21, 10.19, 10.18, 10.16);
        $info = array('name'=>'东方财富', 'new'=>'11.22', 'last'=>'11.25', 'up'=>'11.34','down'=>'11.18','sell'=>$sell, 'buy'=>$buy);
        echo json_encode($info);

    }

    public function buy_bond(){
        $status = array('status' => 'success');
        echo json_encode($status);
    }
    public function cmp_list(){
        $this->load->view('stocks/cmp_list');
    }
}

