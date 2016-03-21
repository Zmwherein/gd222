<?php
namespace Admin\Controller;
use Admin\Controller\CommonController;
class CompanyController extends CommonController {
    public function index(){
		$data = M('Company') -> find();
		$this -> assign('data', $data);
		
		$this -> display();
    }
	
	public function handle()
	{
		if (IS_POST)
		{
			$data = I('post.');
			if (I('post.act') == 'add')
			{
				if (M('Company') -> add($data))
				{
					$this -> success('添加成功', __MODULE__.'/Company/index');
				}
				else
				{
					$this -> error('添加失败');
				}
			}
			else 
			{
				if (M('Company') -> where(array('id' => I('get.id'))) -> save($data))
				{
					$this -> success('修改成功', __MODULE__.'/Company/index');
				}
				else
				{
					$this -> error('修改失败');
				}
			}
			
		}
	}
	
}