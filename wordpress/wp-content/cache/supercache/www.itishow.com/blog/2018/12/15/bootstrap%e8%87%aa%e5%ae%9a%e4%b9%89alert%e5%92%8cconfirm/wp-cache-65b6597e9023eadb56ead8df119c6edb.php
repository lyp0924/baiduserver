<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="keywords" content="alert,bootstrap,confirm,modal" />
	<script>
		(function(){
			var bp = document.createElement('script');
			var curProtocol = window.location.protocol.split(':')[0];
			if (curProtocol === 'https') {
				bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
			}
			else {
				bp.src = 'http://push.zhanzhang.baidu.com/push.js';
			}
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(bp, s);
		})();
	</script>
		
		<link rel="pingback" href="https://www.itishow.com/xmlrpc.php">
	
	<title>bootstrap自定义alert和confirm &#8211; 易水寒</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; Feed" href="https://www.itishow.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; 评论Feed" href="https://www.itishow.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; bootstrap自定义alert和confirm评论Feed" href="https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.itishow.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.1"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='wp-block-library-css'  href='https://www.itishow.com/wp-includes/css/dist/block-library/style.min.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.itishow.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1' type='text/css' media='all' />
<link rel='stylesheet' id='theme-my-login-css'  href='https://www.itishow.com/wp-content/plugins/theme-my-login/assets/styles/theme-my-login.min.css?ver=7.0.11' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/bootstrap.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='spicepress-style-css'  href='https://www.itishow.com/wp-content/themes/chilly/style.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='default-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/default.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='spicepress-theme-menu-css-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/theme-menu.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='animate.min-css-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/animate.min.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/font-awesome/css/font-awesome.min.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='spicepress-media-responsive-css-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/media-responsive.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css-css'  href='https://www.itishow.com/wp-content/themes/spicepress/css/owl.carousel.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='spicepress-fonts-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C800%7CDosis%3A200%2C300%2C400%2C500%2C600%2C700%2C800%7Citalic%7CCourgette&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='chilly-parent-style-css'  href='https://www.itishow.com/wp-content/themes/spicepress/style.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='default-style-css-css'  href='https://www.itishow.com/wp-content/themes/chilly/css/default.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='theme-menu-style-css'  href='https://www.itishow.com/wp-content/themes/chilly/css/theme-menu.css?ver=5.0.1' type='text/css' media='all' />
<link rel='stylesheet' id='media-responsive-css-css'  href='https://www.itishow.com/wp-content/themes/chilly/css/media-responsive.css?ver=5.0.1' type='text/css' media='all' />
<script type='text/javascript' src='https://www.itishow.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var themeMyLogin = {"action":"","errors":[]};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/plugins/theme-my-login/assets/scripts/theme-my-login.min.js?ver=7.0.11'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/themes/spicepress/js/bootstrap.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/themes/spicepress/js/menu/menu.js?ver=5.0.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/themes/spicepress/js/page-scroll.js?ver=5.0.1'></script>
<link rel='https://api.w.org/' href='https://www.itishow.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.itishow.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.itishow.com/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='ThinkPHP：Route中get提交参数的定义及获取' href='https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/' />
<link rel='next' title='Bootstrap模态框（modal）中按钮点击多次提交的问题（bug）解决。' href='https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/' />
<meta name="generator" content="WordPress 5.0.1" />
<link rel="canonical" href="https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/" />
<link rel='shortlink' href='https://www.itishow.com/?p=161' />
<link rel="alternate" type="application/json+oembed" href="https://www.itishow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.itishow.com%2Fblog%2F2018%2F12%2F15%2Fbootstrap%25e8%2587%25aa%25e5%25ae%259a%25e4%25b9%2589alert%25e5%2592%258cconfirm%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.itishow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.itishow.com%2Fblog%2F2018%2F12%2F15%2Fbootstrap%25e8%2587%25aa%25e5%25ae%259a%25e4%25b9%2589alert%25e5%2592%258cconfirm%2F&#038;format=xml" />
<link rel="icon" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" sizes="32x32" />
<link rel="icon" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" />
<meta name="msapplication-TileImage" content="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" />
</head>
<body class="post-template-default single single-post postid-161 single-format-standard wp-custom-logo" >
<div id="wrapper">

