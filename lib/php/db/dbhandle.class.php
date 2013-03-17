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
        $this->_db_handle = new $b( $this );
    }

    /**
     * Initializes the Database an returns whether it worked
     * @return int or Exception
     */
    public function init_db() {
        $b = $this->_db_handle->connect();
        if( !$b ) {
            return $b;
        } else {
            $c = $this->_db_handle->select_database();
            if( !$c ) {
                return $c;
            } else {
                return true;
            }
        }
    }

    public function select( $table, $order_by = null, $where = null, $all = true ) {

    }

    public function __get( $name ) {
        return $this->$name;
    }

    public function __set( $name, $value ) {
        $this->$name = $value;
    }

    /**
     * @param string $db_adap
     */
    public function setDbAdap($db_adap)
    {
        $this->_db_adap = $db_adap;
    }

    /**
     * @return string
     */
    public function getDbAdap()
    {
        return $this->_db_adap;
    }

    /**
     * @param string $db_db
     */
    public function setDbDb($db_db)
    {
        $this->_db_db = $db_db;
    }

    /**
     * @return string
     */
    public function getDbDb()
    {
        return $this->_db_db;
    }

    /**
     * @param Object $db_handle
     */
    public function setDbHandle($db_handle)
    {
        $this->_db_handle = $db_handle;
    }

    /**
     * @return Object
     */
    public function getDbHandle()
    {
        return $this->_db_handle;
    }

    /**
     * @param string $db_host
     */
    public function setDbHost($db_host)
    {
        $this->_db_host = $db_host;
    }

    /**
     * @return string
     */
    public function getDbHost()
    {
        return $this->_db_host;
    }

    /**
     * @param string $db_pass
     */
    public function setDbPass($db_pass)
    {
        $this->_db_pass = $db_pass;
    }

    /**
     * @return string
     */
    public function getDbPass()
    {
        return $this->_db_pass;
    }

    /**
     * @param string $db_port
     */
    public function setDbPort($db_port)
    {
        $this->_db_port = $db_port;
    }

    /**
     * @return string
     */
    public function getDbPort()
    {
        return $this->_db_port;
    }

    /**
     * @param string $db_user
     */
    public function setDbUser($db_user)
    {
        $this->_db_user = $db_user;
    }

    /**
     * @return string
     */
    public function getDbUser()
    {
        return $this->_db_user;
    }
}

