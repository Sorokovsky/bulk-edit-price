<?php
/*
 * Plugin Name:       Bulk edit Plugin
 * Description:       Plugin for bulk editing variations of product.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Andrey Sorokovsky <Sorokovskys@ukr.net>
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bulk-editing
 * Domain Path:       /languages
 * Requires Plugins:  woocommerce
*/

if(!defined("ABSPATH")) {
    exit;
}

add_action('admin_menu', 'add_bulk_edit_settings');
function add_bulk_edit_settings() {
    add_menu_page(
        esc_html__("Bulk Edit Price", "bulk-editing"),
        esc_html__("Edit Prices", "bulk-editing"),
        "manage_options",
        "bulk-edit-price-settings",
        "render_bulk_page",
        'dashicons-edit-page'
    );
}

function render_bulk_page() {
    echo esc_html__("Bulk Edit Price", "bulk-editing");
}