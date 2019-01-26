<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<link rel="stylesheet" href="/Public/admin/css/style.css" />
	<script src="/Public/admin/js/jquery-1.7.1.min.js"></script>
	<script src="/Public/admin/js/jQuery.plus.extend.js"></script>
	<script type="text/javascript">
		function sideNav() {
			$(".sideNav>ul>li>span").click(function(){
				$(this).parent().toggleClass("selected")
			})
		}
	</script>
</head>
<body onload="sideNav()">
	<div class="sideNav">
		<ul>
			<li>
				<span>网站信息配置</span>
				<ul>
					<li>
						<dl>
							<dt>基础信息</dt>
							<dd><a href="../Option/index" target="rightMain" title="设定">设定</a></dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>首页管理</span>
				<ul>
					<li>
						<dl>
							<dt>轮播图</dt>
							<dd><a href="../Slide/index" target="rightMain" title="管理">管理</a></dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt>酵素种植</dt>
							<dd><a href="../Article/index/aid/1" target="rightMain" title="更新">更新</a></dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>酵素大米</span>
				<ul>
					<li>
						<dl>
							<dt>基础信息</dt>
							<dd>
								<a href="../Article/index/aid/5" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>稻花香</dt>
							<dd>
								<a href="../Product/add/aid/2" target="rightMain" title="产品添加">产品添加</a>
								|
								<a href="../Product/index/aid/2" target="rightMain" title="产品管理">产品管理</a>
							</dd>
						</dl>
						<dl>
							<dt>长粒香</dt>
							<dd>
								<a href="../Product/add/aid/3" target="rightMain" title="产品添加">产品添加</a>
								|
								<a href="../Product/index/aid/3" target="rightMain" title="产品管理">产品管理</a>
							</dd>
						</dl>
						<dl>
							<dt>松梗香</dt>
							<dd>
								<a href="../Product/add/aid/4" target="rightMain" title="产品添加">产品添加</a>
								|
								<a href="../Product/index/aid/4" target="rightMain" title="产品管理">产品管理</a>
							</dd>
						</dl>
						<dl>
							<dt>调和米</dt>
							<dd>
								<a href="../Product/add/aid/5" target="rightMain" title="产品添加">产品添加</a>
								|
								<a href="../Product/index/aid/5" target="rightMain" title="产品管理">产品管理</a>
							</dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>酵素与生物肥</span>
				<ul>
					<li>
						<dl>
							<dt>酵素生成</dt>
							<dd><a href="../Article/index/aid/6" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>改良土壤</dt>
							<dd><a href="../Article/index/aid/7" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>复合酶</dt>
							<dd><a href="../Article/index/aid/8" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>研究证书</dt>
							<dd><a href="../Article/index/aid/9" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>新闻中心</span>
				<ul>
					<li>
						<dl>
							<dd><a href="../News/view" target="rightMain" title="添加">添加</a> | <a href="../News/index" target="rightMain" title="管理">管理</a>
							</dd>
						</dl>
					</li>
				</ul>
			</li>  
			<li>
				<span>关于我们</span>
				<ul>
					<li>
						<dl>
							<dt>安心德</dt>
							<dd><a href="../Article/index/aid/10" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>合作社</dt>
							<dd><a href="../Article/index/aid/11" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
						<dl>
							<dt>绿之源</dt>
							<dd><a href="../Article/index/aid/12" target="rightMain" title="更新">更新</a>
							</dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>密码设置</span>
				<ul>
					<li>
						<dl>
							<dt>修改密码</dt>
							<dd><a href="../Setpwd/index" target="rightMain" title="管理">管理</a></dd>
						</dl>
					</li>
				</ul>
			</li>
			<li>
				<span>CNZZ流量统计</span>
				<ul>
					<li>
						<dl>
							<dd><a href="http://new.cnzz.com/v1/login.php?siteid=1260782316" target="rightMain">统计</a></dd>
						</dl>
					</li>
				</ul>
			</li>       
			<li class="selected">
				<span>版权信息</span>
				<ul>
					<li><p>版权所有：aidimedia.com</p></li>
					<li><p>技术支持：aidimedia.com</p></li>
				</ul>
			</li>
		</ul>
	</div>
</body>
</html>