<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {width:1000px;margin: 0 auto}
		table {margin:0 auto;}
		td {width:100px;text-align:center;}
	</style>
</head>
<body>
<table border="1px" cellspacing="0" cellpadding="0"> 
	<tr>
		<td>id</td>
		<td>name</td>
		<td>parent_id</td>
		<td>parent_name</td>
		<td>image</td>
		<td>image2</td>
	</tr>

	<?php foreach($data as $key=>$value) { ?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['name']; ?></td>
		<td><?php echo $value['parent_id']; ?></td>
		<td><?php echo $value['parent_name']; ?></td>
		<td><?php echo $value['image']; ?></td>
		<td><img src="<?php echo '/Uploads/'.$value['image']; ?>" width="100" height="auto" alt="no pic"> </td>

	</tr>
	<?php } ?>
</table>
<a href="<?php echo U('Admin/Classify/add/');?>">add</a>
</body>
</html>