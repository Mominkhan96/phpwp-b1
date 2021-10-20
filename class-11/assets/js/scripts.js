(function ($, window, document) {
    "use strict";

    $(document).on('submit', '#loginForm', function () {

        let emailAddress = $('#emailAddress').val(),
            password = $('#password').val(),
            formNotice = $('.form-notice');

        formNotice.fadeOut(50);

        if (!$('#exampleCheck1').is(':checked')) {
            formNotice.html('Please checked the policy!').fadeIn();
            return false;
        }

        if (emailAddress.length === 0) {
            formNotice.html('Please add email address!').fadeIn();
            return false;
        }

        if (password.length === 0) {
            formNotice.html('Please enter password!').fadeIn();
            return false;
        }
    });


})(jQuery, window, document);