<?php
namespace Admin\Controller;
use Think\Controller;
class SetpwdController extends Controller {

	public function index(){

		$admin = I('session.admin');

		$this->assign('admin',$admin);

		$this->display();

	}

	public function changepwd(){

		$option = M('option');

		$admin = I('session.admin');

		$pwd = I('post.pwd','','md5');

		$option->optionValue = $pwd;

		$bool = $option->where("optionType='AdminCtrol' AND optionKey='{$admin}'")->save();

		if($bool) {
            $this->success('操作成功！',U('Setpwd/index'));
        }else{
            $this->error('操作错误！');
        }

	}

}