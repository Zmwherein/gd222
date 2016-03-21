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
		<link href="/Public/Home/css/about.css" rel="stylesheet" type="text/css">
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
			<div class="con">
				&nbsp;&nbsp;&nbsp;广东二二二科技有限公司（以下简称:“二二二"），注册资金1000万元，是一家专注于提供中小企业互联网服务的创新公司。公司致力于通过互联网提升中小企业信息化水平，促进中小企业迅速成长。</br>
				&nbsp;&nbsp;&nbsp;“二二二”的意义：
				&nbsp;&nbsp;&nbsp;电子商务模式是指企业运用互联网开展经营取得营业收入的基本方式，也就是指在网络环境中基于一定技术基础的商务运作方式和盈利模式。目前，常见的电子商务模式主要有B2B、B2C、C2B、C2C、O2O等几种。以上所有的模式都有“2”，那么这个“2”是什么意思呢？英文为“to”，我们中文理解为“和、与、对”，我们公司以222为名称，意义在于，不管你是B还是C或者O，中间都需要这个“2”来连接，才能形成完整的电商模式，我们的服务就是起纽带作用，帮助B（商家、企业）、C（客户、个人）、O（线上、线下）紧密的联合在一起。我们专注与研究电脑端、移动端、手机端的各种软件及渠道，通过电商平台、微信平台、搜索平台、支付平台，打造商家和企业乃至个人的全方面各渠道的营销，实现品牌推广、销售业绩提升，最终实现你我之间的共赢。</br>
				&nbsp;&nbsp;&nbsp;主营业务：
				&nbsp;&nbsp;&nbsp;主要业务有：域名注册,空间租用,企业邮箱,网页设计,网站建设,网站改版,网站开发,政府网站,医疗网站,门户网站,全动画网站,360度全景制作,微信公众号功能开发,手机APP开发,软件开发,电子杂志等业务，面向政府机构、企事业单位和广大个人用户提供Internet服务和增值服务。凭借优秀的人才及经验实力，二二二科技在行业与客户中取得了很高声誉。</br>
				&nbsp;&nbsp;&nbsp;二二二科技作为在INTERNET域名注册、虚拟主机、服务器托管、网络推广营销、软件程序开发等一系列电子商务平台建设服务的业务网站，以最优质的服务和高性能的产品推荐给广大客户。</br>
				&nbsp;&nbsp;&nbsp;二二二科技秉承客户至上、服务至上的经营理念，以卓越的网络服务品质、专业的技术服务实力、以稳固与发展、求实与创新的精神，尊重人才、注重技术，为推动中国信息产业的共同发展。</br>
				&nbsp;&nbsp;&nbsp;二二二旗下的微信APP微网站建设服务（http://www.N168.com）是一款面向商业用户的建站产品，微网站建设秉二二二的技术优势和设计风格，同时为每一个企业用户提供独立的产品销售展示平台，以投入低、收益高、见效快的特点，迅速成为互联网创业的最佳选择。</br>
				&nbsp;&nbsp;&nbsp;二二二旗下的N168微信程序(http://www.N168.cn)通过提供全套源码程序服务，为代理商独立建立自己的微信APP建设平台，自主招商，低成本高效率的服务，已迅速发展成为国内知名的微信APP建设品牌。</br>
				&nbsp;&nbsp;&nbsp;我们的理念 ——  专业专注.用心服务.不求第一.但求最好!</br>
				&nbsp;&nbsp;&nbsp;热线电话：4008168332    企业QQ:4008168332</br>
				地址：广州市白云区北太路1633号民营科技园白云火炬大厦18楼
			</div>
			<div class="info">
				<section>
					<img src="/Public/Home/images/a1.png" alt="">
					营业执照
				</section>
				<section>
					<img src="/Public/Home/images/a2.png" alt="">
					企业信息
				</section>
				<section>
					<img src="/Public/Home/images/a3.png" alt="">
					备案信息
				</section>
				<a href="#">
					<img src="/Public/Home/images/a4.png" alt="">
					公司视频
				</a>
			</div>
			<!-- pic -->
			<div class="pic">
				<div class="show-pic">
					<img src="/Public/Home/images/zhizhao.jpg" alt="营业执照">
					<img src="/Public/Home/images/qiye.jpg" alt="营业执照">
					<img src="/Public/Home/images/beian.jpg" alt="营业执照">
				</div>
			</div>

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
		$('.show-pic').on('click',function(){
			$('.pic').css('display','none');
		});
		$('.info section').on('click',function(){
			var index = $(this).index();
			$('.pic').css('display','block');
			$('.show-pic').find('img').eq(index).css('display','block').siblings().css('display','none');
		})
		// public
		$('a.menu').on('click',function(){
			$('ul.sec-bar').slideToggle();
		})
		</script>
	</body>
</html>