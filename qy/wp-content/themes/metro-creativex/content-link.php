<?php
/**
 * The template for displaying posts in the Link post format.
 *
 * @package metro-creativex
 */
?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="post_icon" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/pt_link.png);"></div>
				<div class="post_content">
					<a href="<?php echo esc_url( metro_creativex_link_post_format() ); ?>" target="_blank"><?php the_title(); ?></a>
					<div class="post_date"><?php the_time( get_option( 'date_format' ) ); ?></div>
				</div><!--/post_content-->
			</article>
