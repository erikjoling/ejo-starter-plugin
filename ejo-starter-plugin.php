<?php
/**
 * Plugin Name:         EJO Starter Plugin
 * Plugin URI:          https://github.com/erikjoling/ejo-starter-plugin
 * Description:         EJOweb WordPress plugin boilerplate
 * Version:             0.1
 * Author:              Erik Joling
 * Author URI:          https://www.ejoweb.nl/
 * Text Domain:         ejo-starter-plugin
 * Domain Path:         /languages
 *
 * GitHub Plugin URI:   https://github.com/erikjoling/ejo-starter-plugin
 * GitHub Branch:       master
 *
 * Minimum PHP version: 5.3.0
 */

/**
 *
 */
final class EJO_Starter_Plugin 
{
    /* Holds the instance of this class. */
    private static $_instance = null;

    /* Version number of this plugin */
    public static $version = '0.1';

    //* Store the unique identifier of this plugin
    public static $id = 'ejp';

    /* Store the slug of this plugin */
    public static $slug;

    /* Stores the directory path for this plugin. */
    public static $dir;

    /* Stores the directory URI for this plugin. */
    public static $uri;

    /* Only instantiate once */
    public static function init() 
    {
        if ( !self::$_instance )
            self::$_instance = new self;
        return self::$_instance;
    }

    //* No cloning
    private function __clone() {}

    /* Plugin setup. */
    private function __construct() 
    {
        //* Setup common plugin stuff
        self::setup();
    }

    
    /* Defines the directory path and URI for the plugin. */
    public static function setup() 
    {
        self::$dir = plugin_dir_path( __FILE__ );
        self::$uri = plugin_dir_url( __FILE__ );
        self::$slug = basename( self::$dir );

        /* Load the translation for the plugin */
        load_plugin_textdomain( 'ejo-simple-testimonials', false, self::$slug . '/languages' );
    }
}

/* Call EJO Base */
EJO_Starter_Plugin::init();
