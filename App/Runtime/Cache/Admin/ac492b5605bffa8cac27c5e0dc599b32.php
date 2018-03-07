<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/axd-tp/Public/admin/css/style.css" />
	<script src="/axd-tp/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd-tp/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd-tp/Public/admin/js/jquery.main.js"></script>

	<link rel="stylesheet" href="/axd-tp/Public/editor/themes/default/default.css" />
	<link rel="stylesheet" href="/axd-tp/Public/editor//axd-tp/Public/code/prettify.css" />
	<script charset="utf-8" src="/axd-tp/Public/editor/kindeditor.js"></script>
	<script charset="utf-8" src="/axd-tp/Public/editor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/axd-tp/Public/editor//axd-tp/Public/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
				editor1 = K.create('textarea[name="content"]', {
				cssPath : '/axd-tp/Public/editor/code/prettify.css',
				uploadJson : '/axd-tp/Public/editor/php/upload_json.php',
				fileManagerJson : '/axd-tp/Public/editor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=form1]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=form1]')[0].submit();
					});
				},afterBlur: function(){this.sync();}
			});
			prettyPrint();
		});
	</script>

</head>

<body class="bodyGrey">
	<div class="mainTitle">
	  <p><?php echo ($row["articleTitle"]); ?></p>
    </div>
	<div class="table01">
		<form action="/axd-tp/index.php/Admin/Article/save/<?php echo ($aid); ?>" method="POST" name="form1" enctype="multipart/form-data">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<?php if(($row['articleType']) == "0"): if(($row['articleImg']) != "''"): ?><tr class="row">
					<th>&nbsp;</th>
					<td>
					  	<img src="/axd-tp/<?php echo ($row["articleImg"]); ?>" width="200"/>
					  	<input type="hidden" name="img" value="<?php echo ($row["articleImg"]); ?>"/>
					</td>
				</tr>
				<tr>
					<th>图片上传</th>
					<td>
						<input type="file" name="attchment" value="" size="35" />
						<span>图片尺寸：300px*180px;文件大小：500K以内；</span>
					</td>
				</tr><?php endif; endif; ?>
			<tr>
			  <th>内容</th>
			  <td><textarea name="content" style="width:700px;height:300px;visibility:hidden;"><?php echo ($row["articleContent"]); ?></textarea></td>
            </tr>
			<tr>
				<th>&nbsp;</th>
				<td>
					<input type="hidden" name="aid" value="<?php echo ($aid); ?>"/>
					<input class="btn02" type="submit" name="submit" value="确认发布" />
				</td>
            </tr>
		</table>
	  </form>
	</div>
</body>

</html>