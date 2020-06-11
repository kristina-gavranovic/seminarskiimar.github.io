<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'seminarskiimar' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4|-*)T}%/Uv]5DKO69Wb&MZgIQbUjo]p`V7c?`yy@EobVVxi3<|5]F*eUx1E~{JN' );
define( 'SECURE_AUTH_KEY',  'rx4O,29GR{|_^*wnORiOEY[ +Q|b$Khk~f.}}oYrb`iI]xT:R|$W70 9@Pz3UM#v' );
define( 'LOGGED_IN_KEY',    '#7!FFQXIa|O#1@#72~&3(NJYEcO?oE&CsJ-f?mpf@$xVe.38aJ=[:2*gj=ErX6+I' );
define( 'NONCE_KEY',        'gXviP&,{4^{#NrXHXhO#?Y+$LyE-+&Zi-Nt}A0NG-h`tT(Wu>T*ne8xIVIxC9Z/q' );
define( 'AUTH_SALT',        '8mP.E6i}eSoe741p&J%<*,WO6$pVF80.E0#aVD[ *SD?Ek<{&p@<<7SQn!hV$_.Y' );
define( 'SECURE_AUTH_SALT', '.hp 0Q09XuOb::$UVM2dgAIK^z ~L-B1uUZZARj)Lo)u=3[8]6O-qiunXn!{Y_c7' );
define( 'LOGGED_IN_SALT',   ')<g5I&w}vyZ+O-<I~9J-kV%CUva*6@]fP? LgEC7tM5GMRSSnYxhb7jou(@3_=DJ' );
define( 'NONCE_SALT',       'C<Ge,QHf,qie2Cg5j RrG<rH-~o6{8>p]R>k;w,O;z8aM2]0?Ho%XIfjh!)JHz-B' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
