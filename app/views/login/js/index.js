window.onload = function () {

// $("#btn-login").click(submitForm);
    $("#login-form").validate({
        errorLabelContainer: $("#error"),
        rules:
            {
                nickname: {
                    required: true,
                    // minlength: 3
                },
                password: {
                    required: true,
                    //minlength:6;
                    maxlength: 10
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
                    required: '<div class="alert alert-warning"> please enter your password </div>'
                },
                nickname: {
                    required: '<div class="alert alert-warning"> please enter your email address </div>'
                }
            },
        submitHandler: submitForm
    });
    /* validation */


    /* login submit */
    function submitForm() {
        var data = $("#login-form").serialize();

        //funzione che invia e  riceve risposta dal server tramite ajax con metodo post
        $.ajax({
            type: 'POST',
            url: '/tweb/public/login/getAction',
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $("#btn-login").html('<i class="glyphicon glyphicon-transfer"></i>  Sending ...');
            },
            success: function (response) {
                if (response === 'signin') {
                    $("#btn-login").html('Signing In ...');
                    setTimeout('window.location.href = "/tweb/public/home/"+$("#nickname").val(); ', 4000);
                } else if (response === 'signup') {
                    $("#error").fadeIn(4000, function () {
                        $("#error").html('<div class="alert alert-success"> Registrazione effettuata con successo, ora puoi loggare !</div>');
                        $("#btn-login").html('<i class="glyphicon glyphicon-log-in"></i> &nbsp; Sign In');
                    });
                }
                else {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html('<label class="alert alert-warning"> &nbsp; ' + response + ' !</label>');
                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                    });
                    // $("#error").fadeOut(2000);
                }
            }
        });
        return false;
    }


};