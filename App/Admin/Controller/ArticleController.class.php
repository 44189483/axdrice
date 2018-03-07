<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {

	public function index($aid){

		$this->assign('aid',$aid);

		$article = M('article');

		$row = $article->find($aid); 

		$this->assign('row',$row);

		$this->display();

	}

	public function save(){

		$article = M('article');

		$aid = I('post.aid');

		$row = $article->field('articleImg')->find($aid);

		//文件存在判断
		if(!empty($_FILES["attchment"]["name"]) && is_uploaded_file($_FILES["attchment"]["tmp_name"])){

			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   = 5000000 ;// 设置附件上传大小
		    $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    //$upload->autoSub   = false;//去除子目录
		    $upload->rootPath  = 'upload/image/'; // 设置附件上传根目录
			//$upload->savePath  = ''; // 设置附件上传（子）目录
		    // 上传文件 
		    $info = $upload->upload();

		    if($info) {
		    	@unlink($row['articleImg']);//删除旧图
				$filepath = $upload->rootPath.$info['attchment']['savename'];				
		    }

		}else{
			$filepath = I('post.img');
		}

		$article->addDate = date('Y-m-d');
		$article->articleContent = I('post.content','',false);
		$article->articleImg = $filepath;	
		$article->where("articleId={$aid}")->save();

		//echo $article->_sql();
		//dump($article);
		
		redirect('../index/aid/'.$aid, 1, '页面跳转中...');

	}

}