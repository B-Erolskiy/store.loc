/*-----------------------------------------------------------------------------------

  Template Name: Tmart-Minimalist eCommerce HTML5 Template.
  Template URI: #
  Description: Tmart is a unique website template designed in HTML with a simple & beautiful look. There is an excellent solution for creating clean, wonderful and trending material design corporate, corporate any other purposes websites.
  Author: Theme365
  Version: 1.0

-----------------------------------------------------------------------------------*/

/*-------------------------------
[  Table of contents  ]
---------------------------------
  01. jQuery MeanMenu
  02. wow js active
  03. Portfolio  Masonry (width)
  04. Sticky Header
  05. ScrollUp
  06. Tooltip
  07. ScrollReveal Js Init
  08. Fixed Footer bottom script ( Newsletter )
  09. Search Bar
  10. Toogle Menu
  11. Shopping Cart Area
  12. Filter Area
  13. User Menu
  14. Overlay Close
  15. Home Slider 
  16. Popular Product Wrap
  17. Testimonial Wrap
  18. Magnific Popup  
  19. Price Slider Active
  20.  Plus Minus Button
  21. jQuery scroll Nav

  

/*--------------------------------
[ End table content ]
-----------------------------------*/



(function($) {
    'use strict';

    $('.catalog').dcAccordion({
        speed: 300
    });


    //
    //очистка корзины
    $('.cart-main-area').on('click', '.gotoformorder-btn', function () {
        $("#tab-btn-2").trigger('click');
        window.scrollTo(0, 0);
    });


    //увеличенный просмотр изображений
    var openPhotoSwipe = function() {
        var pswpElement = document.querySelectorAll('.pswp')[0];

        // build items array
        var items = [
            {
                src: $('#large img').attr('src'),
                w: 1500,
                h: 1500,
            }
        ];
        // define options (if needed)
        var options = {
            // history & focus options are disabled on CodePen
            history: false,
            focus: false,
            opacity: 0.7,

            showAnimationDuration: 0,
            hideAnimationDuration: 0
        };
        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };
    $('#large').on('click',openPhotoSwipe);

    //очистка корзины
    $('.cart-main-area').on('click', '.ti-shopping-cart-clear', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var obj = $('.number');
        obj.addClass('hidden');
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: function (res) {
                $('.cart-main-area').html(res);
                var emptyCart = $("input[name='emptyCart']").val();
                if(emptyCart == "true"){
                    $('#orderForm').css('display', 'none');
                }
                else {
                    $('#orderForm').css('display', 'block');
                }
                $('.mini-basket-amount').css('display', 'none');
            },
            error: function () {
                console.log('Error');
            }
        });
    });

    var filterInt = function (value) {
        if(/^(\-|\+)?([0-9]+|Infinity)$/.test(value))
            return Number(value);
        return NaN;
    }

    //открытие модального окна с краткой информацией о товаре
    $('body').on('click', '.product-quick-view', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var id = $(this).data('id');
        $.ajax({
            url: '/product/qview',
            data:{id: id},
            type: 'GET',
            success: function (res) {
                $('#myProductModal').html(res);
                $('#myProductModal').modal('show');
            },
            error: function (res) {
                console.log('Error' + res);
            }
        });
    });


    //добавление товара в корзину
    $('.cart-add').on('click', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var obj = $('.number');
        obj.removeClass('hidden');
        //$('body').classList.add('stop-scrolling');
        var id = $(this).data('id'),
            qty = $('#qtybutton').val();
        //console.log(qty);
        if (qty >= 1 || qty == undefined){
            $.ajax({
                url: '/cart/add',
                data: {id: id, qty: qty},
                type: 'GET',
                success: function () {
                    $('#myProductModal').modal('hide');
                    $('.modal-cart').modal('show');

                    if(qty == undefined){
                        qty = 1;
                    }
                    else {
                        qty = filterInt(qty);
                    }
                    if (filterInt($('.mini-basket-amount').text())){
                        $('.mini-basket-amount').css('display', 'block');
                        qty += filterInt($('.mini-basket-amount').text());
                        $('.mini-basket-amount').html(qty);
                    }
                    else {
                        $('.menu-extra .ti-shopping-cart').html('<div class="c-amount-indicator mini-basket-amount sel-mini-cart-count">'+qty+'</div>');
                    }

                },
                error: function () {
                    console.log('Error');
                }
            });
        }
    });



    //удаление товара из корзины
    $('.cart-main-area').on('click', '.del-item', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var id = $(this).data('id');
        var qty = filterInt($(this).data('qty'));
        $.ajax({
            url: '/cart/delete',
            data: {id: id, isAjax: true},
            type: 'GET',
            success: function (res) {
                $('.cart-main-area').html(res);
                var emptyCart = $("input[name='emptyCart']").val();
                if(emptyCart == "true"){
                    $('#orderForm').css('display', 'none');
                    $('.mini-basket-amount').css('display', 'none');
                }
                else {
                    console.log(qty);
                    $('#orderForm').css('display', 'block');
                    qty = filterInt($('.mini-basket-amount').text())-qty;
                    console.log($('.mini-basket-amount').text());
                    $('.mini-basket-amount').html(qty);
                }
            },
            error: function (res) {
                console.log('Error' + res);
            }
        });

    });

    //удаление главного изображения товара
    $('.field-images').on('click', '.remove-main-image', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var id = $(this).data('id');
        var question = "Вы уверены, что хотите удалить главное изображение товара?";
        var result = confirm(question);
        if(result){
            $.ajax({
                url: 'dmimage',
                data: {id: id, isAjax: true},
                type: 'GET',
                success: function (res) {
                    $('.field-images').html(res);
                },
                error: function (res) {
                    console.log('Error' + res);
                }
            });
        }
    });

    //удаление изображения из галереи товара
    $('.field-images').on('click', '.remove-gallery-image', function (e) {
        e.preventDefault(); //отмена дефолтного поведения
        var id = $(this).data('id');
        var imageId = $(this).data('image');
        var question = "Вы уверены, что хотите удалить изображение из галереи товара?";
        var result = confirm(question);
        if(result){
            $.ajax({
                url: 'dgimage',
                data: {id: id, imageId: imageId, isAjax: true},
                type: 'GET',
                success: function (res) {
                    $('.field-images').html(res);
                },
                error: function (res) {
                    console.log('Error' + res);
                }
            });
        }
    });

    //отмена повторной отправки формы "Свяжитесь с нами"
    $('#contact-form').on('beforeSubmit', function () {
        // Вызывается после удачной валидации всех полей и до того как форма отправляется на северер.
        // Тут можно отправить форму через AJAX. Не забудьте вернуть false для того, чтобы форма не отправлялась как обычно.
        return false;
    });

    /*  CAROUSEL  */

    $().ready(function(){
        $("#thumbnail a").click(function(){
            $("#large img").hide().attr({"src": $("> img", this).attr("src"), "title": $("> img", this).attr("title")});
            return false;
        });
        $("#large>img").load(function(){$("#large>img:hidden").show('fast')});
    });

    $().ready(function(){
        $("#quickview-wrapper").on('click', '#thumbnail a', function (e) {
            e.preventDefault();
            $("#large img").hide().attr({"src": $("> img", this).attr("src"), "title": $("> img", this).attr("title")});
            $("#large>img").load(function(){$("#large>img:hidden").show('fast')});
        });
    });

    /*-------------------------------------------
  01. jQuery MeanMenu
--------------------------------------------- */

    $('.mobile-menu nav').meanmenu({
        meanMenuContainer: '.mobile-menu-area',
        meanScreenWidth: "991",
        meanRevealPosition: "right",
    });

