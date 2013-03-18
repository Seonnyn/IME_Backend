<?php
/**
 * mysql.class.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 17.03.13
 * Time: 15:05
 */

class Lib_Php_Db_Mysql {
    private $_dbhandle;
    private $_db;

    public function __construct( Lib_Php_Db_Dbhandle $dbhandle ) {
        $this->_dbhandle = $dbhandle;
    }

    public function connect() {
        try {
            if( $this->_dbhandle->getDbPort() != '3306') {
                $this->_db = mysql_connect( $this->_dbhandle->getDbHost().":".$this->_dbhandle->getDbPort(),
                            $this->_dbhandle->getDbUser(),
                            $this->_dbhandle->getDbPass()
                );
            } else {
                $this->_db = mysql_connect( $this->_dbhandle->getDbHost(),
                            $this->_dbhandle->getDbUser(),
                            $this->_dbhandle->getDbPass()
                );
            }
            if( !$this->_db ) {
                throw new Exception( 'MYSQL_CONNECTION_ERROR' );
            } else {
                return true;
            }
        } catch ( Exception $e ) {
            return $e;
        }
    }

    public function select_database() {
        try {
            $this->_db = mysql_select_db( $this->_dbhandle->getDbDb() );
            if ( !$this->_db ) {
                throw new Exception( 'MYSQL_DATABASE_ERROR' );
            } else {
                return true;
            }
        } catch ( Exception $e ) {
            return $e;
        }
    }

    public function query( $sql ) {
        try {
            $b = mysql_query( $sql );
            if( !$b ) {
                throw new Exception( 'MYSQL_QUERY_ERROR: '.$sql );
            } else {
                return $b;
            }
        } catch ( Exception $e ) {
            return $e;
        }
    }
}

