jQuery(document).ready(function($){
    'use strict';


    // Search
    $('.coblog-search').click(function (e) {
        $('.coblog-header-search').fadeIn(500);
        setTimeout(function() {
            $('.coblog-header-search-wrap .search-field').focus();
        }, 499);
    });


    // Search Control
    $('.coblog-search-close').click(function(e){
        e.preventDefault();
        $('.coblog-header-search').fadeOut(500);
        $('.coblog-search .search-button').focus();
    });

    // Cart
    $(document).on('click', function (e) {
        if (!$(e.target).closest('.site-header-cart').length){
            $('.site-header-cart').find('.widget_shopping_cart').slideUp();
        }
    });
    if($(".site-header-cart").length > 0) {
        $('.site-header-cart').on('click', function (event) {
            $(this).find('.widget_shopping_cart').slideToggle();            
        });
    }


    // Offcanvas Menu
    $('.coblog-trigger, .coblog-close-canvas, .coblog-trigger-bottom').click(function() {        
        if ($('body').hasClass('coblog-offcanvas-active')) { // Nav Close
            $('body').removeClass('coblog-offcanvas-active');
            $('.coblog-close-canvas').removeClass('coblog-offcanvas-close-active');
            $('#coblog-header-trigger').focus();
          } else { // Nav Open
            $('body').addClass('coblog-offcanvas-active');
            $('.coblog-close-canvas').addClass('coblog-offcanvas-close-active');
            $('.coblog-offcanvas-wrap a').eq(0).focus();
          }
    });


    // Tab & ESC Navigration Control
    var previousTab = 'no', previousClose = 'no';
    document.addEventListener( 'keyup', function( event ) {
        if ( event.key === 'Escape' ) {
            if ($('body').hasClass('coblog-offcanvas-active')) {
                $('body').removeClass('coblog-offcanvas-active');
                $('.coblog-close-canvas').removeClass('coblog-offcanvas-close-active');
                $('#coblog-header-trigger').focus();
            }
            $('.coblog-header-search').fadeOut(500);
        }
        if ( event.key === 'Tab' ) {
            if(previousTab == 'search') {
                $('.coblog-header-search-wrap input.search-field').focus();
            }
            if( previousClose == 'close' && $('body').hasClass('coblog-offcanvas-active')) {
                $('.coblog-offcanvas-wrap a').eq(0).focus();
                console.log('EMC');
            }
            previousTab = $('.coblog-search-close').is(':focus') ? 'search' : 'no'
            previousClose = $('.coblog-trigger-bottom').is(':focus') ? 'close' : 'no'

            $('.main-navigation ul li').removeClass('is-focused')
            if( $('.main-navigation ul li a').is(":focus") ) {
                $('.main-navigation ul li a:focus').parents('li').addClass('is-focused');
            }
        }
        
    });
    document.addEventListener( 'keydown', function( event ) {
        if ( event.key === 'Tab' ) {
            if ( previousTab == 'search' ) {
                $('.coblog-header-search-wrap input.search-field').focus();
            }
            if ( previousClose == 'close' && $('body').hasClass('coblog-offcanvas-active') ) {
                $('.coblog-offcanvas-wrap a').eq(0).focus();
            }
        }
    });
    

    // OffCanvas Menu
    if( $('.coblog-offcanvas-menu').length ) {
        $( '.coblog-offcanvas-menu .menu-item-has-children > a' ).each( function() {
            $( this ).after( '<a class="click-open-btn cb-font-down-open triangle" href="#"></a>' );
        });
    }
    $( document ).on( 'click', '.click-open-btn', function( e ){
        const selector = $(this).closest('.menu-item')
        if ( selector.hasClass('offcanvas-menu-open') ) {
            selector.removeClass('offcanvas-menu-open')
        } else {
            selector.addClass('offcanvas-menu-open')
        }
    });
    


});
