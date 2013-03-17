/**
 * install.js
 * @author Hans <Seonnyn> Rößler
 * Date: 13.03.13
 * Time: 16:55
 * @version 0.0.1a
 */

function nexttab( id ) {
    $('#li_tab'+id).addClass('active');
    $('#li_tab'+id).removeClass('disabled');
    $('#li_tab'+(id-1)).removeClass('active');
    $('#li_tab'+(id-1)).addClass('disabled');
    $('#tab'+id).addClass('active');
    $('#tab'+(id-1)).removeClass('active');
}

function prevtab( id ) {
    $('#li_tab'+id).addClass('active');
    $('#li_tab'+id).removeClass('disabled');
    $('#li_tab'+(id+1)).removeClass('active');
    $('#li_tab'+(id+1)).addClass('disabled');
    $('#tab'+id).addClass('active');
    $('#tab'+(id+1)).removeClass('active');
}

function write_config( ) {
    var host = $('#inp_db_host').val();
    var port = $('#inp_db_port').val();
    var db   = $('#inp_db_db').val();
    $('#inp_db_db').parent().parent().removeClass('error');
    var user = $('#inp_db_user').val();
    $('#inp_db_user').parent().parent().removeClass('error');
    var pass = $('#inp_db_pass').val();
    $('#inp_db_pass').parent().parent().removeClass('error');
    var error = new Array();
    var error_yes = false;
    if( host == '' ) host = 'localhost';
    if( port == '' ) port = '3306';
    if( db == '' ) error["db"] = 'empty';
    if( user == '' ) error["user"] = 'empty';
    if( pass == '' || pass == 'Password' ) error["pass"] = 'empty';

    for ( bez in error ) {
        if( bez != "" ) {
            $('#inp_db_'+bez).parent().parent().addClass('error');
            error_yes = true;
        }
    }

    if( error_yes === false ) {
        nexttab(24);
        $('#db_connect_label').html( "Database Connection check ..." );
        $('#db_connect_check').html( "<img src='../install/lib/img/loading.gif' />");
        $.ajax({
            type: "POST",
            url: "http://localhost/ime_backend/install/lib/ajax/checkdatabase.php",
            data: { un: user, pw: pass, d: db, hs: host, prt: port },
            async: true
        }).done( function(back) {
                if ( back != "OK" ) {
                    dat = "<span class='label label-important' onmouseover='$(this).popover(\"show\");' onmouseout='$(this).popover(\"hide\");' title='' data-placement='right' data-animation=true data-html=true data-content='"+back+"' data-toggle='popover' data-original-title='Error' >Error</span>"
                    $('#db_connect_check').html( dat );
                } else {
                    $('#db_connect_check').html( "<span class='label label-success'>OK</span>" );
                }
            });
    }
}