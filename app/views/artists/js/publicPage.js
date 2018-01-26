window.onload = function () {
    randomColor();
    isBadGuy($('#user').html());
    loadGifs('getUploads', $('#user').html());
};


function loadGifs(method, nickname) {
    artist = $('#nickname').html();
    var split = method.split("get");
    var preBtn = split[1];
    var id = '#gifsUploads';
    var count = '#count' + split[1];

    $.ajax({
        type: 'POST',
        url: '/tweb/public/artists/getArtistGifs',
        data: {artist: artist},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i) {

                var loveBtn = preBtn + '_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img  src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '             ' + data[i].title + '\n' +
                    '               </span>\n' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $(id).append($block);

                loadButtons(loveBtn, data[i].user, nickname);

                $(count).html(i + 1);
            });
            initMasonry(id);
        },
        error: function () {
            $("#msg").fadeIn(2000, function () {
                $("#msg").html('<label class="alert alert-success"> Error on Load, retry later... </label>');
            });
            $("#msg").fadeOut(2500);
        }
    });
}


