<?php
namespace Admin\Controller;
use Think\Controller;
class FuncController extends CommonController {
    public function index()
	{
		$this -> assign('list', M('Func') -> select());
		$this -> display();
    }
	
	
	public function add()
	{
		$menu = M('Func');
		if (IS_POST)
		{
			$data = I('post.');
			if ($menu -> add($data))
			{
				$this->success("添加成功", __MODULE__."/Func/index");
			}
			else
			{
				$this -> error('添加失败');
			}
		}
		else
		{
			$this -> display();
		}
	}
	
	public function edit()
	{
		$id = I("get.id","","htmlspecialchars");
		$Func = M("Func");
		if(IS_POST)
		{
			$data = I('post.');
			if($Func -> where(array('id' => $id)) -> save($data))
			{
				$this->success("修改成功", __MODULE__."/Func/index");
			}
			else
			{
				$this->error("修改失败");
			}
		}
		else
		{
			$data = $Func -> where(array('id' => $id)) -> find();
			$this -> assign("data", $data);
			$this -> display();
		}
	}
	
	public function del()
	{
		$id = I('get.id', '', 'htmlspecialchars');
		$this -> pub_del('Menu', $id);
	}
	
}