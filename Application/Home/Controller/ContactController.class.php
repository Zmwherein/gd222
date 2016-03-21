<?php
namespace Home\Controller;
use Home\Controller\CommonController;
class ContactController extends CommonController {
    public function index()
	{
		if (IS_POST)
		{
			$mes = M('Message');
			$data = I('post.');
			if ( ! $mes -> autoCheckToken($data))
			{
				$this -> error('表单不能重复');
			}
			else
			{
				if ($mes -> add($data))
				{
					$this -> success('留言成功');
				}
				else
				{
					$this -> error('留言失败');
				}
			}
		}
		else
		{
			$this -> assign('comp', M('Company') -> find());
			$this -> display();
		}
    }
}