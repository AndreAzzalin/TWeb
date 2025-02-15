window.onload = function () {

    // uso plugin validator js di jQuery
    $("#login-form").validate({
        errorLabelContainer: $("#msg"),
        rules:
            {
                nickname: {
                    required: true,
                    minlength: 4
                },
                password: {
                    required: true,
                    minlength: 6
                },
                repass: {
                    required: function () {
                        return $('#signup').is(':checked')
                    },
                    equalTo: {
                        param: '#pass',
                        depends: function (element) {
                            return $('#signup').is(':checked');
                        }
                    }
                }
            },
        messages:
            {
                password: {
                    required: '<div class="alert alert-warning"> Please enter your password </div>',
                    minlength: '<div class="alert alert-warning"> Please enter at least 6 characters </div>'

                },
                nickname: {
                    required: '<div class="alert alert-warning"> Please enter your email address </div>',
                    minlength: '<div class="alert alert-warning"> Please enter at least 4 characters </div>'
                },
                repass: {
                    required: '<div class="alert alert-warning"> Please enter a secure password </div>',
                    equalTo: '<div class="alert alert-warning"> Please enter the same value again </div>'

                },

            },
        submitHandler: submitForm
    });


    function submitForm() {
        var data = $("#login-form").serialize();

        //funzione che invia e  riceve risposta dal server tramite ajax con metodo post
        $.ajax({
            type: 'POST',
            url: '/tweb/login/getAction',
            data: data,
            beforeSend: function () {
                $("#msg").fadeOut();
                $("#btn-login").html('<i class="fa fa-cog fa-spin fa-fw"></i> &nbsp; Sending ...');
            },
            success: function (response) {
                if (response === 'signin') {
                    $("#btn-login").html('<i class="fa fa-cog fa-spin fa-fw"></i>&nbsp; Signing In ...');
                    setTimeout('window.location.href = "/tweb/home/"; ', 4000);
                } else if (response === 'signup') {
                    $("#msg").fadeIn(4000, function () {
                        $("#msg").html('<div class="alert alert-success">Registration successfully! click signIn tab for login !</div>');
                        $("#btn-login").html(' <span><br>Sign in <br>Signup </span>');
                    });
                }
                else {
                    $("#msg").fadeIn(1000, function () {
                        $("#msg").html('<label class="alert alert-warning"> &nbsp; ' + response + ' !</label>');
                        $("#btn-login").html('Sign In');
                    });
                    $("#msg").fadeOut(3000);
                }
                $("#msg").fadeOut(3000);
            },
            error: function () {
                $("#msg").fadeIn(2000, function () {
                    $("#msg").html('<label class="alert alert-success"> Error on Sign In/Up, retry later... </label>');
                });
                $("#msg").fadeOut(2500);
            }
        });
        return false;
    }
};