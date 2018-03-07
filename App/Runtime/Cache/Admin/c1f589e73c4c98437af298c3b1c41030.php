<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>基础信息配置</title>
	<link rel="stylesheet" href="/axd-tp/Public/admin/css/style.css" />
</head>
<body class="bodyGrey">
	<div class="mainTitle">
	  <p>基础信息配置</p>
    </div>
	<div class="table01">
	<form action="" method="post" enctype="multipart/form-data" name="form1">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
				<th width="60">网站标题</th>
				<td><input class="w380h24" type="text" name="title" value="<?php echo ($site["title"]); ?>" style="width:200px;" /></td>
            </tr>
            <tr>
				<th>关键字</th>
				<td><input class="w380h24" type="text" name="keywords" value="<?php echo ($site["keywords"]); ?>" style="width:200px;" /></td>
            </tr>
            <tr>
				<th>描述</th>
				<td><input class="w380h24" type="text" name="description" value="<?php echo ($site["description"]); ?>" style="width:200px;" /></td>
            </tr>
            <tr>
				<th width="60">公司名称</th>
				<td><input class="w380h24" type="text" name="commpany" value="<?php echo ($site["commpany"]); ?>" style="width:200px;" /></td>
            </tr>
            <tr>
				<th>电话</th>
				<td><input class="w380h24" type="text" name="tel" value="<?php echo ($site["tel"]); ?>" style="width:200px;" /></td>
            </tr>
			<tr>
				<th width="60">微信</th>
				<td><input class="w380h24" type="text" name="weixin" value="<?php echo ($site["weixin"]); ?>" style="width:200px;"/></td>
			</tr>
			<?php if(($site['wxcode']) != ""): ?><tr>
				<th></th>
			  	<td valign="bottom">
			  		<img src="/axd-tp/<?php echo ($site["wxcode"]); ?>" width="100">
			  		(<span><a href="/axd-tp/index.php/Admin/Option/delfile" onclick="return confirm('确认要删除？');">删除</a></span>)
			  	</td>
            </tr><?php endif; ?>
			<tr>
				<th width="60">微信二维码</th>
				<td>
					<input type="file" name="attchment" value="" size="45" />
					<span><br />&nbsp;图片尺寸：100px*100px; 图片类型：jpg/png/gif 文件大小：100K以内；</span>
				</td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>
					<input class="btn02" type="submit" value="确认设置" />
				</td>
            </tr>
		</table>
	  </form>
	</div>
	<!--table01 block end-->
</body>
</html>