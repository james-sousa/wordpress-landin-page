<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portwordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xvoh;F|5EM0j}gMq]mr;8-|L!zNCH?IE`LP5Gb2$xW|%svaL|=G8f^`}[?!<ScX@' );
define( 'SECURE_AUTH_KEY',  '?gLfgM0i+VI.b|V?r0nn /Yv`DcxkxiIMqGT`0>oKf;eP1te*&[LVaFqXSqpPS,%' );
define( 'LOGGED_IN_KEY',    'y4^T`D|2,qT)^bHfSXQ0->BIo()3oFN`fvP6o[S;u9K2P:m9r-/w<?qmxg2TjW|*' );
define( 'NONCE_KEY',        'O}&@n,ps[V[0WXJU~>*giy^I`A9kIgirpH+nLc=BFbGF}M]N-@{+[)[cIy7MdynT' );
define( 'AUTH_SALT',        '@%t4dm`Y*Fb.b2ASGu;L)ffB !TtlAr@k|hxevjDx5tUF_>IJOt&xv#KtEi7ur$H' );
define( 'SECURE_AUTH_SALT', 'swIkns@r?kd|s1;J2_?K5414;eIbgrkG[`ygy.d+LU4APN;.+kGfXhWrA|6TZh33' );
define( 'LOGGED_IN_SALT',   'dYZxAiCV^3i)8B!0Z,)Eh7N&HA(Ly!nc~27x%x7y?>qUk~n?R!7r|6PxAJT^3oiY' );
define( 'NONCE_SALT',       'O5rOD&^s*+*93a$eDJO>awLPO<Z-Zd9Q)eX^!vSF`Y:.;M#n#L,S@*J+YgZP0jL*' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
