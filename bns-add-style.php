<?php
/*
Plugin Name: BNS Add Style
Plugin URI: http://buynowshop.com/plugins/
Description: Allows for a custom stylesheet to be added to a theme and enqueued
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
 * Add Custom Styles
 * Allows for custom stylesheet to be added by end-user.
 *
 * @package BNS_Add_Style
 * @since   0.1
 *
 * @internal Requires 'bns-custom-style.css' file to be readable; this may
 * require the file be uploaded to the active theme folder.
 */
function BNS_Add_Styles() {
    /* Enqueue Styles */
    if ( is_readable( get_stylesheet_directory() . '/bns-add-custom-style.css' ) ) {
        wp_enqueue_style( 'BNS-Add-Custom-Style', get_stylesheet_directory_uri() . '/bns-add-custom-style.css', array(), '0.1', 'screen' );
    }
}
add_action( 'wp_enqueue_scripts', 'BNS_Add_Styles', 11 );