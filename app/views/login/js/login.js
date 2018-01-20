window.onload = function () {

    // uso plugin validator js di jQuery
    $("#login-form").validate({
        errorLabelContainer: $("#msg"),
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
                    required: '<div class="alert alert-warning"> Please enter your password </div>'
                },
                nickname: {
                    required: '<div class="alert alert-warning"> Please enter your email address </div>'
                },
                repass: {
                    required: '<div class="alert alert-warning"> Please enter a secure password </div>',
                    equalTo: '<div class="alert alert-warning"> Please enter the same value again </div>'

                }
            },
        submitHandler: submitForm
    });

    //dividere le funzioni on success on fail...
    function submitForm() {
        var data = $("#login-form").serialize();

        //funzione che invia e  riceve risposta dal server tramite ajax con metodo post
        $.ajax({
            type: 'POST',
            url: '/tweb/public/login/getAction',
            data: data,
            beforeSend: function () {
                $("#msg").fadeOut();
                $("#btn-login").html('<i class="fa fa-cog fa-spin fa-fw"></i> &nbsp; Sending ...');
            },
            success: function (response) {
                if (response === 'signin') {
                    $("#btn-login").html('<i class="fa fa-cog fa-spin fa-fw"></i>&nbsp; Signing In ...');
                    setTimeout('window.location.href = "/tweb/public/home/"; ', 4000);
                } else if (response === 'signup') {
                    $("#msg").fadeIn(4000, function () {
                        $("#msg").html('<div class="alert alert-success"> Registrazione effettuata con successo, ora puoi loggare !</div>');
                        $("#btn-login").html('Sign In');
                    });
                }
                else {
                    $("#msg").fadeIn(1000, function () {
                        $("#msg").html('<label class="alert alert-warning"> &nbsp; ' + response + ' !</label>');
                        $("#btn-login").html('Sign In');
                    });
                    $("#msg").fadeOut(2000);
                }
            }
        });
        return false;
    }


};