<!--Logo & Menu Section-->	
<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a href="https://www.itishow.com/" class="navbar-brand" rel="home" itemprop="url"><img width="210" height="47" src="https://www.itishow.com/wp-content/uploads/2018/12/cropped-logo-1-1-1.png" class="custom-logo" alt="易水寒" itemprop="logo" /></a>            			<div class="site-branding-text">
				<h1 class="site-title"><a href="https://www.itishow.com/" rel="home">易水寒</a></h1>
									<p class="site-description">风萧萧兮易水寒，壮士一去兮不复还！</p>
							</div>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">切换导航</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div id="navbar" class="collapse navbar-collapse in">
					<ul id="menu-%e9%a6%96%e9%a1%b5" class="nav navbar-nav navbar-right"><li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-47"><a href="https://www.itishow.com">首页</a></li>
<li id="menu-item-112" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-112"><a href="https://www.itishow.com/blog/category/bs/">Bootstrap</a></li>
<li id="menu-item-115" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115"><a href="https://www.itishow.com/blog/category/tp/">ThinkPHP</a></li>
<li id="menu-item-113" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a href="https://www.itishow.com/blog/category/suibi/">随笔</a></li>
<li id="menu-item-108" class="menu-item menu-item-type-tml_action menu-item-object-login menu-item-108"><a href="https://www.itishow.com/login/">登录</a></li>
</ul>				
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>	
<!--/Logo & Menu Section-->	

<div class="clearfix"></div>		<!-- Page Title Section -->
		<section class="page-title-section">		
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
						   <div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>bootstrap自定义alert和confirm</h1></div>						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="page-breadcrumb wow bounceInRight animated" ata-wow-delay="0.4s"><li><a href="https://www.itishow.com">首页</a></li><li class="active"><a href="https://www.itishow.com/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/">bootstrap自定义alert和confirm</a></li></ul>						</div>
					</div>
				</div>	
			</div>
		</section>
		<div class="page-seperate"></div>
		<!-- /Page Title Section -->

		<div class="clearfix"></div>
	<!-- Blog & Sidebar Section -->
<section class="blog-section">
	<div class="container">
		<div class="row">	
			<!--Blog Section-->
			<div class="col-md-8 col-xs-12">
									<article class="post" class="post-content-area wow fadeInDown animated post-161 post type-post status-publish format-standard hentry category-bs tag-alert tag-bootstrap tag-confirm tag-modal" data-wow-delay="0.4s">				
						<div class="entry-meta">
		<span class="entry-date">
			<a href="https://www.itishow.com/blog/2018/12/"><time datetime="">12月 15, 2018</time></a>
		</span>
	</div>
					<header class="entry-header">
						<h3 class="entry-title">bootstrap自定义alert和confirm</h3><div class="entry-meta">
	<span class="author">作者 <a rel="tag" href="https://www.itishow.com/blog/author/admin/">刺秦</a>
	
	</span>
		<span class="cat-links">在<a href="https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/"><a href="https://www.itishow.com/blog/category/bs/" rel="category tag">Bootstrap</a></a></span>
					<span class="tag-links">标签 <a href="https://www.itishow.com/blog/tag/alert/" rel="tag">alert</a>, <a href="https://www.itishow.com/blog/tag/bootstrap/" rel="tag">bootstrap</a>, <a href="https://www.itishow.com/blog/tag/confirm/" rel="tag">confirm</a>, <a href="https://www.itishow.com/blog/tag/modal/" rel="tag">modal</a></span>
				
</div>	 
					</header>				
										<div class="entry-content">
					
<p>帮朋友用thinkphp做一个小系统，使用的前端框架是bootstrap，但是js自带的alert和confirm和bootstrap的风格十分不搭，便想直接使用bootstrap重写一下，当然不能保证是最合理的，但是也达到了预期效果。</p>



<p>首先创建模态框：</p>



<pre class="wp-block-code"><code>&lt;div class="modal" tabindex="-1" role="dialog" id="confirm">
    &lt;div class="modal-dialog" style="width: 25vw;" role="document">
        &lt;div class="modal-content" style="border-radius: 5px;">
            &lt;div class="modal-header">
                &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                &lt;/button>
                &lt;b class="modal-title">提示&lt;/b>
            &lt;/div>
            &lt;div class="modal-body" style="min-height:8em;">
                &lt;p>&lt;b id="confirmtext">&lt;/b>&lt;/p>
            &lt;/div>
            &lt;div class="modal-footer" style="padding: 10px;">
                &lt;button type="button" class="btn btn-primary" id="ok" style="border-radius: 5px;">确定&lt;/button>
                &lt;button type="button" class="btn btn-secondary" data-dismiss="modal" id="no" style="border-radius: 5px;">取消&lt;/button>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div>