/*-------------------------------------------
  02. wow js active
--------------------------------------------- */
  new WOW().init();
    
    
/*-------------------------------------------
  03. Product  Masonry (width)
--------------------------------------------- */ 
$('.htc__product__container').imagesLoaded( function() {
  
    // filter items on button click
    $('.product__menu').on( 'click', 'button', function() {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue });
    }); 
    // init Isotope
    var $grid = $('.product__list').isotope({
      itemSelector: '.single__pro',
      percentPosition: true,
      transitionDuration: '0.7s',
      masonry: {
        // use outer width of grid-sizer for columnWidth
        columnWidth: '.single__pro',
      }
    });

});

$('.product__menu button').on('click', function(event) {
    $(this).siblings('.is-checked').removeClass('is-checked');
    $(this).addClass('is-checked');
    event.preventDefault();
});



/*-------------------------------------------
  04. Sticky Header
--------------------------------------------- */ 
  var win = $(window);
  var sticky_id = $("#sticky-header-with-topbar");
  win.on('scroll',function() {    
    var scroll = win.scrollTop();
    if (scroll < 245) {
      sticky_id.removeClass("scroll-header");
    }else{
      sticky_id.addClass("scroll-header");
    }
  });
    
    
/*--------------------------
  05. ScrollUp
---------------------------- */
$.scrollUp({
    scrollText: '<i class="zmdi zmdi-chevron-up"></i>',
    easingType: 'linear',
    scrollSpeed: 900,
    animation: 'fade'
});
    
    
/*---------------------------
  06. Tooltip
------------------------------*/    
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
    container: 'body'
});
    
    
/*-----------------------------------
  07. ScrollReveal Js Init
-------------------------------------- */
    window.sr = ScrollReveal({ duration: 800 , reset: true });
    sr.reveal('.foo');
    sr.reveal('.bar');
    
    
