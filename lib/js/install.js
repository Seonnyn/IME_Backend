/**
 * install.js
 * @author Hans <Seonnyn> Rößler
 * Date: 13.03.13
 * Time: 16:55
 * @version 0.0.1a
 */

function nexttab( id ) {
    $('#li_tab'+id).addClass('active');
    $('#li_tab'+(id-1)).removeClass('active');
    $('#tab'+id).addClass('active');
    $('#tab'+(id-1)).removeClass('active');
}