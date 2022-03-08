<?php

/**
 * Plugin Name:       UCLA Physical Sciences Block Types
 * Plugin URI:        https://github.com/ucla-ps-it/ucla-ps-block-types
 * Description:       Custom plugin to manage WordPress blocks.
 * Version:           1.0.0
 * Author:            Scott Gruber
 * Author URI:        http://github.com/scottgruber
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ucla-ps-block-types
 */


function ucla_ps_block_types_plugin_deny_list_blocks() {
    wp_enqueue_script(
        'ucla-ps-block-types-deny-list-blocks',
        plugins_url( 'ucla-ps-block-types.js', __FILE__ ),
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' )
    );
}
add_action( 'enqueue_block_editor_assets', 'ucla_ps_block_types_plugin_deny_list_blocks' );
