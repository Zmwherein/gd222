<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo C('WEB_TITLE');?></title>
		<meta name="keywords" content="<?php echo C('WEB_KEY');?>" />
		<meta name="description" content="<?php echo C('WEB_DES');?>" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes"/>
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link href="/Public/Home/css/public.css" rel="stylesheet" type="text/css">
		<link href="/Public/Home/css/news-list.css" rel="stylesheet" type="text/css">
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
		<ul class="box">
			<?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lis): $mod = ($i % 2 );++$i;?><li>
				<div class="con">
					<a href="/index.php/Home/News/article/id/<?php echo ($lis["id"]); ?>"><img src="<?php echo ($lis["pic"]); ?>" alt=""></a>
					<section><?php echo ($lis["title"]); ?></section>
					<p><?php echo ($lis["intro"]); ?></p>
				</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="page">
			<?php echo ($page); ?>
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
		$('a.menu').on('click',function(){
			$('ul.sec-bar').slideToggle();
		})
		</script>
	</body>
</html>