<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a^`cwx[PF%w&QWi&vY^wFK.<}yd?o`^YpVB{#MkyPvyolYM-`7z^YF`_>_QF58>*');
define('SECURE_AUTH_KEY',  'H%_2jTd0J+z4];B;FsSY.1hE;:dSs68%:@Lg>2xAXUyq_[Gosr5n.3o;p<[BG<$}');
define('LOGGED_IN_KEY',    '.n~3~L3}Zq&+%;CuqCG*Z1w2UScS|z|7+qDjACH{@gSI/y7j{Ag|d#@ aR)H!Ba!');
define('NONCE_KEY',        'EaUes;[bt#zn,Efmc|9ui5eF}BSnWxy<)Fk!B.?yNkPC8KkVv{-)O#66gs_1RD P');
define('AUTH_SALT',        'D[XWfhd{[5(9SbCc7i.U-b95HF^?eyE:pe!+v.55(uGCv%]KX/PjbM#&->>BMg4?');
define('SECURE_AUTH_SALT', '<U5ZJc}z%U3}{3:m]+4q`Zux?#PuH3!J@CdBI9zI}R7$!wjN27K*rSIWSE~I~T[e');
define('LOGGED_IN_SALT',   'bncu:g#9G*{]o-64H#5GTe7-*{Azn(u~ex.1llYbYQOdHBWUeO,5n,;PLH8f>rJM');
define('NONCE_SALT',       '8ILMe)Jn*f#AD5Z!0}p+#R ?H7+UKa_[0_{au12%%rj$mQ|[I*a::}?oLGKZ]6Hv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
