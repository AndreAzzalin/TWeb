window.onload = function () {
    category = $('#categoryId').html();
    nickname = $('#user').html();
    loadCategory(category, nickname, 'div.grid');
    isBadGuy($('#user').html());
};


function loadCategory(category, nickname, id) {

    $.ajax({
        type: 'POST',
        url: '/tweb/public/categories/requestCategory',
        data: {category: category, nickname: nickname},
        dataType: 'json',
        success: function (data) {
            $.each(data, function (i) {
                var loveBtn = 'loveBtn_' + data[i].id;
                var src = "/tweb/app/uploads/" + data[i].src + ".gif";

                var $block = $(' <div class="grid-item">\n' +
                    '            <img href="#" src="' + src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '              <a href="/tweb/public/artists/profile/' + data[i].owner + '">' + data[i].title + ' upload by ' + data[i].owner + ' </a>\n' +
                    '               </span>\n' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');

                $(id).append($block);

                console.log(data);
                loadButtons(loveBtn, data[i].user, nickname);
            });
            initMasonry(id);
        }
    });
}
