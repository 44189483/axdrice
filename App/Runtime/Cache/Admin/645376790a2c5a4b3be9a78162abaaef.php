<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="/axd/Public/admin/css/style.css" />
	<script src="/axd/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/axd/Public/admin/js/jQuery.plus.extend.js"></script>
	<script src="/axd/Public/admin/js/jquery.main.js"></script>

	<link rel="stylesheet" href="/axd/Public/editor/themes/default/default.css" />
	<link rel="stylesheet" href="/axd/Public/editor/plugins/code/prettify.css" />
	<script charset="utf-8" src="/axd/Public/editor/kindeditor.js"></script>
	<script charset="utf-8" src="/axd/Public/editor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="/axd/Public/editor/plugins/code/prettify.js"></script>
	<script src="/axd/Public/My97DatePicker/WdatePicker.js"></script>
	<script type="text/javascript">
	<!--
		String.prototype.Trim = function()
		{
			return this.replace(/(^\s*)|(\s*$)/g, "");
		}

		function checkform(form){
			if (form.title.value.Trim()==""){
				Alert("标题必须填写!");
				form.title.focus();
				return false;
			}
			if (form.title.value.length>50){
				Alert("标题长度在50个字以内!");
				form.title.focus();
				return false;
			}

			if (form.content.value.Trim()==""){
				Alert("内容必须填写!");
				form.content.focus();
				return false;
			}
		}		
	//-->
	</script>

	<script>
		KindEditor.ready(function(K) {
			editor1 = K.create('textarea[name="content"]', {
			cssPath : '/axd/Public/editor/plugins/code/prettify.css',
			uploadJson : '/axd/Public/editor/php/upload_json.php',
			fileManagerJson : '/axd/Public/editor/php/file_manager_json.php',
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
	  <p>新闻发布</p>
    </div>
	<div class="table01">
		<form action="/axd/index.php/Admin/News/save/<?php if(($row['articleId']) != ""): ?>act/edit/id/<?php echo ($row["articleId"]); else: ?>act/add<?php endif; ?>" method="POST" name="form1" enctype="multipart/form-data" onSubmit="return checkform(this);">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<th>标题</th>
				<td><input class="w380h24" type="text" name="title" value="<?php echo ($row["articleTitle"]); ?>" /><span>* 50个字符以内</span></td>
			</tr>
			<tr>
			  <th>内容</th>
			  <td><textarea name="content" style="width:700px;height:300px;visibility:hidden;"><?php echo ($row["articleContent"]); ?></textarea></td>
            </tr>
            <tr>
				<th width="50">时间</th>
				<td><input type="text" class="Wdate" name="date" onclick="WdatePicker()" readonly="readonly" value="<?php if(($row["addDate"]) == ""): echo (date("Y-m-d",NOW_TIME)); else: echo ($row["addDate"]); endif; ?>"></td>
			</tr>
            <tr>
				<th>排序</th>
				<td>
					<input class="w75h24" type="text" name="ord" value="<?php if(($row["ord"]) == ""): ?>0<?php else: echo ($row["ord"]); endif; ?>" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
					<span>数值越大，排序越靠前</span></td>
			</tr>
			<tr>
				<th>首页显示</th>
				<td>
					<input type="checkbox" name="check" value="1" <?php if(($row["indexShow"]) == "1"): ?>checked="checked"<?php endif; ?>/>
				</td>
			</tr>
			<tr>
				<th>&nbsp;</th>
				<td>
					<input type="hidden" name="id" value="<?php echo ($row["articleId"]); ?>"/>
					<input class="btn02" type="submit" name="submit" value="确认发布" />
					<input class="btn02" type="button" value="取消返回" onclick="window.history.back();"/>
				</td>
            </tr>
		</table>
	  </form>
	</div>
</body>
</html>