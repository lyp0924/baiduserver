<?php die(); ?><!DOCTYPE html>
<html lang="zh-CN">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="keywords" content="php,route,route规则,thinkphp,tp,tp5,参数,获取参数" />
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
	
	<title>ThinkPHP：Route中get提交参数的定义及获取 &#8211; 易水寒</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; Feed" href="https://www.itishow.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; 评论Feed" href="https://www.itishow.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="易水寒 &raquo; ThinkPHP：Route中get提交参数的定义及获取评论Feed" href="https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/feed/" />
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
<link rel='prev' title='开博第一篇，立贴为证！' href='https://www.itishow.com/blog/2018/12/12/hello-world/' />
<link rel='next' title='bootstrap自定义alert和confirm' href='https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/' />
<meta name="generator" content="WordPress 5.0.1" />
<link rel="canonical" href="https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/" />
<link rel='shortlink' href='https://www.itishow.com/?p=69' />
<link rel="alternate" type="application/json+oembed" href="https://www.itishow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.itishow.com%2Fblog%2F2018%2F12%2F13%2Fthinkphp%25ef%25bc%259aroute%25e4%25b8%25adget%25e6%258f%2590%25e4%25ba%25a4%25e5%258f%2582%25e6%2595%25b0%25e7%259a%2584%25e5%25ae%259a%25e4%25b9%2589%25e5%258f%258a%25e8%258e%25b7%25e5%258f%2596%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.itishow.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.itishow.com%2Fblog%2F2018%2F12%2F13%2Fthinkphp%25ef%25bc%259aroute%25e4%25b8%25adget%25e6%258f%2590%25e4%25ba%25a4%25e5%258f%2582%25e6%2595%25b0%25e7%259a%2584%25e5%25ae%259a%25e4%25b9%2589%25e5%258f%258a%25e8%258e%25b7%25e5%258f%2596%2F&#038;format=xml" />
<link rel="icon" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" sizes="32x32" />
<link rel="icon" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" />
<meta name="msapplication-TileImage" content="https://www.itishow.com/wp-content/uploads/2018/12/fa2.png" />
</head>
<body class="post-template-default single single-post postid-69 single-format-standard wp-custom-logo" >
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
<li id="menu-item-112" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112"><a href="https://www.itishow.com/blog/category/bs/">Bootstrap</a></li>
<li id="menu-item-115" class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-115"><a href="https://www.itishow.com/blog/category/tp/">ThinkPHP</a></li>
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
						   <div class="page-title wow bounceInLeft animated" ata-wow-delay="0.4s"><h1>ThinkPHP：Route中get提交参数的定义及获取</h1></div>						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="page-breadcrumb wow bounceInRight animated" ata-wow-delay="0.4s"><li><a href="https://www.itishow.com">首页</a></li><li class="active"><a href="https://www.itishow.com/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/">ThinkPHP：Route中get提交参数的定义及获取</a></li></ul>						</div>
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
									<article class="post" class="post-content-area wow fadeInDown animated post-69 post type-post status-publish format-standard hentry category-tp tag-php tag-route tag-thinkphp tag-tp tag-tp5 tag-14 tag-16" data-wow-delay="0.4s">				
						<div class="entry-meta">
		<span class="entry-date">
			<a href="https://www.itishow.com/blog/2018/12/"><time datetime="">12月 13, 2018</time></a>
		</span>
	</div>
					<header class="entry-header">
						<h3 class="entry-title">ThinkPHP：Route中get提交参数的定义及获取</h3><div class="entry-meta">
	<span class="author">作者 <a rel="tag" href="https://www.itishow.com/blog/author/admin/">刺秦</a>
	
	</span>
		<span class="cat-links">在<a href="https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/"><a href="https://www.itishow.com/blog/category/tp/" rel="category tag">ThinkPHP</a></a></span>
					<span class="tag-links">标签 <a href="https://www.itishow.com/blog/tag/php/" rel="tag">php</a>, <a href="https://www.itishow.com/blog/tag/route/" rel="tag">route</a>, <a href="https://www.itishow.com/blog/tag/route%e8%a7%84%e5%88%99/" rel="tag">route规则</a>, <a href="https://www.itishow.com/blog/tag/thinkphp/" rel="tag">thinkphp</a>, <a href="https://www.itishow.com/blog/tag/tp/" rel="tag">tp</a>, <a href="https://www.itishow.com/blog/tag/tp5/" rel="tag">tp5</a>, <a href="https://www.itishow.com/blog/tag/%e5%8f%82%e6%95%b0/" rel="tag">参数</a>, <a href="https://www.itishow.com/blog/tag/%e8%8e%b7%e5%8f%96%e5%8f%82%e6%95%b0/" rel="tag">获取参数</a></span>
				
</div>	 
					</header>				
										<div class="entry-content">
					
<p>在很多情况下，对于初学者来说不免会产生这样的感觉：明明设置对了啊，怎么不起作用呢。这是为什么呢？当然是你设置错了嘛！！！</p>



