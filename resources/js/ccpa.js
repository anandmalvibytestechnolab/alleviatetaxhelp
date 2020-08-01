window.$ = window.jQuery = require('jquery');
require('./home');
import parsley from 'parsleyjs';

function validateCcpaForm() {
    const validator = $('#msformx').parsley();

    $('#msformx').on('submit', function(event){
        event.preventDefault();
        if(validator.isValid()){
            const submitButton = $(this).find('button[type="submit"]');
            submitButton.addClass('is-loading');
            submitButton.attr('disabled', 'disabled');
            submitButton.text('Processing...');
            setTimeout(event.target.submit(), 450);
        }
    });

}

validateCcpaForm();