/*-------------------------------------------------------
  08. Fixed Footer bottom script ( Newsletter )
--------------------------------------------------------*/

var $newsletter_height = $(".htc__foooter__area");
$('.fixed__footer').css({'margin-bottom': $newsletter_height.height() + 'px'});


/*------------------------------------    
  09. Search Bar
--------------------------------------*/ 
    
  $( '.search__open' ).on( 'click', function () {
    $( 'body' ).toggleClass( 'search__box__show__hide' );
    return false;
  });

  $( '.search__close__btn .search__close__btn_icon' ).on( 'click', function () {
    $( 'body' ).toggleClass( 'search__box__show__hide' );
    return false;
  });
    
    
/*------------------------------------    
  10. Toogle Menu
--------------------------------------*/
  $('.toggle__menu').on('click', function() {
    $('.offsetmenu').addClass('offsetmenu__on');
    $('.body__overlay').addClass('is-visible');

  });

  $('.offsetmenu__close__btn').on('click', function() {
      $('.offsetmenu').removeClass('offsetmenu__on');
      $('.body__overlay').removeClass('is-visible');
  });

/*------------------------------------    
  11. Shopping Cart Area
--------------------------------------*/

  $('.cart__menu').on('click', function() {
    $('.shopping__cart').addClass('shopping__cart__on');
    $('.body__overlay').addClass('is-visible');

  });

  $('.offsetmenu__close__btn').on('click', function() {
      $('.shopping__cart').removeClass('shopping__cart__on');
      $('.body__overlay').removeClass('is-visible');
  });


/*------------------------------------    
  12. Filter Area
--------------------------------------*/

  $('.filter__menu').on('click', function() {
    $('.filter__wrap').addClass('filter__menu__on');
    $('.body__overlay').addClass('is-visible');

  });

  $('.filter__menu__close__btn').on('click', function() {
      $('.filter__wrap').removeClass('filter__menu__on');
      $('.body__overlay').removeClass('is-visible');
  });
    
    
/*------------------------------------    
  13. User Menu
--------------------------------------*/

  $('.user__menu').on('click', function() {
    $('.user__meta').addClass('user__meta__on');
    $('.body__overlay').addClass('is-visible');

  });
    
  $('.offsetmenu__close__btn').on('click', function() {
      $('.user__meta').removeClass('user__meta__on');
      $('.body__overlay').removeClass('is-visible');
  });



/*------------------------------------    
  14. Overlay Close
--------------------------------------*/
  $('.body__overlay').on('click', function() {
    $(this).removeClass('is-visible');
    $('.offsetmenu').removeClass('offsetmenu__on');
    $('.shopping__cart').removeClass('shopping__cart__on');
    $('.filter__wrap').removeClass('filter__menu__on');
    $('.user__meta').removeClass('user__meta__on');
  });

    
/*-----------------------------------------------
  15. Home Slider
-------------------------------------------------*/
  if ($('.slider__activation__wrap').length) {
    $('.slider__activation__wrap').owlCarousel({
      loop: true,
      margin:0,
      nav:true,
      autoplay: false,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      autoplayTimeout: 10000,
      items:1,
      dots: false,
      lazyLoad: true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        800:{
          items:1
        },
        1024:{
          items:1
        },
        1200:{
          items:1
        },
        1400:{
          items:1
        },
        1920:{
          items:1
        }
      }
    });
  }

