<?php
/**
 * Plugin Name: Okean Market Core
 * Description: Core marketplace engine for Okean.market (Sprint 1.1)
 * Version: 0.1.0
 * Author: Okean Dev Team
 */

if (!defined('ABSPATH')) {
    exit;
}

final class Okean_Market_Core {

    private static $instance = null;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        add_action('plugins_loaded', [$this, 'init']);
    }

    public function init() {
        $this->define_constants();
        $this->load_modules();
    }

    private function define_constants() {
        define('OKEAN_MARKET_CORE_VERSION', '0.1.0');
        define('OKEAN_MARKET_CORE_PATH', plugin_dir_path(__FILE__));
        define('OKEAN_MARKET_CORE_URL', plugin_dir_url(__FILE__));
    }

    private function load_modules() {
        // Core modules will be loaded here in Sprint 1.2+
    }
}

Okean_Market_Core::instance();
