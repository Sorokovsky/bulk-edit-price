<?php
/*
Plugin Name: Bulk edit prices
Description: This plugin for editing prices of various products
Author: Andrey Sorokovsky <Sorokovskys@ukr.net>
Version: 0.0.1
*/

if(!defined("ABSPATH")) {
    die;
}
class AndreBulkEdit 
{
    function __construct() {
    }
}

if (class_exists("AndreBulkEdit")) {
    new AndreBulkEdit();
}