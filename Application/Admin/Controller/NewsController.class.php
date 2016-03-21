<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends CommonController {
    public function index()
	{
		$this -> pub_page('News', 8, '');
		$this -> display();
    }
	
	
	public function add()
	{
		$mod = M('News');
		if (IS_POST)
		{
			$data = I('post.');
			if ($_FILES['pic']['name'])
			{
				$config = array(
					'maxSize'    =>    3145728,
					'rootPath'   =>    './Public/images/',
					'savePath'   =>    '',
					'saveName'   =>    'time',
					'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub'    =>    true,
					'subName'    =>    array('date','Ymd'),
				);
				$upload = new \Think\Upload($config);// 实例化上传类
				$info   =   $upload -> upload();
				if (!$info)
				{
					$this->error($upload->getError());
				}
				else
				{
					$data['pic'] = '/Public/images/'.$info['pic']['savepath'].$info['pic']['savename'];
				}
			}
			else
			{
				$this -> error('非法操作');
			}
			
			if (M('News') -> add($data))
			{
				$this -> success('添加成功', __MODULE__.'/News/index');
			}
			else
			{
				$this -> error('失败');
			}
		}
		else
		{
			$this -> display();
		}
	}
	
	public function edit()
	{
		$id = I('get.id');
		if (IS_POST)
		{
			$data = I('post.');
			if ($_FILES['pic']['name'])
			{
				$config = array(
					'maxSize'    =>    3145728,
					'rootPath'   =>    './Public/images/',
					'savePath'   =>    '',
					'saveName'   =>    'time',
					'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
					'autoSub'    =>    true,
					'subName'    =>    array('date','Ymd'),
				);
				$upload = new \Think\Upload($config);// 实例化上传类
				$info   =   $upload -> upload();
				if ( ! $info)
				{
					$this->error($upload->getError());
				}
				else
				{
					$data['pic'] = '/Public/images/'.$info['pic']['savepath'].$info['pic']['savename'];
				}
			}
				
			if (M('News') -> where(array('id' => $id)) -> save($data))
			{
				$this -> success('修改成功', __MODULE__.'/News/index');
			}
			else
			{
				$this -> error('修改失败');
			}
		}
		else
		{
			$data = M('News') -> where(array('id' => $id)) -> find();
			
			$this -> assign('data', $data);
			$this -> display();
		}
	}
	
	public function del()
	{
		$id = I('get.id');
		$this -> pub_del('News', $id);
	}
}