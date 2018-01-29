window.onload = function () {

    requestUsersList();
    isBadGuy($('#user').html());
    getUsers();
    $('#all').click(requestUsersList);

};

//carica la lista dei log degli utenti
function requestUsersList() {
    $('#logUsers').empty();
    $.ajax({
        type: 'GET',
        url: '/tweb/fingerprint/getUsersFp',
        dataType: 'json',
        success: function (data) {
            $.each(data, function (i) {
                var block = '<tr>' +
                    '<td>' + data[i].user_id + '</td>' +
                    '<td>' + data[i].ip + '</td>' +
                    '<td>' + data[i].country + '</td>' +
                    '<td>' + data[i].city + '</td>' +
                    '<td>' + data[i].isp + '</td>' +
                    '<td>' + data[i].time_login + '</td>' +
                    '</tr>';
                $('#logUsers').append(block);
            });
        }
    });
}

function requestSelectedUserEvent() {
    var $this = $(this);
    requestSelectedUser($this.attr('id'));
}

function requestSelectedUser(user) {
    $('#logUsers').empty();
    $.ajax({
        type: 'POST',
        url: '/tweb/fingerprint/getSelectedUser',
        data: {user: user},
        dataType: 'json',
        success: function (data) {
            $.each(data, function (i) {

                var block = $('<tr>' +
                    '<td>' + data[i].user_id + '</td>' +
                    '<td>' + data[i].ip + '</td>' +
                    '<td>' + data[i].country + '</td>' +
                    '<td>' + data[i].city + '</td>' +
                    '<td>' + data[i].isp + '</td>' +
                    '<td>' + data[i].time_login + '</td>' +
                    '</tr>');
                $('#logUsers').append(block);
            });
        }, error: function () {
            console.log('errore ');
        }
    });

}

function getUsers() {

    $.ajax({
        type: 'GET',
        url: '/tweb/fingerprint/getUsersFingerprint',
        dataType: 'json',
        beforeSend: function () {
            $("#msg").fadeOut();
        },
        success: function (data) {

            $.each(data, function (i) {

                var id = data[i].user_id;

                block = $(' <i id="' + id + '" class="dropdown-item text-light">' + data[i].user_id + '</i>');
                $('#selectUser').append(block);
                $('#' + id).click(requestSelectedUserEvent);
            });
        },
        error: function () {
            console.log('er');
        }
    });

}