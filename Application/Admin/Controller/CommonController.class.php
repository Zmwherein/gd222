<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller
{
	public function _initialize()
	{
		if ( ! cookie('userId'))
		{
			$this -> redirect('Admin/Login/index');
		}
		else
		{
			$menu = M('Menu');
			$data = $menu -> where(array('rid' => '0')) -> order('sort asc') -> select();
			
			foreach ($data as $key => $val)
			{
				$id[] = $val['id'];
			}
			$id = implode(',', $id);
			
			$data['next'] = $menu -> where(array('rid' => array('in', $id))) -> select();
			
			$this -> assign('menu', $data);
		}
	}
	
	//分页
	public function pub_page($model, $num = 0, $where = '')
	{
		$m = M($model);
		$count      = $m -> where($where) -> count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count, $num);
		if ($count > $num)
		{
			$Page -> setConfig('prev','上一页');
			$Page -> setConfig('next', '下一页');
		}
		
		$show       = $Page -> show();
		$list = $m -> where($where) -> limit($Page->firstRow.','.$Page->listRows) -> select();
		$this -> assign('count', $count);
		$this -> assign('num', $num);
		$this -> assign('list', $list);
		$this->assign('page',$show);
	}
	
	//删除
	public function pub_del($mod, $id)
	{
		$res = M($mod) -> where(array('id' => $id)) -> delete();
		if ($res)
		{
			$this -> success('删除成功');
		}
		else
		{
			$this -> error('删除失败');
		}
	}
}