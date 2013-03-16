<?php
/**
 * database.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 14.03.13
 * Time: 18:38
 */
$label_db_host = "<span class='badge badge-info'>Info</span> You need to give the Host of the
            Database where the backend shall store it's data.";
$label_db_port = "<span class='badge badge-info'>Info</span> If the given database don't runs on standard
            port you can give the actual port here.";
$label_db_db   = "<span class='badge badge-info'>Info</span> This has to be a given database on the given
            server. Afterwards the given user has to have the rights to create and alter tables.";
$label_db_user = "<span class='badge badge-info'>Info</span> This user should have rights to Create new Tables and
            edit existing ones on the given database.";
$label_db_pass = "<span class='badge badge-info'>Info</span> This shall be the password for the database user to
            access the database. Out of security reasons this can't be empty.";
?>
<form class="form-horizontal" action="javascript:alert('OK');">
    <fieldset>
        <legend>Database Configuration</legend>
        <div class="control-group">
            <label class="control-label" onmouseover="$(this).popover('show');" onmouseout="$(this).popover('hide');" data-placement="left" data-animation=true data-html=true data-content="<?php echo $label_db_host ?>" title="" data-toggle="popover" data-original-title="Database Host" for="inp_db_host">
                Database Host:
            </label>
            <div class="controls">
                <input id="inp_db_host" type="text" placeholder="localhost" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" onmouseover="$(this).popover('show');" onmouseout="$(this).popover('hide');" data-placement="left" data-animation=true data-html=true data-content="<?php echo $label_db_port ?>" title="" data-toggle="popover" data-original-title="Database Port" for="inp_db_port">
                Database Port:
            </label>
            <div class="controls">
                <input id="inp_db_port" type="text" placeholder="3306" />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" onmouseover="$(this).popover('show');" onmouseout="$(this).popover('hide');" data-placement="left" data-animation=true data-html=true data-content="<?php echo $label_db_db ?>" title="" data-toggle="popover" data-original-title="Database DB" for="inp_db_db">
                Database DB:
            </label>
            <div class="controls">
                <input id="inp_db_db" type="text" placeholder="imebe_database" required />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" onmouseover="$(this).popover('show');" onmouseout="$(this).popover('hide');" data-placement="left" data-animation=true data-html=true data-content="<?php echo $label_db_user ?>" title="" data-toggle="popover" data-original-title="Database User" for="inp_db_user">
                Database User:
            </label>
            <div class="controls">
                <input id="inp_db_user" type="text" placeholder="imebe_user" required />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" onmouseover="$(this).popover('show');" onmouseout="$(this).popover('hide');" data-placement="left" data-animation=true data-html=true data-content="<?php echo $label_db_pass ?>" title="" data-toggle="popover" data-original-title="Database Password" for="inp_db_pass">
                Database Password:
            </label>
            <div class="controls">
                <input id="inp_db_pass" type="password" placeholder="Password" required />
            </div>
        </div>
    </fieldset>
</form>
<div class="text-center"><button class="btn btn-info" onclick="prevtab(22);">Previous Step</button>
    <button class="btn btn-primary" onclick="write_config()">Check Settings</button></div>