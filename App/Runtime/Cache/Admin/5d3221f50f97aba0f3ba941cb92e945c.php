<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/axd-tp/Public/admin/css/style.css" />
	<script src="/axd-tp/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd-tp/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd-tp/Public/admin/js/jquery.main.js"></script>
</head>
<body class="bodyBg">
	<div class="header">
		<a class="logo" href="main.php" target="rightMain" title="安心德官网管理系统">安心德官网管理系统</a>
		<div class="info">
			<a class="index" title="安心德" target="_blank">安心德</a>
			<p class="manage">
				<a href="main.php" target="rightMain" title="管理首页">管理首页</a>
				&nbsp;&nbsp;<a href="/axd-tp/index.php/Admin/Index/logout" title="退出后台" onclick="return confirm('确认要退出？');" target="_parent">退出后台</a>
			</p>
		</div>
		<!--info block end-->
		<!--role block begin-->
		<div class="role">
			<div class="welcome">管理员：<?php echo ($admin); ?> 欢迎您的到来！！！</div>
		</div>
		<!--role block end-->
	</div>
	<!--header block end-->
</body>
</html>