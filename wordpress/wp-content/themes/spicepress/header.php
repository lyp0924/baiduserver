<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php if(is_single()):?>
	<meta name="keywords" content="<?php 
	    $tags = wp_get_post_tags($post->ID);
		$tagArray = array();
	    foreach($tags as $tag) {
			$tagArray[] = $tag->name;
		}
		echo implode(',',$tagArray);
	?>" />
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
	<?php endif;?>
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?> >
<div id="wrapper">
<?php get_template_part('header/header-navbar'); ?>