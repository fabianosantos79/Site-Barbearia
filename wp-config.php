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
define( 'DB_NAME', 'barbearia' );

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
define( 'AUTH_KEY',         ';q0:sc<=qZI}.M>W3L9b  kgF|{}2(~1SGC.,tTin /X@-! q:>O-+^x3((rptZm' );
define( 'SECURE_AUTH_KEY',  '/@#}abeKsVb57%Q/x#&frlWeCJ:*7:Y%<5]6IW.$^&gCKUe%dwcvKI:?2aKu+sqB' );
define( 'LOGGED_IN_KEY',    '4FFcde-fUcP$?&@z7wV`Em-Qf9]w0`eV$NH A`zCj6>C5*6PKMY;ncE%ol8_)sx#' );
define( 'NONCE_KEY',        '/z>7US[40P%V#eR~+>>OR?iT@WNVp9mg/AqCCFM*}`*T-5zWj5;$&_EUWw<%FLc7' );
define( 'AUTH_SALT',        'J/6XG6nh__FV8<A[]YlufUxE76sLFeA95InhF<J.X7}W@2J20L >v~*Rzv!33di9' );
define( 'SECURE_AUTH_SALT', ',XPj+a$TVGGBcW.U@nV2ExU}J4tG0%-}dW_L`xkF4K*(#G5D;Nv-mAr^y~Bw,K^I' );
define( 'LOGGED_IN_SALT',   ')`y TvW||V^Db![}<{o=c`!-+d(%Z@{(0uSg#2zv@QAJ+[Q/S9IRR9h|4Bk1da-~' );
define( 'NONCE_SALT',       '@>i%ht|}>1T5&u[Rvg~.zc^g4o&15R}0_y>42?UTmn!(=a)Guu>]=|$==oHtJ4.R' );

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
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
