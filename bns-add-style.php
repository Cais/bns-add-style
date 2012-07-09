<?php
/*
Plugin Name: BNS Add Style
Plugin URI: http://buynowshop.com/plugins/
Description: Adds an enqueued custom stylesheet to the active theme
Version: 0.1
Author: Edward Caissie
Author URI: http://edwardcaissie.com/
Textdomain: bns-as
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/**
 * BNS Add Style WordPress plugin
 *
 * Allows for a custom stylesheet to be added to a theme and enqueued
 *
 * @package     BNS_Add_Style
 * @link        http://buynowshop.com/plugins/
 * @link        https://github.com/Cais/
 * @link        http://wordpress.org/extend/plugins/
 * @version     0.1
 * @author      Edward Caissie <edward.caissie@gmail.com>
 * @copyright   Copyright (c) 2012, Edward Caissie
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.
 *
 * You may NOT assume that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, write to:
 *
 *      Free Software Foundation, Inc.
 *      51 Franklin St, Fifth Floor
 *      Boston, MA  02110-1301  USA
 *
 * The license for this software can also likely be found here:
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * BNS Add Custom Stylesheet
 * If the custom stylesheet is not readable this will create it.
 *
 * @package BNS_Add_Style
 * @since   0.1
 *
 * @uses    (constant) FS_CHMOD_FILE - predefined mode settings for WP files
 * @uses    (global) $wp_filesystem -> put_contents
 * @uses    get_stylesheet_directory
 * @uses    get_stylesheet_directory_uri
 * @uses    request_filesystem_credentials
 *
 * @todo Provide more information in the initial content
 */
function BNS_Add_Custom_Stylesheet(){
    if ( ! is_readable( get_stylesheet_directory() . '/bns-add-custom-style.css' ) ) {
        require_once( ABSPATH . '/wp-admin/includes/file.php' );
        if ( false === ( $credentials = request_filesystem_credentials( get_stylesheet_directory_uri() . '/bns-add-custom-style.css' ) ) ) {
            return;
        }
        if ( ! WP_Filesystem( $credentials ) ) {
            request_filesystem_credentials( get_stylesheet_directory_uri() . '/bns-add-custom-style.css' );
            return;
        }
    }
    global $wp_filesystem;
    $wp_filesystem->put_contents(
        get_stylesheet_directory() . '/bns-add-custom-style.css',
        '/** BNS Add Custom Stylesheet Content */',
        FS_CHMOD_FILE
    );

}

/**
 * Add Custom Styles
 * Adds a custom stylesheet to the active theme folder which can be accessed via
 * the "Edit Themes" functionality under Appearance | Editor
 *
 * @package BNS_Add_Style
 * @since   0.1
 *
 * @uses    BNS_Add_Custom_Stylesheet
 * @uses    get_stylesheet_directory
 * @uses    get_stylesheet_directory_uri
 * @uses    wp_enqueue_style
 */
function BNS_Add_Styles() {
    /* Enqueue Styles */
    if ( is_readable( get_stylesheet_directory() . '/bns-add-custom-style.css' ) ) {
        wp_enqueue_style( 'BNS-Add-Custom-Style', get_stylesheet_directory_uri() . '/bns-add-custom-style.css', array(), '0.1', 'screen' );
    } else {
        BNS_Add_Custom_Stylesheet();
        wp_enqueue_style( 'BNS-Add-Custom-Style', get_stylesheet_directory_uri() . '/bns-add-custom-style.css', array(), '0.1', 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'BNS_Add_Styles', 11 );