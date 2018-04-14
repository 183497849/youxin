<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="http://youxin.com/Admin/Car/doAdd" method="post" enctype="multipart/form-data">
	name:			<input type="text" name="name"><br>
	price:			<input type="text" name="price"><br>
	time:			<input type="text" name="time"><br>
	miles:			<input type="text" name="miles"><br>
	emissions:		<input type="text" name="emissions"><br>
	displacemnet:	<input type="text" name="displacemnet"><br>
	city:			<input type="text" name="city"><br>
	inspector:		<input type="text" name="inspector"><br>
	brand:			<input type="text" name="brand"><br>
	cars:			<input type="text" name="cars"><br>
	type:			<input type="text" name="type"><br>
	stages:			<input type="text" name="stages"><br>
	year:			<input type="text" name="year"><br>
	payments:		<input type="text" name="payments"><br>
	<select name="option">
		<option value="1">封面图片</option>
		<option value="2">详情图片</option>
	</select>
	汽车图片： <input type="file" name="image"><br>
	<input type="submit" name="">
</form>
</body>
</html>