window.onload = function () {
    requestUsersList();

};

//carica la lista di tutti gli artisti
function requestUsersList() {

    $.ajax({
        type: 'GET',
        url: '/tweb/public/fingerprint/getUsersFp',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i) {

                var artist_id = data[i].nickname;
                var $block = '<tr id=' + artist_id + '><td><h3>' + data[i].user_id + '</h3></td>';
                $('#logUsers').append($block);


            });
        }

        });

}