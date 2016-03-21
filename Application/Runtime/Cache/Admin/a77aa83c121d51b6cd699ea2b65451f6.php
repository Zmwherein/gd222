<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<title>用户管理后台</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <link href="/Public/Admin/css/public.css" rel="stylesheet">
		<link href="/Public/Admin/css/agent-update.css" rel="stylesheet">

	    <script type="text/javascript" src="/Public/Admin/js/jquery-1.7.1.min.js"></script>
    </head>
	
    <body>
    	<div class="header">
            <div class="header_left">用户管理后台</div>
            <div class="hearder_right">
                <img src="/Public/Admin/images/nick-pic.jpg" alt="" class="nick_pic">
                <div class="operate">
                    <h3><?php echo (decode(cookie('user_auth'))); ?></h3>
                    <span>
                        <a href="/index.php/Admin/Index/change_pwd">修改密码</a>
                        <a href="/index.php/Admin/Login/loginout">注销</a>
                    </span>
                </div>
            </div>
        </div>
        <div class="contain">
            <div class="con_right">
                <div class="con_body">

                    <div class="con_list">
                        <div class="con_top">菜单管理</div>
                        <div class="con_form">
                            <form action="/index.php/Admin/Menu/edit/id/<?php echo ($data["id"]); ?>" method="post" id="chong_form" onsubmit="return chong_check();">
                                <table>
                                    <tr>
                                        <td>菜单标题：</td>
                                        <td><input type="text" name="title" value="<?php echo ($data["title"]); ?>" placeholder="请输入菜单标题"   /></td>
                                    </tr>
									<?php if($data["rid"] != 0): ?><tr>
                                        <td>链接地址：</td>
                                        <td><input type="text"  name="url" value="<?php echo ($data["url"]); ?>"  /></td>
                                    </tr><?php endif; ?>
                                    <tr>
                                        <td>所属上级：</td>
                                        <td>
											<select name="rid" id="rid" value="<?php echo ($data["rid"]); ?>">
											<?php if($data["rid"] != 0): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $data["rid"]): ?>selected<?php endif; ?> ><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											<?php else: ?>
												<option value="0" >顶级菜单</option><?php endif; ?>
                                            </select>
										</td>
                                    </tr>
                                </table>
                                <input type="submit" value="保存" class="chong_sub"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<div class="con_left">
	<a href="/index.php/Admin" class="home">首页
		<span class="agent"></span>
	</a>
	<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="navy">
		<li>
			<a href="javascript:void(0);" class="top_nav"><?php echo ($vo["title"]); ?></a></a>
			<?php if(is_array($menu["next"])): $i = 0; $__LIST__ = $menu["next"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if($vol["rid"] == $vo['id']): ?><ul class="sec_nav">
				<li class="active"><a href="<?php echo ($vol["url"]); ?>"><?php echo ($vol["title"]); ?><img src="/Public/Admin/images/lan1.png" alt=""/></a></li>
			</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</li>
	</ul><?php endforeach; endif; else: echo "" ;endif; ?>
	
</div>


        </div>

        <script>
        $(function(){
            $('ul.navy').eq(0).find('ul.sec_nav').slideDown();
            // 
            $('#key').focus(function(){
                if($(this).val() == '请输入文档名称、备注'){
                    $(this).attr('value','');
                }
            });
            $('#key').blur(function(){
                if($(this).val() == '' || $(this).val() == '请输入文档名称、备注'){
                    $(this).attr('value','请输入文档名称、备注');
                }
            });
        });
        $('a.top_nav').click(function(){
            $(this).parent().find('ul').slideToggle();
        });
        // 
        function check_search(){
            var val = $('#key').val();
            if(val == '' || val == '请输入文档名称、备注'){
                alert('搜索内容不能为空');
                return false;
            }else{
                $('#search_form').submit();
            }
        }
        // 
        function chong_check(){
            var amount = $('#amount').val().trim();
            if(amount == ''){
                $('#tip1').html('充值金额不能为空');
                return false;
            }else if(isNaN(amount) || amount <= 0 || amount.substr(0,1) == 0){
                $('#tip1').html('请正确填写充值金额');
                return false;
            }else{
                $('#chong_form').submit();
            }

        }
        </script>
    </body>
</html>