<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<title>用户管理后台</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <link href="/gd222/Public/Admin/css/public.css" rel="stylesheet">
	    <link href="/gd222/Public/Admin/css/list.css" rel="stylesheet">

	    <script type="text/javascript" src="/gd222/Public/Admin/js/jquery-1.7.1.min.js"></script>
    </head>
    <body>
    	<div class="header">
            <div class="header_left">用户管理后台</div>
            <div class="hearder_right">
                <img src="/gd222/Public/Admin/images/nick-pic.jpg" alt="" class="nick_pic">
                <div class="operate">
                    <h3><?php echo (decode(cookie('user_auth'))); ?></h3>
                    <span>
                        <a href="/gd222/Admin/Index/change_pwd">修改密码</a>
                        <a href="/gd222/Admin/Login/loginout">注销</a>
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
                            <div class="con_form_body">
                                <div class="operation">
                                    <div class="blo_right">
										<?php if($lis == ''): ?><a href="/gd222/Admin/Menu/add">新增</a>
										<?php else: ?>
                                        <a href="/gd222/Admin/Menu/add/next/yes">新增子类</a><?php endif; ?>
                                    </div>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td width="10%">ID</td>
											<?php if($lis == ''): ?><td width="9%"><a href="#" id="ssort">排序</a></td><?php endif; ?>
                                            <td>顶级菜单</td>
                                            <td>操作</td>
                                        </tr>
                                    </thead> 
                                    <tbody>             
									<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                            <td><?php echo ($vo["id"]); ?></td>
											<?php if($lis == ''): ?><td><input type="text" name="<?php echo ($vo["id"]); ?>" value="<?php echo ($vo["sort"]); ?>" style="width:30px;" class="so"/></td><?php endif; ?>
                                            <td>
											<?php if($lis == ''): ?><a href="/gd222/Admin/Menu/lists/id/<?php echo ($vo["id"]); ?>" style="color:#000; text-decoration:none;"><?php echo ($vo["title"]); ?></a></td>
											<?php else: ?>
											<?php echo ($vo["title"]); endif; ?>
                                            <td>
                                                <a href="/gd222/Admin/Menu/edit/id/<?php echo ($vo["id"]); ?>" class="op1">编辑</a>
												<?php if($vo["id"] == '1'): else: ?>
                                                <a href="/gd222/Admin/Menu/del/id/<?php echo ($vo["id"]); ?>" class="op1">删除</a><?php endif; ?>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- 分页 -->
                            <div class="page">
                                <div class="page_box" >
                                    <?php echo ($page); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<div class="con_left">
	<a href="/gd222/Admin" class="home">首页
		<span class="agent"></span>
	</a>
	<?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul class="navy">
		<li>
			<a href="javascript:void(0);" class="top_nav"><?php echo ($vo["title"]); ?></a></a>
			<?php if(is_array($menu["next"])): $i = 0; $__LIST__ = $menu["next"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i; if($vol["rid"] == $vo['id']): ?><ul class="sec_nav">
				<li class="active"><a href="<?php echo ($vol["url"]); ?>"><?php echo ($vol["title"]); ?><img src="/gd222/Public/Admin/images/lan1.png" alt=""/></a></li>
			</ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</li>
	</ul><?php endforeach; endif; else: echo "" ;endif; ?>
	
</div>

        </div>

		<script type="text/javascript">
			$('#ssort').click(function(){
				var json = {};
				$('.so').each(function(){
					json[$(this).attr('name')] = $(this).val();
				});
				
				
				var data = {'json':json};				
				$.ajax({
					url: "<?php echo U('Menu/sortBtn');?>",
					type: 'post',
					dataType: 'json',
					data: data,
					success: function(data)
					{
						alert(data.info);
						
					},
				});
			});
		</script>
			
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
            // 单数样式
            $('tr:even td').css('background-color','#f8f8f8');
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
        $('.orther_chec').click(function(){
            if($(this).hasClass('true')){
                $(this).removeClass('true');
                $(this).find('input[type="checkbox"]').attr('checked',false);
            }else{
                $(this).addClass('true');
                $(this).find('input[type="checkbox"]').attr('checked',true);
            }
            
        });
        // 
        $('.all_check').click(function(){
            if($(this).hasClass('true')){
                $(this).removeClass('true');
                $('.orther_chec').removeClass('true');
                $('.orther_chec').find('input[type="checkbox"]').attr('checked',false);
            }else{
                $(this).addClass('true');
                $('.orther_chec').addClass('true');
                $('.orther_chec').find('input[type="checkbox"]').attr('checked',true);
            }
        });
        // 页面跳转
        $('span.go a').click(function(){
            var page = $('#goto').val().trim();
            if(page == ''){
                alert('请输入页码');
            }else if(isNaN(page) || page <= 0 || page.substr(0,1) == 0){
                alert('请正确输入页码格式');
            }else
            $('#page_form').submit();
        })
        </script>
    </body>
</html>