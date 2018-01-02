window.onload = function () {
    $("#btn-login").click(submitForm);
}

/* login submit */
function submitForm() {
    var data = $("#login-form").serialize();

    //invio i dati al controller che li recupera tramire $_POST[]
    $.ajax({
        type: 'POST',
        url: '/tweb/public/login/getAction',
        data: data,
        beforeSend: function () {
            $("#error").fadeOut();
            $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span>  Sending ...');
        },
        success: function (response) {
            if (response === 'ok') {
                $("#btn-login").html('Signing In ...');
                setTimeout('window.location.href = "/tweb/public/home/"+$("#email").val(); ', 4000);
            }
            else {
                $("#error").fadeIn(1000, function () {
                    $("#error").html('<div class="alert alert-warning"> <span class=""></span> &nbsp; ' + response + ' !</div>');
                    $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                });
              //  $("#error").fadeOut(2000);
            }
        }
    });
    return false;
}


