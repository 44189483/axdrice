<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>安心德管理系统</title>
	<link rel="stylesheet" href="/Public/admin/css/style.css" />
	<script src="/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/Public/admin/js/jquery.main.js"></script>
	<script type="text/javascript">
	<!--
		String.prototype.Trim = function(){
			return this.replace(/(^\s*)|(\s*$)/g, "");
		}

		function login() {
			$(".text").inputSwitch("textFocus")
			$(".testCode").inputSwitch("testCodeFocus")
			$(".loginSubmit").hoverClass("loginSubmitHover")
			$(".loginReset").hoverClass("loginResetHover")
			$(".loginReset").click(function(){
				$(".text").removeClass("textFocus")
				$(".testCode").removeClass("testCodeFocus")
			})
		}

		function checkform(form){

			if (form.username.value.Trim()==""){
				Alert("请填写登录用户名!");
				form.username.focus();
				return false;
			}

			if (form.userpwd.value.Trim()==""){
				Alert("请填写登录密码!");
				form.userpwd.focus();
				return false;
			}

			if (form.provenum.value.Trim()==""){
				Alert("请填写验证码!");
				form.provenum.focus();
				return false;
			}

		}
		
		function RefreshImage(valImageId) {
			var objImage = document.images[valImageId];
			if (objImage == undefined) {
				return;
			}
			var now = new Date();
			objImage.src = objImage.src.split('?')[0] + '?x=' + now.toUTCString();
		}
	//-->
	</script>
</head>

<body class="bodyBg" onload="login()">
	<div class="login">
		<h1>安心德管理系统</h1>
		<form action="" id="loginform" name="loginform" onsubmit="return checkform(this);" method="POST">
			<p><input class="text userName" type="text" name="username" value="" /></p>
			<p><input class="text passWord" type="password" name="userpwd" value="" /></p>
			<p><input class="testCode" type="text" name="provenum" id="provenum" value="" />&nbsp;
			<img src="/index.php/Admin/Index/provenum" name="imgCaptcha" id="imgCaptcha" onClick="RefreshImage('imgCaptcha');" class="code"/>
			</p>
			<p>
				<input type="hidden" name="act" value="submit" />
				<input class="loginSubmit" type="submit" value="" />
				<input class="loginReset" type="reset" name="" id="" value="" />
			</p>
		</form>
	</div>
</body>
</html>