/*-----------------------------------------------
  16. Popular Product Wrap
-------------------------------------------------*/
  $('.popular__product__wrap').owlCarousel({
      loop: true,
      margin:0,
      nav:true,
      autoplay: false,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      autoplayTimeout: 10000,
      items:3,
      dots: false,
      lazyLoad: true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        800:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        },
        1400:{
          items:3
        },
        1920:{
          items:3
        }
      }
    });
    
    
/*-----------------------------------------------
  17.  product-slider-active
-------------------------------------------------*/
  $('.single-portfolio-slider').owlCarousel({
      loop: true,
      nav:true,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      items:1,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        800:{
          items:1
        },
        1024:{
          items:1
        },
        1200:{
          items:1
        },
        1400:{
          items:1
        },
        1920:{
          items:1
        }
      }
    });


/*-----------------------------------------------
  17.  product-slider-active
-------------------------------------------------*/


  $('.product-slider-active').owlCarousel({
      loop: true,
      margin:0,
      nav:true,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      items:3,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        800:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        },
        1400:{
          items:3
        },
        1920:{
          items:3
        }
      }
    });


/*-----------------------------------------------
  17.  product-details-slider
-------------------------------------------------*/


  $('.product-details-slider').owlCarousel({
      loop: true,
      margin:20,
      nav:true,
      navText: [ '<i class="zmdi zmdi-chevron-left"></i>', '<i class="zmdi zmdi-chevron-right"></i>' ],
      items:3,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        800:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        },
        1400:{
          items:3
        },
        1920:{
          items:3
        }
      }
    });


/*-----------------------------------------------
  18.  portfolio-slider-active
-------------------------------------------------*/


  $('.portfolio-slider-active').owlCarousel({
      loop: true,
      dotsEach: 1,
      nav:false,
      items:3,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        800:{
          items:2
        },
        1024:{
          items:3
        },
        1200:{
          items:3
        },
        1400:{
          items:3
        },
        1920:{
          items:3
        }
      }
    });



/*-----------------------------------------------
  17. Testimonial Wrap
-------------------------------------------------*/


  $('.testimonial__wrap').owlCarousel({
      loop: true,
      margin:0,
      nav:false,
      autoplay: false,
      navText: false,
      autoplayTimeout: 10000,
      items:1,
      dots: false,
      lazyLoad: true,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:1
        },
        800:{
          items:1
        },
        1024:{
          items:1
        },
        1200:{
          items:1
        },
        1400:{
          items:1
        },
        1920:{
          items:1
        }
      }
    });




/*--------------------------------
  18. Magnific Popup
----------------------------------*/

$('.video-popup').magnificPopup({
  type: 'iframe',
  mainClass: 'mfp-fade',
  removalDelay: 160,
  preloader: false,
  zoom: {
      enabled: true,
  }
});

$('.image-popup').magnificPopup({
  type: 'image',
  mainClass: 'mfp-fade',
  removalDelay: 100,
  gallery:{
      enabled:true, 
  }
});

