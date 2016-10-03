<?php

class Fact_Maven_Autoloader {
    public function __construct() {
        # Register custom autoload
        spl_autoload_register( array( $this, 'autoload' ) );
    }

    public function autoload( $class_name ) {
        $class = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', '-', strtolower( $this->convert( $class_name ) ) ) );
        # Create the actual file-path
        $path = WPPT_DIR . DIRECTORY_SEPARATOR . $class . '.php';
        # Check if the file exists
        if ( file_exists( $path ) ) {
            # Require once on the file
            require_once $path;
        }
    }

    public function convert( $class_name ) {
        $class_name = preg_replace( '#([A-Z\d]+)([A-Z][a-z])#','\1_\2', $class_name) ;
        $class_name = preg_replace( '#([a-z\d])([A-Z])#', '\1_\2', $class_name );
        return $class_name;
    }
}

/*# Register custom autoload
spl_autoload_register( 'autoload' );

function autoload( $class_name ) {
    $class = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', '-', strtolower( convert( $class_name ) ) ) );
    # Create the actual file-path
    $path = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . $class . '.php';
    # Check if the file exists
    if ( file_exists( $path ) ) {
        # Require once on the file
        require_once $path;
    }
}

function convert( $class_name ) {
    $class_name = preg_replace( '#([A-Z\d]+)([A-Z][a-z])#','\1_\2', $class_name) ;
    $class_name = preg_replace( '#([a-z\d])([A-Z])#', '\1_\2', $class_name );
    return $class_name;
}*/