<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device,user-scalable=no,initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">
	<title>账号注册</title>
	<link rel="stylesheet" href="/Public/Home/css/public.css">
	<link rel="stylesheet" href="/Public/Home/css/login.css">
	<script src="/Public/Home/js/jquery-3.2.0.min.js"></script>
</head>
<body>
	<nav class="nav">
		<a href="/Public/Home/login.html" class="prev"></a>
		<span class="sign-text">账号注册</span>
	</nav>
	<div class="tab-item">
		<form action="http://youxin.com/Home/UserCenter/doReg" method="post">
			<div class="phone ipt">
			    <input type="text" name="number" placeholder="请输入手机号" class="vphone" onfocus="this.placeholder=''" onblur="this.placeholder='请输入手机号'">
			</div>
			<div class="paw ipt">
			    <input type="password" name="password" placeholder="6-20位数字、字母、_组合" class="vpaw" onfocus="this.placeholder=''" onblur="this.placeholder='6-20位数字、字母、_组合'">
			</div>
			<div class="clearfix">
				<div class="code ipt">
				    <input type="text" name="verify" placeholder="请输入图片码" class="vcode" onfocus="this.placeholder=''" onblur="this.placeholder='请输入图片码'">
				</div>
				<a href="#" class="vcode-pic"><img src="<?php echo U('Home/UserCenter/verify');?>" class="verify"></a>
				<a href="javascript:;" class="alterVerify"></a><br>
			</div>
			<!-- <div class="clearfix">
				<div class="random ipt">
				    <input type="text" placeholder="请输入随机码" class="vcode" onfocus="this.placeholder=''" onblur="this.placeholder='请输入随机码'">
				</div>
				<a href="#" class="send">发送随机码</a>
			</div> -->
			<div class="error">
					<span class="t-error">手机号错误</span>
			</div>
			<input class="sign-bt" type="button" value="注册"></input>
		</form>
		<script 
			src="http://code.jquery.com/jquery-3.2.1.js"></script>
		<script type="text/javascript">
			$(function(){
				$('.vcode-pic').click(function(){
					newsrc = "http://youxin.com/home/UserCenter/verify/v/"+Math.random();
					$('.verify').attr('src',newsrc);
				});
			})
		</script>
    <script>
         $(".sign-bt").click(function(){
	        	var vphone = $(".vphone").val();
	        	var vpaw = $(".vpaw").val();
	        	var vcode = $(".vcode").val();
	        	// var vcode = $(".vrandom").val();
	        	if( vphone == ""){
                   $(".error").show();
                   $(".t-error").text("手机号不能为空");
	        	}else if( vpaw == ""){
	        	   $(".error").show();
                   $(".t-error").text("密码不能为空");
	        	}else if( vcode == ""){
	        	   $(".error").show();
                   $(".t-error").text("图片码不能为空");
	        	}else{
               	   $(this).prop("type","submit");
               	}
	        })

    </script>
</body>
</html>