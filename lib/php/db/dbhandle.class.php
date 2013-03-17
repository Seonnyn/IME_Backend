<?php
/**
 * dbhandle.class.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 16.03.13
 * Time: 16:37
 */

class Lib_Php_Db_Dbhandle {
    /**
     * @var string db_adap
     * Contains which DB Adapter is used
     * @example mysql_i
     */
    private $_db_adap;
    /**
     * @var string db_host
     * Contains the Host of the DB
     */
    private $_db_host;
    /**
     * @var string db_port
     * Contains the Port of the DB
     */
    private $_db_port;
    /**
     * @var string db_user
     * Contains the User of the DB
     */
    private $_db_user;
    /**
     * @var string db_pass
     * Contains the PW of the DB
     */
    private $_db_pass;
    /**
     * @var string db_db
     * The database everything of this is in
     */
    private $_db_db;
    /**
     * @var Object db_handle
     * Contains an Object of the needed Database Class
     */
    private $_db_handle;

    /**
     * @param string $user
     * @param string $pass
     * @param string $db
     * @param string $adapter
     * @param string $host
     * @param string $port
     */
    public function __construct( $user, $pass, $db, $adapter = 'mysql', $host = 'localhost' , $port = '3306') {
        $this->_db_adap = $adapter;
        $this->_db_host = $host;
        $this->_db_port = $port;
        $this->_db_user = $user;
        $this->_db_pass = $pass;
        $this->_db_db   = $db;
        $b = "Lib_Php_Db_".ucfirst( $adapter );
        $this->_db_handle = new $b();
    }
}

