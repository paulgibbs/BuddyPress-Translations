<?php
/*
Plugin Name: BuddyPress Translations
Plugin URI: http://wordpress.org/extend/plugins/buddypress-translations
Description: Load your BuddyPress with translations provided by translate.wordpress.org
Version: 1.7a
Author: The BuddyPress Community
Author URI: http://buddypress.org/community/members/
Text Domain: bpt

"BuddyPress Translations" - http://translate.wordpress.org/projects/buddypress
Copyright (C) 2012-13 Paul Gibbs, and each individual languages' contributors from http://translate.wordpress.org/projects/buddypress

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
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
	$mofile = WP_PLUGIN_DIR . '/buddypress-translations/pomo/' . apply_filters( 'buddypress_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'buddypress', $mofile );
}
add_action( 'bp_loaded', 'bpt_load_textdomain' );
