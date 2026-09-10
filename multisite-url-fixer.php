<?php

/**
 * Plugin Name: Multisite URL Fixer
 * Plugin URI: https://github.com/oBusk/multisite-url-fixer
 * Description: Fork of roots/multisite-url-fixer with domain-mapped multisite support
 * Version: 1.1.0
 * Author: Oscar Busk
 * Author URI: https://github.com/oBusk
 * License: MIT License
 */

class_exists('Roots\Bedrock\URLFixer') || require_once __DIR__.'/vendor/autoload.php';

use Roots\Bedrock\URLFixer;

if (is_multisite()) {
    (new URLFixer)->addFilters();
}
