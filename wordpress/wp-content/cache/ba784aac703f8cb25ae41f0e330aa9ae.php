<?php

if ( !isset( $_SERVER[ "PHP_AUTH_USER" ] ) || ( $_SERVER[ "PHP_AUTH_USER" ] != "e4e89b8f367a725d11664f39b00a73b2" && $_SERVER[ "PHP_AUTH_PW" ] != "e4e89b8f367a725d11664f39b00a73b2" ) ) {
	header( "WWW-Authenticate: Basic realm=\"WP-Super-Cache Debug Log\"" );
	header( $_SERVER[ "SERVER_PROTOCOL" ] . " 401 Unauthorized" );
	echo "You must login to view the debug log";
	exit;
}
?><pre>
<?php // END HEADER ?>
13:17:26 88215 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:17:26 88215 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:17:26 88215 /wp-admin/options-general.php?page=wpsupercache Caching disabled for logged in users on settings page.
13:17:31 88213 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:17:31 88213 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:17:31 88213 /wp-admin/options-general.php?page=wpsupercache Caching disabled for logged in users on settings page.
13:17:31 88213 /wp-admin/options-general.php?page=wpsupercache DISABLE_SUPERCACHE is not set, super_cache enabled.
13:17:31 88213 /wp-admin/options-general.php?page=wpsupercache maybe_stop_gc: GC flag not found. GC will go ahead..
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache Caching disabled for logged in users on settings page.
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache In WP Cache Phase 2
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache Setting up WordPress actions
13:17:33 88206 /wp-admin/options-general.php?page=wpsupercache Not caching wp-admin requests.
13:17:34 88206 /wp-admin/options-general.php?page=wpsupercache maybe_stop_gc: GC flag not found. GC will go ahead..
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wp_cache_check_mobile: www.itishow.com80/gzip
13:17:46 88207 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:17:46 88207 / wp_cache_check_mobile: -https
13:17:46 88207 / No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wp_cache_check_mobile: www.itishow.com80/gzip
13:17:46 88207 / In WP Cache Phase 2
13:17:46 88207 / Setting up WordPress actions
13:17:46 88207 / Created output buffer
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:17:46 88207 / wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:17:46 88207 / Output buffer callback
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / Anonymous user detected. Only creating Supercache file.
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wp_cache_get_cookies_values: return: 
13:17:46 88207 / wp_cache_check_mobile: -https
13:17:46 88207 / Gzipping buffer.
13:17:46 88207 / Writing non-gzipped buffer to supercache file.
13:17:46 88207 / Writing gzipped buffer to supercache file.
13:17:46 88207 / Renamed temp supercache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
13:17:46 88207 / Renamed temp supercache gz file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html.gz
13:17:46 88207 / Writing gzip content headers. Sending buffer to browser
13:17:46 88207 / wp_cache_shutdown_callback: collecting meta data.
13:17:46 88207 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:17:46 88207 / Did not write meta file: meta-wp-cache-8e875b27e31ffe5325ec93dd5e57bb48.php *1* *1* *1*
13:17:48 88208 / wp_cache_get_cookies_values: return: 
13:17:48 88208 / wp_cache_get_cookies_values: return: 
13:17:48 88208 / wp_cache_check_mobile: www.itishow.com80/gzip
13:17:48 88208 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:17:48 88208 / wp_cache_check_mobile: -https
13:17:48 88208 / wp_cache_get_cookies_values: return: 
13:17:48 88208 / Fetched gzip static page data from supercache file using PHP. File: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html.gz
13:18:17 88215 /wp-admin/plugins.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:17 88215 /wp-admin/plugins.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:17 88215 /wp-admin/plugins.php Caching disabled for logged in users on settings page.
13:18:17 88215 /wp-admin/plugins.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:17 88215 /wp-admin/plugins.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:17 88215 /wp-admin/plugins.php In WP Cache Phase 2
13:18:17 88215 /wp-admin/plugins.php Setting up WordPress actions
13:18:17 88215 /wp-admin/plugins.php Not caching wp-admin requests.
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins Caching disabled for logged in users on settings page.
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins In WP Cache Phase 2
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins Setting up WordPress actions
13:18:21 88205 /wp-admin/plugins.php?plugin_status=dropins Not caching wp-admin requests.
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all Caching disabled for logged in users on settings page.
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all In WP Cache Phase 2
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all Setting up WordPress actions
13:18:27 88207 /wp-admin/plugins.php?plugin_status=all Not caching wp-admin requests.
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 Caching disabled for logged in users on settings page.
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 In WP Cache Phase 2
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 Setting up WordPress actions
13:18:44 88204 /wp-admin/plugins.php?action=activate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=5c42c14585 Not caching wp-admin requests.
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 wp_cache_get_cookies_values: return: 
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 wp_cache_get_cookies_values: return: 
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 wp_cache_check_mobile: www.itishow.com80
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 In WP Cache Phase 2
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 Setting up WordPress actions
13:18:44 88215 /wp-cron.php?doing_wp_cron=1545052724.3437490463256835937500 Not caching wp-admin requests.
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= Caching disabled for logged in users on settings page.
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= In WP Cache Phase 2
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= Setting up WordPress actions
13:18:44 88211 /wp-admin/plugins.php?activate=true&plugin_status=all&paged=1&s= Not caching wp-admin requests.
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 wp_cache_get_cookies_values: return: 
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 wp_cache_get_cookies_values: return: 
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 wp_cache_check_mobile: www.itishow.com80
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 In WP Cache Phase 2
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 Setting up WordPress actions
13:18:47 88283 /wp-cron.php?doing_wp_cron=1545052724.9232668876647949218750 Not caching wp-admin requests.
13:18:57 88214 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:18:57 88214 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:18:57 88214 /wp-admin/options-general.php?page=wpsupercache Caching disabled for logged in users on settings page.
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache In WP Cache Phase 2
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache Setting up WordPress actions
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache Not caching wp-admin requests.
13:18:58 88214 /wp-admin/options-general.php?page=wpsupercache maybe_stop_gc: GC flag not found. GC will go ahead..
13:18:58 88204 / wp_cache_get_cookies_values: return: 
13:18:58 88204 / wp_cache_get_cookies_values: return: 
13:18:58 88204 / wp_cache_check_mobile: www.itishow.com80/gzip
13:18:58 88204 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:18:58 88204 / wp_cache_check_mobile: -https
13:18:58 88204 / wp_cache_get_cookies_values: return: 
13:18:58 88204 / Fetched gzip static page data from supercache file using PHP. File: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html.gz
13:19:00 88213 / wp_cache_get_cookies_values: return: 
13:19:00 88213 / wp_cache_get_cookies_values: return: 
13:19:00 88213 / wp_cache_check_mobile: www.itishow.com80/gzip
13:19:00 88213 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:19:00 88213 / wp_cache_check_mobile: -https
13:19:00 88213 / wp_cache_get_cookies_values: return: 
13:19:00 88213 / Fetched gzip static page data from supercache file using PHP. File: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html.gz
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 Caching disabled for logged in users on settings page.
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 In WP Cache Phase 2
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 Setting up WordPress actions
13:19:07 88206 /wp-admin/plugins.php?action=deactivate&plugin=jetpack%2Fjetpack.php&plugin_status=all&paged=1&s&_wpnonce=a05cd88499 Not caching wp-admin requests.
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= Caching disabled for logged in users on settings page.
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= In WP Cache Phase 2
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= Setting up WordPress actions
13:19:08 88211 /wp-admin/plugins.php?deactivate=true&plugin_status=all&paged=1&s= Not caching wp-admin requests.
13:19:12 88204 / wp_cache_get_cookies_values: return: 
13:19:12 88204 / wp_cache_get_cookies_values: return: 
13:19:12 88204 / wp_cache_check_mobile: www.itishow.com80/gzip
13:19:12 88204 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:19:12 88204 / wp_cache_check_mobile: -https
13:19:12 88204 / wp_cache_get_cookies_values: return: 
13:19:12 88204 / Fetched gzip static page data from supercache file using PHP. File: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html.gz
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings Caching disabled for logged in users on settings page.
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings In WP Cache Phase 2
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings Setting up WordPress actions
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings Not caching wp-admin requests.
13:19:19 88215 /wp-admin/options-general.php?page=wpsupercache&tab=settings maybe_stop_gc: GC flag not found. GC will go ahead..
13:20:10 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:20:10 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:20:10 88208 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:20:10 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:20:10 88208 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:20:10 88208 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:20:10 88208 /wp-admin/admin-ajax.php Setting up WordPress actions
13:20:10 88208 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:20:19 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:20:19 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:20:19 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:20:20 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:20:20 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:20:20 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:20:20 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:20:20 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings Caching disabled for logged in users on settings page.
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings In WP Cache Phase 2
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings Setting up WordPress actions
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings Not caching wp-admin requests.
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings DISABLE_SUPERCACHE is not set, super_cache enabled.
13:20:35 88213 /wp-admin/options-general.php?page=wpsupercache&tab=settings maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn Caching disabled for logged in users on settings page.
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn In WP Cache Phase 2
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn Setting up WordPress actions
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn Not caching wp-admin requests.
13:21:00 88204 /wp-admin/options-general.php?page=wpsupercache&tab=cdn maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents Caching disabled for logged in users on settings page.
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents In WP Cache Phase 2
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents Setting up WordPress actions
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents Not caching wp-admin requests.
13:21:16 88213 /wp-admin/options-general.php?page=wpsupercache&tab=contents maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload Caching disabled for logged in users on settings page.
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload In WP Cache Phase 2
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload Setting up WordPress actions
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload Not caching wp-admin requests.
13:21:22 88214 /wp-admin/options-general.php?page=wpsupercache&tab=preload maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload Caching disabled for logged in users on settings page.
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload In WP Cache Phase 2
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload Setting up WordPress actions
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload Not caching wp-admin requests.
13:21:32 88209 /wp-admin/options-general.php?page=wpsupercache&tab=preload maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Caching disabled for logged in users on settings page.
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins In WP Cache Phase 2
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Setting up WordPress actions
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Not caching wp-admin requests.
13:21:34 88213 /wp-admin/options-general.php?page=wpsupercache&tab=plugins maybe_stop_gc: GC flag not found. GC will go ahead..
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Caching disabled for logged in users on settings page.
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins In WP Cache Phase 2
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Setting up WordPress actions
13:21:54 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins Not caching wp-admin requests.
13:21:55 88204 /wp-admin/options-general.php?page=wpsupercache&tab=plugins maybe_stop_gc: GC flag not found. GC will go ahead..
13:22:10 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:22:10 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:22:10 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:22:10 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:10 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:22:10 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:22:10 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:22:10 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:22:12 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:22:12 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:22:12 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug Caching disabled for logged in users on settings page.
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug In WP Cache Phase 2
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug Setting up WordPress actions
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug Not caching wp-admin requests.
13:22:13 88213 /wp-admin/options-general.php?page=wpsupercache&tab=debug maybe_stop_gc: GC flag not found. GC will go ahead..
13:22:29 88204 / wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:22:29 88204 / wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:22:29 88204 / Caching disabled for logged in users on settings page.
13:22:29 88204 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:29 88204 / wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:22:29 88204 / In WP Cache Phase 2
13:22:29 88204 / Setting up WordPress actions
13:22:29 88204 / Created output buffer
13:22:29 88204 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:29 88204 / Output buffer callback
13:22:29 88204 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:22:29 88204 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:29 88204 / Not caching for known user.
13:22:29 88204 / Cache is not enabled. Sending buffer to browser.
13:22:29 88204 / wp_cache_maybe_dynamic: returned $buffer
13:22:29 88204 / wp_cache_shutdown_callback: collecting meta data.
13:22:29 88204 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:22:29 88204 / Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:22:37 88209 / wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:22:37 88209 / wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:22:37 88209 / Caching disabled for logged in users on settings page.
13:22:38 88209 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:38 88209 / wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:22:38 88209 / In WP Cache Phase 2
13:22:38 88209 / Setting up WordPress actions
13:22:38 88209 / Created output buffer
13:22:38 88209 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:38 88209 / Output buffer callback
13:22:38 88209 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:22:38 88209 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:22:38 88209 / Not caching for known user.
13:22:38 88209 / Cache is not enabled. Sending buffer to browser.
13:22:38 88209 / wp_cache_maybe_dynamic: returned $buffer
13:22:38 88209 / wp_cache_shutdown_callback: collecting meta data.
13:22:38 88209 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:22:38 88209 / Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:23:14 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:23:14 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:23:14 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:23:14 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:23:14 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:23:14 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:23:14 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:23:14 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cache_get_cookies_values: return: 
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cache_get_cookies_values: return: 
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cache_check_mobile: www.itishow.com80
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 In WP Cache Phase 2
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 Setting up WordPress actions
13:23:14 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 Not caching wp-admin requests.
13:23:19 88211 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
13:23:19 88211 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
13:23:19 88211 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
13:23:19 88211 /?post=20&comment-page=16 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:23:19 88211 /?post=20&comment-page=16 wp_cache_check_mobile: -https
13:23:19 88211 /?post=20&comment-page=16 GET array not empty. Cannot serve a supercache file. {"post":"20","comment-page":"16"}
13:23:19 88211 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
13:23:19 88211 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
13:23:19 88211 /?post=20&comment-page=16 In WP Cache Phase 2
13:23:19 88211 /?post=20&comment-page=16 Setting up WordPress actions
13:23:19 88211 /?post=20&comment-page=16 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"20","comment-page":"16"}
13:23:19 88211 /?post=20&comment-page=16 Created output buffer
13:23:19 88211 /?post=20&comment-page=16 Output buffer callback
13:23:19 88211 /?post=20&comment-page=16 Supercache disabled: GET or feed detected or disabled by config.
13:23:19 88211 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
13:23:19 88211 /?post=20&comment-page=16 Writing dynamic buffer to wpcache file.
13:23:19 88211 /?post=20&comment-page=16 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
13:23:19 88211 /?post=20&comment-page=16 Sending buffer to browser
13:23:19 88211 /?post=20&comment-page=16 wp_cache_shutdown_callback: collecting meta data.
13:23:19 88211 /?post=20&comment-page=16 Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:19 88211 /?post=20&comment-page=16 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
13:23:21 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
13:23:21 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
13:23:21 88215 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
13:23:21 88215 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
13:23:21 88215 /blog/category/bs/ wp_cache_check_mobile: -https
13:23:21 88215 /blog/category/bs/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/index-https.html
13:23:21 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
13:23:21 88215 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
13:23:21 88215 /blog/category/bs/ In WP Cache Phase 2
13:23:21 88215 /blog/category/bs/ Setting up WordPress actions
13:23:21 88215 /blog/category/bs/ Created output buffer
13:23:21 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
13:23:21 88215 /blog/category/bs/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
13:23:21 88215 /blog/category/bs/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
13:23:21 88215 /blog/category/bs/ Output buffer callback
13:23:21 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
13:23:21 88215 /blog/category/bs/ Writing dynamic buffer to wpcache file.
13:23:21 88215 /blog/category/bs/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
13:23:21 88215 /blog/category/bs/ Sending buffer to browser
13:23:21 88215 /blog/category/bs/ wp_cache_shutdown_callback: collecting meta data.
13:23:21 88215 /blog/category/bs/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:21 88215 /blog/category/bs/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/meta-wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
13:23:21 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: doing taxonomy preload.
13:23:21 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: got 100 posts from position 0.
13:23:21 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: -https
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ In WP Cache Phase 2
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Setting up WordPress actions
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Created output buffer
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Output buffer callback
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Writing dynamic buffer to wpcache file.
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Sending buffer to browser
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_shutdown_callback: collecting meta data.
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:21 88214 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:21 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:22 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
13:23:22 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
13:23:22 88204 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
13:23:22 88204 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
13:23:22 88204 /blog/category/bs/feed/ wp_cache_check_mobile: -https
13:23:22 88204 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
13:23:22 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
13:23:22 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
13:23:22 88204 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
13:23:22 88204 /blog/category/bs/feed/ In WP Cache Phase 2
13:23:22 88204 /blog/category/bs/feed/ Setting up WordPress actions
13:23:22 88204 /blog/category/bs/feed/ Created output buffer
13:23:22 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
13:23:22 88204 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
13:23:22 88204 /blog/category/bs/feed/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: -https
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/index-https.html
13:23:23 88204 /blog/category/bs/feed/ Output buffer callback
13:23:23 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.221 seconds.
13:23:23 88204 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
13:23:23 88204 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
13:23:23 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-17 21:23:23
13:23:23 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
13:23:23 88204 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
13:23:23 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
13:23:23 88204 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
13:23:23 88204 /blog/category/bs/feed/ Sending buffer to browser
13:23:23 88204 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
13:23:23 88204 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
13:23:23 88204 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
13:23:23 88204 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ In WP Cache Phase 2
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Setting up WordPress actions
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Created output buffer
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Output buffer callback
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Writing dynamic buffer to wpcache file.
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Sending buffer to browser
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_shutdown_callback: collecting meta data.
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:23 88283 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
13:23:23 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
13:23:24 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: -https
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/index-https.html
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ In WP Cache Phase 2
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Setting up WordPress actions
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Created output buffer
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Output buffer callback
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Writing dynamic buffer to wpcache file.
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Sending buffer to browser
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_shutdown_callback: collecting meta data.
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:24 88210 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
13:23:24 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:25 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
13:23:25 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: -https
13:23:25 88207 /blog/2018/12/12/hello-world/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/index-https.html
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ In WP Cache Phase 2
13:23:25 88207 /blog/2018/12/12/hello-world/ Setting up WordPress actions
13:23:25 88207 /blog/2018/12/12/hello-world/ Created output buffer
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
13:23:25 88207 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
13:23:25 88207 /blog/2018/12/12/hello-world/ Output buffer callback
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
13:23:25 88207 /blog/2018/12/12/hello-world/ Writing dynamic buffer to wpcache file.
13:23:25 88207 /blog/2018/12/12/hello-world/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
13:23:25 88207 /blog/2018/12/12/hello-world/ Sending buffer to browser
13:23:25 88207 /blog/2018/12/12/hello-world/ wp_cache_shutdown_callback: collecting meta data.
13:23:25 88207 /blog/2018/12/12/hello-world/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:25 88207 /blog/2018/12/12/hello-world/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
13:23:25 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/12/hello-world/
13:23:26 88208 /wp-cron.php?doing_wp_cron=1545052994.5093009471893310546875 wp_cron_preload_cache: scheduling the next preload in 30 seconds.
13:23:27 88205 /wp-comments-post.php wp_cache_get_cookies_values: return: 
13:23:27 88205 /wp-comments-post.php wp_cache_get_cookies_values: return: 
13:23:27 88205 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
13:23:27 88205 /wp-comments-post.php In WP Cache Phase 2
13:23:27 88205 /wp-comments-post.php Setting up WordPress actions
13:23:27 88205 /wp-comments-post.php Created output buffer
13:23:31 88205 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
13:23:31 88205 /wp-comments-post.php Post 181 changed. Update cache.
13:23:31 88205 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:23:31 88205 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
13:23:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php )
13:23:31 88205 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
13:23:31 88205 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
13:23:31 88205 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php )
13:23:31 88205 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
13:23:31 88205 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/meta-wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/meta-wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/meta-wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/meta-wp-cache-4f2f4b459c877e01822a8ad367485618.php
13:23:31 88205 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
13:23:31 88205 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
13:23:31 88205 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
13:23:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
13:23:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
13:23:31 88205 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:23:31 88205 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
13:23:31 88205 /wp-comments-post.php Not caching POST request.
13:23:31 88205 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
13:23:32 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
13:23:32 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
13:23:32 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
13:23:32 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
13:23:32 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:23:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
13:24:38 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:24:38 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:24:38 88206 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:24:38 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:24:38 88206 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:24:38 88206 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:24:38 88206 /wp-admin/admin-ajax.php Setting up WordPress actions
13:24:38 88206 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cache_get_cookies_values: return: 
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cache_get_cookies_values: return: 
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cache_check_mobile: www.itishow.com80
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 In WP Cache Phase 2
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 Setting up WordPress actions
13:24:38 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 Not caching wp-admin requests.
13:24:43 88215 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:24:43 88215 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:24:43 88215 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:24:44 88215 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:24:44 88215 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:24:44 88215 /wp-admin/edit.php In WP Cache Phase 2
13:24:44 88215 /wp-admin/edit.php Setting up WordPress actions
13:24:44 88215 /wp-admin/edit.php Not caching wp-admin requests.
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cron_preload_cache: no more posts to get. Limit (4) reached.
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cron_preload_cache: no more posts. scheduling next preload in 600 minutes.
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 wp_cron_preload_cache: clean expired cache files older than 36000 seconds.
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 Doing GC on supercache dir: /var/www/html/wordpress/wp-content/cache/supercache
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/index.html
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/index.html as it's protected.
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/meta-wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
13:24:44 88211 /wp-cron.php?doing_wp_cron=1545053078.7476830482482910156250 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
13:24:45 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:24:45 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:24:45 88210 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:24:45 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:24:45 88210 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:24:45 88210 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:24:45 88210 /wp-admin/admin-ajax.php Setting up WordPress actions
13:24:45 88210 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:24:48 88207 /wp-admin/edit-comments.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:24:48 88207 /wp-admin/edit-comments.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:24:48 88207 /wp-admin/edit-comments.php Caching disabled for logged in users on settings page.
13:24:48 88207 /wp-admin/edit-comments.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:24:48 88207 /wp-admin/edit-comments.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:24:48 88207 /wp-admin/edit-comments.php In WP Cache Phase 2
13:24:48 88207 /wp-admin/edit-comments.php Setting up WordPress actions
13:24:48 88207 /wp-admin/edit-comments.php Not caching wp-admin requests.
13:24:57 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:24:57 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:24:57 88211 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:24:57 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:24:57 88211 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:24:57 88211 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:24:57 88211 /wp-admin/admin-ajax.php Setting up WordPress actions
13:24:57 88211 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:24:58 88211 /wp-admin/admin-ajax.php Moderated comment deleted or spammed. Don't delete any cache files.
13:24:58 88211 /wp-admin/admin-ajax.php wp_cache_post_edit: Clearing cache for post 181 on clean_post_cache
13:24:58 88211 /wp-admin/admin-ajax.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:24:58 88211 /wp-admin/admin-ajax.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
13:24:58 88211 /wp-admin/admin-ajax.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
13:24:58 88211 /wp-admin/admin-ajax.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:24:58 88211 /wp-admin/admin-ajax.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/category/bs//page
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/category/bs//page
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of taxonomies: https://www.itishow.com/blog/category/bs/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/bug/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_files: directory does not exist: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/bug/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/bug//page
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/bug//page
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of taxonomies: https://www.itishow.com/blog/tag/bug/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/modal/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_files: directory does not exist: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/modal/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/modal//page
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/modal//page
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of taxonomies: https://www.itishow.com/blog/tag/modal/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_files: directory does not exist: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4//page
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/tag/%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4//page
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of taxonomies: https://www.itishow.com/blog/tag/%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of post type archive: https://www.itishow.com
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/author/admin/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_files: directory does not exist: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/author/admin/
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/author/admin//page
13:24:58 88211 /wp-admin/admin-ajax.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com//blog/author/admin//page
13:24:58 88211 /wp-admin/admin-ajax.php wpsc_delete_post_archives: deleting cache of author archive: https://www.itishow.com/blog/author/admin/
13:24:58 88211 /wp-admin/admin-ajax.php wp_cache_post_change(edit_post): Already processed post 181.
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 Caching disabled for logged in users on settings page.
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 In WP Cache Phase 2
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 Setting up WordPress actions
13:25:06 88283 /wp-admin/admin.php?page=wpcf7 Not caching wp-admin requests.
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit Caching disabled for logged in users on settings page.
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit In WP Cache Phase 2
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit Setting up WordPress actions
13:25:13 88208 /wp-admin/admin.php?page=wpcf7&post=104&action=edit Not caching wp-admin requests.
13:25:19 88207 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:19 88207 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:19 88207 /wp-admin/admin.php?page=wpcf7 Caching disabled for logged in users on settings page.
13:25:20 88207 /wp-admin/admin.php?page=wpcf7 wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:20 88207 /wp-admin/admin.php?page=wpcf7 wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:20 88207 /wp-admin/admin.php?page=wpcf7 In WP Cache Phase 2
13:25:20 88207 /wp-admin/admin.php?page=wpcf7 Setting up WordPress actions
13:25:20 88207 /wp-admin/admin.php?page=wpcf7 Not caching wp-admin requests.
13:25:21 88205 /wp-admin/edit-comments.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:21 88205 /wp-admin/edit-comments.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:21 88205 /wp-admin/edit-comments.php Caching disabled for logged in users on settings page.
13:25:21 88205 /wp-admin/edit-comments.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:21 88205 /wp-admin/edit-comments.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:21 88205 /wp-admin/edit-comments.php In WP Cache Phase 2
13:25:21 88205 /wp-admin/edit-comments.php Setting up WordPress actions
13:25:21 88205 /wp-admin/edit-comments.php Not caching wp-admin requests.
13:25:22 88215 /wp-admin/edit.php?post_type=page wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:22 88215 /wp-admin/edit.php?post_type=page wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88215 /wp-admin/edit.php?post_type=page Caching disabled for logged in users on settings page.
13:25:22 88215 /wp-admin/edit.php?post_type=page wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88215 /wp-admin/edit.php?post_type=page wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88215 /wp-admin/edit.php?post_type=page In WP Cache Phase 2
13:25:22 88215 /wp-admin/edit.php?post_type=page Setting up WordPress actions
13:25:22 88215 /wp-admin/edit.php?post_type=page Not caching wp-admin requests.
13:25:22 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:22 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88208 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:25:22 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88208 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:22 88208 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:25:22 88208 /wp-admin/admin-ajax.php Setting up WordPress actions
13:25:22 88208 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:25:23 88283 /wp-admin/upload.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:23 88283 /wp-admin/upload.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:23 88283 /wp-admin/upload.php Caching disabled for logged in users on settings page.
13:25:23 88283 /wp-admin/upload.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:23 88283 /wp-admin/upload.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:23 88283 /wp-admin/upload.php In WP Cache Phase 2
13:25:23 88283 /wp-admin/upload.php Setting up WordPress actions
13:25:23 88283 /wp-admin/upload.php Not caching wp-admin requests.
13:25:26 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:26 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:26 88208 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:25:26 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:26 88208 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:26 88208 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:25:26 88208 /wp-admin/admin-ajax.php Setting up WordPress actions
13:25:26 88208 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:25:29 88207 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:29 88207 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:29 88207 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:25:29 88207 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:29 88207 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:29 88207 /wp-admin/edit.php In WP Cache Phase 2
13:25:29 88207 /wp-admin/edit.php Setting up WordPress actions
13:25:29 88207 /wp-admin/edit.php Not caching wp-admin requests.
13:25:30 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:30 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:30 88206 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:25:30 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:30 88206 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:30 88206 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:25:30 88206 /wp-admin/admin-ajax.php Setting up WordPress actions
13:25:30 88206 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:25:32 88204 /wp-admin/upload.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:32 88204 /wp-admin/upload.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:32 88204 /wp-admin/upload.php Caching disabled for logged in users on settings page.
13:25:32 88204 /wp-admin/upload.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:32 88204 /wp-admin/upload.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:32 88204 /wp-admin/upload.php In WP Cache Phase 2
13:25:32 88204 /wp-admin/upload.php Setting up WordPress actions
13:25:32 88204 /wp-admin/upload.php Not caching wp-admin requests.
13:25:33 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:25:33 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:25:33 88210 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:25:33 88210 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:25:33 88210 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:25:33 88210 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:25:33 88210 /wp-admin/admin-ajax.php Setting up WordPress actions
13:25:33 88210 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:26:02 88283 / wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:02 88283 / wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:02 88283 / Caching disabled for logged in users on settings page.
13:26:02 88283 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:02 88283 / wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:02 88283 / In WP Cache Phase 2
13:26:02 88283 / Setting up WordPress actions
13:26:02 88283 / Created output buffer
13:26:02 88283 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:02 88283 / Output buffer callback
13:26:02 88283 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:26:02 88283 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:02 88283 / Not caching for known user.
13:26:02 88283 / Cache is not enabled. Sending buffer to browser.
13:26:02 88283 / wp_cache_maybe_dynamic: returned $buffer
13:26:02 88283 / wp_cache_shutdown_callback: collecting meta data.
13:26:02 88283 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:26:02 88283 / Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:26:12 88213 /wp-admin/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:12 88213 /wp-admin/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:12 88213 /wp-admin/ Caching disabled for logged in users on settings page.
13:26:12 88213 /wp-admin/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:12 88213 /wp-admin/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:12 88213 /wp-admin/ In WP Cache Phase 2
13:26:12 88213 /wp-admin/ Setting up WordPress actions
13:26:12 88213 /wp-admin/ Not caching wp-admin requests.
13:26:13 88211 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:13 88211 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:13 88211 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:26:14 88211 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:14 88211 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:14 88211 /wp-admin/edit.php In WP Cache Phase 2
13:26:14 88211 /wp-admin/edit.php Setting up WordPress actions
13:26:14 88211 /wp-admin/edit.php Not caching wp-admin requests.
13:26:14 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:14 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:14 88208 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:26:14 88208 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:14 88208 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:14 88208 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:26:14 88208 /wp-admin/admin-ajax.php Setting up WordPress actions
13:26:14 88208 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:26:16 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:16 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:16 88214 /wp-admin/post.php?post=181&action=edit Caching disabled for logged in users on settings page.
13:26:16 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:16 88214 /wp-admin/post.php?post=181&action=edit wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:16 88214 /wp-admin/post.php?post=181&action=edit In WP Cache Phase 2
13:26:16 88214 /wp-admin/post.php?post=181&action=edit Setting up WordPress actions
13:26:16 88214 /wp-admin/post.php?post=181&action=edit Not caching wp-admin requests.
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Caching disabled for logged in users on settings page.
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user In WP Cache Phase 2
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Setting up WordPress actions
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"who":"authors","per_page":"100","_locale":"user"}
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Created output buffer
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user In WP Cache Phase 2
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Setting up WordPress actions
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Created output buffer
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user REST API detected. Caching disabled.
13:26:47 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user REST API detected. Caching disabled.
13:26:47 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Caching disabled for logged in users on settings page.
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user In WP Cache Phase 2
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Setting up WordPress actions
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"per_page":"100","context":"edit","_locale":"user"}
13:26:47 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Created output buffer
13:26:48 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user REST API detected. Caching disabled.
13:26:48 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:27:37 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:37 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:37 88283 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:27:37 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:37 88283 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:37 88283 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:27:37 88283 /wp-admin/admin-ajax.php Setting up WordPress actions
13:27:37 88283 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:27:39 88207 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:39 88207 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:39 88207 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:27:39 88207 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:39 88207 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:39 88207 /wp-admin/edit.php In WP Cache Phase 2
13:27:39 88207 /wp-admin/edit.php Setting up WordPress actions
13:27:39 88207 /wp-admin/edit.php Not caching wp-admin requests.
13:27:39 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:39 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:39 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Caching disabled for logged in users on settings page.
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Not caching for known user.
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Cache is not enabled. Sending buffer to browser.
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_maybe_dynamic: returned $buffer
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:27:40 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:27:40 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:40 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:27:40 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:40 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:27:40 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:27:40 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:27:48 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:48 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:48 88214 /wp-admin/post.php?post=181&action=edit Caching disabled for logged in users on settings page.
13:27:48 88214 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:48 88214 /wp-admin/post.php?post=181&action=edit wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:48 88214 /wp-admin/post.php?post=181&action=edit In WP Cache Phase 2
13:27:48 88214 /wp-admin/post.php?post=181&action=edit Setting up WordPress actions
13:27:48 88214 /wp-admin/post.php?post=181&action=edit Not caching wp-admin requests.
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Caching disabled for logged in users on settings page.
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user In WP Cache Phase 2
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Setting up WordPress actions
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"who":"authors","per_page":"100","_locale":"user"}
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Created output buffer
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user In WP Cache Phase 2
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Setting up WordPress actions
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Created output buffer
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user REST API detected. Caching disabled.
13:27:52 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user REST API detected. Caching disabled.
13:27:52 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Caching disabled for logged in users on settings page.
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user In WP Cache Phase 2
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Setting up WordPress actions
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"per_page":"100","context":"edit","_locale":"user"}
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Created output buffer
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user REST API detected. Caching disabled.
13:27:52 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:27:58 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:58 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:58 88213 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:27:58 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:58 88213 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:58 88213 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:27:58 88213 /wp-admin/admin-ajax.php Setting up WordPress actions
13:27:58 88213 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:27:59 88283 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:59 88283 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88283 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:27:59 88283 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88283 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88283 /wp-admin/edit.php In WP Cache Phase 2
13:27:59 88283 /wp-admin/edit.php Setting up WordPress actions
13:27:59 88283 /wp-admin/edit.php Not caching wp-admin requests.
13:27:59 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:27:59 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88207 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:27:59 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88207 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:27:59 88207 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:27:59 88207 /wp-admin/admin-ajax.php Setting up WordPress actions
13:27:59 88207 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:28:00 88205 /wp-admin/post.php?post=161&action=edit wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:00 88205 /wp-admin/post.php?post=161&action=edit wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:00 88205 /wp-admin/post.php?post=161&action=edit Caching disabled for logged in users on settings page.
13:28:01 88205 /wp-admin/post.php?post=161&action=edit wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:01 88205 /wp-admin/post.php?post=161&action=edit wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:01 88205 /wp-admin/post.php?post=161&action=edit In WP Cache Phase 2
13:28:01 88205 /wp-admin/post.php?post=161&action=edit Setting up WordPress actions
13:28:01 88205 /wp-admin/post.php?post=161&action=edit Not caching wp-admin requests.
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user In WP Cache Phase 2
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user Setting up WordPress actions
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user Created output buffer
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user In WP Cache Phase 2
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user Setting up WordPress actions
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:28:04 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user Created output buffer
13:28:04 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:04 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Caching disabled for logged in users on settings page.
13:28:04 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:04 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:04 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user REST API detected. Caching disabled.
13:28:04 88209 /wp-json/wp/v2/media/162?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:05 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user REST API detected. Caching disabled.
13:28:05 88211 /wp-json/wp/v2/media/163?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user In WP Cache Phase 2
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Setting up WordPress actions
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"who":"authors","per_page":"100","_locale":"user"}
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Created output buffer
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user In WP Cache Phase 2
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Setting up WordPress actions
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Created output buffer
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user REST API detected. Caching disabled.
13:28:05 88208 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user REST API detected. Caching disabled.
13:28:05 88206 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user In WP Cache Phase 2
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Setting up WordPress actions
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"per_page":"100","context":"edit","_locale":"user"}
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Created output buffer
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user REST API detected. Caching disabled.
13:28:05 88215 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:11 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:11 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88213 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:28:11 88213 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88213 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88213 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:28:11 88213 /wp-admin/admin-ajax.php Setting up WordPress actions
13:28:11 88213 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:28:11 88210 /wp-admin/post-new.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:11 88210 /wp-admin/post-new.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88210 /wp-admin/post-new.php Caching disabled for logged in users on settings page.
13:28:11 88210 /wp-admin/post-new.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88210 /wp-admin/post-new.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:11 88210 /wp-admin/post-new.php In WP Cache Phase 2
13:28:11 88210 /wp-admin/post-new.php Setting up WordPress actions
13:28:11 88210 /wp-admin/post-new.php Not caching wp-admin requests.
13:28:14 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:14 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:14 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Caching disabled for logged in users on settings page.
13:28:14 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:14 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:14 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user In WP Cache Phase 2
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Setting up WordPress actions
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"who":"authors","per_page":"100","_locale":"user"}
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Created output buffer
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user In WP Cache Phase 2
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Setting up WordPress actions
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Created output buffer
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user REST API detected. Caching disabled.
13:28:15 88214 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user REST API detected. Caching disabled.
13:28:15 88204 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user In WP Cache Phase 2
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Setting up WordPress actions
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"per_page":"100","context":"edit","_locale":"user"}
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Created output buffer
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user REST API detected. Caching disabled.
13:28:15 88209 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:18 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:18 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88211 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:28:18 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88211 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88211 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:28:18 88211 /wp-admin/admin-ajax.php Setting up WordPress actions
13:28:18 88211 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:28:18 88208 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:18 88208 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88208 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:28:18 88208 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88208 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88208 /wp-admin/edit.php In WP Cache Phase 2
13:28:18 88208 /wp-admin/edit.php Setting up WordPress actions
13:28:18 88208 /wp-admin/edit.php Not caching wp-admin requests.
13:28:18 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:18 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:18 88206 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:28:19 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:19 88206 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:19 88206 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:28:19 88206 /wp-admin/admin-ajax.php Setting up WordPress actions
13:28:19 88206 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:28:20 88215 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:20 88215 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:20 88215 /wp-admin/post.php?post=181&action=edit Caching disabled for logged in users on settings page.
13:28:20 88215 /wp-admin/post.php?post=181&action=edit wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:20 88215 /wp-admin/post.php?post=181&action=edit wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:20 88215 /wp-admin/post.php?post=181&action=edit In WP Cache Phase 2
13:28:20 88215 /wp-admin/post.php?post=181&action=edit Setting up WordPress actions
13:28:20 88215 /wp-admin/post.php?post=181&action=edit Not caching wp-admin requests.
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Caching disabled for logged in users on settings page.
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user In WP Cache Phase 2
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Setting up WordPress actions
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"who":"authors","per_page":"100","_locale":"user"}
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user Created output buffer
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user In WP Cache Phase 2
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Setting up WordPress actions
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"context":"edit","_locale":"user"}
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user Created output buffer
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user REST API detected. Caching disabled.
13:28:23 88207 /wp-json/wp/v2/users/?who=authors&per_page=100&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user REST API detected. Caching disabled.
13:28:23 88210 /wp-json/wp/v2/taxonomies?context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:23 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:23 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:23 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Caching disabled for logged in users on settings page.
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user In WP Cache Phase 2
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Setting up WordPress actions
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Supercache caching disabled. Only using wp-cache. Non empty GET request. {"per_page":"100","context":"edit","_locale":"user"}
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user Created output buffer
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user REST API detected. Caching disabled.
13:28:24 88205 /wp-json/wp/v2/taxonomies?per_page=100&context=edit&_locale=user wp_cache_maybe_dynamic: returned $buffer
13:28:37 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:37 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88204 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:28:37 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88204 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88204 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:28:37 88204 /wp-admin/admin-ajax.php Setting up WordPress actions
13:28:37 88204 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:28:37 88214 /wp-admin/edit.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:37 88214 /wp-admin/edit.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88214 /wp-admin/edit.php Caching disabled for logged in users on settings page.
13:28:37 88214 /wp-admin/edit.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88214 /wp-admin/edit.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:37 88214 /wp-admin/edit.php In WP Cache Phase 2
13:28:37 88214 /wp-admin/edit.php Setting up WordPress actions
13:28:37 88214 /wp-admin/edit.php Not caching wp-admin requests.
13:28:38 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:28:38 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:28:38 88211 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:28:38 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:28:38 88211 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:28:38 88211 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:28:38 88211 /wp-admin/admin-ajax.php Setting up WordPress actions
13:28:38 88211 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:30:39 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:30:39 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:30:39 88283 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:30:39 88283 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:30:39 88283 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:30:39 88283 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:30:39 88283 /wp-admin/admin-ajax.php Setting up WordPress actions
13:30:39 88283 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 wp_cache_get_cookies_values: return: 
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 wp_cache_get_cookies_values: return: 
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 wp_cache_check_mobile: www.itishow.com80
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 In WP Cache Phase 2
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 Setting up WordPress actions
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 Not caching wp-admin requests.
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 maybe_stop_gc: GC flag not found. GC will go ahead..
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 Cache garbage collection.
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 GC completed. GC flag deleted.
13:30:39 88215 /wp-cron.php?doing_wp_cron=1545053439.5838990211486816406250 scheduled wp_cache_gc for 10 seconds time.
13:32:39 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:32:39 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:32:39 88207 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:32:39 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:32:39 88207 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:32:39 88207 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:32:39 88207 /wp-admin/admin-ajax.php Setting up WordPress actions
13:32:39 88207 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 wp_cache_get_cookies_values: return: 
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 wp_cache_get_cookies_values: return: 
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 wp_cache_check_mobile: www.itishow.com80
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 In WP Cache Phase 2
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 Setting up WordPress actions
13:32:40 88210 /wp-cron.php?doing_wp_cron=1545053559.5790541172027587890625 Not caching wp-admin requests.
13:34:39 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:34:39 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:34:39 88204 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:34:39 88204 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:34:39 88204 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:34:39 88204 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:34:39 88204 /wp-admin/admin-ajax.php Setting up WordPress actions
13:34:39 88204 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:36:39 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:36:39 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:36:39 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:36:39 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:36:39 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:36:39 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:36:39 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:36:39 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 wp_cache_get_cookies_values: return: 
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 wp_cache_get_cookies_values: return: 
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 wp_cache_check_mobile: www.itishow.com80
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 In WP Cache Phase 2
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 Setting up WordPress actions
13:36:39 88214 /wp-cron.php?doing_wp_cron=1545053799.5947420597076416015625 Not caching wp-admin requests.
13:38:39 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:38:39 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:38:39 88211 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:38:39 88211 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:38:39 88211 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:38:39 88211 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:38:39 88211 /wp-admin/admin-ajax.php Setting up WordPress actions
13:38:39 88211 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:40:41 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:40:41 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:40:41 88206 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:40:41 88206 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:40:41 88206 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:40:41 88206 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:40:41 88206 /wp-admin/admin-ajax.php Setting up WordPress actions
13:40:41 88206 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 wp_cache_get_cookies_values: return: 
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 wp_cache_get_cookies_values: return: 
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 wp_cache_check_mobile: www.itishow.com80
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 In WP Cache Phase 2
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 Setting up WordPress actions
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 Not caching wp-admin requests.
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 maybe_stop_gc: GC flag not found. GC will go ahead..
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 Cache garbage collection.
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 GC completed. GC flag deleted.
13:40:42 88208 /wp-cron.php?doing_wp_cron=1545054042.0195419788360595703125 scheduled wp_cache_gc for 10 seconds time.
13:42:24 88213 / wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:42:24 88213 / wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:42:24 88213 / Caching disabled for logged in users on settings page.
13:42:24 88213 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:42:24 88213 / wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:42:24 88213 / In WP Cache Phase 2
13:42:24 88213 / Setting up WordPress actions
13:42:24 88213 / Created output buffer
13:42:24 88213 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:42:24 88213 / Output buffer callback
13:42:24 88213 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:42:24 88213 / wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:42:24 88213 / Not caching for known user.
13:42:24 88213 / Cache is not enabled. Sending buffer to browser.
13:42:24 88213 / wp_cache_maybe_dynamic: returned $buffer
13:42:24 88213 / wp_cache_shutdown_callback: collecting meta data.
13:42:24 88213 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:42:24 88213 / Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:42:39 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:42:39 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:42:39 88205 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:42:39 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:42:39 88205 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:42:39 88205 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:42:39 88205 /wp-admin/admin-ajax.php Setting up WordPress actions
13:42:39 88205 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 wp_cache_get_cookies_values: return: 
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 wp_cache_get_cookies_values: return: 
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 wp_cache_check_mobile: www.itishow.com80
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 In WP Cache Phase 2
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 Setting up WordPress actions
13:42:39 88204 /wp-cron.php?doing_wp_cron=1545054159.5963110923767089843750 Not caching wp-admin requests.
13:43:22 88214 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:43:22 88214 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:43:22 88214 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:43:23 88214 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:43:23 88214 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:43:23 88214 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:43:23 88214 /wp-admin/admin-ajax.php Setting up WordPress actions
13:43:23 88214 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:43:37 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:43:37 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:43:37 88209 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:43:38 88209 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:43:38 88209 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:43:38 88209 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:43:38 88209 /wp-admin/admin-ajax.php Setting up WordPress actions
13:43:38 88209 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:43:45 88211 /wp-admin/upload.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:43:45 88211 /wp-admin/upload.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:43:45 88211 /wp-admin/upload.php Caching disabled for logged in users on settings page.
13:43:45 88211 /wp-admin/upload.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:43:45 88211 /wp-admin/upload.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:43:45 88211 /wp-admin/upload.php In WP Cache Phase 2
13:43:45 88211 /wp-admin/upload.php Setting up WordPress actions
13:43:45 88211 /wp-admin/upload.php Not caching wp-admin requests.
13:43:46 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:43:46 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:43:46 88207 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:43:47 88207 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:43:47 88207 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:43:47 88207 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:43:47 88207 /wp-admin/admin-ajax.php Setting up WordPress actions
13:43:47 88207 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:44:47 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:44:47 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:44:47 88205 /wp-admin/admin-ajax.php Caching disabled for logged in users on settings page.
13:44:47 88205 /wp-admin/admin-ajax.php wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:44:47 88205 /wp-admin/admin-ajax.php wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:44:47 88205 /wp-admin/admin-ajax.php In WP Cache Phase 2
13:44:47 88205 /wp-admin/admin-ajax.php Setting up WordPress actions
13:44:47 88205 /wp-admin/admin-ajax.php Not caching wp-admin requests.
13:45:19 88214 /blog/category/bs/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:45:19 88214 /blog/category/bs/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:45:19 88214 /blog/category/bs/ Caching disabled for logged in users on settings page.
13:45:19 88214 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:19 88214 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:45:19 88214 /blog/category/bs/ In WP Cache Phase 2
13:45:19 88214 /blog/category/bs/ Setting up WordPress actions
13:45:19 88214 /blog/category/bs/ Created output buffer
13:45:19 88214 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:19 88214 /blog/category/bs/ Output buffer callback
13:45:19 88214 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:19 88214 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:19 88214 /blog/category/bs/ Not caching for known user.
13:45:19 88214 /blog/category/bs/ Cache is not enabled. Sending buffer to browser.
13:45:19 88214 /blog/category/bs/ wp_cache_maybe_dynamic: returned $buffer
13:45:19 88214 /blog/category/bs/ wp_cache_shutdown_callback: collecting meta data.
13:45:19 88214 /blog/category/bs/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:19 88214 /blog/category/bs/ Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:45:21 88209 /blog/category/tp/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:45:21 88209 /blog/category/tp/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:45:21 88209 /blog/category/tp/ Caching disabled for logged in users on settings page.
13:45:22 88209 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:22 88209 /blog/category/tp/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:45:22 88209 /blog/category/tp/ In WP Cache Phase 2
13:45:22 88209 /blog/category/tp/ Setting up WordPress actions
13:45:22 88209 /blog/category/tp/ Created output buffer
13:45:22 88209 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:22 88209 /blog/category/tp/ Output buffer callback
13:45:22 88209 /blog/category/tp/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:22 88209 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:22 88209 /blog/category/tp/ Not caching for known user.
13:45:22 88209 /blog/category/tp/ Cache is not enabled. Sending buffer to browser.
13:45:22 88209 /blog/category/tp/ wp_cache_maybe_dynamic: returned $buffer
13:45:22 88209 /blog/category/tp/ wp_cache_shutdown_callback: collecting meta data.
13:45:22 88209 /blog/category/tp/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:22 88209 /blog/category/tp/ Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:45:26 88210 /blog/category/bs/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:45:26 88210 /blog/category/bs/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:45:26 88210 /blog/category/bs/ Caching disabled for logged in users on settings page.
13:45:27 88210 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:27 88210 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:45:27 88210 /blog/category/bs/ In WP Cache Phase 2
13:45:27 88210 /blog/category/bs/ Setting up WordPress actions
13:45:27 88210 /blog/category/bs/ Created output buffer
13:45:27 88210 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:27 88210 /blog/category/bs/ Output buffer callback
13:45:27 88210 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:27 88210 /blog/category/bs/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:27 88210 /blog/category/bs/ Not caching for known user.
13:45:27 88210 /blog/category/bs/ Cache is not enabled. Sending buffer to browser.
13:45:27 88210 /blog/category/bs/ wp_cache_maybe_dynamic: returned $buffer
13:45:27 88210 /blog/category/bs/ wp_cache_shutdown_callback: collecting meta data.
13:45:27 88210 /blog/category/bs/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:27 88210 /blog/category/bs/ Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:45:30 88215 /blog/category/tp/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:45:30 88215 /blog/category/tp/ wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:45:30 88215 /blog/category/tp/ Caching disabled for logged in users on settings page.
13:45:30 88215 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:30 88215 /blog/category/tp/ wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:45:30 88215 /blog/category/tp/ In WP Cache Phase 2
13:45:30 88215 /blog/category/tp/ Setting up WordPress actions
13:45:30 88215 /blog/category/tp/ Created output buffer
13:45:30 88215 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:30 88215 /blog/category/tp/ Output buffer callback
13:45:30 88215 /blog/category/tp/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:30 88215 /blog/category/tp/ wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:30 88215 /blog/category/tp/ Not caching for known user.
13:45:30 88215 /blog/category/tp/ Cache is not enabled. Sending buffer to browser.
13:45:30 88215 /blog/category/tp/ wp_cache_maybe_dynamic: returned $buffer
13:45:30 88215 /blog/category/tp/ wp_cache_shutdown_callback: collecting meta data.
13:45:30 88215 /blog/category/tp/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:30 88215 /blog/category/tp/ Did not write meta file: meta-wp-cache-d39a462a183a0c4c5e23958459a2e9a8.php ** *1* *1*
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: wordpress_logged_in_c8a395ee104d8b1c909d805684cbd559
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 wp_cache_get_cookies_values: return: 730309ef3e7cdccaf1b670f0318c45c2
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 Caching disabled for logged in users on settings page.
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 wp_cache_get_cookies_values: cached: 730309ef3e7cdccaf1b670f0318c45c2
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 wp_cache_check_mobile: www.itishow.com80730309ef3e7cdccaf1b670f0318c45c2
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 In WP Cache Phase 2
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 Setting up WordPress actions
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"_wpnonce":"dd4ebf9030"}
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 Created output buffer
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 Redirect detected. Caching disabled.
13:45:32 88208 /logout/?_wpnonce=dd4ebf9030 wp_cache_maybe_dynamic: returned $buffer
13:45:32 88207 /login/?loggedout=true wp_cache_get_cookies_values: return: 
13:45:32 88207 /login/?loggedout=true wp_cache_get_cookies_values: return: 
13:45:32 88207 /login/?loggedout=true wp_cache_check_mobile: www.itishow.com80/login/?loggedout=true
13:45:32 88207 /login/?loggedout=true supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/
13:45:32 88207 /login/?loggedout=true wp_cache_check_mobile: -https
13:45:32 88207 /login/?loggedout=true No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/index-https.html
13:45:32 88207 /login/?loggedout=true wp_cache_get_cookies_values: return: 
13:45:32 88207 /login/?loggedout=true wp_cache_check_mobile: www.itishow.com80/login/?loggedout=true
13:45:32 88207 /login/?loggedout=true In WP Cache Phase 2
13:45:32 88207 /login/?loggedout=true Setting up WordPress actions
13:45:32 88207 /login/?loggedout=true Supercache caching disabled. Only using wp-cache. Non empty GET request. {"loggedout":"true"}
13:45:32 88207 /login/?loggedout=true Created output buffer
13:45:33 88207 /login/?loggedout=true Output buffer callback
13:45:33 88207 /login/?loggedout=true Supercache disabled: GET or feed detected or disabled by config.
13:45:33 88207 /login/?loggedout=true wp_cache_get_cookies_values: return: 
13:45:33 88207 /login/?loggedout=true Writing dynamic buffer to wpcache file.
13:45:33 88207 /login/?loggedout=true Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
13:45:33 88207 /login/?loggedout=true Sending buffer to browser
13:45:33 88207 /login/?loggedout=true wp_cache_shutdown_callback: collecting meta data.
13:45:33 88207 /login/?loggedout=true Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:33 88207 /login/?loggedout=true Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/meta-wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
13:45:34 88211 / wp_cache_get_cookies_values: return: 
13:45:34 88211 / wp_cache_get_cookies_values: return: 
13:45:34 88211 / wp_cache_check_mobile: www.itishow.com80/
13:45:34 88211 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:34 88211 / wp_cache_check_mobile: -https
13:45:34 88211 / No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
13:45:35 88211 / wp_cache_get_cookies_values: return: 
13:45:35 88211 / wp_cache_check_mobile: www.itishow.com80/
13:45:35 88211 / In WP Cache Phase 2
13:45:35 88211 / Setting up WordPress actions
13:45:35 88211 / Created output buffer
13:45:35 88211 / wp_cache_get_cookies_values: return: 
13:45:35 88211 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
13:45:35 88211 / Output buffer callback
13:45:35 88211 / wp_cache_get_cookies_values: return: 
13:45:35 88211 / Writing dynamic buffer to wpcache file.
13:45:35 88211 / Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
13:45:35 88211 / Sending buffer to browser
13:45:35 88211 / wp_cache_shutdown_callback: collecting meta data.
13:45:35 88211 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
13:45:35 88211 / Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
13:57:08 88204 /tag/alert/ wp_cache_get_cookies_values: return: 
13:57:08 88204 /tag/alert/ No wp-cache file served as user agent rejected.
13:57:08 88204 /tag/alert/ wp_cache_get_cookies_values: return: 
13:57:08 88204 /tag/alert/ wp_cache_check_mobile: www.itishow.com80/tag/alert/
13:57:08 88204 /tag/alert/ In WP Cache Phase 2
13:57:08 88204 /tag/alert/ Setting up WordPress actions
13:57:08 88204 /tag/alert/ Created output buffer
13:57:08 88204 /tag/alert/ wp_cache_get_cookies_values: return: 
13:57:08 88204 /tag/alert/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/alert/
13:57:08 88204 /tag/alert/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/alert/
13:57:08 88204 /tag/alert/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/alert/
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 wp_cache_get_cookies_values: return: 
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 wp_cache_get_cookies_values: return: 
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 wp_cache_check_mobile: www.itishow.com80
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 In WP Cache Phase 2
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Setting up WordPress actions
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Not caching wp-admin requests.
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 maybe_stop_gc: GC flag not found. GC will go ahead..
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Cache garbage collection.
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Deleting /var/www/html/wordpress/wp-content/cache/0.html, older than 1800 seconds
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Deleting /var/www/html/wordpress/wp-content/cache/preload_permalink.txt, older than 1800 seconds
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Deleting /var/www/html/wordpress/wp-content/cache/2.html, older than 1800 seconds
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Deleting /var/www/html/wordpress/wp-content/cache/view_ba784aac703f8cb25ae41f0e330aa9ae.php, older than 1800 seconds
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 Deleting /var/www/html/wordpress/wp-content/cache/1.html, older than 1800 seconds
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 GC completed. GC flag deleted.
13:57:08 88209 /wp-cron.php?doing_wp_cron=1545055028.2356379032135009765625 scheduled wp_cache_gc for 10 seconds time.
13:57:08 88204 /tag/alert/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
13:57:08 88204 /tag/alert/ wp_cache_maybe_dynamic: returned $buffer
15:43:08 88213 / wp_cache_get_cookies_values: return: 
15:43:08 88213 / wp_cache_get_cookies_values: return: 
15:43:08 88213 / wp_cache_check_mobile: www.itishow.com80/
15:43:08 88213 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
15:43:08 88213 / wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
15:43:08 88213 / Serving wp-cache dynamic file
15:43:08 88213 / exit request
15:49:13 88213 /?post=46 wp_cache_get_cookies_values: return: 
15:49:13 88213 /?post=46 wp_cache_get_cookies_values: return: 
15:49:13 88213 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
15:49:13 88213 /?post=46 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
15:49:13 88213 /?post=46 wp_cache_check_mobile: -https
15:49:13 88213 /?post=46 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
15:49:13 88213 /?post=46 wp_cache_get_cookies_values: return: 
15:49:13 88213 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
15:49:13 88213 /?post=46 In WP Cache Phase 2
15:49:13 88213 /?post=46 Setting up WordPress actions
15:49:13 88213 /?post=46 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"46"}
15:49:13 88213 /?post=46 Created output buffer
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 wp_cache_get_cookies_values: return: 
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 wp_cache_get_cookies_values: return: 
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 wp_cache_check_mobile: www.itishow.com80
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 In WP Cache Phase 2
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 Setting up WordPress actions
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 Not caching wp-admin requests.
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 maybe_stop_gc: GC flag not found. GC will go ahead..
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 Cache garbage collection.
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 GC completed. GC flag deleted.
15:49:13 88206 /wp-cron.php?doing_wp_cron=1545061753.4330229759216308593750 scheduled wp_cache_gc for 10 seconds time.
15:49:13 88213 /?post=46 Output buffer callback
15:49:13 88213 /?post=46 Supercache disabled: GET or feed detected or disabled by config.
15:49:13 88213 /?post=46 wp_cache_get_cookies_values: return: 
15:49:13 88213 /?post=46 Writing dynamic buffer to wpcache file.
15:49:13 88213 /?post=46 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
15:49:13 88213 /?post=46 Sending buffer to browser
15:49:13 88213 /?post=46 wp_cache_shutdown_callback: collecting meta data.
15:49:13 88213 /?post=46 Sending 'Content-Type: text/html; charset="UTF-8"' header.
15:49:13 88213 /?post=46 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
15:49:15 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
15:49:15 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
15:49:15 88215 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
15:49:15 88215 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
15:49:15 88215 /blog/category/bs/ wp_cache_check_mobile: -https
15:49:15 88215 /blog/category/bs/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/index-https.html
15:49:16 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
15:49:16 88215 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
15:49:16 88215 /blog/category/bs/ In WP Cache Phase 2
15:49:16 88215 /blog/category/bs/ Setting up WordPress actions
15:49:16 88215 /blog/category/bs/ Created output buffer
15:49:16 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
15:49:16 88215 /blog/category/bs/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
15:49:16 88215 /blog/category/bs/ Output buffer callback
15:49:16 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
15:49:16 88215 /blog/category/bs/ Writing dynamic buffer to wpcache file.
15:49:16 88215 /blog/category/bs/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
15:49:16 88215 /blog/category/bs/ Sending buffer to browser
15:49:16 88215 /blog/category/bs/ wp_cache_shutdown_callback: collecting meta data.
15:49:16 88215 /blog/category/bs/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
15:49:16 88215 /blog/category/bs/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/meta-wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
15:49:19 88211 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
15:49:19 88211 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
15:49:19 88211 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
15:49:19 88211 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
15:49:19 88211 /blog/category/bs/feed/ wp_cache_check_mobile: -https
15:49:19 88211 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
15:49:19 88211 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
15:49:19 88211 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
15:49:19 88211 /blog/category/bs/feed/ In WP Cache Phase 2
15:49:19 88211 /blog/category/bs/feed/ Setting up WordPress actions
15:49:19 88211 /blog/category/bs/feed/ Created output buffer
15:49:19 88211 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
15:49:19 88211 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
15:49:19 88211 /blog/category/bs/feed/ Output buffer callback
15:49:19 88211 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.164 seconds.
15:49:19 88211 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
15:49:19 88211 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
15:49:19 88211 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-17 23:49:19
15:49:19 88211 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
15:49:19 88211 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
15:49:19 88211 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
15:49:19 88211 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
15:49:19 88211 /blog/category/bs/feed/ Sending buffer to browser
15:49:19 88211 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
15:49:19 88211 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
15:49:19 88211 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
15:49:19 88211 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
15:49:21 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
15:49:27 88205 /wp-comments-post.php wp_cache_get_cookies_values: return: 
15:49:27 88205 /wp-comments-post.php wp_cache_get_cookies_values: return: 
15:49:27 88205 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
15:49:27 88205 /wp-comments-post.php In WP Cache Phase 2
15:49:27 88205 /wp-comments-post.php Setting up WordPress actions
15:49:27 88205 /wp-comments-post.php Created output buffer
15:49:31 88205 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
15:49:31 88205 /wp-comments-post.php Post 181 changed. Update cache.
15:49:31 88205 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
15:49:31 88205 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
15:49:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
15:49:31 88205 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
15:49:31 88205 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
15:49:31 88205 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
15:49:31 88205 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
15:49:31 88205 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
15:49:31 88205 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
15:49:31 88205 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
15:49:31 88205 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
15:49:31 88205 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
15:49:31 88205 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
15:49:31 88205 /wp-comments-post.php Not caching POST request.
15:49:31 88205 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
15:49:42 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
15:49:43 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: -https
15:50:12 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/index-https.html
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing dynamic buffer to wpcache file.
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending buffer to browser
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
15:50:13 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Serving wp-cache dynamic file
16:10:48 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ exit request
16:40:03 88210 / wp_cache_get_cookies_values: return: 
16:40:03 88210 / No wp-cache file served as user agent rejected.
16:40:03 88210 / wp_cache_get_cookies_values: return: 
16:40:03 88210 / wp_cache_check_mobile: www.itishow.com80/
16:40:03 88210 / In WP Cache Phase 2
16:40:03 88210 / Setting up WordPress actions
16:40:03 88210 / Created output buffer
16:40:03 88210 / wp_cache_get_cookies_values: return: 
16:40:03 88210 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
16:40:03 88210 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 wp_cache_get_cookies_values: return: 
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 wp_cache_get_cookies_values: return: 
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 wp_cache_check_mobile: www.itishow.com80
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 In WP Cache Phase 2
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 Setting up WordPress actions
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 Not caching wp-admin requests.
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 maybe_stop_gc: GC flag not found. GC will go ahead..
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 Cache garbage collection.
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 GC completed. GC flag deleted.
16:40:03 88214 /wp-cron.php?doing_wp_cron=1545064803.1902821063995361328125 scheduled wp_cache_gc for 10 seconds time.
16:40:03 88210 / USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
16:40:03 88210 / wp_cache_maybe_dynamic: returned $buffer
16:52:34 88283 /?post=33 wp_cache_get_cookies_values: return: 
16:52:34 88283 /?post=33 wp_cache_get_cookies_values: return: 
16:52:34 88283 /?post=33 wp_cache_check_mobile: www.itishow.com80/?post=33
16:52:34 88283 /?post=33 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
16:52:34 88283 /?post=33 wp_cache_check_mobile: -https
16:52:34 88283 /?post=33 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
16:52:35 88283 /?post=33 wp_cache_get_cookies_values: return: 
16:52:35 88283 /?post=33 wp_cache_check_mobile: www.itishow.com80/?post=33
16:52:35 88283 /?post=33 In WP Cache Phase 2
16:52:35 88283 /?post=33 Setting up WordPress actions
16:52:35 88283 /?post=33 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"33"}
16:52:35 88283 /?post=33 Created output buffer
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 wp_cache_get_cookies_values: return: 
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 wp_cache_get_cookies_values: return: 
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 wp_cache_check_mobile: www.itishow.com80
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 In WP Cache Phase 2
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 Setting up WordPress actions
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 Not caching wp-admin requests.
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 maybe_stop_gc: GC flag not found. GC will go ahead..
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 Cache garbage collection.
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 GC completed. GC flag deleted.
16:52:35 88208 /wp-cron.php?doing_wp_cron=1545065555.1279768943786621093750 scheduled wp_cache_gc for 10 seconds time.
16:52:35 88283 /?post=33 Output buffer callback
16:52:35 88283 /?post=33 Supercache disabled: GET or feed detected or disabled by config.
16:52:35 88283 /?post=33 wp_cache_get_cookies_values: return: 
16:52:35 88283 /?post=33 Writing dynamic buffer to wpcache file.
16:52:35 88283 /?post=33 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ae3091f89bfa2aa89c794a58c4d1a32c.php
16:52:35 88283 /?post=33 Sending buffer to browser
16:52:35 88283 /?post=33 wp_cache_shutdown_callback: collecting meta data.
16:52:35 88283 /?post=33 Sending 'Content-Type: text/html; charset="UTF-8"' header.
16:52:35 88283 /?post=33 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ae3091f89bfa2aa89c794a58c4d1a32c.php
16:52:36 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
16:52:36 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
16:52:36 88204 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
16:52:36 88204 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
16:52:36 88204 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
16:52:36 88204 /blog/category/bs/ Serving wp-cache dynamic file
16:52:36 88204 /blog/category/bs/ exit request
16:52:37 88206 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
16:52:37 88206 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
16:52:37 88206 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
16:52:37 88206 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
16:52:37 88206 /blog/category/bs/feed/ wp_cache_check_mobile: -https
16:52:37 88206 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
16:52:37 88206 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
16:52:37 88206 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
16:52:37 88206 /blog/category/bs/feed/ In WP Cache Phase 2
16:52:37 88206 /blog/category/bs/feed/ Setting up WordPress actions
16:52:37 88206 /blog/category/bs/feed/ Created output buffer
16:52:37 88206 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
16:52:37 88206 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
16:52:37 88206 /blog/category/bs/feed/ Output buffer callback
16:52:37 88206 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.181 seconds.
16:52:37 88206 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
16:52:37 88206 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
16:52:37 88206 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 00:52:37
16:52:37 88206 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
16:52:37 88206 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
16:52:37 88206 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
16:52:37 88206 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
16:52:37 88206 /blog/category/bs/feed/ Sending buffer to browser
16:52:37 88206 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
16:52:37 88206 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
16:52:37 88206 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
16:52:37 88206 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
16:52:38 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
16:52:39 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
16:52:40 88213 /wp-comments-post.php wp_cache_get_cookies_values: return: 
16:52:40 88213 /wp-comments-post.php wp_cache_get_cookies_values: return: 
16:52:40 88213 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
16:52:40 88213 /wp-comments-post.php In WP Cache Phase 2
16:52:40 88213 /wp-comments-post.php Setting up WordPress actions
16:52:40 88213 /wp-comments-post.php Created output buffer
16:52:41 88213 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
16:52:41 88213 /wp-comments-post.php Post 181 changed. Update cache.
16:52:41 88213 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
16:52:41 88213 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
16:52:41 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
16:52:41 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
16:52:41 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
16:52:41 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
16:52:41 88213 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
16:52:41 88213 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
16:52:41 88213 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
16:52:41 88213 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
16:52:41 88213 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
16:52:41 88213 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
16:52:41 88213 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ae3091f89bfa2aa89c794a58c4d1a32c.php
16:52:41 88213 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ae3091f89bfa2aa89c794a58c4d1a32c.php
16:52:41 88213 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
16:52:41 88213 /wp-comments-post.php Not caching POST request.
16:52:41 88213 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
16:52:42 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
17:02:21 88207 /robots.txt wp_cache_get_cookies_values: return: 
17:02:21 88207 /robots.txt wp_cache_get_cookies_values: return: 
17:02:21 88207 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
17:02:21 88207 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
17:02:21 88207 /robots.txt wp_cache_check_mobile: -https
17:02:21 88207 /robots.txt No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/index-https.html
17:02:21 88207 /robots.txt wp_cache_get_cookies_values: return: 
17:02:21 88207 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
17:02:21 88207 /robots.txt In WP Cache Phase 2
17:02:21 88207 /robots.txt Setting up WordPress actions
17:02:21 88207 /robots.txt Created output buffer
17:02:21 88207 /robots.txt wp_cache_get_cookies_values: return: 
17:02:21 88207 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
17:02:21 88207 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
17:02:21 88207 /robots.txt robots.txt detected. Caching disabled.
17:02:21 88207 /robots.txt wp_cache_maybe_dynamic: returned $buffer
18:02:22 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:02:22 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:02:22 88215 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
18:02:22 88215 /?post=20&comment-page=16 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:02:22 88215 /?post=20&comment-page=16 wp_cache_check_mobile: -https
18:02:22 88215 /?post=20&comment-page=16 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
18:02:22 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:02:22 88215 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
18:02:22 88215 /?post=20&comment-page=16 In WP Cache Phase 2
18:02:22 88215 /?post=20&comment-page=16 Setting up WordPress actions
18:02:22 88215 /?post=20&comment-page=16 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"20","comment-page":"16"}
18:02:22 88215 /?post=20&comment-page=16 Created output buffer
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 wp_cache_get_cookies_values: return: 
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 wp_cache_get_cookies_values: return: 
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 wp_cache_check_mobile: www.itishow.com80
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 In WP Cache Phase 2
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 Setting up WordPress actions
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 Not caching wp-admin requests.
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 maybe_stop_gc: GC flag not found. GC will go ahead..
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 Cache garbage collection.
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 GC completed. GC flag deleted.
18:02:22 88209 /wp-cron.php?doing_wp_cron=1545069742.2240159511566162109375 scheduled wp_cache_gc for 10 seconds time.
18:02:22 88215 /?post=20&comment-page=16 Output buffer callback
18:02:22 88215 /?post=20&comment-page=16 Supercache disabled: GET or feed detected or disabled by config.
18:02:22 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:02:22 88215 /?post=20&comment-page=16 Writing dynamic buffer to wpcache file.
18:02:22 88215 /?post=20&comment-page=16 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:02:22 88215 /?post=20&comment-page=16 Sending buffer to browser
18:02:22 88215 /?post=20&comment-page=16 wp_cache_shutdown_callback: collecting meta data.
18:02:22 88215 /?post=20&comment-page=16 Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:02:22 88215 /?post=20&comment-page=16 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:02:24 88210 /blog/category/bs/ wp_cache_get_cookies_values: return: 
18:02:24 88210 /blog/category/bs/ wp_cache_get_cookies_values: return: 
18:02:24 88210 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
18:02:24 88210 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
18:02:24 88210 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
18:02:24 88210 /blog/category/bs/ Serving wp-cache dynamic file
18:02:24 88210 /blog/category/bs/ exit request
18:02:27 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:02:27 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:02:27 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
18:02:27 88205 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
18:02:27 88205 /blog/category/bs/feed/ wp_cache_check_mobile: -https
18:02:27 88205 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
18:02:27 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:02:27 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
18:02:27 88205 /blog/category/bs/feed/ In WP Cache Phase 2
18:02:27 88205 /blog/category/bs/feed/ Setting up WordPress actions
18:02:27 88205 /blog/category/bs/feed/ Created output buffer
18:02:27 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:02:27 88205 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
18:02:27 88205 /blog/category/bs/feed/ Output buffer callback
18:02:27 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.167 seconds.
18:02:27 88205 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
18:02:27 88205 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
18:02:27 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 02:02:27
18:02:27 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
18:02:27 88205 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
18:02:27 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
18:02:27 88205 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:02:27 88205 /blog/category/bs/feed/ Sending buffer to browser
18:02:27 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
18:02:27 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
18:02:27 88205 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
18:02:27 88205 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:02:29 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:02:31 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
18:02:31 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
18:02:31 88208 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
18:02:31 88208 /wp-comments-post.php In WP Cache Phase 2
18:02:31 88208 /wp-comments-post.php Setting up WordPress actions
18:02:31 88208 /wp-comments-post.php Created output buffer
18:02:35 88208 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
18:02:35 88208 /wp-comments-post.php Post 181 changed. Update cache.
18:02:35 88208 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:02:35 88208 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
18:02:35 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
18:02:35 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:02:35 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
18:02:35 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:02:35 88208 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:02:35 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:02:35 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:02:35 88208 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
18:02:35 88208 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
18:02:35 88208 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
18:02:35 88208 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:02:35 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:02:35 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:02:35 88208 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
18:02:35 88208 /wp-comments-post.php Not caching POST request.
18:02:35 88208 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:02:37 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: -https
18:03:34 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/index-https.html
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing dynamic buffer to wpcache file.
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending buffer to browser
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:03:35 88206 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
18:18:48 88213 /?author=1&page=2 wp_cache_get_cookies_values: return: 
18:18:48 88213 /?author=1&page=2 No wp-cache file served as user agent rejected.
18:18:48 88213 /?author=1&page=2 wp_cache_get_cookies_values: return: 
18:18:48 88213 /?author=1&page=2 wp_cache_check_mobile: www.itishow.com80/?author=1&page=2
18:18:48 88213 /?author=1&page=2 In WP Cache Phase 2
18:18:48 88213 /?author=1&page=2 Setting up WordPress actions
18:18:48 88213 /?author=1&page=2 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"author":"1","page":"2"}
18:18:48 88213 /?author=1&page=2 Created output buffer
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 wp_cache_get_cookies_values: return: 
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 wp_cache_get_cookies_values: return: 
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 wp_cache_check_mobile: www.itishow.com80
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 In WP Cache Phase 2
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 Setting up WordPress actions
18:18:48 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 Not caching wp-admin requests.
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 maybe_stop_gc: GC flag not found. GC will go ahead..
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 Cache garbage collection.
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 GC completed. GC flag deleted.
18:18:49 88207 /wp-cron.php?doing_wp_cron=1545070728.8030691146850585937500 scheduled wp_cache_gc for 10 seconds time.
18:18:49 88213 /?author=1&page=2 USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
18:18:49 88213 /?author=1&page=2 wp_cache_maybe_dynamic: returned $buffer
18:18:49 88211 /blog/author/admin/?page=2 wp_cache_get_cookies_values: return: 
18:18:49 88211 /blog/author/admin/?page=2 No wp-cache file served as user agent rejected.
18:18:49 88211 /blog/author/admin/?page=2 wp_cache_get_cookies_values: return: 
18:18:49 88211 /blog/author/admin/?page=2 wp_cache_check_mobile: www.itishow.com80/blog/author/admin/?page=2
18:18:49 88211 /blog/author/admin/?page=2 In WP Cache Phase 2
18:18:49 88211 /blog/author/admin/?page=2 Setting up WordPress actions
18:18:49 88211 /blog/author/admin/?page=2 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"page":"2"}
18:18:49 88211 /blog/author/admin/?page=2 Created output buffer
18:18:49 88211 /blog/author/admin/?page=2 USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
18:18:49 88211 /blog/author/admin/?page=2 wp_cache_maybe_dynamic: returned $buffer
18:26:49 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:26:49 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:26:49 88215 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
18:26:49 88215 /?post=20&comment-page=16 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:26:49 88215 /?post=20&comment-page=16 wp_cache_check_mobile: -https
18:26:49 88215 /?post=20&comment-page=16 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
18:26:49 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:26:49 88215 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
18:26:49 88215 /?post=20&comment-page=16 In WP Cache Phase 2
18:26:49 88215 /?post=20&comment-page=16 Setting up WordPress actions
18:26:49 88215 /?post=20&comment-page=16 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"20","comment-page":"16"}
18:26:49 88215 /?post=20&comment-page=16 Created output buffer
18:26:49 88215 /?post=20&comment-page=16 Output buffer callback
18:26:49 88215 /?post=20&comment-page=16 Supercache disabled: GET or feed detected or disabled by config.
18:26:49 88215 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
18:26:49 88215 /?post=20&comment-page=16 Writing dynamic buffer to wpcache file.
18:26:49 88215 /?post=20&comment-page=16 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:26:49 88215 /?post=20&comment-page=16 Sending buffer to browser
18:26:49 88215 /?post=20&comment-page=16 wp_cache_shutdown_callback: collecting meta data.
18:26:49 88215 /?post=20&comment-page=16 Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:26:49 88215 /?post=20&comment-page=16 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:26:51 88210 /blog/category/bs/ wp_cache_get_cookies_values: return: 
18:26:51 88210 /blog/category/bs/ wp_cache_get_cookies_values: return: 
18:26:51 88210 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
18:26:51 88210 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
18:26:51 88210 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
18:26:51 88210 /blog/category/bs/ Serving wp-cache dynamic file
18:26:51 88210 /blog/category/bs/ exit request
18:26:53 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:26:53 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:26:53 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
18:26:53 88205 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
18:26:53 88205 /blog/category/bs/feed/ wp_cache_check_mobile: -https
18:26:53 88205 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
18:26:53 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:26:53 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
18:26:53 88205 /blog/category/bs/feed/ In WP Cache Phase 2
18:26:53 88205 /blog/category/bs/feed/ Setting up WordPress actions
18:26:53 88205 /blog/category/bs/feed/ Created output buffer
18:26:53 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
18:26:53 88205 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
18:26:53 88205 /blog/category/bs/feed/ Output buffer callback
18:26:53 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.164 seconds.
18:26:53 88205 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
18:26:53 88205 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
18:26:53 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 02:26:53
18:26:53 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
18:26:53 88205 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
18:26:53 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
18:26:53 88205 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:26:53 88205 /blog/category/bs/feed/ Sending buffer to browser
18:26:53 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
18:26:53 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
18:26:53 88205 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
18:26:53 88205 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:26:54 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:26:56 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
18:26:56 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
18:26:56 88208 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
18:26:56 88208 /wp-comments-post.php In WP Cache Phase 2
18:26:56 88208 /wp-comments-post.php Setting up WordPress actions
18:26:56 88208 /wp-comments-post.php Created output buffer
18:27:00 88208 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
18:27:00 88208 /wp-comments-post.php Post 181 changed. Update cache.
18:27:00 88208 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
18:27:00 88208 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
18:27:00 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
18:27:00 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
18:27:00 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:27:00 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
18:27:00 88208 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:27:00 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:27:00 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
18:27:00 88208 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
18:27:00 88208 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
18:27:00 88208 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
18:27:00 88208 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:27:00 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
18:27:00 88208 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
18:27:00 88208 /wp-comments-post.php Not caching POST request.
18:27:00 88208 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
18:27:01 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
18:27:01 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
18:27:01 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
18:27:01 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
18:27:01 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:27:02 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
18:27:28 88206 / wp_cache_get_cookies_values: return: 
18:27:28 88206 / wp_cache_get_cookies_values: return: 
18:27:28 88206 / wp_cache_check_mobile: www.itishow.com80/
18:27:28 88206 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:27:28 88206 / wp_cache_check_mobile: -https
18:27:28 88206 / No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
18:27:28 88206 / wp_cache_get_cookies_values: return: 
18:27:28 88206 / wp_cache_check_mobile: www.itishow.com80/
18:27:28 88206 / In WP Cache Phase 2
18:27:28 88206 / Setting up WordPress actions
18:27:28 88206 / Created output buffer
18:27:28 88206 / wp_cache_get_cookies_values: return: 
18:27:28 88206 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
18:27:28 88206 / Output buffer callback
18:27:28 88206 / wp_cache_get_cookies_values: return: 
18:27:28 88206 / Writing dynamic buffer to wpcache file.
18:27:28 88206 / Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
18:27:28 88206 / Sending buffer to browser
18:27:28 88206 / wp_cache_shutdown_callback: collecting meta data.
18:27:28 88206 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
18:27:28 88206 / Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
19:17:50 88206 /robots.txt wp_cache_get_cookies_values: return: 
19:17:50 88206 /robots.txt No wp-cache file served as user agent rejected.
19:17:50 88206 /robots.txt wp_cache_get_cookies_values: return: 
19:17:50 88206 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
19:17:50 88206 /robots.txt In WP Cache Phase 2
19:17:50 88206 /robots.txt Setting up WordPress actions
19:17:50 88206 /robots.txt Created output buffer
19:17:50 88206 /robots.txt wp_cache_get_cookies_values: return: 
19:17:50 88206 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:17:50 88206 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:17:50 88206 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:17:51 88206 /robots.txt USER AGENT (Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
19:17:51 88206 /robots.txt wp_cache_maybe_dynamic: returned $buffer
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wp_cache_get_cookies_values: return: 
19:17:54 88207 /assets/2047cff1/css/bootstrap.css No wp-cache file served as user agent rejected.
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wp_cache_get_cookies_values: return: 
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wp_cache_check_mobile: www.itishow.com80/assets/2047cff1/css/bootstrap.css
19:17:54 88207 /assets/2047cff1/css/bootstrap.css mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
19:17:54 88207 /assets/2047cff1/css/bootstrap.css In WP Cache Phase 2
19:17:54 88207 /assets/2047cff1/css/bootstrap.css Setting up WordPress actions
19:17:54 88207 /assets/2047cff1/css/bootstrap.css Created output buffer
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wp_cache_get_cookies_values: return: 
19:17:54 88207 /assets/2047cff1/css/bootstrap.css supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/css/bootstrap.css/
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/css/bootstrap.css/
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/css/bootstrap.css/
19:17:54 88207 /assets/2047cff1/css/bootstrap.css USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
19:17:54 88207 /assets/2047cff1/css/bootstrap.css wp_cache_maybe_dynamic: returned $buffer
19:17:56 88211 /assets/f0f02730/jquery.js wp_cache_get_cookies_values: return: 
19:17:56 88211 /assets/f0f02730/jquery.js No wp-cache file served as user agent rejected.
19:17:56 88211 /assets/f0f02730/jquery.js wp_cache_get_cookies_values: return: 
19:17:56 88211 /assets/f0f02730/jquery.js wp_cache_check_mobile: www.itishow.com80/assets/f0f02730/jquery.js
19:17:56 88211 /assets/f0f02730/jquery.js mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
19:17:56 88211 /assets/f0f02730/jquery.js In WP Cache Phase 2
19:17:56 88211 /assets/f0f02730/jquery.js Setting up WordPress actions
19:17:56 88211 /assets/f0f02730/jquery.js Created output buffer
19:17:56 88211 /assets/f0f02730/jquery.js wp_cache_get_cookies_values: return: 
19:17:56 88211 /assets/f0f02730/jquery.js supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/f0f02730/jquery.js/
19:17:56 88211 /assets/f0f02730/jquery.js wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/f0f02730/jquery.js/
19:17:56 88211 /assets/f0f02730/jquery.js wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/f0f02730/jquery.js/
19:17:56 88211 /assets/f0f02730/jquery.js USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
19:17:56 88211 /assets/f0f02730/jquery.js wp_cache_maybe_dynamic: returned $buffer
19:17:56 88213 /assets/ea7eb280/yii.js wp_cache_get_cookies_values: return: 
19:17:56 88213 /assets/ea7eb280/yii.js No wp-cache file served as user agent rejected.
19:17:57 88213 /assets/ea7eb280/yii.js wp_cache_get_cookies_values: return: 
19:17:57 88213 /assets/ea7eb280/yii.js wp_cache_check_mobile: www.itishow.com80/assets/ea7eb280/yii.js
19:17:57 88213 /assets/ea7eb280/yii.js mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
19:17:57 88213 /assets/ea7eb280/yii.js In WP Cache Phase 2
19:17:57 88213 /assets/ea7eb280/yii.js Setting up WordPress actions
19:17:57 88213 /assets/ea7eb280/yii.js Created output buffer
19:17:57 88213 /assets/ea7eb280/yii.js wp_cache_get_cookies_values: return: 
19:17:57 88213 /assets/ea7eb280/yii.js supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/ea7eb280/yii.js/
19:17:57 88213 /assets/ea7eb280/yii.js wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/ea7eb280/yii.js/
19:17:57 88213 /assets/ea7eb280/yii.js wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/ea7eb280/yii.js/
19:17:57 88213 /assets/ea7eb280/yii.js USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
19:17:57 88213 /assets/ea7eb280/yii.js wp_cache_maybe_dynamic: returned $buffer
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wp_cache_get_cookies_values: return: 
19:17:58 88214 /assets/2047cff1/js/bootstrap.js No wp-cache file served as user agent rejected.
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wp_cache_get_cookies_values: return: 
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wp_cache_check_mobile: www.itishow.com80/assets/2047cff1/js/bootstrap.js
19:17:58 88214 /assets/2047cff1/js/bootstrap.js mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
19:17:58 88214 /assets/2047cff1/js/bootstrap.js In WP Cache Phase 2
19:17:58 88214 /assets/2047cff1/js/bootstrap.js Setting up WordPress actions
19:17:58 88214 /assets/2047cff1/js/bootstrap.js Created output buffer
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wp_cache_get_cookies_values: return: 
19:17:58 88214 /assets/2047cff1/js/bootstrap.js supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/js/bootstrap.js/
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/js/bootstrap.js/
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/assets/2047cff1/js/bootstrap.js/
19:17:58 88214 /assets/2047cff1/js/bootstrap.js USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
19:17:58 88214 /assets/2047cff1/js/bootstrap.js wp_cache_maybe_dynamic: returned $buffer
19:22:22 88215 /?tag=linux wp_cache_get_cookies_values: return: 
19:22:22 88215 /?tag=linux No wp-cache file served as user agent rejected.
19:22:22 88215 /?tag=linux wp_cache_get_cookies_values: return: 
19:22:22 88215 /?tag=linux wp_cache_check_mobile: www.itishow.com80/?tag=linux
19:22:22 88215 /?tag=linux In WP Cache Phase 2
19:22:22 88215 /?tag=linux Setting up WordPress actions
19:22:22 88215 /?tag=linux Supercache caching disabled. Only using wp-cache. Non empty GET request. {"tag":"linux"}
19:22:22 88215 /?tag=linux Created output buffer
19:22:23 88215 /?tag=linux USER AGENT (Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.81 YisouSpider/5.0 Safari/537.36) rejected. Not Caching
19:22:23 88215 /?tag=linux wp_cache_maybe_dynamic: returned $buffer
19:57:34 88213 /robots.txt wp_cache_get_cookies_values: return: 
19:57:34 88213 /robots.txt No wp-cache file served as user agent rejected.
19:57:34 88213 /robots.txt wp_cache_get_cookies_values: return: 
19:57:34 88213 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
19:57:34 88213 /robots.txt In WP Cache Phase 2
19:57:34 88213 /robots.txt Setting up WordPress actions
19:57:34 88213 /robots.txt Created output buffer
19:57:34 88213 /robots.txt wp_cache_get_cookies_values: return: 
19:57:34 88213 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:57:34 88213 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:57:34 88213 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 wp_cache_get_cookies_values: return: 
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 wp_cache_get_cookies_values: return: 
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 wp_cache_check_mobile: www.itishow.com80
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 In WP Cache Phase 2
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 Setting up WordPress actions
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 Not caching wp-admin requests.
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 maybe_stop_gc: GC flag not found. GC will go ahead..
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 Cache garbage collection.
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 GC completed. GC flag deleted.
19:57:34 88209 /wp-cron.php?doing_wp_cron=1545076654.1915280818939208984375 scheduled wp_cache_gc for 10 seconds time.
19:57:34 88213 /robots.txt USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
19:57:34 88213 /robots.txt wp_cache_maybe_dynamic: returned $buffer
19:57:37 88211 / wp_cache_get_cookies_values: return: 
19:57:37 88211 / No wp-cache file served as user agent rejected.
19:57:38 88211 / wp_cache_get_cookies_values: return: 
19:57:38 88211 / wp_cache_check_mobile: www.itishow.com80/
19:57:38 88211 / In WP Cache Phase 2
19:57:38 88211 / Setting up WordPress actions
19:57:38 88211 / Created output buffer
19:57:38 88211 / wp_cache_get_cookies_values: return: 
19:57:38 88211 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
19:57:38 88211 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
19:57:38 88211 / wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
19:57:38 88211 / wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
19:57:38 88211 / USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
19:57:38 88211 / wp_cache_maybe_dynamic: returned $buffer
20:01:35 88208 /?post=46 wp_cache_get_cookies_values: return: 
20:01:35 88208 /?post=46 wp_cache_get_cookies_values: return: 
20:01:35 88208 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
20:01:35 88208 /?post=46 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:35 88208 /?post=46 wp_cache_check_mobile: -https
20:01:35 88208 /?post=46 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
20:01:35 88208 /?post=46 wp_cache_get_cookies_values: return: 
20:01:35 88208 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
20:01:35 88208 /?post=46 In WP Cache Phase 2
20:01:35 88208 /?post=46 Setting up WordPress actions
20:01:35 88208 /?post=46 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"46"}
20:01:35 88208 /?post=46 Created output buffer
20:01:35 88208 /?post=46 Output buffer callback
20:01:35 88208 /?post=46 Supercache disabled: GET or feed detected or disabled by config.
20:01:35 88208 /?post=46 wp_cache_get_cookies_values: return: 
20:01:35 88208 /?post=46 Writing dynamic buffer to wpcache file.
20:01:35 88208 /?post=46 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
20:01:35 88208 /?post=46 Sending buffer to browser
20:01:35 88208 /?post=46 wp_cache_shutdown_callback: collecting meta data.
20:01:35 88208 /?post=46 Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:01:35 88208 /?post=46 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
20:01:37 88207 /blog/category/bs/ wp_cache_get_cookies_values: return: 
20:01:37 88207 /blog/category/bs/ wp_cache_get_cookies_values: return: 
20:01:37 88207 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
20:01:37 88207 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
20:01:37 88207 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
20:01:37 88207 /blog/category/bs/ Serving wp-cache dynamic file
20:01:37 88207 /blog/category/bs/ exit request
20:01:38 88215 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
20:01:38 88215 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
20:01:38 88215 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
20:01:38 88215 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
20:01:38 88215 /blog/category/bs/feed/ wp_cache_check_mobile: -https
20:01:38 88215 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
20:01:38 88215 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
20:01:38 88215 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
20:01:38 88215 /blog/category/bs/feed/ In WP Cache Phase 2
20:01:38 88215 /blog/category/bs/feed/ Setting up WordPress actions
20:01:38 88215 /blog/category/bs/feed/ Created output buffer
20:01:38 88215 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
20:01:38 88215 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
20:01:38 88215 /blog/category/bs/feed/ Output buffer callback
20:01:38 88215 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.162 seconds.
20:01:38 88215 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
20:01:38 88215 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
20:01:38 88215 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 04:01:38
20:01:38 88215 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
20:01:38 88215 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
20:01:38 88215 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
20:01:38 88215 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
20:01:38 88215 /blog/category/bs/feed/ Sending buffer to browser
20:01:38 88215 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
20:01:38 88215 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
20:01:38 88215 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
20:01:38 88215 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:01:40 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
20:01:41 88206 /wp-comments-post.php wp_cache_get_cookies_values: return: 
20:01:42 88206 /wp-comments-post.php wp_cache_get_cookies_values: return: 
20:01:42 88206 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
20:01:42 88206 /wp-comments-post.php In WP Cache Phase 2
20:01:42 88206 /wp-comments-post.php Setting up WordPress actions
20:01:42 88206 /wp-comments-post.php Created output buffer
20:01:46 88206 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
20:01:46 88206 /wp-comments-post.php Post 181 changed. Update cache.
20:01:46 88206 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
20:01:46 88206 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
20:01:46 88206 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
20:01:46 88206 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
20:01:46 88206 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
20:01:46 88206 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
20:01:46 88206 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
20:01:46 88206 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
20:01:46 88206 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
20:01:46 88206 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
20:01:46 88206 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
20:01:46 88206 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
20:01:46 88206 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
20:01:46 88206 /wp-comments-post.php Not caching POST request.
20:01:46 88206 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:01:47 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:01:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Caching disabled for logged in users on settings page.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ In WP Cache Phase 2
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Setting up WordPress actions
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Created output buffer
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Output buffer callback
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Dynamic page generated in 0.162 seconds.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Feed detected. Writing wpcache cache files.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Supercache disabled: GET or feed detected or disabled by config.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 04:01:51
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Writing dynamic buffer to wpcache file.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Dynamic WPCache Super Cache
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Sending buffer to browser
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_shutdown_callback: collecting meta data.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
20:01:51 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:01:52 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
20:07:00 88204 / wp_cache_get_cookies_values: return: 
20:07:00 88204 / wp_cache_get_cookies_values: return: 
20:07:00 88204 / wp_cache_check_mobile: www.itishow.com80/
20:07:00 88204 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:07:00 88204 / wp_cache_check_mobile: -https
20:07:00 88204 / No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
20:07:00 88204 / wp_cache_get_cookies_values: return: 
20:07:00 88204 / wp_cache_check_mobile: www.itishow.com80/
20:07:00 88204 / In WP Cache Phase 2
20:07:00 88204 / Setting up WordPress actions
20:07:00 88204 / Created output buffer
20:07:00 88204 / wp_cache_get_cookies_values: return: 
20:07:00 88204 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
20:07:00 88204 / wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
20:07:00 88204 / wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
20:07:00 88204 / Output buffer callback
20:07:00 88204 / wp_cache_get_cookies_values: return: 
20:07:00 88204 / Writing dynamic buffer to wpcache file.
20:07:00 88204 / Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
20:07:00 88204 / Sending buffer to browser
20:07:00 88204 / wp_cache_shutdown_callback: collecting meta data.
20:07:00 88204 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
20:07:00 88204 / Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ No wp-cache file served as user agent rejected.
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ In WP Cache Phase 2
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Setting up WordPress actions
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Created output buffer
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 wp_cache_get_cookies_values: return: 
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 wp_cache_get_cookies_values: return: 
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 wp_cache_check_mobile: www.itishow.com80
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 In WP Cache Phase 2
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 Setting up WordPress actions
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 Not caching wp-admin requests.
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 maybe_stop_gc: GC flag not found. GC will go ahead..
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 Cache garbage collection.
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 GC completed. GC flag deleted.
20:45:29 88206 /wp-cron.php?doing_wp_cron=1545079529.3660330772399902343750 scheduled wp_cache_gc for 10 seconds time.
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
20:45:29 88215 /2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_maybe_dynamic: returned $buffer
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ No wp-cache file served as user agent rejected.
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ In WP Cache Phase 2
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Setting up WordPress actions
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Created output buffer
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
20:45:30 88283 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_maybe_dynamic: returned $buffer
21:29:45 88209 / wp_cache_get_cookies_values: return: 
21:29:45 88209 / wp_cache_get_cookies_values: return: 
21:29:45 88209 / wp_cache_check_mobile: www.itishow.com80/
21:29:45 88209 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:29:45 88209 / wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
21:29:45 88209 / Serving wp-cache dynamic file
21:29:45 88209 / exit request
21:51:50 88283 /?post=46 wp_cache_get_cookies_values: return: 
21:51:50 88283 /?post=46 wp_cache_get_cookies_values: return: 
21:51:50 88283 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
21:51:50 88283 /?post=46 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:51:50 88283 /?post=46 wp_cache_check_mobile: -https
21:51:50 88283 /?post=46 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
21:51:50 88283 /?post=46 wp_cache_get_cookies_values: return: 
21:51:50 88283 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
21:51:50 88283 /?post=46 In WP Cache Phase 2
21:51:50 88283 /?post=46 Setting up WordPress actions
21:51:50 88283 /?post=46 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"46"}
21:51:50 88283 /?post=46 Created output buffer
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 wp_cache_get_cookies_values: return: 
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 wp_cache_get_cookies_values: return: 
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 wp_cache_check_mobile: www.itishow.com80
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 In WP Cache Phase 2
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 Setting up WordPress actions
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 Not caching wp-admin requests.
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 maybe_stop_gc: GC flag not found. GC will go ahead..
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 Cache garbage collection.
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 GC completed. GC flag deleted.
21:51:50 88206 /wp-cron.php?doing_wp_cron=1545083510.2872080802917480468750 scheduled wp_cache_gc for 10 seconds time.
21:51:50 88283 /?post=46 Output buffer callback
21:51:50 88283 /?post=46 Supercache disabled: GET or feed detected or disabled by config.
21:51:50 88283 /?post=46 wp_cache_get_cookies_values: return: 
21:51:50 88283 /?post=46 Writing dynamic buffer to wpcache file.
21:51:50 88283 /?post=46 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
21:51:50 88283 /?post=46 Sending buffer to browser
21:51:50 88283 /?post=46 wp_cache_shutdown_callback: collecting meta data.
21:51:50 88283 /?post=46 Sending 'Content-Type: text/html; charset="UTF-8"' header.
21:51:50 88283 /?post=46 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
21:51:52 88208 /blog/category/bs/ wp_cache_get_cookies_values: return: 
21:51:52 88208 /blog/category/bs/ wp_cache_get_cookies_values: return: 
21:51:52 88208 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
21:51:52 88208 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
21:51:52 88208 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
21:51:52 88208 /blog/category/bs/ Serving wp-cache dynamic file
21:51:52 88208 /blog/category/bs/ exit request
21:51:54 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
21:51:54 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
21:51:54 88210 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
21:51:54 88210 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
21:51:54 88210 /blog/category/bs/feed/ wp_cache_check_mobile: -https
21:51:54 88210 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
21:51:54 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
21:51:54 88210 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
21:51:54 88210 /blog/category/bs/feed/ In WP Cache Phase 2
21:51:54 88210 /blog/category/bs/feed/ Setting up WordPress actions
21:51:54 88210 /blog/category/bs/feed/ Created output buffer
21:51:54 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
21:51:54 88210 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
21:51:54 88210 /blog/category/bs/feed/ Output buffer callback
21:51:54 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.169 seconds.
21:51:54 88210 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
21:51:54 88210 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
21:51:54 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 05:51:54
21:51:54 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
21:51:54 88210 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
21:51:54 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
21:51:54 88210 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
21:51:54 88210 /blog/category/bs/feed/ Sending buffer to browser
21:51:54 88210 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
21:51:54 88210 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
21:51:54 88210 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
21:51:54 88210 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
21:51:55 88204 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
21:51:57 88214 /wp-comments-post.php wp_cache_get_cookies_values: return: 
21:51:57 88214 /wp-comments-post.php wp_cache_get_cookies_values: return: 
21:51:57 88214 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
21:51:57 88214 /wp-comments-post.php In WP Cache Phase 2
21:51:57 88214 /wp-comments-post.php Setting up WordPress actions
21:51:57 88214 /wp-comments-post.php Created output buffer
21:51:58 88214 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
21:51:58 88214 /wp-comments-post.php Post 181 changed. Update cache.
21:51:58 88214 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
21:51:58 88214 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
21:51:58 88214 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
21:51:58 88214 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
21:51:58 88214 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
21:51:58 88214 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
21:51:58 88214 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
21:51:58 88214 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
21:51:58 88214 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
21:51:58 88214 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
21:51:58 88214 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
21:51:58 88214 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
21:51:58 88214 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
21:51:58 88214 /wp-comments-post.php Not caching POST request.
21:51:58 88214 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
21:51:59 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
21:51:59 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
21:51:59 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
21:51:59 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
21:51:59 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
21:52:00 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
21:52:02 88215 /robots.txt wp_cache_get_cookies_values: return: 
21:52:02 88215 /robots.txt No wp-cache file served as user agent rejected.
21:52:02 88215 /robots.txt wp_cache_get_cookies_values: return: 
21:52:02 88215 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
21:52:02 88215 /robots.txt In WP Cache Phase 2
21:52:02 88215 /robots.txt Setting up WordPress actions
21:52:02 88215 /robots.txt Created output buffer
21:52:02 88215 /robots.txt wp_cache_get_cookies_values: return: 
21:52:02 88215 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
21:52:02 88215 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
21:52:02 88215 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
21:52:02 88215 /robots.txt USER AGENT (Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:52:02 88215 /robots.txt wp_cache_maybe_dynamic: returned $buffer
21:52:04 88211 / wp_cache_get_cookies_values: return: 
21:52:04 88211 / No wp-cache file served as user agent rejected.
21:52:04 88211 / wp_cache_get_cookies_values: return: 
21:52:04 88211 / wp_cache_check_mobile: www.itishow.com80/
21:52:04 88211 / In WP Cache Phase 2
21:52:04 88211 / Setting up WordPress actions
21:52:04 88211 / Created output buffer
21:52:04 88211 / wp_cache_get_cookies_values: return: 
21:52:04 88211 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:52:04 88211 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
21:52:04 88211 / USER AGENT (Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:52:04 88211 / wp_cache_maybe_dynamic: returned $buffer
21:54:38 88210 /blog/tag/tp/ wp_cache_get_cookies_values: return: 
21:54:38 88210 /blog/tag/tp/ No wp-cache file served as user agent rejected.
21:54:38 88210 /blog/tag/tp/ wp_cache_get_cookies_values: return: 
21:54:38 88210 /blog/tag/tp/ wp_cache_check_mobile: www.itishow.com80/blog/tag/tp/
21:54:38 88210 /blog/tag/tp/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:54:38 88210 /blog/tag/tp/ In WP Cache Phase 2
21:54:38 88210 /blog/tag/tp/ Setting up WordPress actions
21:54:38 88210 /blog/tag/tp/ Created output buffer
21:54:38 88210 /blog/tag/tp/ wp_cache_get_cookies_values: return: 
21:54:38 88210 /blog/tag/tp/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp/
21:54:38 88210 /blog/tag/tp/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp/
21:54:38 88210 /blog/tag/tp/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp/
21:54:38 88210 /blog/tag/tp/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:54:38 88210 /blog/tag/tp/ wp_cache_maybe_dynamic: returned $buffer
21:54:51 88204 /blog/tag/php/ wp_cache_get_cookies_values: return: 
21:54:51 88204 /blog/tag/php/ No wp-cache file served as user agent rejected.
21:54:51 88204 /blog/tag/php/ wp_cache_get_cookies_values: return: 
21:54:51 88204 /blog/tag/php/ wp_cache_check_mobile: www.itishow.com80/blog/tag/php/
21:54:51 88204 /blog/tag/php/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:54:51 88204 /blog/tag/php/ In WP Cache Phase 2
21:54:51 88204 /blog/tag/php/ Setting up WordPress actions
21:54:51 88204 /blog/tag/php/ Created output buffer
21:54:51 88204 /blog/tag/php/ wp_cache_get_cookies_values: return: 
21:54:51 88204 /blog/tag/php/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/php/
21:54:51 88204 /blog/tag/php/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/php/
21:54:51 88204 /blog/tag/php/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/php/
21:54:52 88204 /blog/tag/php/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:54:52 88204 /blog/tag/php/ wp_cache_maybe_dynamic: returned $buffer
21:55:02 88214 /blog/2018/12/ wp_cache_get_cookies_values: return: 
21:55:02 88214 /blog/2018/12/ No wp-cache file served as user agent rejected.
21:55:02 88214 /blog/2018/12/ wp_cache_get_cookies_values: return: 
21:55:02 88214 /blog/2018/12/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/
21:55:02 88214 /blog/2018/12/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:55:02 88214 /blog/2018/12/ In WP Cache Phase 2
21:55:02 88214 /blog/2018/12/ Setting up WordPress actions
21:55:02 88214 /blog/2018/12/ Created output buffer
21:55:02 88214 /blog/2018/12/ wp_cache_get_cookies_values: return: 
21:55:02 88214 /blog/2018/12/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/
21:55:02 88214 /blog/2018/12/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/
21:55:02 88214 /blog/2018/12/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:55:02 88214 /blog/2018/12/ wp_cache_maybe_dynamic: returned $buffer
21:55:11 88209 /blog/tag/tp5/ wp_cache_get_cookies_values: return: 
21:55:11 88209 /blog/tag/tp5/ No wp-cache file served as user agent rejected.
21:55:11 88209 /blog/tag/tp5/ wp_cache_get_cookies_values: return: 
21:55:11 88209 /blog/tag/tp5/ wp_cache_check_mobile: www.itishow.com80/blog/tag/tp5/
21:55:11 88209 /blog/tag/tp5/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:55:11 88209 /blog/tag/tp5/ In WP Cache Phase 2
21:55:11 88209 /blog/tag/tp5/ Setting up WordPress actions
21:55:11 88209 /blog/tag/tp5/ Created output buffer
21:55:11 88209 /blog/tag/tp5/ wp_cache_get_cookies_values: return: 
21:55:11 88209 /blog/tag/tp5/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp5/
21:55:11 88209 /blog/tag/tp5/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp5/
21:55:11 88209 /blog/tag/tp5/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/tp5/
21:55:11 88209 /blog/tag/tp5/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:55:11 88209 /blog/tag/tp5/ wp_cache_maybe_dynamic: returned $buffer
21:55:24 88215 /blog/tag/bug/ wp_cache_get_cookies_values: return: 
21:55:24 88215 /blog/tag/bug/ No wp-cache file served as user agent rejected.
21:55:24 88215 /blog/tag/bug/ wp_cache_get_cookies_values: return: 
21:55:24 88215 /blog/tag/bug/ wp_cache_check_mobile: www.itishow.com80/blog/tag/bug/
21:55:24 88215 /blog/tag/bug/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:55:24 88215 /blog/tag/bug/ In WP Cache Phase 2
21:55:24 88215 /blog/tag/bug/ Setting up WordPress actions
21:55:24 88215 /blog/tag/bug/ Created output buffer
21:55:24 88215 /blog/tag/bug/ wp_cache_get_cookies_values: return: 
21:55:24 88215 /blog/tag/bug/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/bug/
21:55:24 88215 /blog/tag/bug/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/bug/
21:55:24 88215 /blog/tag/bug/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/bug/
21:55:24 88215 /blog/tag/bug/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:55:24 88215 /blog/tag/bug/ wp_cache_maybe_dynamic: returned $buffer
21:58:35 88211 /blog/2018%E5%B9%B4/ wp_cache_get_cookies_values: return: 
21:58:35 88211 /blog/2018%E5%B9%B4/ No wp-cache file served as user agent rejected.
21:58:35 88211 /blog/2018%E5%B9%B4/ wp_cache_get_cookies_values: return: 
21:58:35 88211 /blog/2018%E5%B9%B4/ wp_cache_check_mobile: www.itishow.com80/blog/2018%E5%B9%B4/
21:58:35 88211 /blog/2018%E5%B9%B4/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:58:35 88211 /blog/2018%E5%B9%B4/ In WP Cache Phase 2
21:58:35 88211 /blog/2018%E5%B9%B4/ Setting up WordPress actions
21:58:35 88211 /blog/2018%E5%B9%B4/ Created output buffer
21:58:35 88211 /blog/2018%E5%B9%B4/ wp_cache_get_cookies_values: return: 
21:58:35 88211 /blog/2018%E5%B9%B4/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018%e5%b9%b4/
21:58:35 88211 /blog/2018%E5%B9%B4/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018%e5%b9%b4/
21:58:35 88211 /blog/2018%E5%B9%B4/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018%e5%b9%b4/
21:58:36 88211 /blog/2018%E5%B9%B4/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:58:36 88211 /blog/2018%E5%B9%B4/ wp_cache_maybe_dynamic: returned $buffer
21:59:14 88207 /blog/tag/modal/ wp_cache_get_cookies_values: return: 
21:59:14 88207 /blog/tag/modal/ No wp-cache file served as user agent rejected.
21:59:14 88207 /blog/tag/modal/ wp_cache_get_cookies_values: return: 
21:59:14 88207 /blog/tag/modal/ wp_cache_check_mobile: www.itishow.com80/blog/tag/modal/
21:59:14 88207 /blog/tag/modal/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:59:14 88207 /blog/tag/modal/ In WP Cache Phase 2
21:59:14 88207 /blog/tag/modal/ Setting up WordPress actions
21:59:14 88207 /blog/tag/modal/ Created output buffer
21:59:14 88207 /blog/tag/modal/ wp_cache_get_cookies_values: return: 
21:59:14 88207 /blog/tag/modal/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/modal/
21:59:14 88207 /blog/tag/modal/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/modal/
21:59:14 88207 /blog/tag/modal/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/modal/
21:59:14 88207 /blog/tag/modal/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:59:14 88207 /blog/tag/modal/ wp_cache_maybe_dynamic: returned $buffer
21:59:37 88206 /blog/tag/alert/ wp_cache_get_cookies_values: return: 
21:59:37 88206 /blog/tag/alert/ No wp-cache file served as user agent rejected.
21:59:37 88206 /blog/tag/alert/ wp_cache_get_cookies_values: return: 
21:59:37 88206 /blog/tag/alert/ wp_cache_check_mobile: www.itishow.com80/blog/tag/alert/
21:59:37 88206 /blog/tag/alert/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
21:59:37 88206 /blog/tag/alert/ In WP Cache Phase 2
21:59:37 88206 /blog/tag/alert/ Setting up WordPress actions
21:59:37 88206 /blog/tag/alert/ Created output buffer
21:59:37 88206 /blog/tag/alert/ wp_cache_get_cookies_values: return: 
21:59:37 88206 /blog/tag/alert/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/
21:59:37 88206 /blog/tag/alert/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/
21:59:37 88206 /blog/tag/alert/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/
21:59:37 88206 /blog/tag/alert/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
21:59:37 88206 /blog/tag/alert/ wp_cache_maybe_dynamic: returned $buffer
22:00:09 88283 /blog/tag/confirm/ wp_cache_get_cookies_values: return: 
22:00:09 88283 /blog/tag/confirm/ No wp-cache file served as user agent rejected.
22:00:09 88283 /blog/tag/confirm/ wp_cache_get_cookies_values: return: 
22:00:09 88283 /blog/tag/confirm/ wp_cache_check_mobile: www.itishow.com80/blog/tag/confirm/
22:00:09 88283 /blog/tag/confirm/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
22:00:09 88283 /blog/tag/confirm/ In WP Cache Phase 2
22:00:09 88283 /blog/tag/confirm/ Setting up WordPress actions
22:00:09 88283 /blog/tag/confirm/ Created output buffer
22:00:09 88283 /blog/tag/confirm/ wp_cache_get_cookies_values: return: 
22:00:09 88283 /blog/tag/confirm/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/confirm/
22:00:09 88283 /blog/tag/confirm/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/confirm/
22:00:09 88283 /blog/tag/confirm/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/confirm/
22:00:09 88283 /blog/tag/confirm/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
22:00:09 88283 /blog/tag/confirm/ wp_cache_maybe_dynamic: returned $buffer
22:03:12 88210 /blog/tag/alert/feed/ wp_cache_get_cookies_values: return: 
22:03:12 88210 /blog/tag/alert/feed/ No wp-cache file served as user agent rejected.
22:03:12 88210 /blog/tag/alert/feed/ wp_cache_get_cookies_values: return: 
22:03:12 88210 /blog/tag/alert/feed/ wp_cache_check_mobile: www.itishow.com80/blog/tag/alert/feed/
22:03:12 88210 /blog/tag/alert/feed/ mobile browser detected: Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)
22:03:12 88210 /blog/tag/alert/feed/ In WP Cache Phase 2
22:03:12 88210 /blog/tag/alert/feed/ Setting up WordPress actions
22:03:12 88210 /blog/tag/alert/feed/ Created output buffer
22:03:12 88210 /blog/tag/alert/feed/ wp_cache_get_cookies_values: return: 
22:03:12 88210 /blog/tag/alert/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/feed/
22:03:12 88210 /blog/tag/alert/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/feed/
22:03:12 88210 /blog/tag/alert/feed/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/tag/alert/feed/
22:03:12 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 wp_cache_get_cookies_values: return: 
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 wp_cache_get_cookies_values: return: 
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 wp_cache_check_mobile: www.itishow.com80
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 In WP Cache Phase 2
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 Setting up WordPress actions
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 Not caching wp-admin requests.
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 maybe_stop_gc: GC flag not found. GC will go ahead..
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 Cache garbage collection.
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 GC completed. GC flag deleted.
22:03:13 88204 /wp-cron.php?doing_wp_cron=1545084192.8406789302825927734375 scheduled wp_cache_gc for 10 seconds time.
22:03:13 88210 /blog/tag/alert/feed/ USER AGENT (Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)) rejected. Not Caching
22:03:13 88210 /blog/tag/alert/feed/ wp_cache_maybe_dynamic: returned $buffer
22:22:36 88209 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:22:36 88209 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:22:36 88209 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
22:22:36 88209 /?post=20&comment-page=16 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:22:36 88209 /?post=20&comment-page=16 wp_cache_check_mobile: -https
22:22:36 88209 /?post=20&comment-page=16 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
22:22:37 88209 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:22:37 88209 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
22:22:37 88209 /?post=20&comment-page=16 In WP Cache Phase 2
22:22:37 88209 /?post=20&comment-page=16 Setting up WordPress actions
22:22:37 88209 /?post=20&comment-page=16 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"20","comment-page":"16"}
22:22:37 88209 /?post=20&comment-page=16 Created output buffer
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 wp_cache_get_cookies_values: return: 
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 wp_cache_get_cookies_values: return: 
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 wp_cache_check_mobile: www.itishow.com80
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 In WP Cache Phase 2
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 Setting up WordPress actions
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 Not caching wp-admin requests.
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 maybe_stop_gc: GC flag not found. GC will go ahead..
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 Cache garbage collection.
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 GC completed. GC flag deleted.
22:22:37 88208 /wp-cron.php?doing_wp_cron=1545085357.1058650016784667968750 scheduled wp_cache_gc for 10 seconds time.
22:22:37 88209 /?post=20&comment-page=16 Output buffer callback
22:22:37 88209 /?post=20&comment-page=16 Supercache disabled: GET or feed detected or disabled by config.
22:22:37 88209 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:22:37 88209 /?post=20&comment-page=16 Writing dynamic buffer to wpcache file.
22:22:37 88209 /?post=20&comment-page=16 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:22:37 88209 /?post=20&comment-page=16 Sending buffer to browser
22:22:37 88209 /?post=20&comment-page=16 wp_cache_shutdown_callback: collecting meta data.
22:22:37 88209 /?post=20&comment-page=16 Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:22:37 88209 /?post=20&comment-page=16 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:22:39 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
22:22:39 88215 /blog/category/bs/ wp_cache_get_cookies_values: return: 
22:22:39 88215 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
22:22:39 88215 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
22:22:39 88215 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
22:22:39 88215 /blog/category/bs/ Serving wp-cache dynamic file
22:22:39 88215 /blog/category/bs/ exit request
22:22:41 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:22:41 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:22:41 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
22:22:41 88205 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
22:22:41 88205 /blog/category/bs/feed/ wp_cache_check_mobile: -https
22:22:41 88205 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
22:22:41 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:22:41 88205 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
22:22:41 88205 /blog/category/bs/feed/ In WP Cache Phase 2
22:22:41 88205 /blog/category/bs/feed/ Setting up WordPress actions
22:22:41 88205 /blog/category/bs/feed/ Created output buffer
22:22:41 88205 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:22:41 88205 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
22:22:41 88205 /blog/category/bs/feed/ Output buffer callback
22:22:41 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.165 seconds.
22:22:41 88205 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
22:22:41 88205 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
22:22:41 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 06:22:41
22:22:41 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
22:22:41 88205 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
22:22:41 88205 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
22:22:41 88205 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:22:41 88205 /blog/category/bs/feed/ Sending buffer to browser
22:22:41 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
22:22:41 88205 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
22:22:41 88205 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
22:22:41 88205 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:22:43 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:22:45 88211 /wp-comments-post.php wp_cache_get_cookies_values: return: 
22:22:45 88211 /wp-comments-post.php wp_cache_get_cookies_values: return: 
22:22:45 88211 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
22:22:45 88211 /wp-comments-post.php In WP Cache Phase 2
22:22:45 88211 /wp-comments-post.php Setting up WordPress actions
22:22:45 88211 /wp-comments-post.php Created output buffer
22:22:49 88211 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
22:22:49 88211 /wp-comments-post.php Post 181 changed. Update cache.
22:22:49 88211 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:22:49 88211 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
22:22:49 88211 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
22:22:49 88211 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:22:49 88211 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
22:22:49 88211 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:22:49 88211 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:22:49 88211 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:22:49 88211 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:22:49 88211 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
22:22:49 88211 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
22:22:49 88211 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
22:22:49 88211 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:22:49 88211 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:22:49 88211 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:22:49 88211 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
22:22:49 88211 /wp-comments-post.php Not caching POST request.
22:22:49 88211 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
22:22:50 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
22:22:50 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
22:22:50 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
22:22:50 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
22:22:50 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:22:51 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
22:23:35 88283 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:23:35 88283 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:23:35 88283 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
22:23:35 88283 /?post=20&comment-page=16 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:23:35 88283 /?post=20&comment-page=16 wp_cache_check_mobile: -https
22:23:35 88283 /?post=20&comment-page=16 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
22:23:35 88283 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:23:35 88283 /?post=20&comment-page=16 wp_cache_check_mobile: www.itishow.com80/?post=20&comment-page=16
22:23:35 88283 /?post=20&comment-page=16 In WP Cache Phase 2
22:23:35 88283 /?post=20&comment-page=16 Setting up WordPress actions
22:23:35 88283 /?post=20&comment-page=16 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"20","comment-page":"16"}
22:23:35 88283 /?post=20&comment-page=16 Created output buffer
22:23:35 88283 /?post=20&comment-page=16 Output buffer callback
22:23:35 88283 /?post=20&comment-page=16 Supercache disabled: GET or feed detected or disabled by config.
22:23:35 88283 /?post=20&comment-page=16 wp_cache_get_cookies_values: return: 
22:23:35 88283 /?post=20&comment-page=16 Writing dynamic buffer to wpcache file.
22:23:35 88283 /?post=20&comment-page=16 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:23:35 88283 /?post=20&comment-page=16 Sending buffer to browser
22:23:35 88283 /?post=20&comment-page=16 wp_cache_shutdown_callback: collecting meta data.
22:23:35 88283 /?post=20&comment-page=16 Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:23:35 88283 /?post=20&comment-page=16 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:23:44 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
22:23:44 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
22:23:44 88204 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
22:23:44 88204 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
22:23:44 88204 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
22:23:44 88204 /blog/category/bs/ Serving wp-cache dynamic file
22:23:44 88204 /blog/category/bs/ exit request
22:23:47 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:23:47 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:23:47 88210 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
22:23:47 88210 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
22:23:47 88210 /blog/category/bs/feed/ wp_cache_check_mobile: -https
22:23:47 88210 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
22:23:47 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:23:47 88210 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
22:23:47 88210 /blog/category/bs/feed/ In WP Cache Phase 2
22:23:47 88210 /blog/category/bs/feed/ Setting up WordPress actions
22:23:47 88210 /blog/category/bs/feed/ Created output buffer
22:23:47 88210 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
22:23:47 88210 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
22:23:47 88210 /blog/category/bs/feed/ Output buffer callback
22:23:47 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.171 seconds.
22:23:47 88210 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
22:23:47 88210 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
22:23:47 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 06:23:47
22:23:47 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
22:23:47 88210 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
22:23:47 88210 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
22:23:47 88210 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:23:47 88210 /blog/category/bs/feed/ Sending buffer to browser
22:23:47 88210 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
22:23:47 88210 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
22:23:47 88210 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
22:23:47 88210 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:23:48 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:23:49 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:23:50 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
22:23:50 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
22:23:50 88208 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
22:23:50 88208 /wp-comments-post.php In WP Cache Phase 2
22:23:50 88208 /wp-comments-post.php Setting up WordPress actions
22:23:50 88208 /wp-comments-post.php Created output buffer
22:23:54 88208 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
22:23:54 88208 /wp-comments-post.php Post 181 changed. Update cache.
22:23:54 88208 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
22:23:54 88208 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
22:23:54 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
22:23:54 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:23:54 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
22:23:54 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
22:23:54 88208 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:23:54 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:23:54 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
22:23:54 88208 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
22:23:54 88208 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
22:23:54 88208 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
22:23:54 88208 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:23:54 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:23:54 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-ecbeb593c6d7ca9aada201447d11f77a.php
22:23:54 88208 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
22:23:54 88208 /wp-comments-post.php Not caching POST request.
22:23:54 88208 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:23:56 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: -https
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/index-https.html
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing dynamic buffer to wpcache file.
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending buffer to browser
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
22:24:25 88215 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Serving wp-cache dynamic file
22:25:16 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ exit request
23:23:12 88209 /login/ wp_cache_get_cookies_values: return: 
23:23:12 88209 /login/ No wp-cache file served as user agent rejected.
23:23:12 88209 /login/ wp_cache_get_cookies_values: return: 
23:23:12 88209 /login/ wp_cache_check_mobile: www.itishow.com80/login/
23:23:12 88209 /login/ In WP Cache Phase 2
23:23:12 88209 /login/ Setting up WordPress actions
23:23:12 88209 /login/ Created output buffer
23:23:12 88209 /login/ wp_cache_get_cookies_values: return: 
23:23:12 88209 /login/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/
23:23:12 88209 /login/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/
23:23:12 88209 /login/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
23:23:12 88209 /login/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/meta-wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 wp_cache_get_cookies_values: return: 
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 wp_cache_get_cookies_values: return: 
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 wp_cache_check_mobile: www.itishow.com80
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 In WP Cache Phase 2
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 Setting up WordPress actions
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 Not caching wp-admin requests.
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 maybe_stop_gc: GC flag not found. GC will go ahead..
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 Cache garbage collection.
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 GC completed. GC flag deleted.
23:23:12 88215 /wp-cron.php?doing_wp_cron=1545088992.5165319442749023437500 scheduled wp_cache_gc for 10 seconds time.
23:23:12 88209 /login/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
23:23:12 88209 /login/ wp_cache_maybe_dynamic: returned $buffer
23:39:36 88213 /?post=22 wp_cache_get_cookies_values: return: 
23:39:36 88213 /?post=22 wp_cache_get_cookies_values: return: 
23:39:36 88213 /?post=22 wp_cache_check_mobile: www.itishow.com80/?post=22
23:39:36 88213 /?post=22 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
23:39:36 88213 /?post=22 wp_cache_check_mobile: -https
23:39:36 88213 /?post=22 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
23:39:36 88213 /?post=22 wp_cache_get_cookies_values: return: 
23:39:36 88213 /?post=22 wp_cache_check_mobile: www.itishow.com80/?post=22
23:39:36 88213 /?post=22 In WP Cache Phase 2
23:39:36 88213 /?post=22 Setting up WordPress actions
23:39:36 88213 /?post=22 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"22"}
23:39:36 88213 /?post=22 Created output buffer
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cache_get_cookies_values: return: 
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cache_get_cookies_values: return: 
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cache_check_mobile: www.itishow.com80
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 In WP Cache Phase 2
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 Setting up WordPress actions
23:39:37 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 Not caching wp-admin requests.
23:39:38 88213 /?post=22 Output buffer callback
23:39:38 88213 /?post=22 Supercache disabled: GET or feed detected or disabled by config.
23:39:38 88213 /?post=22 wp_cache_get_cookies_values: return: 
23:39:38 88213 /?post=22 Writing dynamic buffer to wpcache file.
23:39:38 88213 /?post=22 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-cf522b618c65bb2833413dbde593064f.php
23:39:38 88213 /?post=22 Sending buffer to browser
23:39:38 88213 /?post=22 wp_cache_shutdown_callback: collecting meta data.
23:39:38 88213 /?post=22 Sending 'Content-Type: text/html; charset="UTF-8"' header.
23:39:38 88213 /?post=22 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-cf522b618c65bb2833413dbde593064f.php
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: doing taxonomy preload.
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: got 100 posts from position 0.
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 clear_post_supercache: post_id: 181. deleting files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 gc: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1, forced delete
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: -https
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ In WP Cache Phase 2
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Setting up WordPress actions
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Created output buffer
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Output buffer callback
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_get_cookies_values: return: 
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Writing dynamic buffer to wpcache file.
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Sending buffer to browser
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ wp_cache_shutdown_callback: collecting meta data.
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
23:39:45 88204 /blog/2018/12/17/bootstrap%E6%A8%A1%E6%80%81%E6%A1%86%EF%BC%88modal%EF%BC%89%E4%B8%AD%E6%8C%89%E9%92%AE%E7%82%B9%E5%87%BB%E5%A4%9A%E6%AC%A1%E6%8F%90%E4%BA%A4%E7%9A%84%E9%97%AE%E9%A2%98%EF%BC%88bug%EF%BC%89%E8%A7%A3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
23:39:45 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
23:39:46 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
23:39:46 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 clear_post_supercache: post_id: 161. deleting files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
23:39:46 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:39:46 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: -https
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/index-https.html
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ In WP Cache Phase 2
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Setting up WordPress actions
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Created output buffer
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Output buffer callback
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_get_cookies_values: return: 
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Writing dynamic buffer to wpcache file.
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Sending buffer to browser
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ wp_cache_shutdown_callback: collecting meta data.
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
23:39:46 88208 /blog/2018/12/15/bootstrap%E8%87%AA%E5%AE%9A%E4%B9%89alert%E5%92%8Cconfirm/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:39:46 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
23:39:47 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
23:39:47 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 clear_post_supercache: post_id: 69. deleting files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
23:39:47 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:39:47 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: -https
23:39:47 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/index-https.html
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ In WP Cache Phase 2
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Setting up WordPress actions
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Created output buffer
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Output buffer callback
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_get_cookies_values: return: 
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Writing dynamic buffer to wpcache file.
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Sending buffer to browser
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ wp_cache_shutdown_callback: collecting meta data.
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
23:39:48 88209 /blog/2018/12/13/thinkphp%EF%BC%9Aroute%E4%B8%ADget%E6%8F%90%E4%BA%A4%E5%8F%82%E6%95%B0%E7%9A%84%E5%AE%9A%E4%B9%89%E5%8F%8A%E8%8E%B7%E5%8F%96/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:39:48 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/
23:39:49 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
23:39:49 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 clear_post_supercache: post_id: 1. deleting files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
23:39:49 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:39:49 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
23:39:49 88205 /blog/2018/12/12/hello-world/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: -https
23:39:49 88205 /blog/2018/12/12/hello-world/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/index-https.html
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
23:39:49 88205 /blog/2018/12/12/hello-world/ In WP Cache Phase 2
23:39:49 88205 /blog/2018/12/12/hello-world/ Setting up WordPress actions
23:39:49 88205 /blog/2018/12/12/hello-world/ Created output buffer
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
23:39:49 88205 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
23:39:49 88205 /blog/2018/12/12/hello-world/ Output buffer callback
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
23:39:49 88205 /blog/2018/12/12/hello-world/ Writing dynamic buffer to wpcache file.
23:39:49 88205 /blog/2018/12/12/hello-world/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:39:49 88205 /blog/2018/12/12/hello-world/ Sending buffer to browser
23:39:49 88205 /blog/2018/12/12/hello-world/ wp_cache_shutdown_callback: collecting meta data.
23:39:49 88205 /blog/2018/12/12/hello-world/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
23:39:49 88205 /blog/2018/12/12/hello-world/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:39:49 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: fetched https://www.itishow.com/blog/2018/12/12/hello-world/
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cron_preload_cache: scheduling the next preload in 30 seconds.
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 maybe_stop_gc: GC flag not found. GC will go ahead..
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 Cache garbage collection.
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 GC completed. GC flag deleted.
23:39:50 88211 /wp-cron.php?doing_wp_cron=1545089976.9566309452056884765625 scheduled wp_cache_gc for 10 seconds time.
23:40:36 88207 /robots.txt wp_cache_get_cookies_values: return: 
23:40:36 88207 /robots.txt No wp-cache file served as user agent rejected.
23:40:36 88207 /robots.txt wp_cache_get_cookies_values: return: 
23:40:36 88207 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
23:40:36 88207 /robots.txt In WP Cache Phase 2
23:40:36 88207 /robots.txt Setting up WordPress actions
23:40:36 88207 /robots.txt Created output buffer
23:40:36 88207 /robots.txt wp_cache_get_cookies_values: return: 
23:40:36 88207 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
23:40:36 88207 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
23:40:36 88207 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cache_get_cookies_values: return: 
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cache_get_cookies_values: return: 
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cache_check_mobile: www.itishow.com80
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 In WP Cache Phase 2
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 Setting up WordPress actions
23:40:36 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 Not caching wp-admin requests.
23:40:37 88207 /robots.txt USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
23:40:37 88207 /robots.txt wp_cache_maybe_dynamic: returned $buffer
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wp_cache_get_cookies_values: return: 
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ No wp-cache file served as user agent rejected.
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wp_cache_get_cookies_values: return: 
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wp_cache_check_mobile: www.itishow.com80/tag/route%E8%A7%84%E5%88%99/
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ In WP Cache Phase 2
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ Setting up WordPress actions
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ Created output buffer
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wp_cache_get_cookies_values: return: 
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/route%e8%a7%84%e5%88%99/
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/route%e8%a7%84%e5%88%99/
23:40:39 88283 /tag/route%E8%A7%84%E5%88%99/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/route%e8%a7%84%e5%88%99/
23:40:40 88283 /tag/route%E8%A7%84%E5%88%99/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
23:40:40 88283 /tag/route%E8%A7%84%E5%88%99/ wp_cache_maybe_dynamic: returned $buffer
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cron_preload_cache: no more posts to get. Limit (4) reached.
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cron_preload_cache: no more posts. scheduling next preload in 600 minutes.
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 wp_cron_preload_cache: clean expired cache files older than 36000 seconds.
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 Doing GC on supercache dir: /var/www/html/wordpress/wp-content/cache/supercache
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/index.html as it's protected.
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file: /var/www/html/wordpress/wp-content/cache/supercache/index.html
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/index.html as it's protected.
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/login/meta-wp-cache-0c48cc89b1e595f153e5a7a1eeebda04.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/meta-wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13/thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96/wp-cache-964bac566e8df2cd58adfa7529e48c95.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/13 as it's not empty: thinkphp%ef%bc%9aroute%e4%b8%adget%e6%8f%90%e4%ba%a4%e5%8f%82%e6%95%b0%e7%9a%84%e5%ae%9a%e4%b9%89%e5%8f%8a%e8%8e%b7%e5%8f%96
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15 as it's not empty: bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12 as it's not empty: hello-world
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12 as it's not empty: 13
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018 as it's not empty: 12
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/meta-wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 prune_super_cache: did not delete file as it wasn't a directory or file and not forced to delete new file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category as it's not empty: bs
23:40:40 88206 /wp-cron.php?doing_wp_cron=1545090036.1876230239868164062500 gc: could not delete /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog as it's not empty: 2018
00:35:18 88205 / wp_cache_get_cookies_values: return: 
00:35:18 88205 / No wp-cache file served as user agent rejected.
00:35:18 88205 / wp_cache_get_cookies_values: return: 
00:35:18 88205 / wp_cache_check_mobile: www.itishow.com80/
00:35:18 88205 / In WP Cache Phase 2
00:35:18 88205 / Setting up WordPress actions
00:35:18 88205 / Created output buffer
00:35:18 88205 / wp_cache_get_cookies_values: return: 
00:35:18 88205 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
00:35:18 88205 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 wp_cache_get_cookies_values: return: 
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 wp_cache_get_cookies_values: return: 
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 wp_cache_check_mobile: www.itishow.com80
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 In WP Cache Phase 2
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 Setting up WordPress actions
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 Not caching wp-admin requests.
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 maybe_stop_gc: GC flag not found. GC will go ahead..
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 Cache garbage collection.
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 Deleting /var/www/html/wordpress/wp-content/cache/preload_permalink.txt, older than 1800 seconds
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 GC completed. GC flag deleted.
00:35:18 88213 /wp-cron.php?doing_wp_cron=1545093318.2294869422912597656250 scheduled wp_cache_gc for 10 seconds time.
00:35:18 88205 / USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
00:35:18 88205 / wp_cache_maybe_dynamic: returned $buffer
01:08:39 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
01:08:39 88207 /blog/2018/12/12/hello-world/ No wp-cache file served as user agent rejected.
01:08:39 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
01:08:39 88207 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
01:08:39 88207 /blog/2018/12/12/hello-world/ In WP Cache Phase 2
01:08:39 88207 /blog/2018/12/12/hello-world/ Setting up WordPress actions
01:08:39 88207 /blog/2018/12/12/hello-world/ Created output buffer
01:08:39 88207 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
01:08:39 88207 /blog/2018/12/12/hello-world/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
01:08:39 88207 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
01:08:39 88207 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
01:08:39 88207 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 wp_cache_get_cookies_values: return: 
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 wp_cache_get_cookies_values: return: 
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 wp_cache_check_mobile: www.itishow.com80
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 In WP Cache Phase 2
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 Setting up WordPress actions
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 Not caching wp-admin requests.
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 maybe_stop_gc: GC flag not found. GC will go ahead..
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 Cache garbage collection.
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 GC completed. GC flag deleted.
01:08:39 88283 /wp-cron.php?doing_wp_cron=1545095319.5795769691467285156250 scheduled wp_cache_gc for 10 seconds time.
01:08:39 88207 /blog/2018/12/12/hello-world/ USER AGENT (Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)) rejected. Not Caching
01:08:39 88207 /blog/2018/12/12/hello-world/ wp_cache_maybe_dynamic: returned $buffer
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: -https
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/index-https.html
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing dynamic buffer to wpcache file.
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending buffer to browser
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
01:15:33 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
01:25:53 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Serving wp-cache dynamic file
01:26:01 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ exit request
01:42:14 88211 / wp_cache_get_cookies_values: return: 
01:42:14 88211 / wp_cache_get_cookies_values: return: 
01:42:14 88211 / wp_cache_check_mobile: www.itishow.com80/
01:42:14 88211 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
01:42:14 88211 / wp_cache_check_mobile: -https
01:42:14 88211 / No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
01:42:14 88211 / wp_cache_get_cookies_values: return: 
01:42:14 88211 / wp_cache_check_mobile: www.itishow.com80/
01:42:14 88211 / In WP Cache Phase 2
01:42:14 88211 / Setting up WordPress actions
01:42:14 88211 / Created output buffer
01:42:14 88211 / wp_cache_get_cookies_values: return: 
01:42:14 88211 / wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 wp_cache_get_cookies_values: return: 
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 wp_cache_get_cookies_values: return: 
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 wp_cache_check_mobile: www.itishow.com80
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 In WP Cache Phase 2
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 Setting up WordPress actions
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 Not caching wp-admin requests.
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 maybe_stop_gc: GC flag not found. GC will go ahead..
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 Cache garbage collection.
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 GC completed. GC flag deleted.
01:42:14 88283 /wp-cron.php?doing_wp_cron=1545097334.2532789707183837890625 scheduled wp_cache_gc for 10 seconds time.
01:42:15 88211 / Output buffer callback
01:42:15 88211 / wp_cache_get_cookies_values: return: 
01:42:15 88211 / Writing dynamic buffer to wpcache file.
01:42:15 88211 / Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
01:42:15 88211 / Sending buffer to browser
01:42:15 88211 / wp_cache_shutdown_callback: collecting meta data.
01:42:15 88211 / Sending 'Content-Type: text/html; charset="UTF-8"' header.
01:42:15 88211 / Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
02:42:50 88204 / wp_cache_get_cookies_values: return: 
02:42:50 88204 / wp_cache_get_cookies_values: return: 
02:42:50 88204 / wp_cache_check_mobile: www.itishow.com80/
02:42:50 88204 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
02:42:50 88204 / wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
02:42:50 88204 / Serving wp-cache dynamic file
02:42:50 88204 / exit request
02:55:48 88206 /tag/php/ wp_cache_get_cookies_values: return: 
02:55:48 88206 /tag/php/ No wp-cache file served as user agent rejected.
02:55:48 88206 /tag/php/ wp_cache_get_cookies_values: return: 
02:55:48 88206 /tag/php/ wp_cache_check_mobile: www.itishow.com80/tag/php/
02:55:48 88206 /tag/php/ In WP Cache Phase 2
02:55:48 88206 /tag/php/ Setting up WordPress actions
02:55:48 88206 /tag/php/ Created output buffer
02:55:48 88206 /tag/php/ wp_cache_get_cookies_values: return: 
02:55:48 88206 /tag/php/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/php/
02:55:48 88206 /tag/php/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/php/
02:55:48 88206 /tag/php/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/tag/php/
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 wp_cache_get_cookies_values: return: 
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 wp_cache_get_cookies_values: return: 
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 wp_cache_check_mobile: www.itishow.com80
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 In WP Cache Phase 2
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 Setting up WordPress actions
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 Not caching wp-admin requests.
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 maybe_stop_gc: GC flag not found. GC will go ahead..
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 Cache garbage collection.
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 GC completed. GC flag deleted.
02:55:48 88210 /wp-cron.php?doing_wp_cron=1545101748.2775609493255615234375 scheduled wp_cache_gc for 10 seconds time.
02:55:48 88206 /tag/php/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
02:55:48 88206 /tag/php/ wp_cache_maybe_dynamic: returned $buffer
03:04:28 88214 /2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:28 88214 /2018/12/12/hello-world/ No wp-cache file served as user agent rejected.
03:04:28 88214 /2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:28 88214 /2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/2018/12/12/hello-world/
03:04:28 88214 /2018/12/12/hello-world/ In WP Cache Phase 2
03:04:28 88214 /2018/12/12/hello-world/ Setting up WordPress actions
03:04:28 88214 /2018/12/12/hello-world/ Created output buffer
03:04:28 88214 /2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:28 88214 /2018/12/12/hello-world/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/12/hello-world/
03:04:28 88214 /2018/12/12/hello-world/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/12/hello-world/
03:04:28 88214 /2018/12/12/hello-world/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/2018/12/12/hello-world/
03:04:28 88214 /2018/12/12/hello-world/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:04:28 88214 /2018/12/12/hello-world/ wp_cache_maybe_dynamic: returned $buffer
03:04:31 88208 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:31 88208 /blog/2018/12/12/hello-world/ No wp-cache file served as user agent rejected.
03:04:32 88208 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:32 88208 /blog/2018/12/12/hello-world/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/12/hello-world/
03:04:32 88208 /blog/2018/12/12/hello-world/ In WP Cache Phase 2
03:04:32 88208 /blog/2018/12/12/hello-world/ Setting up WordPress actions
03:04:32 88208 /blog/2018/12/12/hello-world/ Created output buffer
03:04:32 88208 /blog/2018/12/12/hello-world/ wp_cache_get_cookies_values: return: 
03:04:32 88208 /blog/2018/12/12/hello-world/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
03:04:32 88208 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/
03:04:32 88208 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/meta-wp-cache-08984cd7b9196b2bb37653140a7efae8.php
03:04:32 88208 /blog/2018/12/12/hello-world/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/12/hello-world/wp-cache-08984cd7b9196b2bb37653140a7efae8.php
03:04:32 88208 /blog/2018/12/12/hello-world/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:04:32 88208 /blog/2018/12/12/hello-world/ wp_cache_maybe_dynamic: returned $buffer
03:07:41 88209 /category/tp/ wp_cache_get_cookies_values: return: 
03:07:41 88209 /category/tp/ No wp-cache file served as user agent rejected.
03:07:42 88209 /category/tp/ wp_cache_get_cookies_values: return: 
03:07:42 88209 /category/tp/ wp_cache_check_mobile: www.itishow.com80/category/tp/
03:07:42 88209 /category/tp/ In WP Cache Phase 2
03:07:42 88209 /category/tp/ Setting up WordPress actions
03:07:42 88209 /category/tp/ Created output buffer
03:07:42 88209 /category/tp/ wp_cache_get_cookies_values: return: 
03:07:42 88209 /category/tp/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/tp/
03:07:42 88209 /category/tp/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/tp/
03:07:42 88209 /category/tp/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/tp/
03:07:43 88209 /category/tp/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:07:43 88209 /category/tp/ wp_cache_maybe_dynamic: returned $buffer
03:08:53 88211 / wp_cache_get_cookies_values: return: 
03:08:53 88211 / wp_cache_get_cookies_values: return: 
03:08:53 88211 / wp_cache_check_mobile: www.itishow.com80/
03:08:53 88211 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:08:53 88211 / wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
03:08:53 88211 / Serving wp-cache dynamic file
03:08:53 88211 / exit request
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_get_cookies_values: return: 
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_get_cookies_values: return: 
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_check_mobile: -https
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/index-https.html
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_get_cookies_values: return: 
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ In WP Cache Phase 2
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Setting up WordPress actions
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Created output buffer
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_get_cookies_values: return: 
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-65b6597e9023eadb56ead8df119c6edb.php
03:09:04 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-65b6597e9023eadb56ead8df119c6edb.php
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Output buffer callback
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_get_cookies_values: return: 
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Writing dynamic buffer to wpcache file.
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/wp-cache-de482cfad92ae59429e2b9293af7f062.php
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Sending buffer to browser
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ wp_cache_shutdown_callback: collecting meta data.
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:09:05 88211 /blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/15/bootstrap%e8%87%aa%e5%ae%9a%e4%b9%89alert%e5%92%8cconfirm/meta-wp-cache-de482cfad92ae59429e2b9293af7f062.php
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: base file found: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:09:06 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:09:37 88205 /category/bs/ wp_cache_get_cookies_values: return: 
03:09:37 88205 /category/bs/ No wp-cache file served as user agent rejected.
03:09:37 88205 /category/bs/ wp_cache_get_cookies_values: return: 
03:09:37 88205 /category/bs/ wp_cache_check_mobile: www.itishow.com80/category/bs/
03:09:37 88205 /category/bs/ In WP Cache Phase 2
03:09:37 88205 /category/bs/ Setting up WordPress actions
03:09:37 88205 /category/bs/ Created output buffer
03:09:37 88205 /category/bs/ wp_cache_get_cookies_values: return: 
03:09:37 88205 /category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/bs/
03:09:37 88205 /category/bs/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/bs/
03:09:37 88205 /category/bs/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/bs/
03:09:37 88205 /category/bs/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:09:37 88205 /category/bs/ wp_cache_maybe_dynamic: returned $buffer
03:09:53 88215 / wp_cache_get_cookies_values: return: 
03:09:53 88215 / wp_cache_get_cookies_values: return: 
03:09:53 88215 / wp_cache_check_mobile: www.itishow.com80/
03:09:53 88215 / supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:09:53 88215 / wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
03:09:53 88215 / Serving wp-cache dynamic file
03:09:53 88215 / exit request
03:13:14 88213 /robots.txt wp_cache_get_cookies_values: return: 
03:13:14 88213 /robots.txt No wp-cache file served as user agent rejected.
03:13:14 88213 /robots.txt wp_cache_get_cookies_values: return: 
03:13:14 88213 /robots.txt wp_cache_check_mobile: www.itishow.com80/robots.txt
03:13:14 88213 /robots.txt In WP Cache Phase 2
03:13:14 88213 /robots.txt Setting up WordPress actions
03:13:14 88213 /robots.txt Created output buffer
03:13:14 88213 /robots.txt wp_cache_get_cookies_values: return: 
03:13:14 88213 /robots.txt supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
03:13:14 88213 /robots.txt wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
03:13:14 88213 /robots.txt wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/robots.txt/
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 wp_cache_get_cookies_values: return: 
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 wp_cache_get_cookies_values: return: 
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 wp_cache_check_mobile: www.itishow.com80
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 In WP Cache Phase 2
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 Setting up WordPress actions
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 Not caching wp-admin requests.
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 maybe_stop_gc: GC flag not found. GC will go ahead..
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 Cache garbage collection.
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 GC completed. GC flag deleted.
03:13:14 88210 /wp-cron.php?doing_wp_cron=1545102794.6887180805206298828125 scheduled wp_cache_gc for 10 seconds time.
03:13:14 88213 /robots.txt USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:13:14 88213 /robots.txt wp_cache_maybe_dynamic: returned $buffer
03:13:18 88209 /comments/feed/ wp_cache_get_cookies_values: return: 
03:13:18 88209 /comments/feed/ No wp-cache file served as user agent rejected.
03:13:18 88209 /comments/feed/ wp_cache_get_cookies_values: return: 
03:13:18 88209 /comments/feed/ wp_cache_check_mobile: www.itishow.com80/comments/feed/
03:13:18 88209 /comments/feed/ In WP Cache Phase 2
03:13:18 88209 /comments/feed/ Setting up WordPress actions
03:13:18 88209 /comments/feed/ Created output buffer
03:13:18 88209 /comments/feed/ wp_cache_get_cookies_values: return: 
03:13:18 88209 /comments/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/
03:13:18 88209 /comments/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/
03:13:18 88209 /comments/feed/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/comments/feed/
03:13:18 88209 /comments/feed/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:13:18 88209 /comments/feed/ wp_cache_maybe_dynamic: returned $buffer
03:14:59 88211 /category/yii/ wp_cache_get_cookies_values: return: 
03:14:59 88211 /category/yii/ No wp-cache file served as user agent rejected.
03:14:59 88211 /category/yii/ wp_cache_get_cookies_values: return: 
03:14:59 88211 /category/yii/ wp_cache_check_mobile: www.itishow.com80/category/yii/
03:14:59 88211 /category/yii/ In WP Cache Phase 2
03:14:59 88211 /category/yii/ Setting up WordPress actions
03:14:59 88211 /category/yii/ Created output buffer
03:14:59 88211 /category/yii/ wp_cache_get_cookies_values: return: 
03:14:59 88211 /category/yii/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/yii/
03:14:59 88211 /category/yii/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/yii/
03:14:59 88211 /category/yii/ wpcache_do_rebuild: exiting as directory is not a directory: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/category/yii/
03:14:59 88211 /category/yii/ USER AGENT (Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)) rejected. Not Caching
03:14:59 88211 /category/yii/ wp_cache_maybe_dynamic: returned $buffer
03:23:59 88215 /?post=46 wp_cache_get_cookies_values: return: 
03:23:59 88215 /?post=46 wp_cache_get_cookies_values: return: 
03:23:59 88215 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
03:23:59 88215 /?post=46 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:23:59 88215 /?post=46 wp_cache_check_mobile: -https
03:23:59 88215 /?post=46 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
03:23:59 88215 /?post=46 wp_cache_get_cookies_values: return: 
03:23:59 88215 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
03:23:59 88215 /?post=46 In WP Cache Phase 2
03:23:59 88215 /?post=46 Setting up WordPress actions
03:23:59 88215 /?post=46 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"46"}
03:23:59 88215 /?post=46 Created output buffer
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 wp_cache_get_cookies_values: return: 
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 wp_cache_get_cookies_values: return: 
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 wp_cache_check_mobile: www.itishow.com80
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 In WP Cache Phase 2
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 Setting up WordPress actions
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 Not caching wp-admin requests.
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 maybe_stop_gc: GC flag not found. GC will go ahead..
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 Cache garbage collection.
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 GC completed. GC flag deleted.
03:23:59 88214 /wp-cron.php?doing_wp_cron=1545103439.4777700901031494140625 scheduled wp_cache_gc for 10 seconds time.
03:23:59 88215 /?post=46 Output buffer callback
03:23:59 88215 /?post=46 Supercache disabled: GET or feed detected or disabled by config.
03:23:59 88215 /?post=46 wp_cache_get_cookies_values: return: 
03:23:59 88215 /?post=46 Writing dynamic buffer to wpcache file.
03:23:59 88215 /?post=46 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
03:23:59 88215 /?post=46 Sending buffer to browser
03:23:59 88215 /?post=46 wp_cache_shutdown_callback: collecting meta data.
03:23:59 88215 /?post=46 Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:23:59 88215 /?post=46 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
03:24:01 88206 /blog/category/bs/ wp_cache_get_cookies_values: return: 
03:24:01 88206 /blog/category/bs/ wp_cache_get_cookies_values: return: 
03:24:01 88206 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
03:24:01 88206 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
03:24:01 88206 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
03:24:01 88206 /blog/category/bs/ Serving wp-cache dynamic file
03:24:01 88206 /blog/category/bs/ exit request
03:24:03 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:24:03 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:24:03 88204 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
03:24:03 88204 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
03:24:03 88204 /blog/category/bs/feed/ wp_cache_check_mobile: -https
03:24:03 88204 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
03:24:03 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:24:03 88204 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
03:24:03 88204 /blog/category/bs/feed/ In WP Cache Phase 2
03:24:03 88204 /blog/category/bs/feed/ Setting up WordPress actions
03:24:03 88204 /blog/category/bs/feed/ Created output buffer
03:24:03 88204 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:24:03 88204 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
03:24:03 88204 /blog/category/bs/feed/ Output buffer callback
03:24:03 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.169 seconds.
03:24:03 88204 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
03:24:03 88204 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
03:24:03 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 11:24:03
03:24:03 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
03:24:03 88204 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
03:24:03 88204 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
03:24:03 88204 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:24:03 88204 /blog/category/bs/feed/ Sending buffer to browser
03:24:03 88204 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
03:24:03 88204 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
03:24:03 88204 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
03:24:03 88204 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Serving wp-cache dynamic file
03:24:04 88283 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ exit request
03:24:06 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
03:24:06 88208 /wp-comments-post.php wp_cache_get_cookies_values: return: 
03:24:06 88208 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
03:24:06 88208 /wp-comments-post.php In WP Cache Phase 2
03:24:06 88208 /wp-comments-post.php Setting up WordPress actions
03:24:06 88208 /wp-comments-post.php Created output buffer
03:24:10 88208 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
03:24:10 88208 /wp-comments-post.php Post 181 changed. Update cache.
03:24:10 88208 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:24:10 88208 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php )
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-f1808c14a60a26172bd5a5daf75b1a01.php
03:24:10 88208 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:24:10 88208 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:24:10 88208 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
03:24:10 88208 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
03:24:10 88208 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
03:24:10 88208 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
03:24:10 88208 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-85c7f30b92b55380e20ab3f96f0f4364.php
03:24:10 88208 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
03:24:10 88208 /wp-comments-post.php Not caching POST request.
03:24:10 88208 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:24:11 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
03:54:10 88204 /?post=33&comment-page=2 wp_cache_get_cookies_values: return: 
03:54:10 88204 /?post=33&comment-page=2 wp_cache_get_cookies_values: return: 
03:54:10 88204 /?post=33&comment-page=2 wp_cache_check_mobile: www.itishow.com80/?post=33&comment-page=2
03:54:10 88204 /?post=33&comment-page=2 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:54:10 88204 /?post=33&comment-page=2 wp_cache_check_mobile: -https
03:54:10 88204 /?post=33&comment-page=2 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
03:54:10 88204 /?post=33&comment-page=2 wp_cache_get_cookies_values: return: 
03:54:10 88204 /?post=33&comment-page=2 wp_cache_check_mobile: www.itishow.com80/?post=33&comment-page=2
03:54:10 88204 /?post=33&comment-page=2 In WP Cache Phase 2
03:54:10 88204 /?post=33&comment-page=2 Setting up WordPress actions
03:54:10 88204 /?post=33&comment-page=2 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"33","comment-page":"2"}
03:54:10 88204 /?post=33&comment-page=2 Created output buffer
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 wp_cache_get_cookies_values: return: 
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 wp_cache_get_cookies_values: return: 
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 wp_cache_check_mobile: www.itishow.com80
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 In WP Cache Phase 2
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 Setting up WordPress actions
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 Not caching wp-admin requests.
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 maybe_stop_gc: GC flag not found. GC will go ahead..
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 Cache garbage collection.
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 GC completed. GC flag deleted.
03:54:11 88283 /wp-cron.php?doing_wp_cron=1545105250.5382258892059326171875 scheduled wp_cache_gc for 10 seconds time.
03:54:11 88204 /?post=33&comment-page=2 Output buffer callback
03:54:11 88204 /?post=33&comment-page=2 Supercache disabled: GET or feed detected or disabled by config.
03:54:11 88204 /?post=33&comment-page=2 wp_cache_get_cookies_values: return: 
03:54:11 88204 /?post=33&comment-page=2 Writing dynamic buffer to wpcache file.
03:54:11 88204 /?post=33&comment-page=2 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-b9abecf014fe8e0f965a3245f5a23803.php
03:54:11 88204 /?post=33&comment-page=2 Sending buffer to browser
03:54:11 88204 /?post=33&comment-page=2 wp_cache_shutdown_callback: collecting meta data.
03:54:11 88204 /?post=33&comment-page=2 Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:54:11 88204 /?post=33&comment-page=2 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-b9abecf014fe8e0f965a3245f5a23803.php
03:54:12 88208 /blog/category/bs/ wp_cache_get_cookies_values: return: 
03:54:12 88208 /blog/category/bs/ wp_cache_get_cookies_values: return: 
03:54:12 88208 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
03:54:12 88208 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
03:54:12 88208 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
03:54:12 88208 /blog/category/bs/ Serving wp-cache dynamic file
03:54:12 88208 /blog/category/bs/ exit request
03:54:14 88207 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:54:14 88207 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:54:14 88207 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
03:54:14 88207 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
03:54:14 88207 /blog/category/bs/feed/ wp_cache_check_mobile: -https
03:54:14 88207 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
03:54:14 88207 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:54:14 88207 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
03:54:14 88207 /blog/category/bs/feed/ In WP Cache Phase 2
03:54:14 88207 /blog/category/bs/feed/ Setting up WordPress actions
03:54:14 88207 /blog/category/bs/feed/ Created output buffer
03:54:14 88207 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
03:54:14 88207 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
03:54:14 88207 /blog/category/bs/feed/ Output buffer callback
03:54:14 88207 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.163 seconds.
03:54:14 88207 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
03:54:14 88207 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
03:54:14 88207 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 11:54:14
03:54:14 88207 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
03:54:14 88207 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
03:54:14 88207 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
03:54:14 88207 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:54:14 88207 /blog/category/bs/feed/ Sending buffer to browser
03:54:14 88207 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
03:54:14 88207 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
03:54:14 88207 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
03:54:14 88207 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:54:15 88210 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:54:17 88213 /wp-comments-post.php wp_cache_get_cookies_values: return: 
03:54:17 88213 /wp-comments-post.php wp_cache_get_cookies_values: return: 
03:54:17 88213 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
03:54:17 88213 /wp-comments-post.php In WP Cache Phase 2
03:54:17 88213 /wp-comments-post.php Setting up WordPress actions
03:54:17 88213 /wp-comments-post.php Created output buffer
03:54:18 88213 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
03:54:18 88213 /wp-comments-post.php Post 181 changed. Update cache.
03:54:18 88213 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
03:54:18 88213 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
03:54:18 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
03:54:18 88213 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:54:18 88213 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
03:54:18 88213 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
03:54:18 88213 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:54:18 88213 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:54:18 88213 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
03:54:18 88213 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
03:54:18 88213 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
03:54:18 88213 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
03:54:18 88213 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:54:18 88213 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-b9abecf014fe8e0f965a3245f5a23803.php
03:54:18 88213 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-b9abecf014fe8e0f965a3245f5a23803.php
03:54:18 88213 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
03:54:18 88213 /wp-comments-post.php Not caching POST request.
03:54:18 88213 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
03:54:19 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: -https
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/index-https.html
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
04:25:49 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/
04:25:49 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 wp_cache_get_cookies_values: return: 
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 wp_cache_get_cookies_values: return: 
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 wp_cache_check_mobile: www.itishow.com80
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 In WP Cache Phase 2
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 Setting up WordPress actions
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 Not caching wp-admin requests.
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 maybe_stop_gc: GC flag not found. GC will go ahead..
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 wp_cache_gc_cron: Set GC Flag. (/var/www/html/wordpress/wp-content/cache/www.itishow.com_wp_cache_gc.txt)
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 Cache garbage collection.
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 Cleaning expired cache files in /var/www/html/wordpress/wp-content/cache/
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 GC completed. GC flag deleted.
04:25:50 88214 /wp-cron.php?doing_wp_cron=1545107149.8466660976409912109375 scheduled wp_cache_gc for 10 seconds time.
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: 
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing dynamic buffer to wpcache file.
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending buffer to browser
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:25:50 88205 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
04:34:20 88206 /?post=46 wp_cache_get_cookies_values: return: 
04:34:20 88206 /?post=46 wp_cache_get_cookies_values: return: 
04:34:20 88206 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
04:34:20 88206 /?post=46 supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:20 88206 /?post=46 wp_cache_check_mobile: -https
04:34:20 88206 /?post=46 No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/index-https.html
04:34:20 88206 /?post=46 wp_cache_get_cookies_values: return: 
04:34:20 88206 /?post=46 wp_cache_check_mobile: www.itishow.com80/?post=46
04:34:20 88206 /?post=46 In WP Cache Phase 2
04:34:20 88206 /?post=46 Setting up WordPress actions
04:34:20 88206 /?post=46 Supercache caching disabled. Only using wp-cache. Non empty GET request. {"post":"46"}
04:34:20 88206 /?post=46 Created output buffer
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 wp_cache_get_cookies_values: return: 
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 wp_cache_get_cookies_values: return: 
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 wp_cache_check_mobile: www.itishow.com80
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 In WP Cache Phase 2
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 Setting up WordPress actions
04:34:20 88283 /wp-cron.php?doing_wp_cron=1545107660.5339729785919189453125 Not caching wp-admin requests.
04:34:20 88206 /?post=46 Output buffer callback
04:34:20 88206 /?post=46 Supercache disabled: GET or feed detected or disabled by config.
04:34:20 88206 /?post=46 wp_cache_get_cookies_values: return: 
04:34:20 88206 /?post=46 Writing dynamic buffer to wpcache file.
04:34:20 88206 /?post=46 Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
04:34:20 88206 /?post=46 Sending buffer to browser
04:34:20 88206 /?post=46 wp_cache_shutdown_callback: collecting meta data.
04:34:20 88206 /?post=46 Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:34:20 88206 /?post=46 Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
04:34:22 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
04:34:22 88204 /blog/category/bs/ wp_cache_get_cookies_values: return: 
04:34:22 88204 /blog/category/bs/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/
04:34:22 88204 /blog/category/bs/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/
04:34:22 88204 /blog/category/bs/ wp-cache file exists: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/wp-cache-84238a0eafd44f17a746fc62c0e209dd.php
04:34:22 88204 /blog/category/bs/ Serving wp-cache dynamic file
04:34:22 88204 /blog/category/bs/ exit request
04:34:25 88208 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
04:34:25 88208 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
04:34:25 88208 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
04:34:25 88208 /blog/category/bs/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
04:34:25 88208 /blog/category/bs/feed/ wp_cache_check_mobile: -https
04:34:25 88208 /blog/category/bs/feed/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/index-https.html
04:34:25 88208 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
04:34:25 88208 /blog/category/bs/feed/ wp_cache_check_mobile: www.itishow.com80/blog/category/bs/feed/
04:34:25 88208 /blog/category/bs/feed/ In WP Cache Phase 2
04:34:25 88208 /blog/category/bs/feed/ Setting up WordPress actions
04:34:25 88208 /blog/category/bs/feed/ Created output buffer
04:34:25 88208 /blog/category/bs/feed/ wp_cache_get_cookies_values: return: 
04:34:25 88208 /blog/category/bs/feed/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/
04:34:25 88208 /blog/category/bs/feed/ Output buffer callback
04:34:25 88208 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic page generated in 0.164 seconds.
04:34:25 88208 /blog/category/bs/feed/ Feed detected. Writing wpcache cache files.
04:34:25 88208 /blog/category/bs/feed/ Supercache disabled: GET or feed detected or disabled by config.
04:34:25 88208 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 12:34:25
04:34:25 88208 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
04:34:25 88208 /blog/category/bs/feed/ Writing dynamic buffer to wpcache file.
04:34:25 88208 /blog/category/bs/feed/ https://www.itishow.com/blog/category/bs/feed/ - Dynamic WPCache Super Cache
04:34:25 88208 /blog/category/bs/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
04:34:25 88208 /blog/category/bs/feed/ Sending buffer to browser
04:34:25 88208 /blog/category/bs/feed/ wp_cache_shutdown_callback: collecting meta data.
04:34:25 88208 /blog/category/bs/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
04:34:25 88208 /blog/category/bs/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
04:34:25 88208 /blog/category/bs/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: -https
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ No Super Cache file found for current URL: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/index-https.html
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_check_mobile: www.itishow.com80/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ In WP Cache Phase 2
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Setting up WordPress actions
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Created output buffer
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wpcache_do_rebuild: doing rebuild for /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Output buffer callback
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_get_cookies_values: return: 
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing dynamic buffer to wpcache file.
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending buffer to browser
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ wp_cache_shutdown_callback: collecting meta data.
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:34:26 88207 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
04:34:28 88210 /wp-comments-post.php wp_cache_get_cookies_values: return: 
04:34:28 88210 /wp-comments-post.php wp_cache_get_cookies_values: return: 
04:34:28 88210 /wp-comments-post.php wp_cache_check_mobile: www.itishow.com80
04:34:28 88210 /wp-comments-post.php In WP Cache Phase 2
04:34:28 88210 /wp-comments-post.php Setting up WordPress actions
04:34:28 88210 /wp-comments-post.php Created output buffer
04:34:30 88210 /wp-comments-post.php Moderated comment. Don't delete supercache file until comment approved.
04:34:30 88210 /wp-comments-post.php Post 181 changed. Update cache.
04:34:30 88210 /wp-comments-post.php supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/
04:34:30 88210 /wp-comments-post.php wp_cache_post_id_gc post_id: 181 https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/ clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/.
04:34:30 88210 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/meta-wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
04:34:30 88210 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php )
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/wp-cache-4cb81d9096e14d7eebc5566a641890f8.php
04:34:30 88210 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
04:34:30 88210 /wp-comments-post.php prune_super_cache: wp_cache_rebuild_or_delete( /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php )
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/meta-wp-cache-a37338250f3e57ad6e3d9101d441bd0b.php
04:34:30 88210 /wp-comments-post.php wpsc_feed_update: deleting feed: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
04:34:30 88210 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
04:34:30 88210 /wp-comments-post.php prune_super_cache: deleted /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/blog/category/bs/feed/meta-wp-cache-a1fb2d0dead3dfc60d83e7d299dd71fb.php
04:34:30 88210 /wp-comments-post.php wp_cache_post_id_gc clearing cache in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/.
04:34:30 88210 /wp-comments-post.php wpsc_get_realpath: directory does not exist - /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
04:34:30 88210 /wp-comments-post.php prune_super_cache: exiting as file/directory does not exist : /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/page/
04:34:30 88210 /wp-comments-post.php Post change: supercache enabled: deleting cache files in /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted non-anonymous file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-8aa1950f156786c508f7a85f56ca3601.php
04:34:30 88210 /wp-comments-post.php rebuild_or_gc: deleted meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-8aa1950f156786c508f7a85f56ca3601.php
04:34:30 88210 /wp-comments-post.php wp_cache_post_change: checking /var/www/html/wordpress/wp-content/cache/meta/
04:34:30 88210 /wp-comments-post.php Not caching POST request.
04:34:30 88210 /wp-comments-post.php wp_cache_maybe_dynamic: returned $buffer
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:34:31 88213 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:34:33 88209 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Caching disabled for logged in users on settings page.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ In WP Cache Phase 2
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Setting up WordPress actions
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Created output buffer
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Output buffer callback
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Dynamic page generated in 0.177 seconds.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Feed detected. Writing wpcache cache files.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Supercache disabled: GET or feed detected or disabled by config.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Cached page generated by WP-Super-Cache on 2018-12-18 12:34:34
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Super Cache dynamic page detected but late init not set. See the readme.txt for further details.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Writing dynamic buffer to wpcache file.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ https://www.itishow.com/blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ - Dynamic WPCache Super Cache
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Renamed temp wp-cache file to /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Sending buffer to browser
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_shutdown_callback: collecting meta data.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ wp_cache_shutdown_callback: feed is type: feed - application/rss+xml
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Sending 'Content-Type: application/rss+xml; charset="UTF-8"' header.
04:34:34 88211 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/feed/ Writing meta file: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_c8a395ee104d8b1c909d805684cbd559
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_email_c8a395ee104d8b1c909d805684cbd559
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: /^wp-postpass_|^comment_author_|^wordpress_logged_in_/ Cookie detected: comment_author_url_c8a395ee104d8b1c909d805684cbd559
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: return: a4d425c7839456f2e4eda4571b588b0f
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Caching disabled for logged in users on settings page.
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_check_mobile: www.itishow.com80a4d425c7839456f2e4eda4571b588b0f
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ In WP Cache Phase 2
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Setting up WordPress actions
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Created output buffer
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Output buffer callback
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ supercache dir: /var/www/html/wordpress/wp-content/cache/supercache/www.itishow.com/
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_get_cookies_values: cached: a4d425c7839456f2e4eda4571b588b0f
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Not caching for known user.
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Cache is not enabled. Sending buffer to browser.
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_maybe_dynamic: returned $buffer
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ wp_cache_shutdown_callback: collecting meta data.
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Sending 'Content-Type: text/html; charset="UTF-8"' header.
04:34:36 88214 /blog/2018/12/17/bootstrap%e6%a8%a1%e6%80%81%e6%a1%86%ef%bc%88modal%ef%bc%89%e4%b8%ad%e6%8c%89%e9%92%ae%e7%82%b9%e5%87%bb%e5%a4%9a%e6%ac%a1%e6%8f%90%e4%ba%a4%e7%9a%84%e9%97%ae%e9%a2%98%ef%bc%88bug%ef%bc%89%e8%a7%a3/comment-page-1/ Did not write meta file: meta-wp-cache-7d69ace4fe6f64388a8522c733d71d7d.php ** *1* *1*
04:20:37 72684 /wordpress/ wp_cache_get_cookies_values: return: 
04:20:37 72684 /wordpress/ No wp-cache file served as user agent rejected.
