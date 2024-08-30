<?php
/*
Plugin Name: Bulk edit prices
Description: This plugin for editing prices of various products
Author: Andrey Sorokovsky <Sorokovskys@ukr.net>
Version: 0.0.1
*/

register_activation_hook(
    __FILE__,
    'on_activate'
);
function on_activate() {
    add_action("init", "hello_world");
}

function hello_world() {
    echo '<script>alert("Hello, world");</script>';
}