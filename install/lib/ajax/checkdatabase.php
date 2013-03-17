<?php
/**
 * checkdatabase.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 17.03.13
 * Time: 15:28
 */

require_once ( "../../autoloader.php" );

$user = $_POST['un'];
$pass = $_POST['pw'];
$db   = $_POST['p'];
$host = $_POST['hs'];
$port = $_POST['prt'];

$dbhandle = new Lib_Php_Db_Dbhandle($user, $pass, $db, "mysql", $host, $port);

