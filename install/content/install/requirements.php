<?php
/**
 * requirements.php
 * @author Hans <Seonnyn> Rößler
 * @version 0.0.1a
 * Date: 13.03.13
 * Time: 16:49
 */

require_once('./config.inc');
require_once('./lib/php/requirements.php');
$r = new requirements($minphpver);
?>

<h1>Compatibility Check</h1>
<p>Before we can continue the installation we will take some tests on your
server configuration and your datas to be safe that you can install and use
IME. Please read the results carefully and don't continue until all needed tests
are passed. If you want to use any function of the below stated modules you should
ensure that these tests also pass.</p>
<form>
    <fieldset>
        <legend>PHP-Version and -configuration</legend>
        <p class="text-error"><span class="label label-important">Prerequisite</span>
        You need to have at least PHP-Version <?php echo $minphpver ?> for installing IME. If you see
        <em>Safe Mode</em> below, your PHP-Installation runs with it. This
        could restrict some functions.</p>
        <table class="table-striped preq-table">
            <tr>
                <th width="90%">PHP-Version >= <?php echo $minphpver ?>:</th>
                <td width="10%"><span class="badge badge-<?php echo $r->get_phpversion_c() ?>"><?php echo $r->get_phpversion_n() ?></span></td>
            </tr>
            <tr>
                <th>
                    PHP setting <em>register_globals</em> is deactivated: <br />
                    <span class="label label-warning">Note</span> <em>IME will work if this setting is active. But out of security
                    reasons it is recommended to disable register_globals in your
                    PHP-Installation if possible.</em>
                </th>
                <td><span class="badge badge-<?php echo $r->get_register_globals_c() ?>"><?php echo $r->get_register_globals_n() ?></span></td>
            </tr>
            <tr>
                <th>
                    PHP setting <em>allow_url_fopen</em> is allowed:<br />
                    <span class="label label-info">Optional</span> <em>This setting is
                    optional, but some functions like external links won't work
                    without this.</em>
                </th>
                <td><span class="badge badge-<?php echo $r->get_allow_url_fopen_c() ?>"><?php echo $r->get_allow_url_fopen_n() ?></span></td>
            </tr>
            <tr>
                <th>
                    PHP function <em>getimagesize()</em> is available:<br />
                    <span class="label label-important">Prerequisite</span> <em>As you want
                    that IME runs solid, this option should be activated.</em>
                </th>
                <td><span class="badge badge-<?php echo $r->get_getimagesize_c() ?>"><?php echo $r->get_getimagesize_n() ?></span></td>
            </tr>
            <tr>
                <th>
                    PCRE UTF-8-Support:<br />
                    IME <strong>won't</strong> work if your PHP-Installation was compiled in your PCRE-extension
                    without UTF-8-Support.
                </th>
                <td><span class="badge badge-<?php echo $r->get_utf_8_support_c() ?>"><?php echo $r->get_utf_8_support_n() ?></span></td>
            </tr>
        </table>
    </fieldset>
</form>
<div class="text-center"><button class="btn btn-info" onclick="prevtab(21);">Previous Step</button>
<button class="btn btn-<?php echo $r->check_all("c") ?>" <?php if( $r->check_all('a') ): ?>onclick="nexttab(23);"<?php endif ?>><?php echo $r->check_all("n") ?></button></div>