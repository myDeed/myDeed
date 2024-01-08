$(document).ready(function() {
    /*====================== js for sticky and mobile menu ====================== */
    var min_height = $(window).height() - ($(".custom-header").height() + $(".custom-footer").height());
    $(".main_page").css('min-height', min_height + 'px');
    $(window).resize(function() {
        var min_height = $(window).height() - ($(".custom-header").height() + $(".custom-footer").height());
        $(".main_page").css('min-height', min_height + 'px');
    });

    $(window).scroll(function() {
        var navHeight = $('#custom-header').height();
        var sticky = $('#custom-header');
        if ($(window).scrollTop() > 0) {
            sticky.addClass("sticky")
            $('#dashboard-page').css('padding-top', navHeight + "px");
        } else {
            sticky.removeClass("sticky");
            $('#dashboard-page').css('padding-top', 0);
        }
    });
    $('.jb_front_nav_close button').on('click', function() {
        $('.navbar-collapse').collapse('hide');
    });
    /*====================== js for sticky and mobile menu ====================== */

    /*====================== js for scrollTop ====================== */
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 500) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '500');
    });
    /*====================== js for scrollTop ====================== */

    /*====================== web slider ====================== */
    $('#home-slider').owlCarousel({
        loop: true,
        center: true,
        items: 1,
        animateOut: 'fadeOut',
        autoplay: true,
        dots: false,
        nav: true,
        autoplayTimeout: 4000,
        smartSpeed: 950,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 1
            }
        }
    });

    $('#team-slider').owlCarousel({
        loop: true,
        center:true,
        margin: 20,
        autoplay: true,
        dots: true,
        nav: false,
        animateOut: 'fadeOut',
        autoplayTimeout: 2000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 6,
            }
        }
    });

    $('#client-slider').owlCarousel({
        loop: false,
        center:true,
        autoplay: false,
        dots: true,
        nav: false,
        items: 1,
        animateOut: 'fadeOut',
        autoplayTimeout: 2000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
    });


    $(".password-icon").click(function(){
        if (password_field.type === "password") {
           password_field.type = "text";
           $('.password-toggle').addClass('flaticon-eye');
           $('.password-toggle').removeClass('flaticon-invisible');
        } else {
           password_field.type = "password";
           $('.password-toggle').addClass('flaticon-invisible');
           $('.password-toggle').removeClass('flaticon-eye');
        }
     });
    $('#portfolio-slider').owlCarousel({
        loop: true,
        margin: 15,
        items: 4,
        autoplay: false,
        dots: true,
        nav: true,
        animateOut: 'fadeOut',
        autoplayTimeout: 1000,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });

    var movementStrength = 25;
        var height = movementStrength / $(window).height();
        var width = movementStrength / $(window).width();
        $("#top-image").mousemove(function(e){
                  var pageX = e.pageX - ($(window).width() / 2);
                  var pageY = e.pageY - ($(window).height() / 2);
                  var newvalueX = width * pageX * -1 - 25;
                  var newvalueY = height * pageY * -1 - 50;
                  $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
        });

    /*====================== web slider ====================== */

    //each, prop, animate, math, text

//.animate( properties [, duration ] [, easing ] [, callback ] )
//"swing" - moves slower at the beginning/end, but faster in the middle
//"linear" - moves in a constant speed
//step : A function to be called after each step of the animation.  step takes: now and fx.
//$(selector).prop(name,value)

            $('.count').each(function() {

                $(this).prop('counter', 0).animate({
            
                counter: $(this).text()
            
                }, {
            
                duration: 10000,
            
                easing: 'swing',
            
                step: function(now) {
            
                    $(this).text(Math.ceil(now));
                }
                });
            });

    // cricfeed banner text typing animation
    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #ff908369}";
        document.body.appendChild(css);
    };

    /*====================== custom video ====================== */
    // video icon poster frame click event
    $(document).on('click', '.js-videoPoster', function(ev) {
        ev.preventDefault();
        var $poster = $(this);
        var $wrapper = $poster.closest('.js-videoWrapper');
        videoPlay($wrapper);
    });

    // play the targeted video (and hide the poster frame)
    function videoPlay($wrapper) {
        var $iframe = $wrapper.find('.js-videoIframe');
        var src = $iframe.data('src');
        // hide poster
        $wrapper.addClass('videoWrapperActive');
        // add iframe src in, starting the video
        $iframe.attr('src', src);
    }

    // stop the targeted/all videos (and re-instate the poster frames)
    function videoStop($wrapper) {
        // if we're stopping all videos on page
        if (!$wrapper) {
            var $wrapper = $('.js-videoWrapper');
            var $iframe = $('.js-videoIframe');
            // if we're stopping a particular video
        } else {
            var $iframe = $wrapper.find('.js-videoIframe');
        }
        // reveal poster
        $wrapper.removeClass('videoWrapperActive');
        // remove youtube link, stopping the video from playing in the background
        $iframe.attr('src', '');
    }
    /*====================== custom video ====================== */

  

}); /*====================== all js end ====================== */