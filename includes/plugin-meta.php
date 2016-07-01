<?php

add_filter( 'plugin_row_meta', 'plgn_abbr_plugin_links', 10, 2 );

function plgn_abbr_plugin_links( $links, $file ) { // Add meta links to plugin page
    if ( strpos( $file, 'wp-plugin-template.php' ) !== false ) {
        $meta = array(
            'support' => '<a href="' . PLGN_ABBR_WORDPRESS . 'support/plugin/PLUGIN_SLUG" target="_blank"><span class="dashicons dashicons-sos"></span> ' . __( 'Support' ) . '</a>',
            'review' => '<a href="' . PLGN_ABBR_WORDPRESS . 'support/view/plugin-reviews/PLUGIN_SLUG" target="_blank"><span class="dashicons dashicons-nametag"></span> ' . __( 'Review' ) . '</a>',
            'github' => '<a href="' . PLGN_ABBR_GITHUB . '" target="_blank"><span class="dashicons dashicons-randomize"></span> ' . __( 'GitHub' ) . '</a>'
        );
        $links = array_merge( $links, $meta );
    }
    return $links;
}