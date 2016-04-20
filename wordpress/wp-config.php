<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress_test');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '741e6df5a76c');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UiI?|&FEu0;-vn|Za|m|&|>)^R~voH-[L8*X-J-AOA[(d~W|B-UZb_onJcH@qT`1');
define('SECURE_AUTH_KEY',  'qaDzhG4.HY|*{0lFnfu|afas;yRBB_*aKgpW+[0!WPe8w]P=`~:ZdM7;/-uT-P(+');
define('LOGGED_IN_KEY',    'uCA!>Eh6lSO@a;+-%G.,UBmh`;aLao]C^H9wOO rvKflK%4alo&J|2$5+wK]IYZZ');
define('NONCE_KEY',        'CiWOKMto_-vK-_;cXS|pxKGeQ{G1)]#qG1-91Oi8X)(.AWDm0B] aXDc)cn2n,D4');
define('AUTH_SALT',        '|k^/l-CVD^CKNTs:vn/x?|5yCX8Z#Q6rj-E[6#N25#5++t[_u(|-+}+|)~w5dv>P');
define('SECURE_AUTH_SALT', 'QQ6wMdjLSi:h946<Gq(5_Sct3~!HMCxtM4+%I]0K;&d(ihT-MU?sM!+Tkk+XQGDW');
define('LOGGED_IN_SALT',   'SMBoBBcY7[>h>|Tu+x6ll}LYWb@^@@8K)]s;2#y&:-pa%d06?f9u7!H.:6Qi60b,');
define('NONCE_SALT',       '/awlcz,WzW8br|Y-+!$n)aC+(9sb8%l4%AzME]|=mN<lX}|Oe:+s]oS+Is*MO(Xb');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');