(function(){
    jQuery(document).ready(function ($) {
        var tabs = $('.tmx-tabbed').parents('.postbox');
        if(tabs.length == 0 ) return;

        $('#normal-sortables').prepend("</ul>");
        var ids = '<ul>';
        tabs.each(function (index) {
            var el = $(this)[0];
            ids += '<li><a href="#'+el.id+'">'+$("#"+ el.id +" h2 span").text()+'</a></li>';
        });
        ids += '</ul>';

        $('#normal-sortables').prepend(ids).tabs();
        //console.log(ids);
    });
})();