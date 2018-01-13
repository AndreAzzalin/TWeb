
window.onload = function () {
    $('#btn_remove').click(removeUpload);
    $('#btn_add').click(function(){
        $('.file-upload-input').trigger( 'click' )
    });
    $('input[type="file"]').change(function (e) {
        //ritorna il file
        readURL(e.target);
    });


};


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