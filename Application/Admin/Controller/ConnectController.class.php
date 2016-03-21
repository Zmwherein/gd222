<?php
namespace Admin\Controller;
use Think\Controller;
class ConnectController extends CommonController {
    public function index()
	{
		$this -> pub_page('Message', 8, array('is_web' => '0'));
		$this -> display();
    }
	
	public function del()
	{
		$id = I('get.id');
		$this -> pub_del('Message', $id);
	}
}