<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="http://youxin.com/Admin/CarImage/doAdd" method="post" enctype="multipart/form-data">
	<select name="type">
		<option value="1">封面图片</option>
		<option value="2">图片详情</option>
	</select>
	分类图片： <input type="file" name="image"><br>
	<input type="submit" name="">
</form>
</body>
</html>