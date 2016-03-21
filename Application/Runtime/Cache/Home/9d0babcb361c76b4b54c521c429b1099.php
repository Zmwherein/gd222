<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>gd222-联系我们</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link href="/Public/Home/css/public.css" rel="stylesheet" type="text/css">
		<link href="/Public/Home/css/connect.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
	</head>
	<body>
		<!-- header start-->
		<header class="pc-head">
	<div><img src="/Public/Home/images/logo1.png" alt=""></div>
	<ul>
		<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($na["url"]); ?>"><?php echo ($na["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<section class="copy"><?php echo ($company["copy"]); ?></section>
</header>
<header class="wap-head">
	<img src="/Public/Home/images/logo2.png" alt="" class="logo2">
	<a href="javascript:;" class="menu"><img src="/Public/Home/images/hunger.png" alt=""></a>
</header>
<ul class="sec-bar">
	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$na): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($na["url"]); ?>"><?php echo ($na["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>
<div class="cai"></div>


		<!-- header end-->
		<div class="kong"></div>
		<div class="box">
			<div class="left">
				<h4 class="title">联系方式</h4>
				<p>
					+Add: <?php echo (htmlspecialchars_decode($comp["address"])); ?> <br/>
					+Email: <?php echo ($comp["email"]); ?><br/>
					+Tel: <?php echo ($comp["tel"]); ?><br/>
					+Site: <?php echo ($comp["site"]); ?><br/>
					+Mob: <?php echo ($comp["mob"]); ?><br/><br/>

					如何到达<br/>
					<?php echo ($comp["arrive"]); ?>
				</p>
			</div>
			<form action="/index.php/Home/contact/index" method="post" onsubmit="return check();" id="connect-form">
				<div class="right">
					<h4 class="title">填写表单与我们联系</h4>
					<section class="name">
						<input type="text" name="name" placeholder="姓&nbsp;&nbsp;名" id="name">
					</section>
					<section class="email">
						<input type="text" name="email" placeholder="电子邮箱" id="email">
					</section>
					<section class="tel">
						<input type="text" name="tel" placeholder="联系电话" id="tel">
					</section>
					<div class="text">
						<textarea name="message"></textarea>
					</div>
					<input type="hidden" name="is_web" value="0"/>
					<button>提交</button>
				</div>
			</form>
		</div>
		
		<!-- fixed -->
		<div class="fix">
	<a href="#" class="fix-news">
		<span class="fix-news-t">新闻链接</span>
	</a>
	<a href="#" class="fix-addr">
		<span class="fix-addr-t">公司地址</span>
	</a>
	<a href="#" class="fix-qq">
		<span class="fix-qq-t">QQ客服</span>
	</a>
	<a href="#" class="fix-sina">
		<span class="fix-sina-t">新浪微博</span>
	</a>
</div>

		<!-- footer start -->
		<footer class="foot">
	<div class="foo-left"><?php echo ($company["beian"]); ?></div>
	<div class="foo-right">
		<span>分享：</span>
		<div class="bdsharebuttonbox">
			<a href="#" class="bds_tsina sina" data-cmd="tsina" title="分享到新浪微博" style="width:17px;height:34px;background:url(/Public/Home/images/sina.png) no-repeat;">
			</a>
			<a href="#" class="bds_sqq qq" data-cmd="sqq" title="分享到QQ好友" style="width:17px;height:34px;background:url(/Public/Home/images/qq.png) no-repeat;"></a>
			<a href="#" class="bds_tqq tqq" data-cmd="tqq" title="分享到腾讯微博" style="width:17px;height:34px;background:url(/Public/Home/images/tencen.png) no-repeat;"></a>
			<a href="#" class="bds_weixin weichat" data-cmd="weixin" title="分享到微信" style="width:17px;height:34px;background:url(/Public/Home/images/weichat.png) no-repeat;"></a>
		</div>
	</div>
</footer>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["tsina","sqq","tqq","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		<!-- footer end -->
		<script>
		function check(){
			var name = $('#name').val().trim(),
				email = $('#email').val().trim(),
				tel = $('#tel').val().trim(),
				tel_re = /^1\d{10}$/,
				name_reg = /^[a-zA-Z\u4e00-\u9fa5]{1,}$/,
				email_reg = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/;
			if(name == '' || !name_reg.test(name)){
				alert('请正确填写姓名');
				return false;
			}else if(email == '' || !email_reg.test(email)){
				alert('请正确填写邮箱');
				return false;
			}else if(tel == '' || !tel_re.test(tel)){
				alert('请正确填写手机号码');
				return false;
			}else
			$('#connect-form').submit();
		}
		// public
		$('a.menu').on('click',function(){
			$('ul.sec-bar').slideToggle();
		})
		</script>
	</body>
</html>