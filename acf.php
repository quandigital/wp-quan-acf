<?php

namespace QuanDigital\ACF;

/**
 * Plugin Name: Quan ACF
 * Plugin URI: http://www.quandigital.com/
 * Author: Quan Digital GmbH
 * Author URI: http://www.quandigital.com/
 * Description: General ACF Settings
 * Version: 1.0.6
 * License: MIT
 */

defined('ABSPATH') or die();
include ABSPATH . '../../vendor/autoload.php';

use QuanDigital\WpLib\Autoload;

new Autoload(__DIR__, __NAMESPACE__);

new Plugin(__FILE__);
