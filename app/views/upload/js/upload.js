
window.onload = function () {
    $('#btn_remove').click(removeUpload);
    $('#btn_add').click(function(){
        $('.file-upload-input').trigger( 'click' )
    });
    $('input[type="file"]').change(function (e) {
        //ritorna il file
        readURL(e.target);
    });

    $("#upload_form").validate({
        errorLabelContainer: $("#msg"),
        rules:
            {
                title: {
                    required: true,
                    // minlength: 3
                } },

        messages:
            {
                title: {
                    required: '<div class="alert alert-warning"> Please enter your title </div>'
                }

            },
        submitHandler: submitGif
    });


};

function submitGif(){
    var data = $("#upload_form").serialize();
    $('input[type="file"]').val();
    console.log(data);console.log($('input[type="file"]').val());

    //funzione che invia e  riceve risposta dal server tramite ajax con metodo post
    $.ajax({
        type: 'POST',
        url: '/tweb/public/login/getAction',
        data: data,
        beforeSend: function () {
            $("#msg").fadeOut();
        },
        success: alert(data)
    });
    return false;

}


function readURL(input) {
    // var input = $(this);
    if (input.files && input.files[0]) {
        //aggiungere controlli sul file

        var reader = new FileReader();

        reader.onload = function (e) {
            $('.image-upload-wrap').hide();
            $('.file-upload-image').attr('src', e.target.result);
            $('.file-upload-content').show();

            $('.image-title').html(input.files[0].name);
        };


        return reader.readAsDataURL(input.files[0]);

    } else {
        removeUpload();
    }
}


//quando clicco su pulsante rimuovi img
function removeUpload() {

    $('.file-upload-input').replaceWith($('.file-upload-input'));
    $('.file-upload-content').hide();
    $('.image-upload-wrap').removeClass('image-dropping');
    $('.image-upload-wrap').show();
}

$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});
$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');

});