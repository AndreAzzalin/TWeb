window.onload = function () {
    isBadGuy($('#user').html());
    randomColor();
    loadGifs('getFav');
    loadGifs('getUploads');
};


/****************** PAGINA PRIVATA ********************/

function deleteItEvent() {
    var $this = $(this);
    deleteIt($this.attr('id'));

    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    });
    $grid.on('click', '.grid-item', function (event) {
        // remove item
        $grid.masonry('remove', event.currentTarget)
        // trigger layout
            .masonry();
    });

}

function deleteIt(id) {
    initMasonry(id);
    var info = id.split("_");

    var method = info[0];
    var gif_id = info[1];

    $('#count' + method).html($('#count' + method).html() - 1);


    $.ajax({
        type: 'POST',
        url: '/tweb/public/dashboard/delete' + method + 'Gif',
        data: {id: gif_id},
        beforeSend: function () {
            $("#msg").fadeOut();
        },
        success: function (response) {
            $("#msg").fadeIn(1000, function () {
                $("#msg").html('<label class="alert alert-success"> ' + response + '</label>');
            });
           $("#msg").fadeOut(2500);

        },
        error: function () {
            $("#msg").fadeIn(2000, function () {
                $("#msg").html('<label class="alert alert-success"> Error on Delete, retry later... </label>');
            });
            $("#msg").fadeOut(2500);
        }

    });
}