&lt;div class="modal" role="dialog" id="alert">
    &lt;div class="modal-dialog modal-sm">
        &lt;div class="modal-content" style="border-radius: 5px;">
            &lt;div class="modal-header">
                &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×
                &lt;/button>
                &lt;b>提示&lt;/b>
            &lt;/div>
            &lt;div class="modal-body">
                &lt;p>&lt;b id="alerttext">&lt;/b>&lt;/p>
                &lt;p style="float: right;font-size: 14px;color: red;">
                    (&lt;span id="stime">&lt;/span>秒后自动关闭)
                &lt;/p>
            &lt;/div>
            &lt;div class="modal-footer">
                &lt;button class="btn btn-info" data-dismiss="modal" style="border-radius: 5px;">关闭&lt;/button>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>



<p>这里说明两点：</p>



<ol><li>模态框alert一定要在confirm之后，否则在同时弹出的时候就会发生alert被confirm覆盖的情况。如下图一，其实是有alert弹窗的只不过在confirm之后，正常情况应如图二。</li><li>在alert弹框我加了三秒自动关闭的功能，其实也并不是三秒，实际上稍长一点 ，大家可以跟据自己的需求自助删减。<br></li></ol>



<figure class="wp-block-image"><img src="https://www.itishow.com/wp-content/uploads/2018/12/图片.png" alt="" class="wp-image-162" srcset="https://www.itishow.com/wp-content/uploads/2018/12/图片.png 930w, https://www.itishow.com/wp-content/uploads/2018/12/图片-300x134.png 300w, https://www.itishow.com/wp-content/uploads/2018/12/图片-768x343.png 768w" sizes="(max-width: 930px) 100vw, 930px" /><figcaption>图一</figcaption></figure>



<figure class="wp-block-image"><img src="https://www.itishow.com/wp-content/uploads/2018/12/图片-1.png" alt="" class="wp-image-163" srcset="https://www.itishow.com/wp-content/uploads/2018/12/图片-1.png 824w, https://www.itishow.com/wp-content/uploads/2018/12/图片-1-300x150.png 300w, https://www.itishow.com/wp-content/uploads/2018/12/图片-1-768x384.png 768w" sizes="(max-width: 824px) 100vw, 824px" /><figcaption>图二</figcaption></figure>



<p>接下来是用到的js代码，我这里用的是jquery：</p>



<pre class="wp-block-code"><code>  function alert(stext) {
        var stime = 3;
        $("#stime").text(3);
        $("#alerttext").text(stext);
        $("#alert").modal('show');
        var stimeInterval = setInterval(function () {
            stime--;
            if (stime &lt; 0) {
                $("#alert").modal('hide');
            } else {
                $("#stime").text(stime);
            }
        }, 1200);
        $('#alert').on('hide.bs.modal', function () {
            clearInterval(stimeInterval);
            $("#stime").text('0');
        })
    }
    var callback;
    function confirm(stext,call) {
        $("#confirmtext").html(stext);
        $("#confirm").modal('show');
        callback = call;
    }
    $("#ok").on('click',function () {
        if (typeof callback === "function"){
            callback();
        }
    });</code></pre>



<p>这里还是要说两点：</p>



<ol><li>confirm点击事件监听一定要放在confirm方法之外，否则会出现多次触发的情况，这也算是bootstrap的一个bug吧。</li><li>与自带confirm不同之处有心的同学应该注意到了，有第二个callback参数，这里面放的便是点击确定要执行的代码了，本来要返回true的，奈何能力有限，最终没有想到很好的实现方法，如果各位读者有欢迎在下方留言交流。</li></ol>



<p>最后就是调用了，alert和js原生的方法并无区别，<em>alert</em>(msg) 即可，confirm便是前面说到的，要多一个回调函数。</p>



