

function initMasonry(id) {
    var $grid = $(id + '.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });
}


function close() {
    $('#publicSection').empty();
}


function randomColor() {
    $('#avatar').css('filter', ' hue-rotate(' + Math.floor((Math.random() * 1000) + 10) + 'deg)');
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

