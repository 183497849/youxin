<?php
function uploadFile($subdirectory){
 	$upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     "$subdirectory/"; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    // var_dump($info);
    //  echo $upload->getError();
     // die();
    $img= $info['image']['savepath'].$info['image']['savename'];
    return $img;
}