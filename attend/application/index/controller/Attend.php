<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
/**
 * 进入实验室人数查询
 */
class Attend extends Controller{
    public function index(Request $request){
        // 判断是否是get请求
        if($request->isGet()){  
            // $query = db("attendrecord");
            // dump($query);exit;
            $date1 = date("Y-m-d");
            $date2 = date("Y-m-d",strtotime("-1 day"));
            $date3 = date("Y-m-d",strtotime("-2 days"));
            // dump($date1);
            // dump($date2);exit;
            $data1 = Db::query("select count(distinct ar_cardno) as num from attendrecord where str_to_date(ar_datetime, '%Y-%m-%d')='$date1';");
            $data2 = Db::query("select count(distinct ar_cardno) as num from attendrecord where str_to_date(ar_datetime, '%Y-%m-%d')='$date2';");
            $data3 = Db::query("select count(distinct ar_cardno) as num from attendrecord where str_to_date(ar_datetime, '%Y-%m-%d')='$date3';");
            // dump($data);exit;
            $this->assign('date1',$date1);
            $this->assign('date2',$date2);
            $this->assign('date3',$date3);
            $this->assign('data1',$data1);
            $this->assign('data2',$data2);
            $this->assign('data3',$data3);
            return $this->fetch();
        }
        $date = input('date');
        $data = Db::query("select count(distinct ar_cardno) as num from attendrecord where str_to_date(ar_datetime, '%Y-%m-%d')='$date';");
        // dump($data);exit;
        $this->assign('date',$date);
        $this->assign('data',$data);
        return $this->fetch('index1');
    }   
}