(function($) {
	
	$.fn.ajaxSubmit.debug = true;
	
	$(document).ajaxError(function(ev,xhr,o,err) {
		alert(err);
		if (window.console && window.console.log) console.log(err);
	});
	
	$(document).on('mouseover', 'span.error-default, span.error-slick', function(e) {
		$(this).fadeOut(300, function() {
			$(this).remove();
		});
	});
	$('input.text, textarea.text, select').bind('focus', function () {
        $(this).parent().find('span.error-default, span.error-slick').fadeOut(300, function() {
			$(this).remove();
		});
    });
	$('input.text, textarea.text, select.text').bind('focus blur', function() {
		$(this).toggleClass('focus');
	});
	$('select.text').bind('change', function() {
		var Color = $(this).children(":selected").attr("class");
		$(this).removeClass('optcolors');
		$(this).addClass(Color);
	});
        $(".upload").change(function() {
            var filePath = $(this).val();
            var fileName = filePath.replace(/^.*[\\\/]/, '');
            var divId = $(this).parent().parent().attr("id");
            $("#"+divId).find("span").remove();
            $("<span class='filename'>Attached: "+fileName+"</span>").appendTo($(this).parent());
        });

$(function() {
$('.js_status').val("true");
$('.simplexform').on('submit', function(event) {
   var theform = $(this);
	event.preventDefault();	
	$('div.loader').html('<img src="assets/images/loader.gif" class="loader" alt="Loading">').fadeIn();
	theform.ajaxSubmit({
		url: theform.attr('action'),
		type: 'post',
		dataType: 'json',
		success: function( response ){
			//alert(response.message);
			$('span.error-default, span.error-slick').remove();
			$('img.loader').remove();
			firstError = undefined;
			$.each(response, function(index, element){
				var style = (element.errorstyle == "default") ? "error-default" : "error-slick";
				if(element.validation == 'error'){
					var div_id = element.errfield;
					var result = 'error';
					var error_msg = element.message;
					//alert(error_msg);
					firstError = typeof(firstError) == 'undefined' ? element.errfield : firstError;
                                      var msgdiv = theform.find('div#' + div_id).append('<span class="'+style+'">'+error_msg+'</span>');
					//msgdiv.append('<span class="'+style+'">'+error_msg+'</span>');
				}
				if(element.validation == 'success'){
					var successmsg = element.message;
					theform.find("#result").hide().html(successmsg).slideDown(400);
					theform.find('.form-elements').slideUp(400);
				}
			});
			if(firstError) {
				$('html, body').animate({
					scrollTop: $("#"+firstError).offset().top - 30
				}, 500);
			}
		}		
	});
	return false;
});

    // helper
    function objToString(o) {
        var s = '{\n';
        for (var p in o)
            s += '    "' + p + '": "' + o[p] + '"\n';
        return s + '}';
    }

    // helper
    function elementToString(n, useRefs) {
        var attr = "", nest = "", a = n.attributes;
        for (var i=0; a && i < a.length; i++)
            attr += ' ' + a[i].nodeName + '="' + a[i].nodeValue + '"';

        if (n.hasChildNodes == false)
            return "<" + n.nodeName + "\/>";

        for (var i=0; i < n.childNodes.length; i++) {
            var c = n.childNodes.item(i);
            if (c.nodeType == 1)       nest += elementToString(c);
            else if (c.nodeType == 2)  attr += " " + c.nodeName + "=\"" + c.nodeValue + "\" ";
            else if (c.nodeType == 3)  nest += c.nodeValue;
        }
        var s = "<" + n.nodeName + attr + ">" + nest + "<\/" + n.nodeName + ">";
        return useRefs ? s.replace(/</g,'&lt;').replace(/>/g,'&gt;') : s;
    };

});

})(jQuery);