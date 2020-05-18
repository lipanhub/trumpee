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
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '529529');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`SJ51O$^#wJVi{{/rg&qo52Pt/-B.vk>WJZ-UX*Y1Llg) - zW(8PbLGJaFY`H]l');
define('SECURE_AUTH_KEY',  '^GDbN7vYhxTRoZQF2RLlE8=~Tj]la{3,drNRiJID~AJ]FR,C&N4*.3k<kK=Nc$(h');
define('LOGGED_IN_KEY',    ')Q%]^/)CpH2X*;>P:B#]y85*t_NfY,[(}_n#.10:/8nr)whnT$Zn9a0IxWJ(&!t?');
define('NONCE_KEY',        'g^r!0M9 r-d]!Jj}M]^ON!mpyl=.=(Nnvk^GV>2/?kyj.KZ{DSi&x6*eAU?C1}[X');
define('AUTH_SALT',        'fy<d`] PfCaySBkyk*2s,T^fWA/a~k^O<~a .iQ%/I(59PZ2~F}/Le%{@m8xA$bf');
define('SECURE_AUTH_SALT', '._s{F)l_M0q+8yQK6w4)w~$_jLZEFs2nw.=)-1XKr.%8K8JA+81kA?T:O+QOX[hp');
define('LOGGED_IN_SALT',   'wfNF& 45lCnM?Csgry1ipTLT*4vdzO=F?PEKQS%S!rhUhH*I vK=DW.KqqDHG&:i');
define('NONCE_SALT',       'H7np;wI;8CWs]p}Vm-v5<8fH)cSfI:rE+^uc)uB)ISwiun5,,~G|qRQ=5WBvECCn');

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

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
?>
