<?php
defined('ABSPATH') || exit;

define('WS_MINIMUM_COMPATIBLE_WP_VERSION', '6.0.0');

function ws_incompatible_wp_version_notice()
{
?>
    <div class="notice notice-error">
        <p>
            <strong><?php echo esc_html_x(wp_get_theme(get_template())->get('Name') . ' detected incompatible WordPress version!', 'admin', 'wsee'); ?></strong>
        </p>
        <p>
            <?php

            echo esc_html(
                sprintf(
                    // translators: %s: Minimum WP version.
                    _x('Minimum compatible version of WordPress is %s. Please, update your WordPress installation to be able to use ' . wp_get_theme(get_template())->get('Name') . ' theme.', 'admin', 'wsee'),
                    WS_MINIMUM_COMPATIBLE_WP_VERSION
                )
            );
            ?>
        </p>
        <p>
            <a href="<?php echo esc_url(admin_url('/update-core.php')); ?>"><?php echo esc_html(_x('Update WordPress.', 'admin', 'wsee')); ?></a>
        </p>
    </div>
<?php
}

require ABSPATH . WPINC . '/version.php';

if (version_compare($wp_version, WS_MINIMUM_COMPATIBLE_WP_VERSION, '<')) {
    add_action('admin_notices', 'ws_incompatible_wp_version_notice');

    return;
}

//TODO: must complete
