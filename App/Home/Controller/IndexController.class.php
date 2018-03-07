<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        
		$slide = M('slide');
		$banner = $slide->field('slideImg,slideLink')->order('ord DESC,slideId DESC')->select();
		$this->assign('banner',$banner);

		$article = M('article');

		//复合酶种植
		$fhmPro = $article->field('articleImg,articleContent')->where('articletype=0')->find();
		$this->assign('fhmPro',$fhmPro);

		//新闻
		$news = $article->field('articleId,articleTitle,addDate')->where('articletype=1 AND indexShow=1')->order('ord DESC,articleId DESC')->limit(0,10)->select();

		$this->assign('news',$news);

		$this->display();
		
    }

    public function rice(){

    	$id = I('get.id',2);
		$this->assign('id',$id);

		switch ($id) {
			case 2:
				$riceTitle = '满堂飘香，粒粒精选';
				$riceImg = 'Public/index/images/pr-box01bg4.jpg';
				break;
			case 3:
				$riceTitle = '长长久久，粒粒芳香';
				$riceImg = 'Public/index/images/pr-box01bg3.jpg';
				break;
			case 4:
				$riceTitle = '香米之都，粒粒纯粹';
				$riceImg = 'Public/index/images/pr-box01bg.jpg';
				break;
			case 5:
				$riceTitle = '上品优选，粒粒健康';
				$riceImg = 'Public/index/images/pr-box01bg2.jpg';
				break;
		}

		$this->assign('riceTitle',$riceTitle);

		$this->assign('riceImg',$riceImg);

		$article = M('article');

		$product = M('product');

		//精选
		$jx = $article->field('articleContent')->where("articleId={$id}")->find();
		$this->assign('jx',$jx);

		//产品
		$pro = $product->where("aid={$id}")->order("ord DESC,productId DESC")->select();
		$this->assign('pro',$pro);

		//特点
		$detail = $article->field('articleContent')->where("articleId=13")->find();
		$this->assign('detail',$detail);

		$this->display('rice');

    }

    public function fertilizer($id=6){

		$this->assign('id',$id);

		//内容
		$article = M('article');
		$detail = $article->where("articleType=4")->find($id);
		$this->assign('detail',$detail);

		$this->display();

    }

    public function about($id=10){

    	$this->assign('id',$id);

		//内容
		$article = M('article');
		$detail = $article->where("articleType=2")->find($id);
		$this->assign('detail',$detail);

		$this->display();

    }

    public function news(){

    	$article = M('article'); // 实例化Data数据对象  date 是你的表名
	    $count = $article->where('articleType=1')->count();// 查询满足要求的总记录数 表示查询条件
	    $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数
	    $show = $Page->show();// 分页显示输出
	    // 进行分页数据查询
	    $news = $article->where('articleType=1')->order('ord DESC,addDate DESC,articleId DESC')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
	    foreach ($news as $key => $val) {
	    	$date = explode('-', $val['addDate']);
	    	$news[$key]['month'] = $date[1];
	    	$news[$key]['day'] = $date[2];
	    	$news[$key]['content'] = strip_tags($val['articleContent']);
	    }
	    $this->assign('news',$news);// 赋值数据集
	    $this->assign('page',$show);// 赋值分页输出
	    $this->display(); // 输出模板

    }

    public function newsdetail($id){

    	$this->assign('id',$id);

    	$article = M('article');

		$detail = $article->where("articleType=1")->find($id);

		$this->assign('detail',$detail);

		//下一篇
		$next = $article->field('articleId,articleTitle')->where("articleType=1 AND articleId > {$id}")->find();

		//echo M()->getlastsql();

		$this->assign('next',$next);

		$this->display();

    } 

}