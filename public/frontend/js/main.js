$(document).ready(function($){
  if($('header.top').length){
    $(window).scroll(function(){
      /*var anchor = $('header.top').offset().top;*/
      var anchor = $('header.top').offset().top;
      /*console.log(anchor);*/
      if(anchor >= 130){
          $('header.top').addClass('cmenu');
          /*$('.cate-list').removeClass('on');*/
          $('.tcate-list').slideUp();
      }
      else{
          $('header.top').removeClass('cmenu');
      }
    });
  }

  $('.menu > li').hover(function() {
    /* Stuff to do when the mouse enters the element */
    if ($(this).children().length > 1 ) {
      //alert('hover');
      console.log($(this).children().length);
      $('.over').addClass('active');
    }
  }, function() {
    /* Stuff to do when the mouse leaves the element */
    $('.over').removeClass('active');
  });
  
  $("#menu").mmenu({
    "extensions": [
          "pagedim-black",
          "shadow-panels"
       ]
      // options
      /*"offCanvas": {
              "position": "right"
          }*/
    }, {
        // configuration
        clone: true
  });

  if($('.to-top').length){
    $('.to-top').on('click',function(event){
        event.preventDefault();
    $('body, html').stop().animate({scrollTop:0},800)});
    $(window).scroll(function(){
        var anchor=$('.to-top').offset().top;
        if(anchor>1000){
            $('.to-top').css('opacity','1')
        }
        else{
            $('.to-top').css('opacity','0')
        }
    });
  }

  $('.menu-btn').click(function(){
    $('#nav-icon3').toggleClass('open');
    $('.menu').toggleClass('open');
  });

  $('.search-open').on('click', function(event) {
    event.preventDefault();
    $('.search-frm').toggleClass('on');
  });

  
  $(document).mouseup(function(e) 
  {
      var container = $(".child-list.open");
      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) 
      {
          container.removeClass('open');
      }
  });
  $(window).bind('scroll', function() {
    var currentTop = $(window).scrollTop();
    var elems = $('.scrollspy');
    elems.each(function(index){
      var elemTop   = $(this).offset().top - 200;
      var elemBottom  = elemTop + $(this).height();
      if(currentTop >= elemTop && currentTop <= elemBottom){
        var id    = $(this).attr('id');
        var navElem = $('a[href="#' + id+ '"]');
    navElem.parent().addClass('active').siblings().removeClass( 'active' );
      }
    })
  });

  /*$('.scroll-link a, .link-section').click(function(e){
      e.preventDefault();
      el = $(this);
      name = $(this).attr('href');
      console.log(name)
      pos = $(name).position().top - 100;
      $('html,body').stop().animate({scrollTop:pos},600);
      return false;
  });*/

  $('.index-slider').slick({
    dots: false,
    autoplay:true,
    infinite:true,
    arrows: true,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left.png" alt="" title=""></button>',
    focusOnSelect: true,
    fade: false,
    speed: 750,
    autoplaySpeed:5000
  });

  $('.cate-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right3.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left3.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
  $('.sale-slider').slick({
    dots: false,
    arrows:true,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right3.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left3.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    /*rows:2,*/
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.tes-slider').slick({
    dots: false,
    autoplay:true,
    infinite:true,
    arrows: true,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right1.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left1.png" alt="" title=""></button>',
  });

  $('.brand-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right3.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left3.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    rows:2,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
          rows:1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.bdetail-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right3.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left3.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 2,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.hpro-slider').slick({
    dots: false,
    arrows:false,
    nextArrow: '<button type="button" class="slick-next"><img src="'+base_url()+'/images/right3.png" alt="" title=""></button>',
    prevArrow: '<button type="button" class="slick-prev"><img src="'+base_url()+'/images/left3.png" alt="" title=""></button>',
    autoplay:true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  if($(".slider-count").length){
    $(".slider-count").countdown($('#demnguoc').val(), function(event) {
      $(this).first().html(event.strftime('<li class="count-date"><span class="s14">%D</span><span class="s9">NGÀY</span></li> <li class="count-hours"><span class="s14">%H</span><span class="s9">GIỜ</span></li> <li class="count-minute"><span class="s14">%M</span><span class="s9">PHÚT</span></li> <li class="count-second"><span class="s14">%S</span><span class="s9">GIÂY</span></li>'));
    });
  }
  

  $('.bank-choice').on('click', function(event) {
    console.log('click');
    event.preventDefault();
    $('.bank-choice').parent('.bank-wrap').removeClass('active');
    $(this).parent('.bank-wrap').addClass('active').closest('.bank-wrap').find('input').prop('checked', 'true');
  });
  // filter
  CustomTheme.init();
  
  $(".button").on("click", function() {
    var $button = $(this);
    var oldValue = $button.parent().find("input").val();
    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }
    $button.parent().find("input").val(newVal);
  });
  
  if($('#example').length){
    var score = parseInt($('.rate-score').text());
    var quan = parseInt($('.rate-quan').text());
    console.log(score, quan);
    $('#example').barrating({
        theme: 'fontawesome-stars-o',
        initialRating:null,
        allowEmpty: null,
        emptyValue: '',
        deselectable: true,
        onSelect: function() {
          var text = parseInt($('#example').next('.br-widget').children('.br-current-rating').text());
          //console.log('Cảm ơn bạn đã bình chọn '+ text + ' sao!');
          quan += 1;
          score = (score + text)/2;
          console.log(score, quan);
          $('#example').next('.br-widget').children('.br-current-rating').css({
            display: 'inline-block',
            color: 'red'
          }); // manually trigger change event when a rating is selected
        }
    });
    //$('#example').barrating('set', 0);
  }

    $('.filter-tit').on('click', function(event) {
      event.preventDefault();
      $(this).next('.pro-aside').toggleClass('open');
    });
});
// custom theme
var CustomTheme = function () {

    var _initInstances = function () {


        var activeList = function () {

            var activeListEl = $('[data-list="active"]');

            var activeListLoad = function () {

                activeListEl.each(function(){
                    var el = $(this);
                    var activeItem = el.find('.active');
                    var data = activeItem.data('value');
                    var input = el.closest('[data-list="active"]').siblings('input').first();

                    if(activeItem.length){
                        input.val(data);
                    }else{
                        input.val(0);
                    }
                })


            }();

            var activeListHandle = function () {
                activeListEl.on('click', 'li', function (e) {
                    e.preventDefault();
                    var el = $(this);
                    var parent = el.closest('[data-list="active"]').siblings('input').first();
                    var data = el.data('value');

                    el.siblings().removeClass('active');
                    el.toggleClass('active');
                    // console.log(parent);

                    if (el.hasClass('active')) {
                        parent.val(data)
                    } else {
                        parent.val(0);
                    }

                    return false;
                })
            }();


        }();


        // disable event click a tag
        $('a').on("click", function (e) {
            if ($(this).attr('href') === undefined) {
                e.preventDefault();
                return false;
            }
        });


    }

    return {
        init: function () {
            _initInstances();
        }
    };
}();