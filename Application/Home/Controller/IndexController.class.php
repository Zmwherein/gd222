<?php
namespace Home\Controller;
use Home\Controller\CommonController;
class IndexController extends CommonController
{
    public function index()
	{
		$this -> assign('list', M('Func') -> select());
		
		$this -> display();
    }
	
	//网站建设
	public function webBuild()
	{
		if (IS_POST)
		{
			$mes = M('Message');
			if ( ! $mes -> autoCheckToken(I('post.')))
			{
				$this -> error('表单不能重复');
			}
			else
			{
				if ($mes -> add(I('post.')))
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
			$this -> display();
		}
	}
	
	//硬件推广
	public function hardware()
	{
		$this -> display();
	}
	
	//营销推广
	public function marketing()
	{
		$this -> display();
	}
	
	
}