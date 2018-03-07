<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/axd-tp/Public/admin/css/style.css" />
	<script src="/axd-tp/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd-tp/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd-tp/Public/admin/js/jquery.main.js"></script>
	<script language="javascript">
	<!--
		String.prototype.Trim = function(){
			return this.replace(/(^\s*)|(\s*$)/g, "");
		}
		function checkform(form){
			if(form.attchment.value.Trim()==""){
				Alert("图片必须选择!");
				return false;
			}
		}
	//-->
	</script>
</head>

<body class="bodyGrey">
	<div class="mainTitle">banner图片管理</div>
	<div class="table01">
	<form action="/axd-tp/index.php/Admin/Slide/save<?php if((sid) != ""): ?>/sid/<?php echo ($sid); endif; ?>" method="POST" enctype="multipart/form-data" name="form1" <?php if((sid) == "0"): ?>onSubmit="return checkform(this)"<?php endif; ?>>

		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<?php if(($row['slideImg']) != ""): ?><tr>
			  <th>&nbsp;</th>
			  <td>
			  	<img src="/axd-tp/<?php echo ($row["slideImg"]); ?>" width="200"/>
			  	<input type="hidden" name="img" value="<?php echo ($row["slideImg"]); ?>"/>
			  </td>
		    </tr><?php endif; ?>
			<tr>
				<th>图片上传</th>
				<td>
					<input type="file" name="attchment" size="35" />
					<span>图片尺寸：1920px*636px;文件大小：500K以内；</span></td>
			</tr>
			<tr>
				<th>图片链接</th>
				<td>
					<input class="w380h24" type="text" name="slideLink" value="<?php echo ($row["slideLink"]); ?>" />
					</td>
			</tr>
			<tr>
				<th>图片排序</th>
				<td>
					<input class="w75h24" type="text" name="ord" id="ord" value="<?php if(($row['ord']) == ""): ?>0<?php else: echo ($row["ord"]); endif; ?>" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
					<span>数值越大，排序越靠前</span></td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td height="50">
					<input type="hidden" name="sid" value="<?php echo ($sid); ?>"/>
					<input class="btn02" type="submit" value="提交"/>
				</td>
			</tr>
		</table>
	  </form>
	</div>
	<div class="mainTitle">已上传图片</div>
	<div class="mainBanner">
		<?php if(($rows) != ""): ?><p>单击图片修改相应信息</p>
		<ul>
			<?php if(is_array($rows)): $i = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($i % 2 );++$i;?><li>
				<a href="/axd-tp/index.php/Admin/Slide/index/sid/<?php echo ($i["slideId"]); ?>">
					<img src="/axd-tp/<?php echo ($i["slideImg"]); ?>" height="100" />
				</a>
				<span>(<?php echo ($i["ord"]); ?>)</span>
				<a class="del" href="/axd-tp/index.php/Admin/Slide/del/sid/<?php echo ($i["slideId"]); ?>" title="删除" onclick="return confirm('确认要删除？');"></a>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<?php else: ?>
			<p>暂无图片上传</p><?php endif; ?>
	</div>
	<!--mainBanner block end-->
</body>
</html>