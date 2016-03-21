<?php
namespace Admin\Controller;
use Think\Controller;
class webBuildController extends CommonController {
    public function index()
	{
		$this -> pub_page('Message', 8, array('is_web' => 1));
		$this -> display();
    }
	
	public function del()
	{
		$id = I('get.id');
		$this -> pub_del('Message', $id);
	}
}