<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp03db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'wpuser' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'secret' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`#4C+2@bVOnSJ<-Nb`#r?):Cw>6B!f/GFlD>Fq/vXC7F*NN}.cq+f(Q3N*2OVdqf' );
define( 'SECURE_AUTH_KEY',  'H{<^-LNA9QQLt(lfYwj/yw@n|9Ulonv}3FMFvAN94F8(q<i3uJws^893T}j+pjHn' );
define( 'LOGGED_IN_KEY',    '.8RLi}yjkutf!P;mOBt+bPvb<]v @[~x>?6]85+.GqVU,msAY!uFl;P.!l$3><;6' );
define( 'NONCE_KEY',        'SmkwV-kiFJMKFDq[ 8:trem_!zkw5l:<6p#5:<{D*LX=_vnbh!OtLJ^_!wB]+[PO' );
define( 'AUTH_SALT',        ']{_!55d*o_{%Z7.<A+cD`D}Snb6fEZ0/kn,gM3X]qDL+JY8pj2Lc~@T(a.m85g*f' );
define( 'SECURE_AUTH_SALT', ';%W/AjzO@(|QH2t)SIoq)IV@KE&74XY{RD`~_O?H*)@?f+n9T$q~!yXoJI5P8<kB' );
define( 'LOGGED_IN_SALT',   '+m*JEHps5iyR^3<Xo~,_p.OuT09RzIphR*76po722n-c2-72!d<JRJy|NhumR0{8' );
define( 'NONCE_SALT',       'ytq}k1kS:ANadP,Gbo4QZ)[(1FZ{m6j@[=6QJ7(GtvBIye<yK&#tzLr8,V`~(Mi:' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'tk_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
