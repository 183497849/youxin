<?php
namespace Admin\Controller;
use Think\Controller;
class CarImageController extends Controller {
	public function add(){
		$this->display();
	}

	public function doAdd(){
		$subdirectory   = 'CarImage';
		$img 			= uploadFile($subdirectory);
		$data = array(
			'image' => $img
			);
			 		
	}
}