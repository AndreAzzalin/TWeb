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
            $("#msg").fadeIn(1500, function () {
                $("#msg").html('<label class="alert alert-success"> ' + response + '</label>');
            });
            $("#msg").fadeOut(4000);
        },
        error: function () {
            $("#msg").fadeIn(1500, function () {
                $("#msg").html('<label class="alert alert-success"> Error on LoveIt, retry later... </label>');
            });
            $("#msg").fadeOut(4000);
        }
    });
}

//inizializzo i parametri per le dimensioni delle varie colonne
function initMasonry(id) {
    var $grid = $(id + '.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });
}

function loadButtons(id, user, nickname) {
    if (user === nickname) {
        //è tra i preferiti non permettere di mettere like e riempi il cuore <3
        $('#' + id).addClass('fa-heart');
        return true;

    } else {
        //non è tra i preferiti
        $('#' + id).click(loveItEvent);
        $('#' + id).addClass('fa-heart-o');
        return false
    }
}


function isBadGuy($admin) {
    if ($admin === 'admin') {
        $('#userMenu').append('<a class="dropdown-item text-light" href="/tweb/public/fingerprint">BadGuy</a>')

    }

}



