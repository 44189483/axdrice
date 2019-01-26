-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 07 月 23 日 13:01
-- 服务器版本: 5.1.41
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `axdrice`
--

-- --------------------------------------------------------

--
-- 表的结构 `axdrice_article`
--

CREATE TABLE IF NOT EXISTS `axdrice_article` (
  `articleId` int(11) NOT NULL AUTO_INCREMENT,
  `articleType` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-,1-新闻,2-关于我们,3-酵素大米,4-酵素与生化肥',
  `articleTitle` varchar(50) DEFAULT NULL COMMENT '标题',
  `articleImg` varchar(50) DEFAULT NULL COMMENT '图片',
  `articleContent` text NOT NULL COMMENT '内容',
  `indexShow` tinyint(1) NOT NULL DEFAULT '0' COMMENT '首页显示',
  `addDate` varchar(10) NOT NULL COMMENT '时间戳',
  `ord` int(4) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`articleId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `axdrice_article`
--

INSERT INTO `axdrice_article` (`articleId`, `articleType`, `articleTitle`, `articleImg`, `articleContent`, `indexShow`, `addDate`, `ord`) VALUES
(1, 0, '酵素种植', 'upload/image/20161123/20161123776.jpg', '&lt;span style=&quot;line-height:1.5;&quot;&gt;安心德精选优质稻花香稻种，以微生物有机肥和植物酵素精华液替代常规化肥，以复合酶生物制剂取代农药防治病虫害，采用自然农耕的栽培技术生产出的绿色、环保、健康大米。安心德酵素大米具有米粒细长，晶莹剔透，腹白较小，质地坚韧、细腻华润，会散发出米香，米饭口感绵软香滑，略带甜味，韧性较好，独具隔夜不回生的特点。&lt;/span&gt;', 0, '2017-04-14', 0),
(15, 1, '如何选购安心大米？', NULL, '<p>\r\n	<span style="line-height:1.5;">主要从以下几个方面着手：</span>\r\n</p>\r\n<p>\r\n	<span style="line-height:1.5;"><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style="line-height:1.5;">1、看硬度：</span> \r\n</p>\r\n<p>\r\n	<span style="line-height:1.5;">大米粒硬度是由蛋白质的含量决定的，米的硬度越强，蛋白质含量越高，透明度也越好。一般新米比陈米硬，水分低的米比水分高的米硬，晚籼(粳)米比早籼(粳)米硬。</span> \r\n</p>\r\n<p>\r\n	<span style="line-height:1.5;"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	2、看腹白：\r\n</p>\r\n<p>\r\n	大米腹部常有一个不透明的白斑，白斑在大米粒中心部分被称为“心白”，在外腹被称为“外白”。腹白部分米质蛋白质含量较低，含淀粉较多。一般含水分过高、收后未经后熟和不够成熟的稻谷，腹白较大。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	3、看爆腰：\r\n</p>\r\n<p>\r\n	爆腰是由于大米在干燥过程中发生急热现象后，米粒内外失去平衡造成的。爆腰米食用时外烂里生，营养价值降低。所以，选米时要仔细观察米粒表面，如果米粒上出现一条或更多条横裂纹，就说明是爆腰米。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	4、看黄粒：\r\n</p>\r\n<p>\r\n	米粒变黄是由于大米中某些营养成分在一定的条件下发生了化学反应，或者是大米粒中微生物引起的。这些黄粒香味和食味都较差，所以选购时，必须观察黄粒米的多少。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	5、看新陈：\r\n</p>\r\n<p>\r\n	大米陈化现象较重，陈米的色泽变暗，黏性降低，失去大米原有的香味。所以，要认真观察米粒颜色，表面呈灰粉状或有白道沟纹的米是陈米，其量越多则说明大米越陈旧。同时，捧起大米闻一闻气味是否正常，如有发霉的气味说明是陈米。另外，看米粒中是否有虫蚀粒，如果有虫蚀粒和虫尸的也说明是陈米。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	6、看标签：\r\n</p>\r\n<p>\r\n	消费者在购买大米时还应注意查看包装上标注的内容。如包装上是否标注产品名称、净含量、生产企业的名称和地址、生产日期和保质期、质量等级、产品标准号等。\r\n</p>', 1, '2016-11-22', 0),
(8, 4, '复合酶', NULL, '<div class="en-cnt-box">\r\n	<div class="en-cntu">\r\n		<img src="static/index/images/en-prmei01.jpg" alt="" /> \r\n	</div>\r\n	<div class="en-meibox01">\r\n		<div class="en-meibox01lt">\r\n			<h3>\r\n				<span>&gt;&gt;&gt;</span>&nbsp;什么是酵素?\r\n			</h3>\r\n			<div class="en-meibox01lt-text">\r\n				酵素，是六千多种酶的总称。<br />\r\n是生命的最基础物质，所有的生命体都有酵素的存在，<br />\r\n它是维持生命代谢功能、维持修复生命体活动的一种必要物质，<br />\r\n生命体内物质的合成、催化、分解、消化运输、调整平衡、 <br />\r\n新陈代谢等最基本的生命活动都是与酵素有着密切的关系，<br />\r\n因此它是生命的基础物质\r\n			</div>\r\n		</div>\r\n		<div class="en-meibox01rt">\r\n			<img src="static/index/images/en-mei01.jpg" alt="" /> \r\n		</div>\r\n	</div>\r\n</div>\r\n<div class="en-meibox02">\r\n	<div class="en-meibox02-cnt">\r\n		<div class="en-meibox02-tu">\r\n			<img src="static/index/images/en-mei02.jpg" alt="" /> \r\n		</div>\r\n		<div class="en-meibox02rt">\r\n			<h3>\r\n				<span>&gt;&gt;&gt;</span>&nbsp;什么是酶?\r\n			</h3>\r\n			<div class="en-meibox02text">\r\n				生物体内的酶是具有生物催化活性的高分子物质。<br />\r\n无论动物植物，只要有生命存在就有酶的存在， <br />\r\n生物体内物质的形成、分解转化、运输、 <br />\r\n排除以及供能等生命现象都与酶密切相关。\r\n			</div>\r\n		</div>\r\n	</div>\r\n</div>\r\n<div class="en-cnt-box">\r\n	<div class="en-meibox03">\r\n		<div class="en-meibox03-textlt">\r\n			<h3>\r\n				<span>&gt;&gt;&gt;</span>&nbsp;什么是复合酶?\r\n			</h3>\r\n			<div class="en-meibox03text">\r\n				安心德使用的复合酶是以六百多种动植物单体酶为原料，经过高科技手段，长时间发酵，几次螯合，低温萃取，严格检测，10℃－45℃保存质量不变的复合酶系列产品，包括复合酶生物肥和复合酶喷剂等。复合酶制剂用于水稻，出芽率高、根系发达、抗逆性强，分蘖多，抗倒伏，促早熟，可有效降解化肥农药及重金属的残留，同时，还可以改良土壤，增加有机质含量，改善土壤环境，提高地力，减少化肥和农药的使用量，大大降低了农业种植成本。<br />\r\n<br />\r\n经过复合酶稀释后浸泡过的种子可以提高种子的耐寒能力，防病菌、治愈病害、能促进种子体内淀粉糖和淀粉酶的转化，促进种子发芽，芽齐、芽壮。安心德使用的复合酶喷剂，能为秧苗生长提供所需养分，促使秧苗根系快速发育，根系表现白根多、根须茂盛、返青快，有效分蘖率高，有利于增产。喷施复合酶溶液，对水稻防病防虫有着十分重要作用。它通过复合酶中特有的生物波可以释放出驱虫气味，可以驱走潜叶蝇、三化螟（钻心虫）、稻纵卷叶螟（卷叶虫、白叶虫、包叶虫）等。还可以通过植物根系振动波抵制病害的潜入，防止稻瘟病的发生。\r\n			</div>\r\n		</div>\r\n		<div class="en-meibox03tu">\r\n			<img src="static/index/images/en-mei03.jpg" alt="" /> \r\n		</div>\r\n	</div>\r\n</div>\r\n<div class="en-meibox04">\r\n	<div class="en-meibox04-cnt">\r\n		<h4>\r\n			复合酶在农业应用的特点\r\n		</h4>\r\n		<ul class="en-meibox04-box">\r\n			<li>\r\n				<div class="title01 sprite">\r\n				</div>\r\n				<div class="en-meibox04-boxtext">\r\n					复合酶可以去除谷物、蔬菜、水果中的农残、重金属，使农副产品大道有机绿色标准甚至更高，还原作物原始味道，经过黑龙江省谷物检测中心多年的连续检测，使用酵素的农业作物完全超过绿色有机食品的国家标准。\r\n				</div>\r\n<span class="yin sprite"></span> \r\n			</li>\r\n			<li>\r\n				<div class="title02 sprite">\r\n				</div>\r\n				<div class="en-meibox04-boxtext">\r\n					酶是生命的催化剂，提高作物自身的免疫和吸收能力，使作物根部发达、节秆粗壮、叶面肥大，增加作物阳光和水分的吸收能力，延长作物生长时间，有效的促进早熟，增产增收。\r\n				</div>\r\n<span class="yin sprite"></span> \r\n			</li>\r\n			<li class="ma0">\r\n				<div class="title03 sprite">\r\n				</div>\r\n				<div class="en-meibox04-boxtext">\r\n					复合酶具有强烈的驱虫抗病能力，自有的生物波可以对蚜虫、翅目类、多足类害虫进行驱离，并可以阻断右旋病害菌的存活，抗病害能力强。\r\n				</div>\r\n<span class="yin sprite"></span> \r\n			</li>\r\n			<li class="ma04">\r\n				<div class="title04 sprite">\r\n				</div>\r\n				<div class="en-meibox04-boxtext">\r\n					复合酶可以去除谷物、蔬菜、水果中的农残、重金属，使农副产品大道有机绿色标准甚至更高，还原作物原始味道，经过黑龙江省谷物检测中心多年的连续检测，使用酵素的农业作物完全超过绿色有机食品的国家标准。\r\n				</div>\r\n<span class="yin sprite"></span> \r\n			</li>\r\n			<li>\r\n				<div class="title05 sprite">\r\n				</div>\r\n				<div class="en-meibox04-boxtext">\r\n					酶是生命的催化剂，提高作物自身的免疫和吸收能力，使作物根部发达、节秆粗壮、叶面肥大，增加作物阳光和水分的吸收能力，延长作物生长时间，有效的促进早熟，增产增收。\r\n				</div>\r\n<span class="yin sprite"></span> \r\n			</li>\r\n		</ul>\r\n	</div>\r\n</div>', 0, '2016-11-22', 0),
(9, 4, '研究证书', NULL, '<div class="en-cnt-box en-cnt-yanbox">\r\n					<div class="en-cntu"><img src="static/index/images/en-pryan01.jpg" alt="" /></div>\r\n					<h2>研究证书</h2>\r\n					<ul class="en-yancnt">\r\n						<li><img src="static/index/images/en-yan_01.jpg" alt="" /></li>\r\n						<li class="mal"><img src="static/index/images/en-yan_02.jpg" alt="" /></li>\r\n						<li><img src="static/index/images/en-yan_03.jpg" alt="" /></li>\r\n						<li class="mal"><img src="static/index/images/en-yan_04.jpg" alt="" /></li>\r\n					</ul>\r\n				</div>\r\n			</div>', 0, '2016-11-22', 0),
(5, 3, '调和米', '', '安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。', 0, '2017-04-18', 0),
(6, 4, '酵素生成', NULL, '<div class="en-cnt-box">\r\n					<div class="en-cntu"><img src="static/index/images/en-pr01.jpg" alt="" /></div>\r\n					<h2>安心德产品采用酵素生成的效果</h2>\r\n					<div class="en-cntext">\r\n						安心德精选优质T稻花香稻种，使用复合酶制剂浸种、催芽后播种，<br/> 以微生物有机肥和植物酵素精华液替代常规化肥，以复合酶生物制剂取代农药防治病虫害，\r\n						<br/> 从而避免了因使用农药和化肥过程中给农作物和环境造成的伤害，\r\n						<br/> 采用自然农耕的栽培技术生产出的绿色、环保、健康大米。\r\n						<br/><br/> 安心德酵素大米具有米粒细长，晶莹剔透，腹白较小，质地坚韧、细腻华润，会散发出米香，\r\n\r\n						<br/> 米饭口感绵软香滑，略带甜味，韧性较好，独具隔夜不回生的特点。\r\n						<br/>\r\n					</div>\r\n					<ul class="en-show">\r\n						<li>\r\n							<div class="en-show-box">\r\n								<img src="static/index/images/en_tu01.jpg" alt="" />\r\n							</div>\r\n							<div class="zhao"></div>\r\n							<h2>复合酶制剂浸种</h2>\r\n						</li>\r\n						<li>\r\n							<div class="en-show-box">\r\n								<img src="static/index/images/en_tu02.jpg" alt="" />\r\n							</div>\r\n							<div class="zhao"></div>\r\n							<h2>复合酶制剂浸种</h2>\r\n						</li>\r\n						<li>\r\n							<div class="en-show-box">\r\n								<img src="static/index/images/en_tu03.jpg" alt="" />\r\n							</div>\r\n							<div class="zhao"></div>\r\n							<h2>复合酶制剂浸种</h2>\r\n						</li>\r\n					</ul>\r\n				</div>', 0, '2016-11-22', 0),
(7, 4, '改良土壤', NULL, '<div class="en-cnt-box">\r\n	<div class="en-cntu">\r\n		<img src="static/index/images/en-prgai01.jpg" alt="" /> \r\n	</div>\r\n	<h2>\r\n		复合酶种植与传统种植的对比说明\r\n	</h2>\r\n	<ul class="en-gaicnt">\r\n		<li class="engai-tu01">\r\n			<div class="engai-tu">\r\n				<img src="static/index/images/engai_01.jpg" alt="" /> \r\n			</div>\r\n			<h3>\r\n				酵素培育的西红柿\r\n			</h3>\r\n		</li>\r\n		<li class="engai-tu02">\r\n			<div class="engai-tu">\r\n				<img src="static/index/images/engai_02.jpg" alt="" /> \r\n			</div>\r\n			<h3>\r\n				未使用的酵素的西红柿\r\n			</h3>\r\n		</li>\r\n		<li class="engai-tu03">\r\n			<div class="engai-tu">\r\n				<img src="static/index/images/engai_03.jpg" alt="" /> \r\n			</div>\r\n			<h3>\r\n				活杆成熟的酵素水稻\r\n			</h3>\r\n		</li>\r\n		<li class="engai-tu04">\r\n			<div class="engai-tu">\r\n				<img src="static/index/images/engai_04.jpg" alt="" /> \r\n			</div>\r\n			<h3>\r\n				黑龙江省农业技术推广中心、省农科院、五常水稻研究所、<br />\r\n鸡西市农委、黑龙江粮食种田模范等参加酵素种植推广应用观摩会\r\n			</h3>\r\n		</li>\r\n	</ul>\r\n</div>', 0, '2016-11-22', 0),
(2, 3, '稻花香', NULL, '安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。', 0, '0', 0),
(3, 3, '长粒香', NULL, '安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。', 0, '0', 0),
(4, 3, '松梗香', NULL, '安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。', 0, '0', 0),
(10, 2, '安心德', '', '<div class="abcnt">\r\n	<h2>\r\n		安心德\r\n	</h2>\r\n<span class="yin sprite"></span> <img src="static/index/images/abtu01.jpg" alt="" /> \r\n	<div class="abcnt-textbox">\r\n		<div class="abcnt-text01">\r\n			大连安心德科技有限公司（以下简称：安心德）是国内较早从事复合酶制剂在农业、牧业领域产品应用的销售企业。<br />\r\n公司选址东北之窗，北方明珠——大连，将东北优质稻花香米辅以复合酶绿色科技，为国人呈现安心、健康的产品体验，为您还原记忆中的米香味儿。<br />\r\n<br />\r\n安心德与鸡西市森柒生物科技有限公司达成长期战略合作关系， 由森柒生物提供全程技术支持，致力于研发复合酶生物肥，替代传统化肥、农药，改善土壤微生态环境，大幅提高粮食作物生产能力，为促进农民增收和农业增效，增强农产品的市场竞争力保驾护航。\r\n		</div>\r\n		<div class="abcnt-text02">\r\n			安心德酵素大米是国内首家通过香港权威机构检测合格的酵素大米，以其营养全面、绿色安全、油份大、味道香甜、光泽透明等优点正在成为国内米业市场的新宠。<br />\r\n<br />\r\n在营养和健康的需求空前强烈的今天，安心德深深明白“民以食为天，食以安为先”的含义，正在打造以大连为中心，北上广深为重点的营销战略布局，抢占行业先机，致力于销售健康、安全、绿色的优质酵素大米，并将复合酶科技应用到农业、牧业等多个领域，为您带来更多营养，更多健康。\r\n		</div>\r\n	</div>\r\n</div>\r\n<ul class="abuc-box">\r\n	<li class="abus01 sprite">\r\n	</li>\r\n	<li class="abus02 sprite">\r\n	</li>\r\n	<li class="abus03 sprite on">\r\n	</li>\r\n	<li class="abus04 sprite">\r\n	</li>\r\n	<li class="abus05 sprite">\r\n	</li>\r\n</ul>\r\n<div class="abuc-boxcnt" style="display:none;">\r\n	<div class="abuc-boxcnt01">\r\n		<span class="sanj01 sprite"></span> \r\n	</div>\r\n	<div class="abuc-boxcnt02">\r\n		<h3>\r\n			品牌愿景\r\n		</h3>\r\n让国人吃上健康、安全的酵素大米，成为复合酶应用领域的先行者和倡导者。\r\n	</div>\r\n</div>\r\n<div class="abuc-boxcnt" style="display:none;">\r\n	<div class="abuc-boxcnt01">\r\n		<span class="sanj02 sprite"></span> \r\n	</div>\r\n	<div class="abuc-boxcnt02">\r\n		<h3>\r\n			品牌使命\r\n		</h3>\r\n为国人健康提供优质食材，为复合酶应用提供优质平台，为三农发展提供创新助力。\r\n	</div>\r\n</div>\r\n<div class="abuc-boxcnt">\r\n	<div class="abuc-boxcnt01">\r\n		<span class="sanj03 sprite"></span> \r\n	</div>\r\n	<div class="abuc-boxcnt02">\r\n		<h3>\r\n			品牌口号\r\n		</h3>\r\n酵素大米，粒粒安心。安心德，为您还原记忆中的米香味儿。\r\n	</div>\r\n</div>\r\n<div class="abuc-boxcnt" style="display:none;">\r\n	<div class="abuc-boxcnt01">\r\n		<span class="sanj04 sprite"></span> \r\n	</div>\r\n	<div class="abuc-boxcnt02">\r\n		<h3>\r\n			品牌定位\r\n		</h3>\r\n民以食为天，食以安为先，安以酶为关键。安心德，您的健康管理专家。\r\n	</div>\r\n</div>\r\n<div class="abuc-boxcnt" style="display:none;">\r\n	<div class="abuc-boxcnt01">\r\n		<span class="sanj05 sprite"></span> \r\n	</div>\r\n	<div class="abuc-boxcnt02">\r\n		<h3>\r\n			品牌文化\r\n		</h3>\r\n		<p>\r\n			（1）核心文化：上善若水，德行天下。<br />\r\n（2）经营理念：以复合酶制剂应用为基础，建立“公司＋农业园区＋市场”的产业链经营模式。<br />\r\n（3）发展理念：种植安全化，品种优质化，管理现代化，研发专业化，营销人性化，效益社会化，实现安心德品牌、效益、规模的协调发展。\r\n		</p>\r\n	</div>\r\n</div>', 0, '2016-11-25', 0),
(11, 2, '合作社', NULL, '<div class="abcnt">\r\n<h2>\r\n	合作社\r\n</h2>\r\n<span class="yin sprite"></span> <img src="static/index/images/ab-he01.jpg" alt="" /> \r\n<div class="abcnt-textbox ab-hetext">\r\n	安心德作为五常市桃山屯天谷水稻种植合作社的发起人之一，<br />\r\n所有大米全部产自黑龙江优质水稻核心产区——五常市安家镇桃山屯，合作社拥有稻田八千多亩，牤牛河作为主要灌溉水源，<br />\r\n谷物生长一年一季，水到渠成，年均日照时长2768.5小时， <br />\r\n147天全程精心培育，鱼米共生，年收一季。<br />\r\n日照充足、水质洁净，矿物质丰富的黑土地，为安心德酵素大米提供了优越的生长环境。\r\n</div></div>', 0, '2016-11-22', 0),
(12, 2, '绿之源', '', '<div class="abcnt">\r\n	<h2>\r\n		绿之源\r\n	</h2>\r\n<span class="yin sprite"></span> <img src="/Public/index/images/ab-lv01.jpg" alt="" /> \r\n	<div class="abcnt-textbox ab-hetext">\r\n		大连绿之源食品商行是大连安心德科技有限公司下属的健康食材销售商，<br />\r\n主营安心德酵素大米、果蔬、肉蛋等健康食材，目前在大连地区开设2家形象店。<br />\r\n伴随安心德品牌的全国营销战略，逐步打造以大连为中心，北上广深为重点的发展布局， <br />\r\n助力安心德品牌理念和产品的深入推广。\r\n	</div>\r\n</div>', 0, '2017-04-14', 0),
(16, 1, '安心德酵素大米的特点', NULL, '<p>\r\n	安心德酵素大米，寒地水稻的黄金品质和自然农耕的有机结合，在复合酶的悉心照料下，为您呈现安心、健康的产品体验，为您还原记忆中的米香味儿。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	特点：\r\n</p>\r\n<p>\r\n	1、健康源头：\r\n</p>\r\n<p>\r\n	精选稻花香优质良种，非转基因稻种保证稻种品质。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	2、黄金产地：\r\n</p>\r\n<p>\r\n	黑龙江五常大米核心原产地——五常市安家镇桃山屯，牤牛河作为主要灌溉水源，谷物生长一年一季，年均日照时长2768.5小时，147天全程精心培育，肥沃黑土地及天然活水滋养，日照充足，水质洁净，矿物质丰富。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	3、自然农耕：\r\n</p>\r\n<p>\r\n	复合酶全程供养，无化肥残留、无农药残留、无土壤重金属超标。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	4、原米原香：\r\n</p>\r\n<p>\r\n	稻米只经过脱壳、色选两道工序，真空包装最大程度保留稻米的原色、原味和营养成分。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	5、食之我幸：\r\n</p>\r\n<p>\r\n	清香劲道，口感黏糯，蒸饭香气浓郁，煮粥浆如乳蒸，味回甘，不回生。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	6、酵素大米：\r\n</p>\r\n<p>\r\n	在大米生长过程中，按照科学方式顶起喷洒复合酶制剂，使大米在自然条件下，充分吸收酵素成分；<br />\r\n酵素超强的分解能力能降解土壤、空气中的重金属及污染物，使安心德酵素大米达到真正的绿色无污染；<br />\r\n在食用过程中，大米中的酵素活性酶极易被人体吸收，并快速参与人体各项代谢活动，提高蛋白质、脂肪和碳水化合物的消化吸收率；<br />\r\n安心德酵素大米富含维生素E及多种营养物质，米饭油亮清香，绵软略粘，芳香爽口，独具隔夜不回生的特点。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 1, '2016-11-30', 0),
(17, 1, '精选水稻袭人香，酿作醇正好营养', NULL, '&nbsp; &nbsp; 我国是最早种植水稻的国家，早在7000多年前，生活在长江下游的河姆渡人就已经开始培育稻谷。从“稻花香里说丰年，听取蛙声一片”等诗句中，可见稻米在我国人民的日常饮食中占据着举足轻重的地位。至今我国都是稻谷生产和消费大国，稻米市场也迎来了新一轮的“暖春”。\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/upload/image/20161201/20161201152028_38646.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp;&nbsp;色泽晶莹剔透、香味纯正浓厚、口感软硬适中方为优质稻米，大连安心德科技有限公司坐落于东北之窗，北方明珠——大连，是国内较早从事复合酶制剂在农业、牧业领域产品应用的销售企业。\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp;&nbsp;安心德作为黑龙江省五常市桃山屯天谷水稻种植合作社的发起人之一，所有大米全部产自黑龙江优质水稻核心产区，肥沃的黑土是养分的源泉，得天独厚的自然环境为稻米的生长提供充足的阳光雨露，寒地水稻的黄金品质与自然农耕的有机结合把“稻米流脂粟米白”演绎到极致。精选特级非转基因稻种，使用复合酶制剂浸种、催芽后播种，稻米只经过脱壳、色选两道工序，真空包装最大程度保留稻米的原色、原味和营养成分。\r\n</p>\r\n<p style="text-align:center;">\r\n	<br />\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/upload/image/20161201/20161201152128_50230.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/upload/image/20161201/20161201152146_60136.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp;&nbsp;自然有机耕作方式保证了稻米的安全健康，安心德以复合酶生物有机肥替代常规化肥，以复合酶生物制剂取代农药防治病虫害，避免了因使用农药和化肥过程中给农作物和环境造成的伤害。安心德酵素大米是国内首家通过香港权威机构检测合格的酵素大米，土壤重金属标准低于国家标准，保证所有酵素产品“0”农药残留，“0”化肥残留。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/upload/image/20161201/20161201151905_55168.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	<img src="/upload/image/20161201/20161201151919_33245.jpg" alt="" /> \r\n</p>\r\n<p style="text-align:center;">\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp; &nbsp;&nbsp;从种植基地到选种、培育、脱壳、包装的层层精心筛选，才酝酿出颗粒饱满、色泽清莹透饭亮、香味浓郁的醇香稻米。安心德科技有限公司将于2017年4月17-19日，在三元桥老国展与其他上百家行业佼佼者同聚世博威第21届有机绿色食品产业博览会，交流经验，共促市场发展，诚挚邀请您莅临参观!\r\n</p>', 0, '2016-12-02', 3),
(13, 0, '大米特点', NULL, '<div class="pr-box3">\r\n	<div class="pr-box3top">\r\n		<img src="static/index/images/pr-tedian.png" alt="" class="pr-tedian " /> \r\n		<h5>\r\n			健康源头\r\n		</h5>\r\n		<p>\r\n			精选稻花香优质良种，非转基因稻种保证稻种品质。\r\n		</p>\r\n	</div>\r\n	<div class="pr-tediantu">\r\n		<img src="static/index/images/tedian_01.jpg" alt="" /> \r\n	</div>\r\n	<div class="pr-tediantext">\r\n		<p class="title">\r\n			黄金产地\r\n		</p>\r\n黑龙江五常大米核心原产地——五常市安家镇桃山屯，牤牛河作为主要灌溉水源，谷物生长一年一季，年均日照时长2768.5小时，147天全程精心培育，肥沃黑土地及天然活水滋养，日照充足，水质洁净，矿物质丰富。\r\n	</div>\r\n	<div class="pr-tediantu">\r\n		<img src="static/index/images/tedian_02.jpg" alt="" /> \r\n	</div>\r\n	<div class="pr-tediantu pr-tediantufl">\r\n		<img src="static/index/images/tedian_03.jpg" alt="" /> \r\n	</div>\r\n	<div class="pr-tediantu pr-tediantufl">\r\n		<img src="static/index/images/tedian_04.jpg" alt="" /> \r\n	</div>\r\n</div>\r\n<div class="pr-box4">\r\n	<div class="pr-box4top">\r\n		<img src="static/index/images/pr-teshi.png" alt="" class="pr-teshi" /> \r\n		<p>\r\n			清香劲道，口感黏糯，蒸饭香气浓郁，煮粥浆如乳蒸，味回甘，不回生。\r\n		</p>\r\n	</div>\r\n	<div class="pr-box4text">\r\n		<div class="pr-box4tu">\r\n			<img src="static/index/images/teshi_01.jpg" alt="" /> \r\n		</div>\r\n		<div class="pr-box4tutext">\r\n			<h5>\r\n				酵素大米\r\n			</h5>\r\n在大米生长过程中，按照科学方式顶起喷洒复合酶制剂，使大米在自然条件下，充分吸收酵素成分；酵素超强的分解能力能降解土壤、空气中的重金属及污染物，使安心德酵素大米达到真正的绿色无污染；在食用过程中，大米中的酵素活性酶极易被人体吸收，并快速参与人体各项代谢活动，提高蛋白质、脂肪和碳水化合物的消化吸收率；安心德酵素大米富含维生素E及多种营养物质，米饭油亮清香，绵软略粘，芳香爽口，独具隔夜不回生的特点\r\n		</div>\r\n	</div>\r\n</div>', 0, '', 0),
(18, 1, 'test', NULL, 'aaaaaaaaaaaaaaaa', 1, '2017-04-17', 2),
(19, 1, '11111111', NULL, 'bbbbbbbbbb', 0, '2017-04-17', 4),
(20, 1, 'ooooooo111', NULL, '<p>\r\n	ppppppppppp1111\r\n</p>\r\n<p>\r\n	<img src="/upload/image/20170417/20170417025818_34801.jpg" alt="" />\r\n</p>', 0, '2017-04-17', 3);

-- --------------------------------------------------------

--
-- 表的结构 `axdrice_option`
--

CREATE TABLE IF NOT EXISTS `axdrice_option` (
  `optionType` varchar(10) DEFAULT NULL COMMENT '类型',
  `optionKey` varchar(20) DEFAULT NULL COMMENT '键',
  `optionValue` varchar(100) DEFAULT NULL COMMENT '值'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='设置';

--
-- 转存表中的数据 `axdrice_option`
--

INSERT INTO `axdrice_option` (`optionType`, `optionKey`, `optionValue`) VALUES
('site', 'wxcode', 'upload/wxcode/58ed941d57d4d.jpg'),
('site', 'weixin', 'h01101'),
('site', 'tel', '0411-390413659'),
('site', 'commpany', '大连安心德科技有限公司'),
('site', 'description', '3001'),
('site', 'keywords', 'b01'),
('AdminCtrol', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
('site', 'title', '安心德大米');

-- --------------------------------------------------------

--
-- 表的结构 `axdrice_product`
--

CREATE TABLE IF NOT EXISTS `axdrice_product` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) DEFAULT NULL COMMENT '名称',
  `productUnit` varchar(10) DEFAULT NULL COMMENT '单位',
  `productAddr` varchar(100) DEFAULT NULL COMMENT '产地',
  `productImg` varchar(50) DEFAULT NULL COMMENT '图片',
  `productContent` text COMMENT '内容',
  `aid` int(11) NOT NULL DEFAULT '0' COMMENT '文章关联ID',
  `addDate` varchar(10) NOT NULL COMMENT '时间戳',
  `ord` int(4) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`productId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `axdrice_product`
--

INSERT INTO `axdrice_product` (`productId`, `productName`, `productUnit`, `productAddr`, `productImg`, `productContent`, `aid`, `addDate`, `ord`) VALUES
(1, '调和米', '500G', '黑龙江', 'upload/image/20161130/2016113050.jpg', '', 2, '2016-11-24', 1),
(2, '调和米', '5KG', '黑龙江', 'upload/image/20161130/20161130878.jpg', '目目目目1111xxxxxxxxsssssdddsfdsfsadfsdafasdfsaUUUUU', 2, '2016-11-24', 2),
(3, '长粒香', '5KG', '黑龙江', 'upload/image/20161130/20161130457.jpg', '', 3, '2016-11-30', 0),
(4, '长粒香', '500G', '黑龙江', 'upload/image/20161130/20161130580.jpg', '', 3, '2016-11-30', 0),
(5, '调和米', '5KG', '黑龙江', 'upload/image/20161130/20161130380.jpg', '', 5, '2016-11-30', 0),
(6, '调和米', '500G', '黑龙江', '', '', 5, '2016-11-30', 0),
(7, '松粳香', '5KG', '黑龙江', 'upload/image/20161130/20161130953.jpg', '', 4, '2016-11-30', 0),
(8, '松粳香', '500G', '黑龙江', 'upload/image/20161130/20161130650.jpg', '', 4, '2016-11-30', 0);

-- --------------------------------------------------------

--
-- 表的结构 `axdrice_slide`
--

CREATE TABLE IF NOT EXISTS `axdrice_slide` (
  `slideId` int(11) NOT NULL AUTO_INCREMENT,
  `slideImg` varchar(50) DEFAULT NULL COMMENT '图片',
  `slideLink` varchar(100) DEFAULT NULL COMMENT '链接',
  `ord` int(4) NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`slideId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播图' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `axdrice_slide`
--

INSERT INTO `axdrice_slide` (`slideId`, `slideImg`, `slideLink`, `ord`) VALUES
(9, 'upload/slide/20161123586.jpg', '', 0),
(7, 'upload/slide/20161123436.jpg', '', 0),
(8, 'upload/slide/20161123521.jpg', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