/*-------------------------------
  19. Price Slider Active
--------------------------------*/

    var minP = $("#price_min").val();
    var maxP = $("#price_max").val();
    var max = $("#all_prices_max").text();

    if(maxP == undefined || maxP == 0)
        maxP = max;
    if(minP > maxP)
        maxP = minP;
    if (minP == undefined)
        minP = 0;

    $("#slider-range").slider({
        range: true,
        min: 0,
        max: max,
        values: [minP, maxP],
        slide: function (event, ui) {
            $("#amount").val(ui.values[0] + " ₽ - " + ui.values[1] + " ₽");
            $("#price_min").val(ui.values[0]);
            $("#price_max").val(ui.values[1]);
        }
    });
    $("#amount").val($("#slider-range").slider("values", 0) +
        " ₽ - " + $("#slider-range").slider("values", 1)+ " ₽");

    //удаление пустых параметров
    $('#filter-products').submit(function(e){
        var emptyinputs = $(this).find('input').filter(function(){
            return !$.trim(this.value).length;  // get all empty fields
        }).prop('disabled',true);
    });

    //деактивирование чекбоксов при выборе "все"
    var check1 = document.getElementById('all');
    if (check1 != null) {
        if (check1.checked == true){
            document.getElementById('new').disabled = true;
            document.getElementById('sale').disabled = true;
            document.getElementById('hit').disabled = true;
        }
        check1.onchange = function () { // Отслеживаем изменение чекбокса
            if (check1.checked == true){ // Если элемент не выбран, то
                document.getElementById('new').disabled = true;
                document.getElementById('sale').disabled = true;
                document.getElementById('hit').disabled = true;
            } else {
                document.getElementById('new').disabled = false;
                document.getElementById('sale').disabled = false;
                document.getElementById('hit').disabled = false;
            }
        }
    }

    //та же функция для выполнения после ajax-запроса
    $(document).ajaxComplete(function() {
        var minP = $("#price_min").val();
        var maxP = $("#price_max").val();
        var max = $("#all_prices_max").text();

        if(maxP == 0)
            maxP = max;

        $("#slider-range").slider({
            range: true,
            min: 0,
            max: max,
            values: [minP, maxP],
            slide: function (event, ui) {
                $("#amount").val(ui.values[0] + " ₽ - " + ui.values[1] + " ₽");
                $("#price_min").val(ui.values[0]);
                $("#price_max").val(ui.values[1]);
            }
        });
        $("#amount").val($("#slider-range").slider("values", 0) +
            " ₽ - " + $("#slider-range").slider("values", 1)+ " ₽");

        //удаление пустых параметров
        $('#filter-products').submit(function(e){
            var emptyinputs = $(this).find('input').filter(function(){
                return !$.trim(this.value).length;  // get all empty fields
            }).prop('disabled',true);
        });

        //деактивирование чекбоксов при выборе "все"
        var check1 = document.getElementById('all');
        if (check1 != null) {
            if (check1.checked == true) {
                document.getElementById('new').disabled = true;
                document.getElementById('sale').disabled = true;
                document.getElementById('hit').disabled = true;
            }
            check1.onchange = function () { // Отслеживаем изменение чекбокса
                if (check1.checked == true) { // Если элемент не выбран, то
                    document.getElementById('new').disabled = true;
                    document.getElementById('sale').disabled = true;
                    document.getElementById('hit').disabled = true;
                } else {
                    document.getElementById('new').disabled = false;
                    document.getElementById('sale').disabled = false;
                    document.getElementById('hit').disabled = false;
                }
            }
        }
    });


/*-------------------------------
  20.  Plus Minus Button 
--------------------------------*/

    $(".cart-plus-minus").append('<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>');

    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });


/*--------------------------
  21. jQuery scroll Nav
---------------------------- */
    $('.onepage--menu').onePageNav({
        scrollOffset: 0
    });



/*--------------------------
  22. Preloader
---------------------------- */

$(document).on('pjax:send', function() {
    if (document.getElementById('cube-loader') != null) {
        document.getElementById('cube-loader').classList.remove("hidden");
        document.querySelector('.shop__grid__view__wrap').classList.add("hidden");
    }
});
$(window).on('load', function() {
    if (document.getElementById('cube-loader') != null){
        document.getElementById('cube-loader').classList.add("hidden");
        document.querySelector('.shop__grid__view__wrap').classList.remove("hidden");
    }
});



/*---------------------
    countdown
  --------------------- */
    $('[data-countdown]').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hour</p></span> <span class="cdown minutes">%M <p>Min</p></span class="cdown second"> <span>%S <p>Sec</p></span>'));
		});
    });    
    
    
/* isotop active */
    var $grid = $('.grid');
    var $gridJustified = $('.grid-justified');
    var $gridItems = '.grid-item';
    // filter items on button click
    $grid.imagesLoaded(function() {
        
        $('.portfolio-menu-active').on('click', 'button', function() {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        
        // init Isotope
        $grid.isotope({
            itemSelector: $gridItems,
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: $gridItems,
            }
        });
        
        // init Isotope
        $gridJustified.isotope({
            itemSelector: $gridItems,
            percentPosition: true,
            layoutMode: 'fitRows',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1,
            }
        });
    });
    
    
    /*--
    Magnific Popup
    ------------------------*/
    $('.img-poppu').magnificPopup({
        type: 'image',
        gallery:{
            enabled:true
        }
    });
    
    
    $('.sidebar-active').stickySidebar({
        topSpacing: 80,
        bottomSpacing: 30,
        minWidth: 767,
    });
    
    
    
    
})(jQuery);

