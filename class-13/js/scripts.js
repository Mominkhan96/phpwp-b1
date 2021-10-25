(function ($, window, document) {
    "use strict";

    $(document).on('submit', '#loginForm', function () {

        let fullName = $('#fullName').val();
        let emailAddress = $('#emailAddress').val();
        let password = $('#password').val();
        let phoneNumber = $('#phoneNumber').val();
        let formNotice = $('.form-notice');

        formNotice.fadeOut(50);

        if (fullName.length === 0) {
            formNotice.html('Please enter your full name!').fadeIn();
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
        if (phoneNumber.length === 0) {
            formNotice.html('Please enter phone number!').fadeIn();
            return false;
        }

    });

})(jQuery, window, document);