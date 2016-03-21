<?php
namespace Admin\Controller;
use Admin\Controller\CommonController;
class IndexController extends CommonController {
    public function index()
	{
        $this -> redirect('Menu/index');
    }
	
	public function change_pwd()
	{
		if (IS_POST)
		{
			$m = M('User');
			$id = I('post.id', '', 'htmlspecialchars');
			$oldPwd = encrypt(trim(I('post.oldPwd')));
			$res = $m -> find($id);
			if ($res['password'] == $oldPwd)
			{
				$pwd = encrypt(I('newPwd'));
				
				$data = $m -> where(array('id' => $id)) -> save(array('password' => $pwd));
				if ($data)
				{
					$this -> redirect('Menu/index');
				}
				else
				{
					$this -> error('修改密码失败');
				}
			}
			else
			{
				$this -> error('旧密码不正确');
			}
		}
		else
		{
			$this -> display();
		}
	}
}