<pre class="wp-block-code"><code>confirm("&lt;div class='row'>" +
                        "&lt;div class='col-lg-offset-2 col-lg-10'>" +"确认服务器信息:&lt;div>" +
                        "&lt;div class='col-lg-6 text-right'>服务器地址:&lt;/div>" +
                        "&lt;div class='col-lg-6'>"+$('#provinceDrop').find("option:selected").text()+"&lt;/div>" +
                        "&lt;div class='col-lg-6 text-right'>导入类型:&lt;/div>" +
                        "&lt;div class='col-lg-6'>"+$('#typeDrop').find("option:selected").text()+"&lt;/div>" +
                    "&lt;/div>",function () {
                doSubmit("POST","addpost.html",'serverform');
            });</code></pre>



<p>可以发现confirm中的弹出内容是支持html代码的，然而alert并没有支持，如果你想支持可以自行修改，只需一个小小的改动即可，这里就不言明了。</p>



<p>好了，都说完了，各位跪安吧！</p>
					</div>						
				</article>
					<article class="blog-author wow fadeInDown animated" data-wow-delay="0.4s">
	<div class="media">
		<div class="pull-left">
			<img alt='' src='https://secure.gravatar.com/avatar/009e747f0e52249bb6c79be6f740db98?s=200&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/009e747f0e52249bb6c79be6f740db98?s=400&#038;d=mm&#038;r=g 2x' class='img-responsive img-circle avatar-200 photo' height='200' width='200' />		</div>
		<div class="media-body">
			<h6>刺秦</h6>
			<p>一个PHPer，一直在路上，从未停歇过！</p>
			<ul class="blog-author-social">
			    														   </ul>
		</div>
	</div>	
</article>





<article class="comment-form-section wow fadeInDown animated" data-wow-delay="0.4s">	<div id="respond" class="comment-respond">
		<h3 id="reply-title" class="comment-reply-title"><div class="comment-title"><h3><i class="fa fa-comment-o"></i>发表评论</h3></div> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/#respond" style="display:none;">取消回复</a></small></h3>			<form action="https://www.itishow.com/wp-comments-post.php" method="post" id="commentform" class="form-inline">
				<div class="blog-form-group-textarea"><textarea id="comments" name="comment" placeholder="信息" class="blog-form-control-textarea" rows="5"></textarea></div><div class="blog-form-group"><input type="text" name="author" id="author" placeholder="名称" class="blog-form-control"></div>
<div class="blog-form-group"><input type="text" name="email" id="email" placeholder="电子邮件" class="blog-form-control"></div>
<p class="form-submit"><input name="submit" type="submit" id="blogdetail-btn" class="blogdetail-btn" value="发送信息" /> <input type='hidden' name='comment_post_ID' value='161' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>			</form>
			</div><!-- #respond -->
	</article>			</div>	
			<!--/Blog Section-->
			
<!--Sidebar Section-->

<div class="col-md-4 col-sm-5 col-xs-12">

	<div class="sidebar">
	
		<aside id="search-3" class="widget widget_search wow fadeInDown animated" data-wow-delay="0.4s"><form method="get" id="searchform" class="search-form" action="https://www.itishow.com/">
	
		<label><input type="search" class="search-field" placeholder="搜索" value="" name="s" id="s"/></label>
		<label><input type="submit" class="search-submit" value="搜索"></label>
	
</form></aside><aside id="authorbox_widget-2" class="widget widget_authorbox_widget wow fadeInDown animated" data-wow-delay="0.4s"><div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">关于作者</h3></div>        <div class="row" style="padding: 20px 0 20px;">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="border-bottom: 1px #8d96a0 solid;padding-bottom: 20px;">
                <div>
                    <img alt='' src='https://secure.gravatar.com/avatar/009e747f0e52249bb6c79be6f740db98?s=96&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/009e747f0e52249bb6c79be6f740db98?s=192&#038;d=mm&#038;r=g 2x' class='center-block img-responsive img-circle avatar-96 photo' height='96' width='96' />                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left" style="margin-top: 10px;">
                <div>
                    博主：刺秦                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left">
                <div>
                    邮箱：lyp0924@outlook.com                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-8 col-md-8 col-sm-8 text-left">
                <div>
                    一个PHPer，一直在路上，从未停歇过！                </div>
            </div>
        </div>
        <aside id="authorbox_widget-2" class="widget widget_authorbox_widget wow fadeInDown animated" data-wow-delay="0.4s">		<aside id="recent-posts-3" class="widget widget_recent_entries wow fadeInDown animated" data-wow-delay="0.4s">		<div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">近期文章</h3></div>		<ul>
											<li>
					<a href="https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/">Bootstrap模态框（modal）中按钮点击多次提交的问题（bug）解决。</a>
											<span class="post-date">2018年12月17日</span>
									</li>
											<li>
					<a href="https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/">bootstrap自定义alert和confirm</a>
											<span class="post-date">2018年12月15日</span>
									</li>
											<li>
					<a href="https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/">ThinkPHP：Route中get提交参数的定义及获取</a>
											<span class="post-date">2018年12月13日</span>
									</li>
											<li>
					<a href="https://www.itishow.com/blog/2018/12/12/hello-world/">开博第一篇，立贴为证！</a>
											<span class="post-date">2018年12月12日</span>
									</li>
					</ul>
		</aside><aside id="nav_menu-3" class="widget widget_nav_menu wow fadeInDown animated" data-wow-delay="0.4s"><div class="section-header wow fadeInDown animated" data-wow-delay="0.4s"><h3 class="widget-title">导航</h3></div><div class="menu-%e9%a6%96%e9%a1%b5-container"><ul id="menu-%e9%a6%96%e9%a1%b5-1" class="menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-47"><a href="https://www.itishow.com">首页</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-112"><a href="https://www.itishow.com/blog/category/bs/">Bootstrap</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-115"><a href="https://www.itishow.com/blog/category/tp/">ThinkPHP</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a href="https://www.itishow.com/blog/category/suibi/">随笔</a></li>
