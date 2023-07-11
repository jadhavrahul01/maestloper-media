/*--------------------- Copyright (c) 2022 -----------------------
[Master Javascript]
Project: Business Agency - Responsive HTML Template 
Version: 1.0.0
Assigned to: 
-------------------------------------------------------------------*/
(function($) {
    "use strict";
    /*-----------------------------------------------------
    	Function  Start
    -----------------------------------------------------*/
    var Agency = {
        initialised: false,
        version: 1.0,
        mobile: false,
        init: function() {
            if (!this.initialised) {
                this.initialised = true;
            } else {
                return;
            }
            
            /*-----------------------------------------------------
            	Function Calling
            -----------------------------------------------------*/
            this.preLoader();
            this.searchBar();
            this.wowAnimation();
            this.navMenu();
            this.focusText();
            this.testimonialSlider();
            this.TeamSlider();
            this.partner();
            this.counter();
            this.topButton();
            this.aboutTabs();
            this.tiltAnimation();
            this.popupGallery();
            this.cursor();
        },
        /*-----------------------------------------------------
        	Fix Preloader
        -----------------------------------------------------*/
        preLoader: function() {
            $(window).on('load', function() {
                $(".preloader-wrapper").removeClass('preloader-active');
            });
            jQuery(window).on('load', function() {
                setTimeout(function() {
                    jQuery('.preloader-open').addClass('loaded');
                }, 100);
            });
        },

        /*-----------------------------------------------------
        	Fix Search Bar & Cart
        -----------------------------------------------------*/
        searchBar: function() {
            $('.searchBtn').on("click", function() {
                $('.search-bar').addClass('show');
            });
            $('.closeBtn').on("click", function() {
                $('.search-bar').removeClass('show');
            });
            $('.search-bar').on("click", function() {
                $('.search-bar').removeClass('show');
            });
            $(".search-bar-inner").on('click', function() {
                event.stopPropagation();
            });
        },

        /*-----------------------------------------------------
        	Fix Animation 
        -----------------------------------------------------*/
        wowAnimation: function() {
            new WOW().init();
        },

        /*-----------------------------------------------------
        	Fix Mobile Menu 
        -----------------------------------------------------*/
        navMenu: function() {
            var w = window.innerWidth;
            if (w <= 991) {
                /** Menu Btn Click**/
                $(".menu-btn").on('click', function(event) {
                    event.stopPropagation();
                    $(".main-menu-wrapper, .menu-btn-wrap").toggleClass("open");
                });
                $("body").on('click', function() {
                    $(".main-menu-wrapper, .menu-btn-wrap").removeClass("open");
                });

                /** Mobile Menus JS **/
                $(".main-menu-wrapper>ul li:has(ul)").addClass('has-submenu');
                $('.menu').on('click', '> li', function(e) {
                    e.stopPropagation();
                    $('.menu > li').not($(this)).find('.sub-menu').slideUp();
                    $('.menu > li').not($(this)).removeClass('open');
                    $(this).find('.sub-menu').slideToggle();
                    $(this).toggleClass('open');
                });
                $(".main-menu-wrapper>ul").on('click', function(event) {
                    event.stopPropagation();
                });

                $(function() {
                    for (var a = window.location, counting = $(".menu").filter(function() {
                            return this.href == a;
                        }).addClass("active").parent().addClass("active");;) {
                        if (!counting.is("li")) break;
                        counting = counting.parent().addClass("in").parent().addClass("active");
                    }
                });
            }

        },

        /*-----------------------------------------------------
        	Fix  On focus Placeholder
        -----------------------------------------------------*/
        focusText: function() {
            var place = '';
            $('input,textarea').focus(function() {
                place = $(this).attr('placeholder');
                $(this).attr('placeholder', '');
            }).blur(function() {
                $(this).attr('placeholder', place);
            });
        },
        /*-----------------------------------------------------
        	Fix Testimonial Slider 
        -----------------------------------------------------*/
        testimonialSlider: function() {
            var testimonialSlider = new Swiper('.agy-testimonial-slider .swiper', {
                autoHeight: false,
                autoplay: false,
                loop: false,
                spaceBetween: 0,
                // effect: 'fade',
                centeredSlides: false,
                speed: 1500,
                pagination: {
                    el: '.agy-testimonial-slider .agy-bullets',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.agy-testimonial-slider .swiper-button-next',
                    prevEl: '.agy-testimonial-slider .swiper-button-prev',
                },
                slidesPerView: 3,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    575: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Team Slider 
        -----------------------------------------------------*/
        TeamSlider: function() {
            var TeamSwiper = new Swiper('.team-slider.swiper', {
                autoHeight: false,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 4,
                loop: true,
                speed: 3000,
                autoplay: {
                    delay: 3000,
                },
                centeredSlides: false,
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                    },
                    480: {
                        slidesPerView: 1,
                    },
                    575: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    767: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Partner Slider 
        -----------------------------------------------------*/
        partner: function() {
            var PartnerSwiper = new Swiper('.partner-slider.swiper', {
                autoHeight: false,
                autoplay: true,
                spaceBetween: 30,
                slidesPerView: 8,
                loop: true,
                speed: 2000,
                autoplay: {
                    delay: 1000,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                        spaceBetween: 0,
                    },
                    575: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    767: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    992: {
                        slidesPerView: 6,
                        spaceBetween: 20,
                    },
                    1200: {
                        slidesPerView: 6,
                        spaceBetween: 30,
                    },
                },
            });
        },

        /*-----------------------------------------------------
        	Fix Counter
        -----------------------------------------------------*/
        counter: function() {
            if ($('.counter-holder').length > 0) {
                var a = 0;
                $(window).scroll(function() {
                    var topScroll = $('.counter-holder').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > topScroll) {
                        $('.count-no').each(function() {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            $({
                                countNum: $this.text()
                            }).animate({
                                countNum: countTo
                            }, {
                                duration: 10000,
                                easing: 'swing',
                                step: function() {
                                    $this.text(Math.floor(this.countNum));
                                },
                                complete: function() {
                                    $this.text(this.countNum);
                                }
                            });
                        });
                        a = 1;
                    }
                });
            };
        },

        /*-----------------------------------------------------
        	Fix GoToTopButton
        -----------------------------------------------------*/
        topButton: function() {
            var scrollTop = $(".agy-scroll-top");
            $(window).on('scroll', function() {
                if ($(this).scrollTop() < 500) {
                    scrollTop.removeClass("active");
                } else {
                    scrollTop.addClass("active");
                }
            });
            $('.agy-scroll-top').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 2000);
                return false;
            });

            $(function() {
                $('.go-down-btn').click(function() {
                    $('html, body').animate({ scrollTop: $('#go-down-btn').offset().top }, 'slow');
                    return false;
                });
            });
        },

        /*-----------------------------------------------------
        	Fix About Page Tabs 
        -----------------------------------------------------*/
        aboutTabs: function() {
            $('.agy-tabs-nav li:first-child').addClass('active');
            $('.agy-single-tab').hide();
            $('.agy-single-tab:first').show();
            $('.agy-tabs-nav li').click(function() {
                $('.agy-tabs-nav li').removeClass('active');
                $(this).addClass('active');
                $('.agy-single-tab').hide();
                var activeTab = $(this).find('a').attr('href');
                $(activeTab).fadeIn();
                return false;
            });
        },

        /*-----------------------------------------------------
        	Fix Image Animation
        -----------------------------------------------------*/
        tiltAnimation: function() {
            var tiltAnimation = $('.parallax')
            if (tiltAnimation.length) {
                tiltAnimation.tilt({
                    max: 12,
                    speed: 1e3,
                    easing: 'cubic-bezier(.03,.98,.52,.99)',
                    transition: !1,
                    perspective: 1e3,
                    scale: 1
                })
            }
        },

        /*-----------------------------------------------------
        	Fix Gallery Magnific Popup
        -----------------------------------------------------*/
        popupGallery: function() {
            jQuery(document).ready(function() {
                $('.popup-gallery, .popup-gallery1, .popup-gallery2, .popup-gallery3').magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    tLoading: 'Loading image #%curr%...',
                    mainClass: 'mfp-img-mobile',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function(item) {
                            return item.el.attr('title') + '<small></small>';
                        }
                    }
                });
            });
        },

         /*-----------------------------------------------------
        	Fix Cursor
        -----------------------------------------------------*/
        cursor: function() {
            if($('.agy-cursor-inner').length > 0){
                /*
                Mouse
                */
                function mousecursor() {
                    if ($("body")) {
                        const e = document.querySelector(".agy-cursor-inner"),
                            t = document.querySelector(".agy-cursor-outer");
                        let n, i = 0,
                            o = !1;
                        window.onmousemove = function(s) {
                            o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
                        }, $("body").on("mouseenter", "a, .cursor-pointer", function() {
                            e.classList.add("agy-cursor-hover"), t.classList.add("agy-cursor-hover")
                        }), $("body").on("mouseleave", "a, .cursor-pointer", function() {
                            $(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("agy-cursor-hover"), t.classList.remove("agy-cursor-hover"))
                        }), e.style.visibility = "visible", t.style.visibility = "visible"
                    }
                };
                
                $(function() {
                    mousecursor();
                });
            }
        },


    };

    Agency.init();


    /*-----------------------------------------------------
    	Fix Contact Form Submission
    -----------------------------------------------------*/
    // Contact Form Submission
    function checkRequire(formId, targetResp) {
        targetResp.html('');
        var email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
        var url = /(http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?/;
        var image = /\.(jpe?g|gif|png|PNG|JPE?G)$/;
        var mobile = /^[\s()+-]*([0-9][\s()+-]*){6,20}$/;
        var facebook = /^(https?:\/\/)?(www\.)?facebook.com\/[a-zA-Z0-9(\.\?)?]/;
        var twitter = /^(https?:\/\/)?(www\.)?twitter.com\/[a-zA-Z0-9(\.\?)?]/;
        var google_plus = /^(https?:\/\/)?(www\.)?plus.google.com\/[a-zA-Z0-9(\.\?)?]/;
        var check = 0;
        $('#er_msg').remove();
        var target = (typeof formId == 'object') ? $(formId) : $('#' + formId);
        target.find('input , textarea , select').each(function() {
            if ($(this).hasClass('require')) {
                if ($(this).val().trim() == '') {
                    check = 1;
                    $(this).focus();
                    $(this).parent('div').addClass('form_error');
                    targetResp.html('You missed out some fields.');
                    $(this).addClass('error');
                    return false;
                } else {
                    $(this).removeClass('error');
                    $(this).parent('div').removeClass('form_error');
                }
            }
            if ($(this).val().trim() != '') {
                var valid = $(this).attr('data-valid');
                if (typeof valid != 'undefined') {
                    if (!eval(valid).test($(this).val().trim())) {
                        $(this).addClass('error');
                        $(this).focus();
                        check = 1;
                        targetResp.html($(this).attr('data-error'));
                        return false;
                    } else {
                        $(this).removeClass('error');
                    }
                }
            }
        });
        return check;
    }
    $(".submitForm").on('click', function() {
        var _this = $(this);
        var targetForm = _this.closest('form');
        var errroTarget = targetForm.find('.response');
        var check = checkRequire(targetForm, errroTarget);

        if (check == 0) {
            var formDetail = new FormData(targetForm[0]);
            formDetail.append('form_type', _this.attr('form-type'));
            $.ajax({
                method: 'post',
                url: 'ajaxmail.php',
                data: formDetail,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(resp) {
                console.log(resp);
                if (resp == 1) {
                    targetForm.find('input').val('');
                    targetForm.find('textarea').val('');
                    errroTarget.html('<p style="color:green;">Mail has been sent successfully.</p>');
                } else {
                    errroTarget.html('<p style="color:red;">Something went wrong please try again latter.</p>');
                }
            });
        }
    });

    jQuery(function () {
		jQuery("input[name=switchPlan]:radio").click(function () {
			if (jQuery('input[name=switchPlan]:checked').val() == "Light") {
				jQuery("body").removeClass('dark-mode');
				jQuery("body").addClass('light-mode');

			} else if (jQuery('input[name=switchPlan]:checked').val() == "Dark") {
				jQuery("body").removeClass('light-mode');
				jQuery("body").addClass('dark-mode');
			}
		});
	});

	$( document ).ready(function() {
		var mode = localStorage.getItem('mode');
		if(mode == 'Dark'){
			jQuery("body").removeClass('light-mode');
			jQuery("body").addClass('dark-mode');
			$('#switchDark ').prop("checked", true);
			$('#switchLight').removeAttr('checked');				
		} else {
			jQuery("body").removeClass('dark-mode');
			jQuery("body").addClass('light-mode');
			$('#switchLight ').prop("checked", true);
			$('#switchDark').removeAttr( "checked" );
		}
	});

	$(document).on('click', '.mode', function (e) {
		var mode =  $(this).val();
		localStorage.setItem('mode', mode);
	});

})(jQuery);


