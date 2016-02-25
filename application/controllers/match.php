<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['nav_mode'] = 'match_lists';
        $this->load->view('match/match_lists', $data);
    }
    public function match_center()
    {

        $stock = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05);
        $data['user_stocks'] = array($stock, $stock,$stock,$stock);
        $bond = array('SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume_All'=>500, 'Ban_Volume'=>100, 'Order_Volume'=>100, 'BuyCost'=>10.05, 'day_left'=>10, 'profit_end'=>'2015-12-30','interest'=>'100');
        $data['user_bonds'] = array($bond,$bond);
        $data['user_data'] = array('cash_all'=>1000000, 'cash_use'=>1000000, 'cash_freeze'=>0);
        $data['nav_mode'] = 'match_lists';
        $data['sub_nav_mode'] = 'match_center_index';
        $this->load->view('match/match_center_index',$data);
    }
    //    买入
    public function match_buy()
    {
        $data['cash_use']=1000000;
        $data['nav_mode'] = 'match_lists';
        $data['sub_nav_mode'] = 'match_buy';
        $this->load->view('match/match_buy',$data);
    }
    //    卖出
    public function match_sell()
    {
        $data['nav_mode'] = 'match_lists';
        $data['sub_nav_mode'] = 'match_sell';
        $this->load->view('match/match_sell',$data);
    }
    //    委托单
    public function match_orders()
    {
        $order = array('pre_id'=>'201512088484848','trade_type'=>2, 'SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume'=>100,
            'price_order'=>10.05, 'price_full'=>10.05, 'fund_deal'=>1050, 'fee'=>5.00, 'tax'=>'1.00','other_fee'=>0, 'hap_fund'=>1050,
            'remain_fund'=>994050,'timestamp'=>'2015-12-17','tip'=>'冻结1050');
        $data['records'] = array($order,$order,$order,$order,$order);
        $data['nav_mode'] = 'match_lists';
        $data['pages'] = '';
        $data['sub_nav_mode'] = 'match_orders';
        $this->load->view('match/match_orders',$data);
    }
    //    历史成交单
    public function match_done()
    {
        $order = array('trade_type'=>1, 'SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume'=>100,
            'price_order'=>10.05, 'price_deal'=>10.06, 'price_full'=>10.05, 'fund_deal'=>1050, 'fee'=>5.00, 'tax'=>'1.00','other_fee'=>0, 'hap_fund'=>1050,
            'remain_fund'=>994050,'timestamp'=>'2015-12-17','tip'=>'冻结1050');
        $data['done_records'] = array($order,$order,$order,$order,$order);
        $data['nav_mode'] = 'match_lists';
        $data['pages'] = '';
        $data['sub_nav_mode'] = 'match_done';
        $this->load->view('match/match_done',$data);
    }
    //    操作记录
    public function match_records()
    {
        $order = array('trade_type'=>2, 'SecurityID'=>'000001', 'Symbol'=>'平安银行', 'Volume'=>100,
            'price_order'=>10.05, 'price_deal'=>10.06, 'price_full'=>10.05, 'fund_deal'=>1050, 'fee'=>5.00, 'tax'=>'1.00','other_fee'=>0, 'hap_fund'=>1050,
            'remain_fund'=>994050,'timestamp'=>'2015-12-17','tip'=>'冻结1050');
        $data['done_records'] = array($order,$order,$order,$order,$order);
        $data['nav_mode'] = 'match_lists';
        $data['sub_nav_mode'] = 'match_records';
        $data['pages'] = '';
        $this->load->view('match/match_records',$data);
    }
    //    排行榜
    public function match_rank()
    {
        $order = array('scope'=>2, 'grade'=>1, 'user_name'=>'君诺宝宝', 'fund'=>10000,'position'=>'0.01','day_rate'=>'0.00','week_rate'=>'0.1105','month_rate'=>'0.12','profit_rate'=>'0.1456');
        $data['rank_lists'] = array($order,$order,$order,$order,$order);
        $data['nav_mode'] = 'match_lists';
        $data['sub_nav_mode'] = 'match_rank';
        $data['pages'] = '';
        $this->load->view('match/match_rank',$data);
    }




}

