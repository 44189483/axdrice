<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

	<head>
		<meta charset="UTF-8">
		<title><?php echo ($site["title"]); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="<?php echo ($site["keywords"]); ?>"/>
		<meta name="description"content="<?php echo ($site["description"]); ?>"/>
		<link rel="icon" href="ico.ico" type="image/x-icon" />
		<link rel="shortcut icon" type="image/ico" href="ico.ico"/>
		<link rel="bookmark" href="ico.ico"/>
		<link rel="stylesheet" href="/Public/index/css/style.css" />
		<script src="/Public/index/js/scale.js"></script>
	</head>

	<body>
		<div class="head">
			<div class="head-nav">
				<a href="/Home/Index" class="head-logo"><img src="/Public/index/images/head-logo.png" alt="" /></a>
				<ul class="head-navcnt">
					<li class="<?php if((ACTION_NAME) == "index"): ?>active<?php endif; ?>">
						<a href="/Home/Index">首页</a>
					</li>
					<li class="<?php if((ACTION_NAME) == "rice"): ?>active<?php endif; ?>">
						<a href="/Home/Index/rice">酵素大米</a>
					</li>
					<li class="<?php if((ACTION_NAME) == "fertilizer"): ?>active<?php endif; ?>">
						<a href="/Home/Index/fertilizer">酵素与生物肥</a>
					</li>
					<li class="<?php if((ACTION_NAME) == "about"): ?>active<?php endif; ?>">
						<a href="/Home/Index/about">关于我们</a>
					</li>
					<li class="<?php if((ACTION_NAME) == "news|newsdetail"): ?>active<?php endif; ?>">
						<a href="/Home/Index/news">新闻资讯</a>
					</li>
				</ul>
			</div>
		</div>
		<!--头部导航结束-->
		<div class="head-bottomlogo">
			<img src="/Public/index/images/head-bottomlogo.png" alt="" />
		</div>
		<!-- 轮播广告开始 -->
		<div id="banner_tabs" class="flexslider">
			<ul class="slides">
				<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
					<a title="" target="_blank" href="<?php echo ($vo["slideLink"]); ?>">
						<img width="1920" height="636" alt="" style="background: url(/<?php echo ($vo["slideImg"]); ?>) no-repeat center;" src="/Public/index/images/alpha.png">
					</a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<ul class="flex-direction-nav">
				<li>
					<a class="flex-prev" href="javascript:;">Previous</a>
				</li>
				<li>
					<a class="flex-next" href="javascript:;">Next</a>
				</li>
			</ul>
			<ol id="bannerCtrl" class="flex-control-nav flex-control-paging">
				<?php if(is_array($banner)): $k = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li>
					<a><?php echo ($k); ?></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ol>
		</div>
		<!-- 轮播广告结束 -->

		<div class="in-box01">
			<div class="in-title">推荐产品</div>
			<div class="in-text">
				安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照<br/>料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。
			</div>
			<div class="in-box01-cnt">
				<div class="in-pr01">
					<a href="/Home/Index/rice/id/2">
						<img src="/Public/index/images/in-pr01.jpg" alt="" />
						<span class="more sprite"></span>
					</a>
				</div>
				<div class="in-pr02">
					<a href="/Home/Index/rice/id/5">
						<img src="/Public/index/images/in-pr02.jpg" alt="" />
						<span class="more sprite"></span>
					</a>
				</div>
				<div class="in-pr03">
					<a href="/Home/Index/rice/id/3">
						<img src="/Public/index/images/in-pr03.jpg" alt="" />
						<span class="more sprite"></span>
					</a>
				</div>
				<div class="in-pr04">
					<a href="/Home/Index/rice/id/4">
						<img src="/Public/index/images/in-pr04.jpg" alt="" />
						<span class="more sprite"></span>
					</a>
				</div>
			</div>
		</div>
		<div class="in-box02">
			<div class="in-title">酵素种植</div>
			<div class="in-box02-cnt">
				<div class="in-box02-cntbox">
					<div class="in-box02-cntleft">
						<h2><a href="">复合酶种植</a></h2>
						<p><?php echo ($fhmPro["articleContent"]); ?>
						</p>
						<a href="/Home/Index/fertilizer" class="more">了解更多</a>
					</div>
					<div class="in-box02-cntright"><img src="/<?php echo ($fhmPro["articleImg"]); ?>" alt="" /></div>
				</div>
			</div>
		</div>
		<div class="in-box03">
			<div class="in-title">公司新闻</div>
			<ul class="in-box03-cnt">
				<?php if(is_array($news)): $key = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i): $mod = ($key % 2 );++$key;?><li <?php if($key % 2 != 0){ ?>class="list"<?php } ?>>
					<a href="/Home/Index/newsdetail/id/<?php echo ($i["articleId"]); ?>"><?php echo ($i["articleTitle"]); ?> <span><?php echo ($i["addDate"]); ?></span></a>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<a href="/Home/Index/news" class="more">查看更多</a>
		</div>

		<div class="foot">
			<div class="ft-weixin"><img src="<?php echo ($site["wxcode"]); ?>" alt="" /></div>
			<p><?php echo ($site["commpany"]); ?></p>
			<p>联系电话：<?php echo ($site["tel"]); ?></p>
			<ul class="foot-nav">
				<li <?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>>
					<a href="/Home/Index">首页</a>
				</li>
				<li <?php if((ACTION_NAME) == "rice"): ?>class="active"<?php endif; ?>>
					<a href="/Home/Index/rice">酵素大米</a>
				</li>
				<li <?php if((ACTION_NAME) == "fertilizer"): ?>class="active"<?php endif; ?>>
					<a href="/Home/Index/fertilizer">酵素与生物肥</a>
				</li>
				<li <?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>>
					<a href="/Home/Index/about">关于我们 </a>
				</li>
				<li <?php if((ACTION_NAME) == "news|newsdetail"): ?>class="active"<?php endif; ?>">
					<a href="/Home/Index/news">新闻资讯</a>
				</li>
			</ul>
		</div>

		<div style='background: url(/Public/index/images/ftbanner.jpg) no-repeat top center;' class="foot-banner"></div>	

		<!--网站脚本加载模块开始-->
		<script src="/Public/index/js/jquery-1.7.1.min.js"></script>
		<script src="/Public/index/js/jquery.main.js"></script>
		<script src="/Public/index/js/slider.js"></script>
		<!--网站脚本加载模块结束-->
		<script type="text/javascript">
			$(function() {
				var bannerSlider = new Slider($('#banner_tabs'), {
					time: 5000,
					delay: 400,
					event: 'hover',
					auto: true,
					mode: 'fade',
					controller: $('#bannerCtrl'),
					activeControllerCls: 'active'
				});
				$('#banner_tabs .flex-prev').click(function() {
					bannerSlider.prev()
				});
				$('#banner_tabs .flex-next').click(function() {
					bannerSlider.next()
				});
			})
		</script>
	</body>

</html>