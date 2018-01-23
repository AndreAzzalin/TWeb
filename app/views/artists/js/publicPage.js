window.onload = function () {
    loadListArtists();

    $('#close').click(close);
};


function loadListArtists() {

    $.ajax({
        type: 'GET',
        url: '/tweb/public/artists/getArtistsList',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i) {


                var artist_id = data[i].nickname;

                var $block = $('<tr id="' + artist_id + '"><td><h3>' + artist_id + '</h3></td></tr>');

                $('#artistsList').append($block);

                $('#' + artist_id).click(function () {
                    window.location.replace('http://localhost/tweb/public/artists/' + artist_id);
                    //  $('#art2').addClass('hover');
                });
            });
        }
    });
}

function loadGifs(method) {

    var split = method.split("get");
    var preBtn = split[1];
    var id = '#gifs' + split[1];
    var count = '#count' + split[1];

    $.ajax({
        type: 'GET',
        url: '/tweb/public/dashboard/' + method,
        dataType: 'json',
        success: function (data) {
            $.each(data, function (i) {
                //       console.log(data);
                var btn_id = preBtn + '_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img  src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '             ' + data[i].title + '\n' +
                    '               </span>\n' +
                    '                <a href="http://localhost/tweb/public/dashboard#" class="top-right">' +
                    '                <i id="' + btn_id + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $(id).append($block);

                $('#' + btn_id).addClass('fa fa-times');
                $('#' + btn_id).click(deleteItEvent);

                $(count).html(i + 1);
            });
            initMasonry(id);
        }
    });
}
