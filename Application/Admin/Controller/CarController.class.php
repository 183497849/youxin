<?php
namespace Admin\Controller;
use Think\Controller;
class CarController extends Controller {
	public function add(){
		$this->display();
	}

	public function doAdd(){
		$name 			= $_POST['name'];
		$price 			= $_POST['price'];
		$time 			= $_POST['time'];
		$miles 			= $_POST['miles'];
		$emissions  	= $_POST['emissions'];
		$displacemnet 	= $_POST['displacemnet'];
		$city 			= $_POST['city'];
		$inspector 		= $_POST['inspector'];
		$brand 			= $_POST['brand'];
		$cars 			= $_POST['cars'];
		$type 			= $_POST['type'];
		$stages 		= $_POST['stages'];
		$year 			= $_POST['year'];
		$payments 		= $_POST['payments'];
		$option 		= $_POST['option'];
		$subdirectory   = 'Car';
		$img 			= uploadFile($subdirectory);

		$data = array(
			'name'		 	=> $name,
			'price'		 	=> $price,
			'time' 		 	=> $time,
			'miles'			=> $miles,
			'emissions'		=> $emissions,
			'displacemnet'  => $displacemnet,
			'city' 			=> $city,
			'inspector' 	=> $inspector,
			'brand' 		=> $brand,
			'cars' 			=> $cars,
			'type' 			=> $type,
			'stages' 		=> $stages,
			'year' 			=> $year,
			'payments' 		=> $payments,
			'option' 		=> $option,
		);

		$Car = D('car');
		$res= $Car->add($data);
		$data2 = array(
			'image' => $img
		);
		$data3 = array(
			'id' => $res;
		);
		if ($option == 1) {
			$Car = D('car');
			$status = $Car->where($data3)->setField($data2);
			if($status){
				 $this->success('发布成功',U('Admin/Car/add'));
			}else{
				 $this->error('发布失败',U('Admin/Car/add'));
			}
		}elseif($option == 2){
			$Carimage = D('car_img');
			$status = $Carimage->add($data2);
			if($status){
				 $this->success('发布成功',U('Admin/Car/add'));
			}else{
				 $this->error('发布失败',U('Admin/Car/add'));
			}
		}
		
	}

}