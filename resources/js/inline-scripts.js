$("#slider").slider({
    min: 0,
    max: 100000,
    step: 1,
    slide: function(event, ui) {
        $(".price-picker").text(displayText[ui.value]);
        $("#price-picker_s").val(displayText[ui.value]);
        $("#tax_debt").val(taxVal[ui.value]);
    },
    create: function(event, ui) {
        $(this).slider('value', '500');
    }
});
$("#slider").scroll(function()
{

});


/////////////////
$(document).on('input', '#customRange2', function() {
    var selectedValue = $(this).val();
    document.querySelector('.price-picker').innerText = `$${selectedValue}`;
    document.querySelector('#price-picker_s').setAttribute('value', selectedValue);
    console.log(selectedValue);
});


$(document).ready(function()
{
    $('#contact').click(function()
    {
        event.preventDefault();
        $('#myModal').addClass('in');
        $('#myModal').show();
        $("#myModal").css({ opacity: 1 });
        $('.modal-dialog').css('margin-top', '150px');
    });

    $('.close_btn').click(function()
    {
        $('#myModal').hide();
    });

});

$(document).ready(function()
{

    $('.next_s').click(function()
    {
        var val = $(this).attr('data-value');
        var vals = $(this).attr('data-last');
        var value = $(this).attr('data-id');
        if(val == 'second_slide' || val == 'forth_slide')
        {

            if($('#'+vals+ ' input[type=checkbox]:checked').length >= 1 || $('#'+vals+ ' input[type=radio]:checked').length >= 1)
            {
                if($('#other').prop("checked") == true && $('#others').val() == '')
                {
                    $('#message_validate').text('Other Field required');
                    $('#others').css('border', '2px solid #ff6000');
                }
                else
                {
                    $('.field_set').hide();
                    $('#'+val).show();
                    var value_n = value - 3;
                    $('.progre_s span').text(value + '%');
                    $('.progress-bar_new').css('width',value + '%');
                    $('.progre_s span').css('margin-left', value_n + '%');
                    $('#message_validate').text('');
                }
            }
            else
            {
                $('#message_validate').text('Please check at least one option.');
            }
        }
        else if(val == 'fifth_slide')
        {
            if($('#'+vals+ ' input[type=checkbox]:checked').length >= 1 || $('#'+vals+ ' input[type=radio]:checked').length >= 1)
            {
                $('.field_set').hide();
                $('#'+val).show();
                //var value_n = value - 3;
                var value_n = value - 100;
                $('.progre_s span').css('margin-left', value_n + '%');
                $('.progre_s span').text(value + '%');
                $('.progress-bar_new').css('width',value + '%');
                $('.progre_s').css('text-align', 'right');

                $('.progress-bar_new').addClass('prog_success');
                $('#message_validate').text('');
            }
            else
            {
                $('#message_validate').text('Please check one option.');
            }
        }
        else if(val == 'third_slide')
        {
            $('.field_set').hide();
            $('#'+val).show();
            var value_n = value - 3;
            $('.progre_s span').text(value + '%');
            $('.progress-bar_new').css('width',value + '%');
            $('.progre_s span').css('margin-left', value_n + '%');
        }
        else if(val == 'sixth_slide')
        {
            var first_name = $("#first_name").val();
            var last_name = $("#last_name").val();
            var Zip = $("#Zip").val();
            var states = $("#states").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            if(first_name == '')
            {
                $('#messag_validate').text('First Name field is required.');
            }
            else if(last_name =='')
            {
                $('#messag_validate').text('Last Name field is required.');
            }
            else if(email =='')
            {
                $('#messag_validate').text('Email field is required.');
            }
            else if(IsEmail(email) == false)
            {
                $('#messag_validate').text('Enter a valid email address.');
            }
            else if(phone =='')
            {
                $('#messag_validate').text('Phone Number field is required.');
            }else if(states =='')
            {
                $('#messag_validate').text('States  field is required.');
            }
            else if(Zip =='')
            {
                $('#messag_validate').text('Zip  field is required.');
            }

            else
            {
                $('.field_set').hide();
                $('#'+val).show();
                $('#progress_tab').hide();
                $('.progre_s').hide();
                $('#messag_validate').text('');
                var  tax_debt = $("#price-picker_s").val();
                if (tax_debt =='UNDER $7,500') {
                    document.getElementById('price-picker_s').value = '5000';
                } else if (tax_debt =='$7,500 - $9,999') {

                    document.getElementById('price-picker_s').value = '7500';

                } else if (tax_debt =='$7,500 - $9,999') {

                    document.getElementById('price-picker_s').value = '7500';

                } else if (tax_debt =='$10,000 - $19,999') {

                    document.getElementById('price-picker_s').value = '10000';

                } else if (tax_debt =='$20,000 - $49,999') {

                    document.getElementById('price-picker_s').value = '20000';

                } else if (tax_debt =='$50,000 - $99,999') {price-picker_s

                    document.getElementById('price-picker_s').value = '50000';

                } else if (tax_debt =='$100,000 OR MORE') {

                    document.getElementById('price-picker_s').value = '100000';

                };

                var str_phone = document.getElementById("phone").value;
                //var res_phone = str_phone.replace("-", "");
                var res_phone = str_phone.replace(/-/g, '');
                var current_phone= res_phone;
                document.getElementById('phone').value = current_phone;
                $('#msform').submit();
                //$.ajax({
                //   type: 'post',
                //   url: 'mailsent.cfm',
                //   data : $('#msform').serialize(),
                //  success: function(response)
                //    {
                //alert(response);
                //  }
                //});

            }
        }
    });
});

function IsEmail(email)
{
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email))
    {
        return false;
    }
    else
    {
        return true;
    }
}
function phone_number(phone)
{
    var regex = /([0-9]{10})|(\([0-9]{3}\)\s+[0-9]{3}\-[0-9]{4})/;
    if(!regex.test(phone))
    {
        return false;
    }
    else
    {
        return true;
    }
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
}


///////////////////////////////////////
var owl = $('.owl-carousel');
owl.owlCarousel({
    margin: 10,
    loop: false,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 1
        },
        1000: {
            items: 2
        },
        1200: {
            items: 3
        }
    }
})



////////////////////////////////////////////
$(document).ready(function(){
    $('#btn_first').on('click',function(){
        var cr_sit = [];
        $.each($("input[name='current_sit']:checked"), function(){
            cr_sit.push($(this).val());
        });
        cr_sit = cr_sit.join(",");
        console.log(cr_sit);
        $('#current_situation').val(cr_sit);
    });
});
