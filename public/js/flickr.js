/*!
 * William DURAND <william.durand1@gmail.com>
 * MIT Licensed
 *
 * GistID: 5705453
 *
 */
(function (document, $) {
    "use strict";

    var flickrPhotoStream = function ($el, options) {
        var url = [
            'http://api.flickr.com/services/feeds/photoset.gne?nsid=',
            options.id,
            '&set=',
            options.setId,
            '&format=json&jsoncallback=?'
        ].join('');

        return $.getJSON(url).done(function (data) {
            $.each(data.items, function (index, item) {
                var link = item.media.m.replace('_m', '_b');

                $("<img />")
                    .attr("src", item.media.m)
                    .appendTo($el)
                    .wrap(options.container || '')
                    .wrap([
                        '<a data-lightbox="true" href="',
                        link,
                        options.cssClass ? '" class="' + options.cssClass : '',
                        '" title="',
                        item.title,
                        '"></a>'
                    ].join(''));
            });
        });
    };

    $.fn.flickrPhotoStream = function (options) {
        return flickrPhotoStream($(this).get(), options || {});
    };
})(document, jQuery);
1
22
23
24
25
26
27
28
29
30
31
32
$(document).ready(function() {
    var options = { 
                beforeSubmit:  showRequest,
        success:       showResponse,
        dataType: 'json' 
        }; 
    $('body').delegate('#image','change', function(){
        $('#upload').ajaxForm(options).submit();        
    }); 
});     
function showRequest(formData, jqForm, options) { 
    $("#validation-errors").hide().empty();
    $("#output").css('display','none');
    return true; 
} 
function showResponse(response, statusText, xhr, $form)  { 
    if(response.success == false)
    {
        var arr = response.errors;
        $.each(arr, function(index, value)
        {
            if (value.length != 0)
            {
                $("#validation-errors").append('<div class="alert alert-error"><strong>'+ value +'</strong><div>');
            }
        });
        $("#validation-errors").show();
    } else {
         $("#output").html("<img src='"+response.file+"' />");
         $("#output").css('display','block');
    }
}