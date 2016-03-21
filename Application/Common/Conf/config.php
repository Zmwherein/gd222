<?php
return array(
	//'配置项'=>'配置值'
	
	/* 数据库链接 */
	'DB_TYPE'           => 'mysql',
	'DB_HOST'           => '127.0.0.1',
	'DB_NAME'           => 'gd222',
	'DB_USER'       	=> 'root',
	'DB_PWD'       		=> 'root',
	'DB_PORT'           => '3306',
	'DB_PREFIX'         => 'gd_',
	'DB_CHARSET'        => 'UTF8',
	'DB_DEBUG'          => TRUE, //开启调试模式
	
	'URL_MODEL'         => 2,
	'LOG_RECORD'        => TRUE, //开启日志记录
	// 'SHOW_PAGE_TRACE'   => TRUE, //显示页面Trace信息  以后会隐
	
	'TOKEN_ON'    => true,  // 是否开启令牌验证
	'TOKEN_NAME'  => '__hash__',    // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE'  => 'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET' => true,  //令牌验证出错后是否重置令牌 默认为true
);