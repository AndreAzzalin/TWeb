window.onload = function () {
    loadAll();
};

function loadAll() {

    $.ajax({
        type: 'GET',
        url: 'package.json',
        dataType: 'json',
        success: function (data) {


            $.each(data, function (i) {
                var loveBtn = 'loveBtn_' + data[i].titolo;
                var $block = $(' <div class="grid-item">\n' +
                    '            <img href="#" src="' + data[i].src + '" />\n' +
                    '            <div class="grid-item-color">\n' +
                    '                <span class="bottom-left">\n' +
                    '              <a href="homePage.php">' + data[i].titolo + ' </a>\n' +
                    '               </span>\n' +
                    '                <a href="http://localhost/tweb/public/home/#" class="top-right">' +
                    '                <i id="' + loveBtn + '" class="top-right fa fa-heart-o fa-3x"></i></a>\n' +
                    '            </div>\n' +
                    '        </div>');
                //var $Block = $(block);
                //$('grid').append(' <div class="grid-item"> <img href="#" src="' + data[i].src + '" /> <div class="grid-item-color"><span class="bottom-left"> <a href="homePage.php">' + data[i].titolo + ' </a> </span>  <a href="homePage.php" class="top-right"><i class="fa fa-heart-o fa-3x"></i></a></div> </div> ');
                $('div.grid').append($block);
                // $('.grid').masonry('appended',block);
                // $('.grid')
                console.log(loveBtn);
                $('#' + loveBtn).click(pin);
            });
            initMasonry();
        }
    });
}

function pin() {
    var $this = $(this);
    if ($this.hasClass('fa-heart-o')) {
        $($this).removeClass('fa-heart-o');
        $($this).addClass('fa-heart');
        $("#msg").fadeIn(1000, function () {
            $("#msg").html('<label class="alert alert-warning"> u love it, see all in your account page</label>');
        });
        $("#msg").fadeOut(2500);

    } else {
        $($this).removeClass('fa-heart');
        $($this).addClass('fa-heart-o');

    }


}

function initMasonry() {
    var $grid = $('.grid').masonry({
        itemSelector: '.grid-item',
        percentPosition: true,
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer'
    });
    $grid.imagesLoaded().progress(function () {
        $grid.masonry();
    });

}