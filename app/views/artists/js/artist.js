window.onload = function () {
    loadAllGifs();
};

function loadAllGifs() {
    $.ajax({
        type: 'GET',
        url: '/tweb/public/home/memesToJson/',
        dataType: 'json',
        success: function (data) {

            $.each(data, function (i) {
                //       console.log(data);
                var loveBtn = 'loveBtn_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img href="#" src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    //pagina artista
                    '              <a href="./app/uploads/' + src + '.gif">' + data[i].title + ' upload by ' + data[i].owner + ' </a>\n' +
                    '               </span>\n' +
                    '                <a href="http://localhost/tweb/public/home/#" class="top-right">' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $('div.grid').append($block);

                if (data[i].user === null) {
                    //non è tra i preferiti

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