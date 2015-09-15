<?php

namespace QuanDigital\ACF;

use QuanDigital\WpLib\Boilerplate;

class Plugin extends Boilerplate
{
    public function __construct($file)
    {
        parent::__construct($file);
        if (defined('WP_STAGE') && WP_STAGE !== 'local') {
            $this->hideAcf();
        }
        $this->saveJson();
    }

    private function hideAcf()
    {
        \add_filter('acf/settings/show_admin', '__return_false');
    }

    private function includeFields()
    {
        $this->path = \plugin_basename($this->file);
        add_filter('acf/settings/load_json', function($paths) {
            $paths[] = $this->getPath() . '/acf-json';
            
            return $paths;
        }, 9);
    }

    private function saveJson() {
        add_filter('acf/settings/save_json', function() {
            return $this->getPath() . '/acf-json';
        }, 9);
    }
}
