<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller
{
	public function _initialize()
	{
		$list = M('Nav') -> select();
		$this -> assign('nav', $list);
		
		$company = M('Company') -> field('title, keywords, description, copy, beian') -> find();
		
		C('WEB_TITLE', $company['title']);
		C('WEB_KEY', $company['keywords']);
		C('WEB_DES', $company['description']);
		
		$this -> assign('company', $company);
	}
}