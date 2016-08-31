//index-2
var path = Drupal.settings.pathToTheme;
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#projects2').text()) {
                $('#projects2').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav center',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 4,
                    selector: 'project-item',
                    gutter: 0,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            if ($('#posts2').text()) {
                $('#posts2').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav center',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 2,
                    selector: 'post',
                    gutter: 30,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            if ($('#logos2').text()) {
                $('#logos2').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'bullets',
                    navigation_class: 'bullets-nav-1 center',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 5,
                    selector: 'logo-item',
                    gutter: 0,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//index-1
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#projects').text()) {
                $('#projects').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'project-block-1-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 3,
                    selector: 'project-item',
                    gutter: 0,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            if ($('#posts').text()) {
                $('#posts').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 1,
                    selector: 'post',
                    gutter: 0,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            if ($('#testimonials').text()) {
                $('#testimonials').rivaCarousel({
                    style: 'vertical',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-down"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-up"></i>',
                    visible: 1,
                    selector: 'testimonials-item',
                    gutter: 0,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            if ($('#tweets').text()) {
                $('#tweets').rivaCarousel({
                    style:'horizontal',
                    navigation:'bullets',
                    navigation_class:'bullets-nav-1 light',
                    visible:1,
                    selector:'tweet',
                    gutter:0,
                    interval: 1200,
                    autostart:0,
                    speed:350,
                    ease: 'easeInBack'
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//index-3
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#projects3').text()) {
                $('#projects3').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav margin-top-5',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 3,
                    selector: 'project-item',
                    gutter: 10,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            if ($('#posts3').text()) {
                $('#posts3').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 1,
                    selector: 'post',
                    gutter: 30,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//about
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#team').text()) {
                $('#team').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav margin-top-5',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 4,
                    selector: 'team-item',
                    gutter: 30,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//coming soon
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#coming-soon').text()) {
                var $datetime = $('#coming-soon').attr('data-time');
                var $datetime_array = $datetime.split(" ");
                var $date_array = $datetime_array[0].split("-");
                var $time_array = $datetime_array[1].split(":");
                var $_y = $date_array[0];
                var $_m = $date_array[1];
                var $_d = $date_array[2];
                var $_h = $time_array[0];
                var $_i = $time_array[1];
                var $_s = $time_array[2];
                $('#riva-countdown').rivaCountdown({
                    year: $_y,
                    month: $_m,
                    day: $_d,
                    hours: $_h,
                    minutes: $_i,
                    seconds: $_s,
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//contacts page
(function(window, mapster) {
    // map options
    if (document.getElementById('map-canvas')) {
        var options = mapster.MAP_OPTIONS,
            element = document.getElementById('map-canvas'),
            // map
            map = new mapster.create(element, options);
        var marker = map.addMarker({
            lat: 37.791350,
            lng: -122.435883,
            content: 'Manis Office',
            icon: path+'/img/office-building.png'
        });
    }
}(window, window.Mapster || (window.Mapster = {})));
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//faq
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if ($('#sorting').text()) {
                $('#sorting').rivaSorting({
                    selector: 'sort-item',
                    gutter: 10,
                    inRow: 1
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//2cols portfolio
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if($('#projects4').text()){
                $('#projects4').rivaSorting({
                    selector: 'project-item',
                    gutter: 0,
                    inRow: 2
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//3cols portfolio
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if($('#projects5').text()){
                $('#projects5').rivaSorting({
                    selector: 'project-item',
                    gutter: 0,
                    inRow: 3
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//4cols portfolio
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if($('#projects6').text()){
                $('#projects6').rivaSorting({
                    selector: 'project-item',
                    gutter: 5,
                    inRow: 4
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);

(function($) {
  "use strict";

  /* Preload Images */

  $( 'document' ).ready( function() {

    var $container = $( 'body' ),
      tweetsTimer,
      $preload = $( '#riva-preload' );

    $container.imagesLoaded( function() {

        /* PLACE YOUR JAVASCRIPT CODE HERE */
        if($('#projects7').text()){
            $('#projects7').rivaCarousel({
                style:'horizontal',
                navigation:'buttons',
                navigation_class:'section-header-nav margin-top-5',
                button_left_text:'<i class="glyphicon glyphicon-menu-left"></i>',
                button_right_text:'<i class="glyphicon glyphicon-menu-right"></i>',
                visible:3,
                selector:'project-item',
                gutter:10,
                infinite:0,
                interval:2000,
                autostart:0,
                speed:350,
                ease: 'easeInBack'
            });
        }
        if($('#images').text()){
            $('#images').rivaCarousel({
                style:'horizontal',
                navigation:'bullets',
                navigation_class:'bullets-nav-1 center',
                visible:1,
                selector:'project-img',
                gutter:0,
                interval: 1200,
                autostart:1,
                speed:250,
                ease: 'easeInBack'
            });
        }


        $preload.hide();

    } );

    clearTimeout( tweetsTimer );

  } );

})(jQuery);

(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if($('#images-single-product').text()){
                $('#images-single-product').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'bullets',
                    navigation_class: 'bullets-nav-1 center',
                    visible: 1,
                    selector: 'project-img',
                    gutter: 0,
                    interval: 1200,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            if($('#projects8').text()){
                $('#projects8').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav margin-top-5',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 3,
                    selector: 'shop-item',
                    gutter: 30,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 350,
                    ease: 'easeInBack'
                });
            }
            $('#qty_id').on('change', function() {
                $('#price_id').html('$' + $('#price_id').attr('data-price') * $(this).val());
            });
           $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);
//blog single
(function($) {
    "use strict";
    /* Preload Images */
    $('document').ready(function() {
        var $container = $('body'),
            tweetsTimer,
            $preload = $('#riva-preload');
        $container.imagesLoaded(function() {
            /* PLACE YOUR JAVASCRIPT CODE HERE */
            if($('#posts4').text()){
                $('#posts4').rivaCarousel({
                    style: 'horizontal',
                    navigation: 'buttons',
                    navigation_class: 'section-header-nav',
                    button_left_text: '<i class="glyphicon glyphicon-menu-left"></i>',
                    button_right_text: '<i class="glyphicon glyphicon-menu-right"></i>',
                    visible: 3,
                    selector: 'post',
                    gutter: 30,
                    infinite: 0,
                    interval: 2000,
                    autostart: 0,
                    speed: 700,
                    ease: 'easeInBack'
                });
            }
            $preload.hide();
        });
        clearTimeout(tweetsTimer);
    });
})(jQuery);

// update starts
$(document).ready(function() {
    $('.region-main-menu nav .main-nav li > ul').each(function() {
        $(this).removeAttr('class', 'none');
    });
    if($('#twitter-block').length){
        $('#twitter-block').rivaCarousel({
                        style:'horizontal',
                        navigation:'buttons',
                        navigation_class:'section-header-nav',
                        button_left_text:'<i class="glyphicon glyphicon-menu-left"></i>',
                        button_right_text:'<i class="glyphicon glyphicon-menu-right"></i>',
                        visible:1,
                        selector:'tweet',
                        gutter:30,
                        infinite:0,
                        interval:2000,
                        autostart:0,
                        speed:700,
                        ease: 'easeInBack'
        });
    }
    $('.region-section').find('.cta1').attr('data-style', 'dark');
    $('.region-section').find('.manis-light').attr('data-style', 'light');
    $('#simplenews-block-form-7').attr('class', 'simplenews-subscribe col-lg-8 col-md-8');
    $('#simplenews-block-form-7 div').find('.form-submit').attr('value', 'Subscribe me');
    //$('#simplenews-block-form-7 div').find('.form-submit').attr('class','m-btn[data-color="primary"]');
    $('.header-search form input[type=text]').attr('placeholder', 'type to search...');
    $('.header-search form input[type=submit]').val('');
    $('.header-search form .form-actions').append('<i class="glyphicon glyphicon-search"></i>');
    $('.region-page-title-right .search  div .form-type-textfield > input[type=text]').attr('placeholder', 'search here...');
    $('.region-page-title-right .search  .form-actions input[type=submit]').val('');
    $('.region-page-title-right .search  .form-actions').append('<i class="glyphicon glyphicon-search m-btn" data-color="primary"></i>');
    $('.widget-search .form-type-textfield input[type=text]').attr('placeholder', 'type to search...');
    $('.widget-search .form-actions input[type=submit]').val('');
    $('.comment-item-wrapper .comment-item .content .reply > a').each(function() {
        $(this).append(' this');
    });
    $('.widget-search .form-actions').append('<i class="glyphicon glyphicon-search"></i>');
    $('.comment-form .field-widget-text-textarea #comment-body-add-more-wrapper fieldset').remove();
    $('.item-list .pager .pager-first.first').remove();
    $('.item-list .pager .pager-last.last').remove();
    //add div wrap multi element (shop catalog)
    $('.shop-listing  div.col-lg-4').slice(0,3).wrapAll( "<div class='row'></div>" );
    $('.shop-listing  div.col-lg-4').slice(3,6).wrapAll( "<div class='row'></div>" );
    $('.shop-listing  div.col-lg-4').slice(6,9).wrapAll( "<div class='row'></div>" );
    $('.blog-list article.post').last().after('<div class="clearfix"></div>');

    $("#manis-skin a").click(function(){
        var data_skin = $(this).attr('data-skin');
        $('#manis-site-color').attr('href',path+'/css/skins/'+data_skin+'.css');
    });
    $('#views-exposed-form--manis-block-online-shop-page-shop-catalog .views-exposed-form div.views-submit-button input[type=submit]').attr('class','m-btn');
    $('#views-exposed-form--manis-block-online-shop-page-shop-catalog .views-exposed-form div.views-submit-button input[type=submit]').attr('data-color','primary');
    $('.ajax-shopping-cart-table tbody tr td.price').addClass('color-primary');
    $('.field-type-commerce-product-reference .field-items form input[type=submit]').addClass('m-btn');
    $('.field-type-commerce-product-reference .field-items form input[type=submit]').attr('data-color','primary');
    $('.ajax-shopping-cart-more-info .ajax-shopping-cart-total').addClass('color-primary');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default table tbody tr td.views-field-edit-delete input[type=submit]').addClass('m-btn');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default table tbody tr td.views-field-edit-delete input[type=submit]').attr('data-color','primary');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default div.commerce-line-item-actions input[type=submit]#edit-checkout').addClass('m-btn');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default div.commerce-line-item-actions input[type=submit]#edit-checkout').attr('data-color','primary');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default div.commerce-line-item-actions input[type=submit]#edit-submit').addClass('m-btn');
    $('.view-commerce-cart-form .commerce-line-item-views-form form#views-form-commerce-cart-form-default div.commerce-line-item-actions input[type=submit]#edit-submit').attr('data-color','secondary');
    //$('#customer-profile-billing-commerce-customer-address-add-more-wrapper .form-wrapper input[type=text].name-block').attr('placeholder', 'full name');
    //$('#customer-profile-billing-commerce-customer-address-add-more-wrapper .form-wrapper input[type=text].thoroughfare').attr('placeholder', 'address 1');
    //$('#customer-profile-billing-commerce-customer-address-add-more-wrapper .form-wrapper input[type=text].premise').attr('placeholder', 'address 2');
    //$('#customer-profile-billing-commerce-customer-address-add-more-wrapper .form-wrapper input[type=text].locality').attr('placeholder', 'city');
    $('.webform-client-form.webform-client-form-103 .form-actions input[type=submit]').addClass('m-btn');
    $('.webform-client-form.webform-client-form-103 .form-actions input[type=submit]').attr('data-color','primary');
    $('.search-form .form-wrapper').append('<i class="glyphicon glyphicon-search"></i>');
    $('.search-form .form-wrapper#edit-basic input[type=submit]').val('');
    $('.search-form .form-wrapper#edit-basic i.glyphicon-search').attr('data-color','primary');
    $('.search-form .form-wrapper#edit-basic i.glyphicon-search').addClass('m-btn');
    $('.search-form .form-wrapper#edit-basic .form-type-textfield input[type=text]').attr('placeholder','type to search...');
    $('#commerce-checkout-form-checkout input[type=submit]#edit-cancel').addClass('m-btn');
    $('#commerce-checkout-form-checkout input[type=submit]#edit-cancel').attr('data-color','secondary');
    //$('.checkout-buttons .fieldset-wrapper input#edit-continue').addClass('m-btn');
    //$('.checkout-buttons .fieldset-wrapper input#edit-continue').attr('data-color','primary');
    $('.checkout-buttons .fieldset-wrapper input#edit-back').addClass('m-btn');
    $('.checkout-buttons .fieldset-wrapper input#edit-back').attr('data-color','secondary');
});