<li class="menu-item menu-item-type-tml_action menu-item-object-login menu-item-108"><a href="https://www.itishow.com/login/">登录</a></li>
</ul></div></aside>	
		
	</div>
	
</div>	

<!--Sidebar Section-->

		</div>
	</div>
</section>
<!-- /Blog & Sidebar Section -->
<!-- Footer Section -->
<footer class="site-footer">		
	<div class="container">
		
		   		
		<div class="row footer-sidebar">
						<div class="col-md-4">		
				<aside id="archives-3" class="widget widget_archive wow fadeInDown animated" data-wow-delay="0.4s"><div class="section-header"><h3 class="widget-title">文章归档</h3><span></span></div>		<label class="screen-reader-text" for="archives-dropdown-3">文章归档</label>
		<select id="archives-dropdown-3" name="archive-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'>
			
			<option value="">选择月份</option>
				<option value='https://www.itishow.com/blog/2018/12/'> 2018年十二月 &nbsp;(4)</option>

		</select>
		</aside>			
			</div>
						
						<div class="col-md-4">		
				<aside id="nav_menu-2" class="widget widget_nav_menu wow fadeInDown animated" data-wow-delay="0.4s"><div class="section-header"><h3 class="widget-title">友情链接</h3><span></span></div><div class="menu-%e5%8f%8b%e6%83%85%e9%93%be%e6%8e%a5-container"><ul id="menu-%e5%8f%8b%e6%83%85%e9%93%be%e6%8e%a5" class="menu"><li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a href="http://www.uskin.net.cn">USKIN</a></li>
<li id="menu-item-141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="http://www.utailor.com.cn">UTAILOR</a></li>
</ul></div></aside>			
			</div>
						
					</div>
		
		
					<div class="row">
			<div class="col-md-12">
					<div class="site-info wow fadeIn animated" data-wow-delay="0.4s">
						<div class='row' style='font-size:14px'>
<div class='col-lg-6 col-md-6 col-sm-12 text-center'>
<p>
Copyright  © 2018 www.itishow.com All Rights Reserved. 易水寒个人博客 
</p>
</div>
<div class='col-lg-6 col-md-6 col-sm-12 text-center'>
<p>
ICP备案号:冀ICP备16012978-1号
</p>
</div>
</div>					</div>
				</div>			
			</div>	
				
	</div>
</footer>
<!-- /Footer Section -->
<div class="clearfix"></div>
</div><!--Close of wrapper-->
<!--Scroll To Top--> 
<a href="#" class="hc_scrollup"><i class="fa fa-chevron-up"></i></a>
<!--/Scroll To Top--> 
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.itishow.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-includes/js/comment-reply.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-includes/js/wp-embed.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/themes/spicepress/js/animation/animate.js?ver=5.0.1'></script>
<script type='text/javascript' src='https://www.itishow.com/wp-content/themes/spicepress/js/animation/wow.min.js?ver=5.0.1'></script>
</body>
</html>
<!-- Dynamic page generated in 0.185 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-12-18 07:39:46 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->