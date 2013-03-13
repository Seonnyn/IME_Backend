<?php
/**
 * functions.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 13.03.13
 * Time: 17:14
 */

function get_phpversion($min) {
    if( version_compare( PHP_VERSION, $min ) == -1 ) {
        return false;
    } else {
        return true;
    }
}
function get_phpversion_c($min) {
    if(get_phpversion($min)) {
        return "success";
    } else {
        return "important";
    }
}

function get_phpversion_n($min) {
    if(get_phpversion($min)) {
        return "Yes";
    } else {
        return "No";
    }
}

function get_register_globals() {
    if( ini_get('register_globals' ) ) {
        return false;
    } else {
        return true;
    }
}

function get_register_globals_c() {
    if(get_register_globals()) {
        return "success";
    } else {
        return "important";
    }
}

function get_register_globals_n() {
    if(get_register_globals()) {
        return "Yes";
    } else {
        return "No";
    }
}

function get_allow_url_fopen() {
    if( ini_get( 'allow_url_fopen' ) ) {
        return true;
    } else {
        return false;
    }
}

function get_allow_url_fopen_c() {
    if(get_register_globals()) {
        return "success";
    } else {
        return "important";
    }
}

function get_allow_url_fopen_n() {
    if(get_register_globals()) {
        return "Yes";
    } else {
        return "No";
    }
}

function get_getimagesize() {
    if( function_exists( 'getimagesize' ) ) {
        return true;
    } else {
        return false;
    }
}

function get_getimagesize_c() {
    if( get_getimagesize() ) {
        return "success";
    } else {
        return "important";
    }
}

function get_getimagesize_n() {
    if( get_getimagesize() ) {
        return "Yes";
    } else {
        return "No";
    }
}

function get_utf_8_support() {
    if( ( defined('PREG_BAD_UTF8_OFFSET') ) ) {
        return true;
    } else {
        return false;
    }
}

function get_utf_8_support_c() {
    if( get_utf_8_support() ) {
        return "success";
    } else {
        return "important";
    }
}

function get_utf_8_support_n() {
    if( get_utf_8_support() ) {
        return "Yes";
    } else {
        return "No";
    }
}