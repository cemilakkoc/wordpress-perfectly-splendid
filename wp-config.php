<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpress' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-UF1:X(|gedV,]eD+5Pz*ZDBr*g ZwDimY, O =|M:8`YX^kRJo!uSAB0XZg*96J' );
define( 'SECURE_AUTH_KEY',  '==LFMmH(QL+neWqs1_IB2jWG|&O|k$|rYg%Mb+T}<+$+3fbsIY/CcA#NinPyQM[^' );
define( 'LOGGED_IN_KEY',    '{38HF6l8_n`BcKw.f=|Lz.F}jUWta!dpd7p~G.NDjp9OE9wlyY!p8x79k5|V~u]z' );
define( 'NONCE_KEY',        'rA;k6 jUZA,/3V51CZSSNL5&Yf9sjCcZ^/!j4MvfnB)76t`=yfYzE(Bo.N{5|ahX' );
define( 'AUTH_SALT',        'uf8;O:^MVl#wv{Se89RdK(s6t}_/jH:Det!v6mhXzk(+^y5 ^ee8/-jW1?Tac3F(' );
define( 'SECURE_AUTH_SALT', 'q,]>mv>;O=I*DcJ? R6.?z{Zyp~{KD@z<.4&.!<!mtI:l]h*T8hj|}%-DR2)X#%b' );
define( 'LOGGED_IN_SALT',   '6ZWy{NLQuWb5,t@}vyvV;Etz?3N&NqHjs^m~FDj 6xKRO9,o@!6G_R$PCp_[f>YV' );
define( 'NONCE_SALT',       'y`*G>pCjGcvipH7/Xwkh4KGS7H@Uha[<:_B4T8X;!$0w*n)bdg&)~XV|S*D@7$0]' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
