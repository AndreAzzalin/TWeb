window.onload = function () {
    $("#btn-login").click(submitForm);

}

/* login submit */
function submitForm() {
    var data = $("#login-form").serialize();
    //  alert(data);

    $.ajax({
        type: 'POST',
        url: '/tweb/public/login/checkLogin',
        data: data,
        beforeSend: function () {
            $("#error").fadeOut();
            $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success: function (response) {
            if (response === "ok") {
                $("#btn-login").html('Signing In ...');
                setTimeout('window.location.href = "/tweb/public/home"; ', 4000);
            }
            else {

                $("#error").fadeIn(1000, function () {
                    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; ' + response + ' !</div>');
                    $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                });
            }
        }
    });
    return false;
}


