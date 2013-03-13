<?php
    /**
     * @author Hans <Seonnyn> Rößler
     * @version 0.0.1a
     * @copyright 2013, Hans <Seonnyn> Rößler
     */
    // Test whether IME already is installed
    if( !file_exists( "config/config.inc.php" ) ) {
        echo "<script type='text/javascript'>location.href='install/index.php';</script>";
    } else {
        include_once( "config/config.inc.php" );
        include_once( "autoloader.php" );
    }