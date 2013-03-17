<?php
/**
 * checkdatabase.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 16.03.13
 * Time: 16:18
 */

$dbhandle = new Lib_Php_Db_Dbhandle("user","pass","db");
?>
<form>
    <fieldset>
        <legend>Checking Database Settings</legend>
    </fieldset>
</form>
<div class="text-center"><button class="btn btn-info" onclick="prevtab(23);">Previous Step</button></div>