<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {

	public function index(){

		$aid = I('get.aid');

		$this->assign('aid',$aid);

		$name = I('get.name');//标题

		$this->assign('name',$name);// 赋值分页输出

		$where = "aid={$aid}";

		if(!empty($name)){
			$where .= " AND productName LIKE '%{$name}%'";
		}

		$product = M('product'); // 实例化Data数据对象  date 是你的表名

	    $count = $product->where($where)->count();// 查询满足要求的总记录数 表示查询条件

	    $length = 10;

	    $Page = new \Think\Page($count,$length);// 实例化分页类 传入总记录数

	    $show = $Page->show();// 分页显示输出

	    // 进行分页数据查询
	    $rows = $product->where($where)->order('ord DESC,productId DESC')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条

	    //echo $product->_sql();
	    
	    $this->assign('rows',$rows);// 赋值数据集

	    $this->assign('page',$show);// 赋值分页输出

	    $this->display(); // 输出模板

	}

	public function add(){
		$this->assign('aid',I('get.aid'));
		$this->display();
	}

	public function view($id){
		$this->assign('aid',I('get.aid'));
		$this->assign('id',$id);
		$product = M('product');
		$row = $product->where("productId={$id}")->find(); 
		$this->assign('row',$row);
		$this->display(); 
	}

	public function save(){

		$act = I('get.act');

		$id = I('post.id');

		$name = I('post.name');

		$addr = I('post.addr');

		$unit = I('post.unit');

		$content = I('post.content','',false);

		$aid = I('post.aid');

		$date = I('post.date');

		$ord = I('post.ord');

		$product = M('product');

		//文件存在判断
		if(!empty($_FILES["attchment"]["name"]) && is_uploaded_file($_FILES["attchment"]["tmp_name"])){

			$upload = new \Think\Upload();// 实例化上传类
		    $upload->maxSize   = 5000000 ;// 设置附件上传大小
		    $upload->exts      = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		    $upload->autoSub   = false;//去除子目录
		    $upload->rootPath  = 'upload/product/'; // 设置附件上传根目录
			//$upload->savePath  = ''; // 设置附件上传（子）目录
		    // 上传文件 
		    $info = $upload->upload();

		    if($info) {
		    	@unlink($row['productImg']);//删除旧图
				$filepath = $upload->rootPath.$info['attchment']['savename'];				
		    }

		}else{
			$filepath = I('post.img');
		}

		$product->productName = $name;
		$product->productAddr = $addr;
		$product->productUnit = $unit;
		$product->productContent = $content; 
		$product->aid = $aid;
		$product->ord = $ord;
		$product->addDate = $date;
		$product->productImg = $filepath;

		if($act == 'add'){
			$bool = $product->add();
		}elseif($act == 'edit'){
			$bool = $product->where("productId={$id}")->save();
		}

		if($bool) {
            $this->success('操作成功！','../../../Product/index/aid/'.$aid);
        }else{
            $this->error('操作错误！');
        }

	}

	public function del($aid){

		$product = M('product');

		$pid = I('post.id');

		$gid = I('get.id');

		if($pid){//多删

			$rows = $product->where("productId IN(".implode(',', $pid).")")->select(); 

			foreach ($rows as $k => $v) {
				@unlink($v['productImg']);
			}

			$bool = $product->where("productId IN(".implode(',', $pid).")")->delete(); 

		}else if (!empty($gid)) {//单删
			$row = $product->field('productImg')->where("productId={$gid}")->find();
			//删除图片
			@unlink($row['productImg']);
			$bool = $product->where("productId={$gid}")->delete();
		}
		
		if($bool) {
            $this->success('操作成功！','../../../Product/index/aid/'.$aid);
        }else{
            $this->error('操作错误！');
        }

	}

}