<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //

define( 'WPMS_ON', true );
//define( 'WPMS_SMTP_PASS', 'aAa0901' );
define( 'WPCACHEHOME', '/var/www/html/ysh/wp-content/plugins/wp-super-cache/' );
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'LiuY0901+');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JOgUJ`~}3|x+Y#dF#nyEhqYaBApl#_8b<`5]cr!z!p:1eBRf<Jp]@T4|03rk/]V(');
define('SECURE_AUTH_KEY',  'aQ<f Z?dJIghLf<lr#q!Uq&pe.kIAYE$3i97|4#J,J -Jh12&nC:m.Kb@_[RWD1q');
define('LOGGED_IN_KEY',    'M)VUfq-B]Xc%)$hFh=p Mw;dI1hxBmCi$ ^D^81t%6d>6XLQPhm(HEHP$[)2%I2&');
define('NONCE_KEY',        'aPZ&4x(b:#iF:agL](*l~0OpLLC%VC~?Wj(F *PIX9wz78c>b~{E*d/|obU;ij0>');
define('AUTH_SALT',        'Xg4GH^<SfXouH%Ei>;ypy;z2A$pvLg,2<b|2n9~{fGaJ$Ljz4Y~bf{Mj`pq^O8XS');
define('SECURE_AUTH_SALT', 'km #t|8.o@q]*>gpdatjs_8Gosa_8:^CFxi8?`t?dP-X_<40Pyd=fU)SgP-Z5$ A');
define('LOGGED_IN_SALT',   'C.W-pbkAC||=2t>!Y0vnyzWZ1OV^5M)FbGJP@QvDl9A:J.+lP<%%oi>^Y^`NU6/X');
define('NONCE_SALT',       '_vYtIofu|n|G$h;TE7q^aJAY#Y%w-;%<|4T#P# bCo/LLv4em5iKkGT1PBT|h0)-');
$_SERVER['HTTPS'] = 'on';
define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);
/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');

define("FS_METHOD", "direct");  

define("FS_CHMOD_DIR", 0777);  

define("FS_CHMOD_FILE", 0777); 

define('WP_CACHE', true);

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
