
(function ($) {
    "use strict";


    /*==================================================================
   [ Focus input ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }
        if(check == true) {
            var email = $('.validate-input .input100[name="email"]').val().trim()
            var password = $('.validate-input .input100[name="password"]').val().trim()
            validateLogin(email, password)
        }
        return false;
        // return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                $(input).parent().attr("data-validate", "Email không đúng định dạng")
                return false;
            }
        }
        else {
            if ($(input).val().trim() == '') {
                $(input).parent().attr("data-validate", "Trường này không được để trống")
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    function validateLogin(email, password) {
        var form_data = new FormData();
        // var email = 'kimtheanh1208@gmail.com'
        // var password = '123456'
       
        form_data.append('email', email)
        form_data.append('password', password)

        $.ajax({
            url: "../api/main.php?act=loginAdmin", //Server api to receive the file
            type: "POST",
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            success: function (suc) {
                var check = JSON.parse(suc)
                if(check) {
                    location.reload();
                } else {
                    toast({
                        title: "Thất bại!",
                        message: "Tài khoản không đúng",
                        type: "error",
                        duration: 5000
                    });
                }
            }
        });
        
    }




})(jQuery);