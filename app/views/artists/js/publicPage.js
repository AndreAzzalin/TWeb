window.onload = function () {
  //  loadListArtists();
   // $('#close').click(close);
    getNickname();
    $('#dio').click(mostra);

};

function mostra (){

}

function getNickname(){
    artist= $('#nickname').html();
    $.ajax({
        type: 'POST',
        url: '/tweb/public/artists/setNickname',
        data:{artist:artist},
        success:function (response) {
            console.log(response);
           // alert('inviato'+artist);
            loadGifs('getUploads');

        }
        });
}



function loadGifs(method) {
    artist= $('#nickname').html();
    var split = method.split("get");
    var preBtn = split[1];
    var id = '#gifsUploads';
    var count = '#count' + split[1];

    $.ajax({
        type: 'POST',
        url: '/tweb/public/artists/getArtistGifs',
        data:{artist:artist},
        dataType:'json',
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
                    '                <a href="http://localhost/tweb/public/dashboard#" class="top-right">' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $(id).append($block);

                if (data[i].user === null) {
                    //non è tra i preferiti
                    $('#' + loveBtn).click(loveItEvent);
                    $('#' + loveBtn).addClass('fa-heart-o');
                } else {
                    //è tra i preferiti non permettere di mettere like e riempi il cuore <3
                    $('#' + loveBtn).addClass('fa-heart');
                }

                $(count).html(i + 1);
            });
            initMasonry(id);
        }
    });
}


