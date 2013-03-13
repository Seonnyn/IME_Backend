<?php
/**
 * autoloader.php
 * @author Hans <Seonnyn> Rößler
 * Date: 13.03.13
 * Time: 14:08
 * @version 0.0.1a
 */

    session_name( 'pokecomeu' );
    session_start( );

    if( !defined( 'SERVER_HOST' ) ) define( 'SERVER_HOST' , "http://".$_SERVER["HTTP_HOST"] );

    spl_autoload_register(function ($class) {
        $autoloader_folders = explode( '_' , $class );
        $str = "";
        $first = true;
        foreach ( $autoloader_folders as $f ) {
            if( $first ) {
                $str .= strtolower($f);
                $first = false;
            } else {
                $str .= '/'.strtolower($f);
            }
        }
        $str .= '.class.php';

        include $str;
    });