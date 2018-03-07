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
		<link rel="stylesheet" href="/Public/index/js/swiper/idangerous.swiper.css" />
	</head>

	<body>
		<!--内页头部导航开始-->
		<div class="pr-head">
			<div class="pr-headlogo">
				<a href="index.html"><img src="/Public/index/images/prhd-logo.jpg" alt="" /></a>
			</div>
			<ul class="prhd-nav">
				<li class="nav01 <?php if((ACTION_NAME) == "index"): ?>active<?php endif; ?>">
					<a href="<?php echo U('index');?>"><span>首页</span><span class="note">Home</span></a>
				</li>
				<li class="nav02 <?php if((ACTION_NAME) == "rice"): ?>active<?php endif; ?>">
					<a href="<?php echo U('rice');?>"><span>酵素大米</span><span class="note">Rice</span></a>
				</li>
				<li class="nav03 <?php if((ACTION_NAME) == "fertilizer"): ?>active<?php endif; ?>">
					<a href="/Home/Index/fertilizer"><span>酵素与生物肥</span><span class="note">Enzyme&Bio-fertilizer</span></a>
				</li>
				<li class="nav02 <?php if((ACTION_NAME) == "about"): ?>active<?php endif; ?>">
					<a href="/Home/Index/about"><span>关于我们</span><span class="note">About us</span></a>
				</li>
				<li class="nav04 <?php if((ACTION_NAME) == "news|newsdetail"): ?>active<?php endif; ?>">
					<a href="/Home/Index/news"><span>新闻资讯</span><span class="note">News</span></a>
				</li>
			</ul>
		</div>

	<div class="pr-banner" style="background: url(/Public/index/images/aboutus-bnnaer01.jpg) no-repeat center;"></div>

	<div class="pr-cnt">
		<div class="enzyme-top">
			<ul class="abnavbox">
				<li class="nmb01 <?php if(($id) == "10"): ?>active<?php endif; ?>">
					<a href="/Home/Index/about/id/10" class="prnav01 sprite"></a>
				</li>
				<li class="nmb02 <?php if(($id) == "11"): ?>active<?php endif; ?>">
					<a href="/Home/Index/about/id/11" class="prnav02 sprite"></a>
				</li>
				<li class="nmb03 <?php if(($id) == "12"): ?>active<?php endif; ?>">
					<a href="/Home/Index/about/id/12" class="prnav03 sprite"></a>
				</li>
			</ul>
		</div>
		<?php echo ($detail["articleContent"]); ?>
	</div>


		<div class="footbg">
			<div class="foot footbg">
				<div class="ft-weixin"><img src="<?php echo ($site["wxcode"]); ?>" alt="" /></div>
				<p><?php echo ($site["commpany"]); ?></p>
				<p>联系电话：<?php echo ($site["tel"]); ?></p>
				<ul class="foot-nav">
					<li <?php if((ACTION_NAME) == "index"): ?>class="active"<?php endif; ?>>
						<a href="index.php">首页</a>
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
		</div>

		<div style='background: url(/Public/index/images/ftbanner_01.jpg) no-repeat top center;' class="foot-banner"></div>

		<!--foot-nav开始-->

		<!--网站脚本加载模块开始-->
		<script src="/Public/index/js/jquery-1.7.1.min.js"></script>
		<script src="/Public/index/js/swiper/idangerous.swiper.min.js"></script>
		<script src="/Public/index/js/jquery.main.js"></script>
		<!--网站脚本加载模块结束-->
		
		<script type="text/javascript">
			$(function(){
				$("#cnzz_stat_icon_1260782316").hide();
			});
		</script>
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260782316'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260782316%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
	</body>

</html>