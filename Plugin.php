<?php

namespace QuanDigital\ACF\Plugin;

use QuanDigital\WpLib\Boilerplate;

class Plugin extends Boilerplate
{
    public function __construct($file)
    {
        parent::__construct($file);
        // $this->hideAcf();
        $this->saveJson();
    }

    private function hideAcf()
    {
        \add_filter('acf/settings/show_admin', '__return_false');
    }

    private function saveJson() {
        add_filter('acf/settings/save_json', function() {
            return $this->getPath() . '/acf-json';
        }, 9);
    }
}
