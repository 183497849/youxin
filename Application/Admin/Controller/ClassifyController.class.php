<?php
namespace Admin\Controller;
use Think\Controller;
class CLassifyController extends Controller {
	public function add(){
		$Classify = D('Classify');
		$where = array(
			'parent_id'=>0,
			);
		$classify = $Classify->where($where)->select();
		$this->assign('classify',$classify);
		$this->display();	
	}

	public function doAdd(){
		$name = $_POST['name'];
		$parent_id = $_POST['parent_id'];
		$img = uploadFile();
		// var_dump($img);
		// die();
		$data = array(
			'name'=>$name,
			'parent_id'=>$parent_id,
			'image'=>$img,
			);
		$Classify = D('Classify');
		$status = $Classify->add($data);
		if($status){
			 $this->success('发布成功',U('Admin/Classify/add'));
		}else{
			 $this->error('发布失败',U('Admin/Classify/add'));
		}
	}

	public function lists(){
		$Classify = D('Classify');
		$data = $Classify->select();
		$this->assign('data',$data);
		$this->display();
	}
}