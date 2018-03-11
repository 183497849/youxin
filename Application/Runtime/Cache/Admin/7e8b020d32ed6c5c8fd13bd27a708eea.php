<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="http://youxin.com/Admin/Classify/doAdd" method="post" enctype="multipart/form-data">
	<select name="parent_id">
		<option value="0">顶级分类</option>
		<?php foreach ($classify as $value) { ?>
		<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
		<?php } ?>
	</select>
	<br>
	<input type="text" name="name">
	<br>
	分类图片： <input type="file" name="image"><br>
	<input type="submit" name="">
</form>
</body>
</html>