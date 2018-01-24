window.onload = function () {
    loadListArtists();

};

//carica la lista di tutti gli artisti
function loadListArtists() {

    $.ajax({
        type: 'GET',
        url: '/tweb/public/artists/getArtistsList',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i) {

                var artist_id = data[i].nickname;
                var $block = $('<tr id=' + artist_id + '><td><h3>' + artist_id + '</h3></td></tr>');

                $('#artistsList').append($block);

                $('#' + artist_id).click(function(){
                        window.location='/tweb/public/artists/profile/'+artist_id;
                    }
                );
            });
        }
    });
}