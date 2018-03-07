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
			if (form.name.value.Trim()==""){
				Alert("标题必须填写!");
				form.name.focus();
				return false;
			}
			if (form.name.value.length>50){
				Alert("标题长度在50个字以内!");
				form.name.focus();
				return false;
			}

		}		

		function delSelect(){
			if (confirm('是否删除选中的信息?')){
				document.form.submit();
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

	{{if $act == 'add' || $act == 'edit'}}

		<div class="mainTitle">
		  <p><?php echo ($catelog["articleTitle"]); ?>-产品发布</p>
	    </div>
		<div class="table01">
			<form action="" method="POST" name="form1" enctype="multipart/form-data" onSubmit="return checkform(this);">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
				{{if $row.productImg != ''}}
					<tr class="row">
						<th>&nbsp;</th>
						<td>
						  	<img src="<?php echo ($row["productImg"]); ?>" width="200"/>
						  	<input type="hidden" name="img" value="<?php echo ($row["productImg"]); ?>"/>
						</td>
					</tr>
				{{/if}}
				<tr>
					<th>图片上传</th>
					<td>
						<input type="file" name="attchment" value="" size="35" />
						<span>图片尺寸：240px*250px;文件大小：500K以内；</span>
					</td>
				</tr>
				<tr>
					<th>标题</th>
					<td><input class="w380h24" type="text" name="name" value="<?php echo ($row["productName"]); ?>" /><span>* 50个字符以内</span></td>
				</tr>
				<tr>
					<th>单位</th>
					<td><input class="w380h24" type="text" name="unit" value="<?php echo ($row["productUnit"]); ?>" /></td>
				</tr>
				<tr>
					<th>产地</th>
					<td><input class="w380h24" type="text" name="addr" value="<?php echo ($row["productAddr"]); ?>" /></td>
				</tr>
				<tr>
				  <th>内容</th>
				  <td><textarea name="content" style="width:700px;height:300px;visibility:hidden;"><?php echo ($row["productContent"]); ?></textarea></td>
	            </tr>
	            <tr>
					<th width="50">时间</th>
					<td><input type="text" class="Wdate" name="date" onclick="WdatePicker()" readonly="readonly" value="{{if $row.addDate==''}}<?php echo (date_format:'%Y-%m-%d'($smarty["now"])); ?>{{else}}<?php echo ($row["addDate"]); ?>{{/if}}"></td>
				</tr>
	            <tr>
					<th>排序</th>
					<td>
						<input class="w75h24" type="text" name="ord" value="{{if $row.ord==''}}0{{else}}<?php echo ($row["ord"]); ?>{{/if}}" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
						<span>数值越大，排序越靠前</span></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
					<td>
						<input type="hidden" name="aid" value="<?php echo ($aid); ?>"/>
						<input type="hidden" name="id" value="<?php echo ($id); ?>"/>
						<input class="btn02" type="submit" name="submit" value="确认发布" />
						<input class="btn02" type="button" value="取消返回" onclick="window.history.back();"/>
					</td>
	            </tr>
			</table>
		  </form>
		</div>

	{{else}}

		<div class="mainTitle">
			<?php echo ($catelog["articleTitle"]); ?>-产品管理
		</div>
		<div class="twoTitle">
			<span style="float:right;margin-right:20px;">
				<form id="searchform" name="searchform" method="GET" action="">
					<input type="text" name="name" style="border:solid #000 1px;color:#666;height:20px;font-faimly:宋体;width:200px;line-height:20px;" value="<?php echo ($name); ?>" onclick="this.value='';">&nbsp;

					<input type="hidden" name="_d" value="item"/>
					<input type="hidden" name="_f" value="product"/>
					<input type="hidden" name="aid" value="<?php echo ($aid); ?>"/>
					<input type="submit" name="btn" value="查询" style="border:solid #000 1px;" />
				</form>
			</span>
		</div>
		<form name="form" id="form" method="POST" action="?_d=item&_f=product&do=del&aid=<?php echo ($aid); ?>">
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
				
				{{if $rows}}
					{{foreach item=i from=$rows name=foo}}
					<tr class="{{if $smarty.foreach.foo.iteration%2==0}}odd{{/if}}">
						<td><input type="checkbox" name="id[]" value="<?php echo ($i["productId"]); ?>" /></td>
						<td><?php echo ($smarty["foreach"]["foo"]["iteration"]); ?></td>
						<td><?php echo ($i["productName"]); ?></td>
						<td>
							{{if $i.productImg != ''}}
								<img src="<?php echo ($i["productImg"]); ?>" width="200"/>
							{{else}}
							&nbsp;
							{{/if}}
						</td>
						<td>
							<input type="text" value="<?php echo ($i["ord"]); ?>" name="ord" id="input_1_<?php echo ($i["productId"]); ?>" onchange="saveData('product','ord',this.value,'productId',this.id);" size="2"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
						</td>
						<td><?php echo ($i["addDate"]); ?></td>
						<td>
							<a href="?_d=item&_f=product&act=edit&aid=<?php echo ($aid); ?>&id=<?php echo ($i["productId"]); ?>" class='redlink'>修改</a>
							<a href="?_d=item&_f=product&do=del&aid=<?php echo ($aid); ?>&id=<?php echo ($i["productId"]); ?>" onClick="return confirm('确认要删除吗？');">删除</a>
						</td>
					</tr>
					{{/foreach}}
				{{else}}
					<tr class="odd">
					  <td colspan="7" style="color:#FF0000;">暂无信息。。。</td>
				    </tr>
			    {{/if}}
			</table>
		</div>
		<div class="pageWrap">
			<div class="page">
				<?php echo ($page); ?>
				<input name="Submit" type="button" onclick="doSelect('id[]','确认要删除吗？');" value="删除选中" class="btn02">
			</div>
		</div>
		</form>
	
	{{/if}}

</body>
</html>