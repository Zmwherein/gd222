<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>

<link href="/gd222/Public/Admin/css/login.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="wrap">
	<div id="header"> </div>
    <div id="content-wrap">
      <div class="space"> </div>
   	  <form action="/gd222/Admin/Login/login" method="post" id="form1">
		<div class="content">
			<div class="field"><label>账　户：</label><input class="name" name="name" type="text" /></div>
			<div class="field"><label>密　码：</label><input class="password" name="password" type="password" /><br /></div>
			<div class="field"><label>验证码：</label><input class="password" name="verify" type="text" /><br /></div>
			<img src="/gd222/Admin/Verify/verify" onclick="this.src=this.src+'?'+Math.random()" width="70%" height="10%" />
			
			<div class="btn"><input name="" type="submit" class="login-btn" value="" /></div>
        </div>
	  </form>
    </div>
    <div id="footer"> </div>
</div>

</body>
</html>