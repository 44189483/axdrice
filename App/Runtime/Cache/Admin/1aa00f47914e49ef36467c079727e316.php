<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/axd-tp/Public/admin/css/style.css" />
	<script src="/axd-tp/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd-tp/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd-tp/Public/admin/js/jquery.main.js"></script>

	<script type="text/javascript">
	<!--
		function delSelect(){
			if (confirm('是否删除选中的信息?')){
				document.form.submit();
			}
		}

	//-->
	</script>

</head>

<body class="bodyGrey">

	<div class="mainTitle"><?php echo ($catelog["articleTitle"]); ?>-产品管理</div>
	<div class="twoTitle">
		<span style="float:right;margin-right:20px;">
			<form id="searchform" name="searchform" method="GET" action="">
				<input type="text" name="name" style="border:solid #000 1px;color:#666;height:20px;font-faimly:宋体;width:200px;line-height:20px;" value="<?php echo ($name); ?>" onclick="this.value='';">&nbsp;
				<input type="hidden" name="aid" value="<?php echo ($aid); ?>"/>
				<input type="submit" name="btn" value="查询" style="border:solid #000 1px;" />
			</form>
		</span>
	</div>
	<form name="form" id="form" method="POST" action="/axd-tp/index.php/Admin/Product/del/aid/<?php echo ($aid); ?>">
	<div class="table02">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" id="tab">
			<tr>
				<th align="left"><input type="checkbox" id="CheckAll" onclick="selectAll(this,'id[]')" />全选</th>
				<th>序号</th>
				<th>标题</th>
				<th>图片</th>
				<th>排序</th>
				<th>时间</th>
				<th>管理</th>
			</tr>
			
			<?php if(($rows) != ""): if(is_array($rows)): $k = 0; $__LIST__ = $rows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($k % 2 );++$k;?><tr class="<?php if(($k%2) == "0"): ?>odd<?php endif; ?>">
					<td><input type="checkbox" name="id[]" value="<?php echo ($i["productId"]); ?>" /></td>
					<td><?php echo ($k); ?></td>
					<td><?php echo ($i["productName"]); ?></td>
					<td>
						<?php if(($i['productImg']) != ""): ?><img src="/axd-tp/<?php echo ($i["productImg"]); ?>" width="200"/>
						<?php else: ?>
						&nbsp;<?php endif; ?>
					</td>
					<td>
						<input type="text" value="<?php echo ($i["ord"]); ?>" name="ord" id="input_1_<?php echo ($i["productId"]); ?>" onchange="saveData('product','ord',this.value,'productId',this.id);" size="2"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
					</td>
					<td><?php echo ($i["addDate"]); ?></td>
					<td>
						<a href="/axd-tp/index.php/Admin/Product/view/aid/<?php echo ($aid); ?>/id/<?php echo ($i["productId"]); ?>" class='redlink'>修改</a>
						<a href="/axd-tp/index.php/Admin/Product/del/aid/<?php echo ($aid); ?>/id/<?php echo ($i["productId"]); ?>" onClick="return confirm('确认要删除吗？');">删除</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			<?php else: ?>
				<tr class="odd">
				  <td colspan="7" style="color:#FF0000;">暂无信息。。。</td>
			    </tr><?php endif; ?>
		</table>
	</div>
	<div class="pageWrap">
		<div class="page">
			<?php echo ($page); ?>
			<input name="Submit" type="button" onclick="doSelect('id[]','确认要删除吗？');" value="删除选中" class="btn02">
		</div>
	</div>
	</form>

</body>
</html>