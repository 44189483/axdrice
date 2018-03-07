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
		<link rel="stylesheet" href="/axd/Public/index/css/style.css" />
		<script src="/axd/Public/index/js/scale.js"></script>
		<link rel="stylesheet" href="/axd/Public/index/js/swiper/idangerous.swiper.css" />
	</head>

	<body>
		<!--内页头部导航开始-->
		<div class="pr-head">
			<div class="pr-headlogo">
				<a href="index.html"><img src="/axd/Public/index/images/prhd-logo.jpg" alt="" /></a>
			</div>
			<ul class="prhd-nav">
				<li class="nav01 <?php if((ACTION_NAME) == "index"): ?>active<?php endif; ?>">
					<a href="/axd/index.php/Home/Index"><span>首页</span><span class="note">Home</span></a>
				</li>
				<li class="nav02 <?php if((ACTION_NAME) == "rice"): ?>active<?php endif; ?>">
					<a href="/axd/index.php/Home/Index/rice"><span>酵素大米</span><span class="note">Rice</span></a>
				</li>
				<li class="nav03 <?php if((ACTION_NAME) == "fertilizer"): ?>active<?php endif; ?>">
					<a href="/axd/index.php/Home/Index/fertilizer"><span>酵素与生物肥</span><span class="note">Enzyme&Bio-fertilizer</span></a>
				</li>
				<li class="nav02 <?php if((ACTION_NAME) == "about"): ?>active<?php endif; ?>">
					<a href="/axd/index.php/Home/Index/about"><span>关于我们</span><span class="note">About us</span></a>
				</li>
				<li class="nav04 <?php if((ACTION_NAME) == "news|newsdetail"): ?>active<?php endif; ?>">
					<a href="/axd/index.php/Home/Index/news"><span>新闻资讯</span><span class="note">News</span></a>
				</li>
			</ul>
		</div>

	<div class="pr-banner" style="background: url(/axd/Public/index/images/news-zibanner.jpg) no-repeat center;"></div>
	
	<div class="pr-cnt">
		<div class="news-list">
			<div class="news-listcnt">
			     <div class="newscnt">
			     	  <h3><?php echo ($detail["articleTitle"]); ?><a href="/axd/index.php/Home/Index/news" class="back">返回列表</a></h3>
			     	  <p class="date"><?php echo ($detail["addDate"]); ?></p>
			     	  <?php echo ($detail["articleContent"]); ?>
			     </div>
			     <?php if(($next["articleId"]) > "0"): ?><div class="nextcnt"><a href="/axd/index.php/Home/Index/newsdetail/id/<?php echo ($next["articleId"]); ?>" class="nextbox">下一篇：<?php echo ($next["articleTitle"]); ?></a></div><?php endif; ?>
			</div>
		</div>
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
						<a href="/axd/index.php/Home/Index/rice">酵素大米</a>
					</li>
					<li <?php if((ACTION_NAME) == "fertilizer"): ?>class="active"<?php endif; ?>>
						<a href="/axd/index.php/Home/Index/fertilizer">酵素与生物肥</a>
					</li>
					<li <?php if((ACTION_NAME) == "about"): ?>class="active"<?php endif; ?>>
						<a href="/axd/index.php/Home/Index/about">关于我们 </a>
					</li>
					<li <?php if((ACTION_NAME) == "news|newsdetail"): ?>class="active"<?php endif; ?>">
						<a href="/axd/index.php/Home/Index/news">新闻资讯</a>
					</li>
				</ul>
			</div>
		</div>

		<div style='background: url(/axd/Public/index/images/ftbanner_01.jpg) no-repeat top center;' class="foot-banner"></div>

		<!--foot-nav开始-->

		<!--网站脚本加载模块开始-->
		<script src="/axd/Public/index/js/jquery-1.7.1.min.js"></script>
		<script src="/axd/Public/index/js/swiper/idangerous.swiper.min.js"></script>
		<script src="/axd/Public/index/js/jquery.main.js"></script>
		<!--网站脚本加载模块结束-->
		
		<script type="text/javascript">
			$(function(){
				$("#cnzz_stat_icon_1260782316").hide();
			});
		</script>
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260782316'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260782316%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
	</body>

</html>