<p>好了，话不多说先上用到的route规则：</p>



<pre class="wp-block-code"><code>use \think\Route;

Route::rule(['/'=>'index/Index/test']);
Route::get([
    '/index/Index/index/:id'   => ['index/Index/index' ,[],['id'=>'\d+'] ],
    '/index/Index/index/:name'   => ['index/Index/index' ,[],['id'=>'\s+'] ],
    '/index/Index/index/name/:id'   => ['index/Index/index' ,[],[] ],
    '/index/Index/index/name/:name'   => ['index/Index/index' ,[],[] ],
]);</code></pre>



<p>这里用到了四个规则，这也是当时我产生以上感觉后调试过程中获取到的“武林秘籍”，接下来让我们分别看看这几个规则对应的使用吧：</p>



<p>附index代码：</p>



<pre class="wp-block-code"><code>public function index($name='lyp',$id=0)
{
        var_dump($name);
        var_dump($id);
        var_dump($_GET);
        var_dump(Request::instance()->param());
        return ;
}</code></pre>



<h5>1、Route::get([&#8216;/index/Index/index/:id&#8217;   =&gt; [&#8216;index/Index/index&#8217; ,[],[&#8216;id&#8217;=&gt;&#8217;\d+&#8217;] ]]);<br></h5>



<p>访问http://hostname/index/Index/index/12，结果如下：</p>



<figure class="wp-block-image"><img src="https://www.itishow.com/wp-content/uploads/2018/12/tp1.jpg" alt="" class="wp-image-72" srcset="https://www.itishow.com/wp-content/uploads/2018/12/tp1.jpg 647w, https://www.itishow.com/wp-content/uploads/2018/12/tp1-300x116.jpg 300w" sizes="(max-width: 647px) 100vw, 647px" /></figure>



<p>这种方式是大多数人经常用到的，发现name是默认值，id是传入的12，$_GET没有获取到任何东西。这里就要提一下了，在TP5里面获取参数的方法：
<ol>
<li>通用：Request::instance()->param(&#8216;id&#8217;)</li>
<li>GET：Request::instance()->get();</li>
<li>POST：Request::instance()->post(&#8216;id&#8217;)</li>
<li>&#8230;</li>
</ol>
这里就不一一列举了。
</p>



<h5>2、Route::get([&#8216;/index/Index/index/:name&#8217;   =&gt; [&#8216;index/Index/index&#8217; ,[],[&#8216;id&#8217;=&gt;&#8217;\s+&#8217;] ]]);</h5>



<p>访问http://hostname/index/Index/index/hello，结果如下：</p>



<figure class="wp-block-image"><img src="https://www.itishow.com/wp-content/uploads/2018/12/tp2.jpg" alt="" class="wp-image-75" srcset="https://www.itishow.com/wp-content/uploads/2018/12/tp2.jpg 729w, https://www.itishow.com/wp-content/uploads/2018/12/tp2-300x77.jpg 300w" sizes="(max-width: 729px) 100vw, 729px" /></figure>



<p>至此可以看出在方法中默认匹配的参数是和路由规则中 :id、:name对应匹配的。</p>



<h5>
3、Route::get([
<br>
    &#8216;/index/Index/index/name/:id&#8217;   =&gt; [&#8216;index/Index/index&#8217; ,[],[] ],
<br>
    &#8216;/index/Index/index/name/:name&#8217;   =&gt; [&#8216;index/Index/index&#8217; ,[],[] ],
<br>
]);
</h5>



<p>这两个规则并无太大的意义，因为我在调试过程中隐约记得有一种这样的规则（可能没有，可能记得有偏差，也可能是记混了），在最后的变量分别是id、name。</p>



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
		<h3 id="reply-title" class="comment-reply-title"><div class="comment-title"><h3><i class="fa fa-comment-o"></i>发表评论</h3></div> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/#respond" style="display:none;">取消回复</a></small></h3>			<form action="https://www.itishow.com/wp-comments-post.php" method="post" id="commentform" class="form-inline">
				<div class="blog-form-group-textarea"><textarea id="comments" name="comment" placeholder="信息" class="blog-form-control-textarea" rows="5"></textarea></div><div class="blog-form-group"><input type="text" name="author" id="author" placeholder="名称" class="blog-form-control"></div>
<div class="blog-form-group"><input type="text" name="email" id="email" placeholder="电子邮件" class="blog-form-control"></div>
<p class="form-submit"><input name="submit" type="submit" id="blogdetail-btn" class="blogdetail-btn" value="发送信息" /> <input type='hidden' name='comment_post_ID' value='69' id='comment_post_ID' />
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
<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112"><a href="https://www.itishow.com/blog/category/bs/">Bootstrap</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-115"><a href="https://www.itishow.com/blog/category/tp/">ThinkPHP</a></li>
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
<!-- Dynamic page generated in 0.182 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-12-18 07:39:48 -->

<!-- Super Cache dynamic page detected but late init not set. See the readme.txt for further details. -->
<!-- Dynamic WPCache Super Cache -->