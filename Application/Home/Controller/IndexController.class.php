<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$Classify = D('Classify');
    	$classify_data = $Classify->select();
		$this->assign('classify_data',$classify_data);
		$Car_type = D('Car_type');
    	$car_type_data = $Car_type->select();
		$this->assign('car_type_data',$car_type_data);
        $this->display();
    }

    public function search(){
    	$Classify = D('Classify');
    	$classify_data = $Classify->select();
		$this->assign('classify_data',$classify_data);
		$Car_type = D('Car_type');
    	$car_type_data = $Car_type->select();
		$this->assign('car_type_data',$car_type_data);
    	$this->display();
    }
}