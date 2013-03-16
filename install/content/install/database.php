<?php
/**
 * database.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 14.03.13
 * Time: 18:38
 */
?>
<form>
    <fieldset>
        <legend>Database Configuration</legend>

    </fieldset>
</form>
<div class="text-center"><button class="btn btn-info" onclick="prevtab(22);">Previous Step</button>
    <button class="btn btn-<?php echo $r->check_all("c") ?>" <?php if( $r->check_all('a') ): ?>onclick="nexttab(24);"<?php endif ?>><?php echo $r->check_all("n") ?></button></div>