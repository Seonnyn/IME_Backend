<?php
/**
 * dbhandle.class.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 16.03.13
 * Time: 16:37
 */

class DbHandle {
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
}

