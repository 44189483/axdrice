<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>管理员添加</title>
	<link rel="stylesheet" href="/axd/Public/admin/css/style.css" />
	<script src="/axd/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd/Public/admin/js/jquery.main.js"></script>
	<script language="javascript">
	<!--
		String.prototype.Trim = function(){
			return this.replace(/(^\s*)|(\s*$)/g, "");
		}
		function checkform(form){
			if(form.pwd.value.Trim()==""){
				Alert("登录密码不能为空！");
				form.pwd.focus();
				return false;	
			}
			if(form.newpwd.value.Trim()==""){
				Alert("确认密码不能为空！");
				form.newpwd.focus();
				return false;	
			}
			if(form.newpwd.value.Trim()!=form.pwd.value.Trim()){
				Alert("再次密码输入不一致,请重新填写！");
				form.newpwd.focus();
				return false;	
			}
		}
		
	//-->
	</script>
</head>
<body class="bodyGrey">
	<div class="mainTitle">管理员修改</div>
	<div class="table01">
		<form name="form1" method="post" action="/axd/index.php/Admin/Setpwd/changepwd" onSubmit="return checkform(this);" >
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th width="60">登陆用户名</th>
				<td>
					<?php echo ($admin); ?>
				</td>
			</tr>
			<tr>
				<th>登录密码</th>
				<td>
					<input class="w160h24" type="password" name="pwd" id="pwd"/>
					<span>*</span>
				</td>
			</tr>
			<tr>
				<th>再次输入</th>
				<td>
					<input class="w160h24" type="password" name="newpwd"/>
					<span>*</span></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>
					<input class="btn02" type="submit" value="确认更新" />&nbsp;
				</td>
			</tr>
		</table>
		</form>
	</div>
</body>
</html>