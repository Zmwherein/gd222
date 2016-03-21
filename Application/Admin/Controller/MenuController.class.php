<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends CommonController {
    public function index()
	{
		$m = M('Menu');
		$list = $m -> where(array('rid' => '0')) -> order('sort asc') -> select();
		// $this -> pub_page('Menu', 8, array('rid' => '0'));
		$this -> assign('list', $list);
		$this -> display();
		// echo N('read');
	}
	
	public function sortBtn()
	{
		$arr = array();
		$arr = I('post.json');
		
		//key>id  val>sort
		$m = M('Menu');
		
		//更新多条语句
		$ids = implode(',', array_keys($arr));
		$sql = "UPDATE `__PREFIX__menu` SET sort = CASE id";
		foreach ($arr as $id => $sort)
		{
			$sql .= sprintf(" WHEN %d THEN %d ", $id, $sort);
		}
		$sql .= "END WHERE id IN($ids);";
		
		$result = $m -> execute($sql);//类型的全等
		if ($result === 0)
		{
			//没有更改条数 成功
			// $ajax['status'] = 1;
			$ajax['info'] = '更新排序0条';
		}
		else if($result === false)
		{
			$ajax['info'] = 'sort fail';
		}
		else
		{
			//更改条数成功
			$ajax['info'] = 'success';
			
		}
		$this -> ajaxReturn($ajax);
	}
	
	public function add()
	{
		$menu = M('Menu');
		if (IS_POST)
		{
			$data = I('post.');
			if ($menu -> add($data))
			{
				$this->success("添加成功", __MODULE__."/Menu/index");
			}
			else
			{
				$this -> error('添加失败');
			}
		}
		else
		{
			if (I('get.next') == 'yes')
			{
				$data = $menu -> where(array('rid' => '0')) -> select();
				$this -> assign('data', $data);
			}
			// echo '<pre>';
			// var_dump($data);exit;
			$this -> display();
		}
	}
	
	public function edit()
	{
		$id = I("get.id","","htmlspecialchars");
		$menu = M("Menu");
		if(IS_POST)
		{
			$data = I('post.');
			if($menu -> where(array('id' => $id)) -> save($data))
			{
				$this->success("修改成功", __MODULE__."/Menu/index");
			}
			else
			{
				$this->error("修改失败");
			}
		}
		else
		{
			$data = $menu -> where(array('id' => $id)) -> find();
			
			$this -> assign("data", $data);
			
			//这是下级
			$list = $menu -> where(array('rid' => '0')) -> select();
			/* echo '<pre>';
			var_dump($list);exit; */
			$this -> assign('list', $list);
			$this -> display();
		}
	}
	
	public function del()
	{
		$id = I('get.id', '', 'htmlspecialchars');
		$this -> pub_del('Menu', $id);
	}
	
	
	public function lists()
	{
		$id=I("get.id","","htmlspecialchars");
		$menu=M('Menu');
		
		$this -> pub_page('Menu', 6, array('rid' => $id));
		
		$this -> assign('lis', 'l');
		$this->display("Menu/index");
	}
}