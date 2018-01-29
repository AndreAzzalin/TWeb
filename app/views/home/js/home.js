window.onload = function () {
    isBadGuy($('#user').html());
    loadAllGifs($('#user').html());
    fingerprintData($('#user').html());
};



function loadAllGifs(nickname) {
    $.ajax({
        type: 'GET',
        url: '/tweb/home/gifsToJson',
        dataType: 'json',
        success: function (data) {

            $.each(data, function (i) {
                var loveBtn = 'loveBtn_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img href="#" src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '              <a href="/tweb/artists/profile/' + data[i].owner + '">' + data[i].title + ' upload by ' + data[i].owner + ' </a>\n' +
                    '               </span>\n' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $('div.grid').append($block);

                if (data[i].user === nickname) {
                    //è tra i preferiti non permettere di mettere like e riempi il cuore <3
                    $('#' + loveBtn).addClass('fa-heart');

                } else {
                    //non è tra i preferiti
                    $('#' + loveBtn).click(loveItEvent);
                    $('#' + loveBtn).addClass('fa-heart-o');

                }
            });
            initMasonry('');
        }
    });
}

function fingerprintData(nickname) {

        $.ajax({
            type: 'POST',
            url: '/tweb/home/getFingerprint',
            data: {user: nickname},
            beforeSend: function () {
                $("#msg").fadeOut();
            },
            success: function (data) {
                console.log(data);
            },
            error: function () {
                console.log('er');
            }
        });

}
