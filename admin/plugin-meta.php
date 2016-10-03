<?php

namespace WpPluginTemplate\admin;

class Plugin_Meta {
    public function __construct() {
        # Add meta links to plugin page
        add_filter( 'plugin_row_meta', array( $this, 'plugin_row_meta' ), 10, 2 );
        # Add link to plugin settings
        add_filter( 'plugin_action_links', array( $this, 'plugin_action_links' ), 10, 2 );
    }

    public function plugin_row_meta( $links, $file ) {
        # Display meta links on right side of the plugin
        if ( strpos( $file, WPPT_BASE ) !== false ) {
            $meta = array(
                # Support
                'support' => '<a href="https://wordpress.org/support/plugin/' . WPPT_SLUG . '" target="_blank"><span class="dashicons dashicons-sos"></span> ' . __( 'Support' ) . '</a>',
                # Review
                'review' => '<a href="https://wordpress.org/support/view/plugin-reviews/' . WPPT_SLUG . '" target="_blank"><span class="dashicons dashicons-nametag"></span> ' . __( 'Review' ) . '</a>',
                # GitHub
                'github' => '<a href="https://github.com/factmaven/' . WPPT_SLUG . '" target="_blank"><span class="dashicons dashicons-randomize"></span> ' . __( 'GitHub' ) . '</a>'
            );
            $links = array_merge( $links, $meta );
        }
        return $links;
    }

    public function plugin_action_links( $links, $file ) {
        # IDisplay settings link on the right side of the plugin
        if ( $file == WPPT_BASE && current_user_can( 'manage_options' ) ) {
            array_unshift(
                $links,
                sprintf( '<a href="options-general.php?page=blogging">%s</a>', __( 'Settings' ) )
            );
        }
        return $links;
    }
}