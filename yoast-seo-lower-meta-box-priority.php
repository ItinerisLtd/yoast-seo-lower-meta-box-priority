<?php
declare(strict_types=1);

/**
 * Plugin Name:     Yoast SEO Lower Meta Box Priority
 * Plugin URI:      https://github.com/itinerisltd/yoast-seo-lower-meta-box-priority
 * Description:     Put Yoast SEO meta boxes at the end of the page.
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     yoast-seo-lower-meta-box-priority
 */

namespace Itineris\YoastSEO\LowerMetaBoxPriority;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('wpseo_metabox_prio', function (): string {
    return 'low';
});
