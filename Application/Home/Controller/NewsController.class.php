<?php
namespace Home\Controller;
use Home\Controller\CommonController;
class NewsController extends CommonController {
    public function index()
	{
		$User = M('News');
		$count      = $User -> count();
		$Page       = new \Think\Page($count, 8);
		if ($count > 8)
		{
			$Page -> setConfig('prev','<img src="/Public/Home/images/prev.png" alt="">');
			$Page -> setConfig('next','<img src="/Public/Home/images/next.png" alt="">');	
		}
		$list = $User -> order('id desc') -> limit($Page -> firstRow.','.$Page -> listRows) -> select();
		$show       = $Page -> show();
		
		$this->assign('lists', $list);
		$this->assign('page', $show);
		$this->display();
    }
	
	public function article()
	{
		$news = M('News');
		$id = I('get.id');
		$news -> where(array('id' => $id)) -> setInc('click', 1);
		$data = $news -> where(array('id' => $id)) -> find();
		$this -> assign('data', $data);
		
		/* 上一页和下一页 */
		$arti = M('News');
		//小于
		$where['id'] = array('lt', $id);
		
		//大于
		$where1['id'] = array('gt', $id);
		
		$prev = $arti -> where($where) -> order('id desc') -> find();//上一篇
		$next = $arti -> where($where1) -> find();//下一篇
		// echo '<pre>';
		// var_dump($prev, $next);exit;
		$this -> assign('prev', $prev);
		$this -> assign('next', $next);
		
		$this -> display();
	}
}