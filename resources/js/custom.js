/*---------------------------------------------------------------------
    File Name: custom.js
---------------------------------------------------------------------*/

/* 
Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar 

*/
//jQuery time


;(function($) {
    "use strict";  
    
    //* Form js
    function verificationForm(){
        //jQuery time
        var current_fs, next_fs, previous_fs; //fieldsets
        var top, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function () {
            var $this = $(this);
            var isValid = validateForm($this);
            if (!isValid) {
                return '';
            }
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    top = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'top': top,
                        'opacity': opacity
                    });
                },
                duration: 1000,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInBack'
            });
        });

        $(".submit").click(function () {
            return false;
        });
        $("button.next.action-button").click(function(){
            $(this).parent().prev().addClass("prev-fieldset");
        });

    }; 
    
    function validateForm($this)
    {
        var currentSlide = $this.data('curslide');
        if (currentSlide === 'first') {
            let questionOneValue = $('#trdb:checked').length;
            if (questionOneValue < 1) {
                $('#error_' + currentSlide).text('Please select at least one option to continue.');
                return false;
            }
            var cr_sit = [];
            $.each($("#trdb:checked"), function () {
                cr_sit.push($(this).val());
            });
            cr_sit = cr_sit.join(",");
            $('#current_situation').val(cr_sit);
        } else if (currentSlide === 'second') {
            let questionTwoValue = $('#tax_debt_radio:checked').length;
            if (questionTwoValue < 1) {
                $('#error_' + currentSlide).text('Please select at least one option to continue.');
                return false;
            }
        } else if (currentSlide === 'three') {
            let questionThreeValue = $('#irs_radio:checked').length;
            if (questionThreeValue < 1) {
                $('#error_' + currentSlide).text('Please select at least one option to continue.');
                return false;
            }
        } else if (currentSlide === 'four') {
            let fourError = $('#error_' + currentSlide);
            if ($('#first_name').val() == '') {
                fourError.text('First Name field is required.');
                return false;
            } else if ($('#last_name').val() == '') {
                fourError.text('Last Name field is required.');
                return false;
            } else if ($('#email').val() == '') {
                fourError.text('Email field is required.');
                return false;
            } else if (!isEmail($('#email').val())) {
                fourError.text('Enter a valid email address.');
                return false;
            }
        } else if (currentSlide === 'five') {
            let questionFiveValue = $('#phone_number').length;
            if (questionFiveValue < 1) {
                $('#error_' + currentSlide).text('Please enter phone number.');
                return false;
            }
        }
        return true;
    }
    
    /*Function Calls*/  
    verificationForm ();
})(jQuery);


function isEmail(email) {
    var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    return expr.test(email);
}

window.addDashes = function addDashes(f) {
    var r = /(\D+)/g,
        npa = '',
        nxx = '',
        last4 = '';
    f.value = f.value.replace(r, '');
    npa = f.value.substr(0, 3);
    nxx = f.value.substr(3, 3);
    last4 = f.value.substr(6, 4);
    f.value = npa + '-' + nxx + '-' + last4;
};




// range-slider //
$("document").ready(function() {
  $(".slider").rangeslider();
});
$.fn.rangeslider = function(options) {
  var obj = this;
  var defautValue = obj.attr("value");
  obj.wrap("<span class='range-slider'></span>");
  obj.after("<span class='slider-container'><span class='bar'><span></span></span><span class='bar-btn'><span>0</span></span></span>");
  obj.attr("oninput", "updateSlider(this)");
  updateSlider(this);
  return obj;
};

function updateSlider(passObj) {
  var obj = $(passObj);
  var value = obj.val();
  var min = obj.attr("min");
  var max = obj.attr("max");
  var range = Math.round(max - min);
  var percentage = Math.round((value - min) * 100 / range);
  var nextObj = obj.next();
  nextObj.find("span.bar-btn").css("left", percentage + "%");
  nextObj.find("span.bar > span").css("width", percentage + "%");
  nextObj.find("span.bar-btn > span").text(percentage);
};

// end range-slider //


/*  slider owl */

$(document).ready( function() {
    /* Check width on page load*/
    if ( $(window).width() < 767) {
     $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1,
        nav:true,
        responsive:{
            414:{
                items:1
            },
            568:{
                items:1
            },
            1000:{
                items:5
            }
        }
    })
    }
    else {$('.owl-carousel').owlCarousel('destroy');}
 });
 $(window).resize(function() {
    /*If browser resized, check width again */
    if ( $(window).width() < 767) {
     $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        items:1,
        nav:true,
        responsive:{
            414:{
                items:1
            },
            568:{
                items:1
            },
            1000:{
                items:5
            }
        }
    })
    }
    else {$('.owl-carousel').owlCarousel('destroy');}
 });

/* end  slider owl */



/* work tab slider  */
/*
$(window).resize(function() {

if ( $(window).width() < 575) {

    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#slider').css({ width: slideWidth, height: slideHeight });

    // $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });
}
    else {
        //$('.tab-slider').RemoveAttr('id','slider');
    }
});  
*/

jQuery(document).ready(function ($)
 {

if ( $(window).width() < 575) {

    var slideCount = $('#slider ul li').length;
    var slideWidth = $('#slider ul li').width();
    var slideHeight = $('#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

    $('#slider').css({ width: slideWidth, height: slideHeight });

    // $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });
}
    else {
//        $('.tab-slider').RemoveAttr('id','slider');
        $('#TextBox1').prop('id', '');
    }
});    

/* end work tab slider  */

