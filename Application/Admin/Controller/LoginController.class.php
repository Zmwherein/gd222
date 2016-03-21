<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index()
	{
		$this -> display();
	}
	
	public function login()
	{
		if (IS_POST)
		{
			$model = M('User');
			$user['name'] = trim(I('name'));
			$user['password'] = encrypt(I('password'));
			// echo '<pre>';
			// var_dump($user);exit;
			
			$verify = new \Think\Verify();
			$code = I('verify');
			if (! $verify -> check($code))
			{
				// $ajax['status'] = 0;
				// $ajax['info'] = '验证码错误';
				// $this -> ajaxReturn($ajax);
				$this -> error('验证码错误');
			}
			
			$res = $model -> where($user) -> find();
			if ($res)
			{
				cookie('userId', encode($res['id']));
				cookie('user_auth', encode($res['name']));
				// echo '<pre>';
				// var_dump(cookie());exit;
				$ul = M('User_log');
				$data['ip'] = get_client_ip();
				$data['time'] = $_SERVER['REQUEST_TIME'];
				$ul -> add($data);
				
				$this -> success('登录成功！', __MODULE__.'/Index/index');
			}
			else
			{
				$this -> error('用户密码不正确');
			}
		}
		else
		{
			$this -> error('非法操作');
		}
	}
	
	public function loginout(){
		cookie('userId', null);
		cookie('user_auth', null);
		$this -> redirect('Login/index');
	}
	
	
}