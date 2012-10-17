<?php
/*
Plugin Name: BuddyPress Translations
Plugin URI: http://wordpress.org/extendp/plugins/buddypress-translations
Description: Translate your BuddyPress-powered site into one of the available languages from http://translate.wordpress.org/projects/buddypress.
Version: 1.6a
Author: The BuddyPress Community
Author URI: http://buddypress.org/community/members/
Domain Path: /languages/ 
Text Domain: bpt

"BuddyPress Translations" - http://translate.wordpress.org/projects/buddypress
Copyright (C) 2012 The BuddyPress Community

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the BuddyPress translations.
 *
 * @since 1.6a
 */
function bpt_load_textdomain() {
	$locale        = apply_filters( 'buddypress_locale', get_locale() );
	$mofile        = sprintf( 'buddypress-%s.mo', $locale );
	$mofile_local  = WP_PLUGIN_DIR . '/buddypress-translations/' . $mofile;

	if ( file_exists( $mofile_local ) )
		return load_textdomain( 'buddypress', $mofile_local );
}
add_action( 'bp_loaded', 'bpt_load_textdomain' );
