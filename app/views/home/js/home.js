window.onload = function () {
    loadAllGifs();
};


function initMasonry() {
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });
}

function loadAllGifs() {
    $.ajax({
        type: 'GET',
        url: '/tweb/public/home/gifsToJson',
        dataType: 'json',
        success: function (data) {

            $.each(data, function (i) {
                var loveBtn = 'loveBtn_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img href="#" src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '              <a href="/tweb/public/artists/profile/'+data[i].owner+'">' + data[i].title + ' upload by ' + data[i].owner + ' </a>\n' +
                    '               </span>\n' +
                    '                <a href="http://localhost/tweb/public/home#" class="top-right">' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $('div.grid').append($block);

                if (data[i].user === null) {
                    //non è tra i preferiti
                    $('#' + loveBtn).click(loveItEvent);
                    $('#' + loveBtn).addClass('fa-heart-o');
                } else {
                    //è tra i preferiti non permettere di mettere like e riempi il cuore <3
                    $('#' + loveBtn).addClass('fa-heart');
                }
            });
            initMasonry();
        }
    });
}

function loveItEvent() {
    var $this = $(this);
    if ($this.hasClass('fa-heart-o')) {
        //chiedo al controller di aggiungere la gif nei preferiti
        loveIt($this.attr('id'));
        $($this).removeClass('fa-heart-o');
        $($this).addClass('fa-heart');

    } else {
        $('#' + loveBtn).off('click');
    }
}

//funzione che invia tramite ajax richiesta al server di aggiongerre l'immagine x tra i preferiti dell'utente $_SESSION['User']
function loveIt(id) {
  //  var id = id.substring(id.indexOf("_") + 1);
    var info = id.split("_");
    id = info[1];

    $.ajax({
        type: 'POST',
        url: '/tweb/public/home/favGif',
        data: {id: id},
        beforeSend: function () {
            $("#msg").fadeOut();
        },
        success: function (response) {
            $("#msg").fadeIn(2000, function () {
                $("#msg").html('<label class="alert alert-success"> ' + response + '</label>');
            });
            $("#msg").fadeOut(2500);

        }
    });
}
