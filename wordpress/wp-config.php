<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'upqrp0har9xnyzc77wfh8e8wy6t5mqr62yo2xe9osu9vqdd24l1uzh968hxsb1r6' );
define( 'SECURE_AUTH_KEY',  'rdytvx268eevjqf2olod6j5d3797g9npgoh2isheodg2rs2c9rpzin2bmyywu2g1' );
define( 'LOGGED_IN_KEY',    '8xk3p3fvalm8zo4inhk5t605dbrb6tm8yu84sqcm7io0ctbp28czdpbveu7f4jr8' );
define( 'NONCE_KEY',        'q8pmwtqb2h3zatbkg1ied740aqovbxlnrv8dk166a5k9u8ttxda8etx2erb9apo9' );
define( 'AUTH_SALT',        'an8a47ewmu7cz4hzypa4uyohbl4fmphkdyfw3tmgrv88gq65rqxvsvd96s3jx9z2' );
define( 'SECURE_AUTH_SALT', 'uw6t2ddevi3k32dt3zdgpbab6o6vl4z2ej77bhnasv8w17f6baz3gxjapv2vtndq' );
define( 'LOGGED_IN_SALT',   'tkl411q7ydoybqi02alf6w0o87ao7wtoyzbe489vncxccfjznjxh3uwqc03nm3zr' );
define( 'NONCE_SALT',       'yi039w0y8um95hzktdlh2sfwdbpys70kuatp80swxth633xrehh2d7k0lxl7x570' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-7ea4c432-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-7ea4c432-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
