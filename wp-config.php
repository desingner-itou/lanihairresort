<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'lani-2011_manasys');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'lani-2011');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'nta3YfYTHc4W');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'SI={`czocpbqQG[NNEzyjV~o@ucb.x*6pV^PcY(IRm0zm .4&y)9BdY1ZsWx9pL&');
define('SECURE_AUTH_KEY',  'S0 |j)||A5suwIh=Q!NBBgfvrYay(:;o >^N|*}u(@d._2re;0AAtT8q_WavzLQ4');
define('LOGGED_IN_KEY',    'jp^e!kR`+4gzsz-l%(d(-Z=zY.b:i{*gp7NJ_;/]b v.6AGHzUl4DroKHOo1o 8d');
define('NONCE_KEY',        '|y);_;kJE-=-FfX{/-.W^?]R9z$]iBzrXZ8c,/=53r#7l|.[l;<<;<+d?O+S9P+l');
define('AUTH_SALT',        'N0C!+1SI !. -I0,Z{<:K>U44;O$u/ioK=tNx]2ZPzya/(xqG_e!I2I7!wM]umR(');
define('SECURE_AUTH_SALT', 'nMLl,GO>&`ObR)l-]PVNf,MR5`8Y<F%[;uIJI[P|pBm-:d4y|RP2tD%jKO,$uf2E');
define('LOGGED_IN_SALT',   '<ft[WR9D69% @=0v52$Ei9~nBf5WceP]@>De=F]D^H6oVRbQr?mO0zB+-W[HfOiy');
define('NONCE_SALT',       '7xi73X=E>FUo{Fqu`qKCb.=8!Hv]ZS+>|UY0x)1r><}3X5KZkINuC`bB+s|qg,4H');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'manasys_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


