<?php
/*
Plugin Name: WPBakery Visual Composer
Plugin URI: http://vc.wpbakery.com
Description: Drag and drop page builder for WordPress. Take full control over your WordPress site, build any layout you can imagine – no programming knowledge required.
Version: 3.6.14.1
Author: Michael M - WPBakery.com
Author URI: http://wpbakery.com
*/

// don't load directly

if (!defined('ABSPATH')) die('-1');


/**
* Current visual composer version
*/
if (!defined('WPB_VC_VERSION')) define('WPB_VC_VERSION', '3.6.14.1');


/**
 * jQuery UI version
 */
if (!defined('WPB_JQUERY_UI_VERSION')) define('WPB_JQUERY_UI_VERSION', 'less');


/**
 * Var string
 */
$composer_dir = TWOOT_TOOLKIT_PATH . '/js_composer';
$composer_uri = TWOOT_TOOLKIT_URL . '/js_composer';

global $composer_settings;
$composer_settings = Array(
	'APP_ROOT'      => $composer_dir . '/',
	'WP_ROOT'       => dirname( dirname( dirname( dirname( $composer_dir ) ) ) ). '/',
	'APP_DIR'       => basename( $composer_dir ) . '/',
	'CONFIG'        => $composer_dir . '/config/',
	'ASSETS_DIR'    => 'assets/',
	'ASSETS_URI'    => $composer_uri . '/assets/',
	'COMPOSER'      => $composer_dir . '/composer/',
	'COMPOSER_LIB'  => $composer_dir . '/composer/lib/',
	'SHORTCODES_LIB'=> $composer_dir . '/composer/lib/shortcodes/',
	'USER_DIR_NAME'      => 'vc_templates',
	'default_post_types' => Array('page')
);


/**
* Setup locale.
*/
load_plugin_textdomain( 'js_composer', false,  $composer_settings['APP_DIR'].'locale/' );


/*
* Here we include all useful files
*/
require_once( $composer_settings['COMPOSER'] . 'wp_bakery_visual_composer.php' );


/*
* Include visual composer builders.
* class WPBakeryVisualComposerSetupAdmin - for admin panel
* class WPBakeryVisualComposerSetup - for frontend
*/
require_once( $composer_settings['COMPOSER'] . 'build.php' );
?>