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
		<link href="/Public/Home/css/yingjian.css" rel="stylesheet" type="text/css">
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
		<div class="contain">
			<nav class="lan">
				<span class="active">微wifi</span>
				<span>微打印</span>
				<span>微小票</span>
			</nav>
			<section  class="tab">
				<article class="con">
					<h3>微信加粉  WIFI登录</h3>
					吸引到店客户成为您的微信粉丝并提供上网验证码</br></br></br>
					<h3>品牌展示  营销升级</h3>
					WIFI登录后，您可以提供企业品牌展示促销活动等营销信息</br></br></br>
					<h3>24小时免费广告轮播</h3>
					WIFI广告页展示店铺优惠信息及活动，与顾客形成良好互动向顾客提供免费WIFI减少排队顾客流失，提升二次消费</br></br></br>
				</article>
				<div class="pic"><img src="/Public/Home/images/w1.png" alt=""></div>
			</section>
			<section  class="tab">
				<div class="left"><img src="/Public/Home/images/w2.png" alt=""></div>
				<div class="right">
					<p>1、绝不仅仅只是微笑打印广告机，还是最强的品牌营销神器</p>
					<span>
						接口全面开放、性能更强、体验更佳、打印更快、美感更好。
					</span></br>
					<span>
						但有做到外观精致，重量更轻。</br>
					</span>
					<span>
						它是如此的精巧，功能却又如此的强大。
					</span>
					</br></br>
					<p>2、4大盈利模式 超高收益分成</p>
					<span>
						V2的照片都没有自定义广告专区，创新盈利，广告不再惹人烦。
					</span></br>
					<span>
						超清平面广告专区，21寸广告屏幕可完美实现多款平面、视频广告轮播活动创收通过活动策划为商家实现品牌传播同时获得相应收益售卖租赁创造收益无论是整机售卖还是租赁都创造极大的收益。
					</span>
				</div>
			</section>
			<section class="tab">
				<h3>无需用墨无需网络，热敏打印，内置SIM卡小巧方便</h3>
				<span class="state">为餐饮企业耀世而生，商家收到客户下单信息后，打印机可自动打印订单信息，还可以根据需要在后台设置1至3联打印，方便实用</span>
				<div class="list-img">
					<span><img src="/Public/Home/images/w3.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w4.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w5.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w6.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w7.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w8.png" alt="">打印条形码</span>
					<span><img src="/Public/Home/images/w9.png" alt="">打印条形码</span>
				</div>
				<span class="fontw">微小票打印机三大核心价值</span>
				<div class="three">
					<span>
						<h1>省人</h1>
						不用再花钱</br>
						招人记单
					</span>
					<span>
						<h1>智能</h1>
						上一秒下单</br>
						下一秒出票
					</span>
					<span>
						<h1>准确</h1>
						再也不用担心</br>
						错记，漏记
					</span>
				</div>
			</section>
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
		var tap = 'createTouch' in document ? 'tap' : 'click';
		$(function(){
			$('.box').addClass('big-run');
			$('.box a').addClass('small-run');
			$('.box img').addClass('small-run');
			// 
			$('section.tab').eq(0).css('display','block');
		});
		// 
		$('nav.lan span').on(tap,function(){
			$(this).addClass('active').siblings().removeClass('active');
			var i = $(this).index();
			$('section.tab').css('display','none').eq(i).css('display','block');
		});
		 // public
		$('a.menu').on('click',function(){
		    $('ul.sec-bar').slideToggle();
		})
		</script>
	</body>
</html>