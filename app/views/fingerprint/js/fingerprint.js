window.onload = function () {
    requestUsersList();
    isBadGuy($('#user').html());
};

//carica la lista dei log degli utenti
function requestUsersList() {

    $.ajax({
        type: 'GET',
        url: '/tweb/public/fingerprint/getUsersFp',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data, function (i) {
                var artist_id = data[i].nickname;
                var $block = '<tr id=' + artist_id + '>' +
                    '<td>' + data[i].user_id + '</td>' +
                    '<td>' + data[i].ip + '</td>' +
                    '<td>' + data[i].country + '</td>' +
                    '<td>' + data[i].city + '</td>' +
                    '<td>' + data[i].isp + '</td>' +
                    '<td>' + data[i].time_login + '</td>' +
                    '</tr>';
                $('#logUsers').append($block);
            });
        }

        });

}