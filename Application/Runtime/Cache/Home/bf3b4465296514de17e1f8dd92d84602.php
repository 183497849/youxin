<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device,user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/Home/css/public.css">
	<link rel="stylesheet" href="/Public/Home/css/search.css">
</head>
<body>
	<header class="clearfix">
		<div class="left">
			<i class="ser-pic"></i>
			<a href="#" class="cars">车辆</a>
			<form action="" class="form">
			<input type="search" placeholder="品牌/车系"></form>
		</div>
		<div class="right"><a href="http://youxin.com/Home/Index">取消</a></div>
	</header>
	<div class="suggest">
		<div class="suggest-title">热门搜索
		</div>
		<div class="sgt-list">
		<?php foreach($classify_data as $key=>$value) { ?>
			<a href=""><?php echo $value['name']; ?></a>
		<?php } ?>
		<?php foreach($car_type_data as $key=>$value) { ?>
            <a href="#"><?php echo $value['car_type']; ?></a>
		<?php } ?>
		</div>
	</div>
</body>
</html>