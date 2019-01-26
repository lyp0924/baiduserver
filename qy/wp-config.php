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
/** WordPress数据库的名称 */
define('DB_NAME', 'qy');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'LiuY');

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
define('AUTH_KEY',         'M^f=7O1D2-a?@cH]=UO_AIU8Kks:U9@~yb?q`v]7g@o!mVMR^6*dVD!E!)H<5S (');
define('SECURE_AUTH_KEY',  '2~G?0IhX:JS@WOFZx]WUKu<g)KA8w?Y>kC(7`Il`#+r$8 =Js1~8f0RMDv &A iA');
define('LOGGED_IN_KEY',    'N,b/YC|+ZHB>0OTjR-aT+FLo~l4@XexUBo7eXN/E{< {ObNtdn>@ZaFF6Y|}>o=Z');
define('NONCE_KEY',        '-;]4=nWKP0mfv|CU1p+i=G7-:xDiW!`>d,,D4=ZQt}51?Z@B(;(pu:9y>!g,a4bc');
define('AUTH_SALT',        'I_YV>NJ`J>GTP})KI|7W!k{kf}V;!mFie]E8X-#$~PCKNHG+(vRko98UHCabtR/9');
define('SECURE_AUTH_SALT', 'eWZT!r66dciQHGBMWIm6@w0SxG@=#_1MuGJ1rP2@^hpJ2zY)~eRG!=;bQt<{7Dra');
define('LOGGED_IN_SALT',   '9GNq}7,ruI~GeV&<e+Bg-C3:Z]WCmREwxY$`F_o~Mpzx0L&;D-+^A[&SsgoIU]W=');
define('NONCE_SALT',       't0n8dO ()8S15>T>xjil`IYEP<b9yOX+:W6],jyxQg4&0 ]aJ*f{Fe!T]`|GPv=;');

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
define('FS_METHOD', 'direct');
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');
/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

