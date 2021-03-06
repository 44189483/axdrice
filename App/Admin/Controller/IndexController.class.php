<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function login(){

		if(I('post.act') == 'submit'){
	
			//if(I('post.provenum') != I('session.authImg')){
    			//$this->error('对不起，请输入正确的验证码！');
			//}

			if(!$this->check_verify(I('post.provenum'))){
				$this->error('对不起，请输入正确的验证码！');
			}	

			$username = I('post.username');

			$userpwd = I('post.userpwd','','md5');
				
			$option = M('option');

			$row = $option->where("optionType='AdminCtrol' AND optionKey='{$username}' AND optionValue='{$userpwd}'")->find();
				
			if(!$row){
				$this->error('请您输入正确的用户名和密码！');
			}else{
				session('admin',$username);
				redirect(U('Index'), 1, '请登陆,页面跳转中...');
			}
		}
		$this->display();
	}

    public function index(){ 
    	if(empty($_SESSION['admin'])){
    		redirect(U('Index/login'), 3, '请登陆,页面跳转中...');
    	}
        $this->display();
    }

    public function head(){
		$this->assign('admin',I('session.admin'));
    	$this->display();
    }

    public function left(){
    	$this->display();
    }

    public function provenum(){

    	$config =    array(
		    'fontSize' => 20,    // 验证码字体大小
		    'imageW'   => 180,
			'imageH'   => 35
		);

    	$Verify = new \Think\Verify($config);
		$Verify->entry();

    	/*

    	$rand = "";

		for($i = 0;$i < 4;$i++){
			$rand.= dechex(rand(1,15));
		} 
		session('authImg',$rand);

		$im = imagecreatetruecolor(100,35);//尺寸 

		$bg = imagecolorallocate($im,255,255,255);	//背景色

		imagefill($im,0,0,$bg);

		$te = imagecolorallocate($im,0,0,0);			//字符串颜色

		$te2 = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));

		//画线
		for($i = 0; $i < 3; $i++){
			imageline($im,rand(0,100),0,100,30,$te2);
		}

		//杂点
		for($i = 0;$i < 200;$i++){
		    imagesetpixel($im,rand(0,100),rand(0,30),$te2);
		}

		imagestring($im,6,25,6,$rand,$te);//输出图像的位置（数字验证）

		header('Content-type:image/jpeg');

		imagejpeg($im);

		imagedestroy($im);

		*/

    }

    // 检测输入的验证码是否正确，$code为用户输入的验证码字符串
	public function check_verify($code){
	    $verify = new \Think\Verify();
	    return $verify->check($code);
	}

    public function logout(){
    	//退出 清除session
		I('session.admin','');
		session_destroy();
		redirect(U('Index/login'), 3, '页面跳转中...');
    }

}