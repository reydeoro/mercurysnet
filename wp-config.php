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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'lonasql' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[T<b.IQ<ixs$OC#:&@4[kR9v@CCtHA%rZr; zbC*7w0DiRUqt5rbf8LRByt%K.)C' );
define( 'SECURE_AUTH_KEY',  'n}Df(s&;kh2#`:B.V-hF7#u PF$umG3]M;3%dPoUlma+e,V]&)&+h+e+Cos}vHVn' );
define( 'LOGGED_IN_KEY',    'l/c|):$3N(t49Ro[C9hAu0x]qp8qK3u[Rx$n6ZW$I2:|AE(xA+rxMqpO7y4`k:Wx' );
define( 'NONCE_KEY',        'JKtpN:`hkop4f)XNqcg&~uB3^{4y^(p}Dt{pPhm`M%-=A)N0#Z?*u5b0e8L8_<Mg' );
define( 'AUTH_SALT',        '`D7;tP}U6i,$jpH3Ha</]HKCE>UZ?wT)]4;[eo`:PmJ[07BD;!)^(seWzW0uy~} ' );
define( 'SECURE_AUTH_SALT', ' .K;B=^%T$o:GS!1@++i}h|sk$}cl*tQ.l{C#QF^+-j:Q`:$v2Z0Ic.J>Cm>9y{&' );
define( 'LOGGED_IN_SALT',   'q7]?c4hI8%srZ+[<sDy<XMGq&gIchHmA%|y<Xv!{tCJ9G*yT_ImtquBdnJ7j!P_A' );
define( 'NONCE_SALT',       'nWN/4$BB_~r)7[Xa/3+-Vk 13p[$JBdp`%ZZ;2[)_H%O~%?Ws0&o>z8<fg:k;_Rf' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
