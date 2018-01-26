window.onload = function () {
    $('#btn_remove').click(removeUpload);
    $('#btn_add').click(function () {
        $('.file-upload-input').trigger('click')
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
                },
                file: {
                    required: true,
                    // minlength: 3
                },
                'cat[]': {
                    required: true,
                    maxlength: 2
                }
            },

        messages:
            {
                title: {
                    required: '<div class="alert alert-warning"> Please enter your title </div>'
                },
                file: {
                    required: '<div class="alert alert-warning"> Please enter your file </div>'
                },
                'cat[]': {
                    required: '<div class="alert alert-warning">You must check at least 1 category </div>',
                    maxlength: '<div class="alert alert-warning">Check no more than {0} boxes </div>'
                }
            },
        submitHandler: submitGif
    });


};

function submitGif() {
    //$("#upload_form").serialize();
    var form = $('#upload_form')[0];
    var data = new FormData(form);

    console.log(data); //
    // console.log($('input[type="file"]').val());


    //funzione che invia e  riceve risposta dal server tramite ajax con metodo post
    $.ajax({
        type: 'POST',
        url: '/tweb/public/upload/getNewGif',
        data: data,
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function () {
            $("#msg").fadeOut();
            $("#btn_upload").html('<i class="fa fa-cog fa-spin fa-fw"></i> &nbsp; Sending ...');
        },
        success: function (response) {
            if (response == 1) {
                $("#msg").fadeIn(1000, function () {
                    $("#msg").html('<label class="alert alert-success"> &nbsp; Upload successfull!</label>');
                    $("#btn_upload").html('Upload image');
                });
            } else {
                $("#msg").fadeIn(1000, function () {
                    $("#msg").html('<label class="alert alert-warning"> &nbsp; '+ response+'</label>');
                    $("#btn_upload").html('Upload image');
                });
            }
           $("#msg").fadeOut(2000);

        },
        error: function () {
            $("#msg").fadeIn(2000, function () {
                $("#msg").html('<label class="alert alert-success"> Error on Upload, retry later... </label>');
            });
            $("#msg").fadeOut(2500);
        }
    });
    //return false;

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