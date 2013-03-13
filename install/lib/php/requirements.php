<?php
/**
 * requirements.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 13.03.13
 * Time: 19:27
 */

class requirements {
    private $_phpversion;
    private $_rgs;
    private $_auf;
    private $_gis;
    private $_utf_s;
    private $_mbfo;

    public function __construct( $pmv = "1.0.0" ) {
        $this->_phpversion  = $this->get_phpversion($pmv);
        $this->_rgs         = $this->get_register_globals();
        $this->_auf         = $this->get_allow_url_fopen();
        $this->_gis         = $this->get_getimagesize();
        $this->_utf_s       = $this->get_utf_8_support();
    }

    private function get_phpversion($min) {
        if( version_compare( PHP_VERSION, $min ) == -1 ) {
            return false;
        } else {
            return true;
        }
    }

    public function get_phpversion_c() {
        if($this->_phpversion) {
            return "success";
        } else {
            return "important";
        }
    }

    public function get_phpversion_n() {
        if($this->_phpversion) {
            return "Yes";
        } else {
            return "No";
        }
    }

    private function get_register_globals() {
        if( ini_get('register_globals' ) ) {
            return false;
        } else {
            return true;
        }
    }

    public function get_register_globals_c() {
        if($this->_rgs) {
            return "success";
        } else {
            return "important";
        }
    }

    public function get_register_globals_n() {
        if($this->_rgs) {
            return "Yes";
        } else {
            return "No";
        }
    }

    private function get_allow_url_fopen() {
        if( ini_get( 'allow_url_fopen' ) ) {
            return true;
        } else {
            return false;
        }
    }

    public function get_allow_url_fopen_c() {
        if($this->_auf) {
            return "success";
        } else {
            return "important";
        }
    }

    public function get_allow_url_fopen_n() {
        if($this->_auf) {
            return "Yes";
        } else {
            return "No";
        }
    }

    private function get_getimagesize() {
        if( function_exists( 'getimagesize' ) ) {
            return true;
        } else {
            return false;
        }
    }

    public function get_getimagesize_c() {
        if( $this->_gis ) {
            return "success";
        } else {
            return "important";
        }
    }

    public function get_getimagesize_n() {
        if( $this->_gis ) {
            return "Yes";
        } else {
            return "No";
        }
    }

    private function get_utf_8_support() {
        if( ( defined('PREG_BAD_UTF8_OFFSET') ) ) {
            return false;
        } else {
            return true;
        }
    }

    public function get_utf_8_support_c() {
        if( $this->_utf_s ) {
            return "success";
        } else {
            return "important";
        }
    }

    public function get_utf_8_support_n() {
        if( $this->_utf_s ) {
            return "Yes";
        } else {
            return "No";
        }
    }

    private function get_mb_fo() {
        if( function_exists( 'mbstring.func_overload') ) {
            return true;
        } else {
            return false;
        }
    }

    public function get_mb_fo_c() {
        if( get_mb_fo() ) {
            return "success";
        } else {
            return "important";
        }
    }
    public function get_mb_fo_n() {
        if( get_mb_fo() ) {
            return "Yes";
        } else {
            return "No";
        }
    }
}