<?php


include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../home/css/home1.css">
<title>HomePage - TWeb</title>
<script>
    $(window).load( function() {

        var $container = $('#container').masonry({
            itemSelector: ".item",
            columnWidth: ".grid-sizer",
            gutter: ".gutter-sizer",
            percentPosition: true

        });

        $container.imagesLoaded().progress( function() {
            $container.masonry('layout');
        });



    });

    $(document).ready(function() {

        $(".item").each(function() {
            var item = $(this);
            var image = item.children('img').attr('src');
            $(item).find('.description p').append('<a href="' + image + '" data-featherlight="image">View Larger</a>');

        });

    });
</script>

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <div class="intro">
        <h1>ALL MEMES</h1>

    </div>

    <div class="gridywrap">
        <div class="gridy-2 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>

            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Bruce Wayne</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-1 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://unsplash.imgix.net/photo-1417722009592-65fa261f5632?q=75&fm=jpg&s=553e7d8a753f4d7b2a4161dcbe9d9801)">&nbsp;</div>

            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Harvey Dent</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-1 gridyhe-2">
            <div class="gridimg" style="background-image: url(https://media.giphy.com/media/3oxHQjMd8ga5xgqdag/giphy.gif)">&nbsp;</div>

            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Clark Kent</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-2 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://media.giphy.com/media/pVQUCfmpSv1Qs/giphy.gif)">&nbsp;</div>

            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Tony Stark</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-1 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1418227165283-1595d13726cd?q=75&fm=jpg&s=cace1590a29be6d4d6db13c3ebd1ba72)">&nbsp;</div>
            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Steve Rogers</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-1 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://unsplash.imgix.net/uploads/1411589183965bdf6e141/5f468e98?q=75&fm=jpg&s=007333c388fb36767cbd152600bea6b8)">&nbsp;</div>
            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-heart-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Natasha Romanoff</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
        <div class="gridy-2 gridyhe-1">
            <div class="gridimg" style="background-image: url(https://ununsplash.imgix.net/photo-1415302199888-384f752645d0?q=75&fm=jpg&s=823bdcc1b7ad955f5180efd352561016)">&nbsp;</div>

            <div class="gridinfo">
                <h3>Item Title</h3>
                <div class="gridmeta">
                    <p class="gridwhen"><i class="fa fa-clock-o"></i> 17:22 17th Feb 2015</p>
                    <p class="gridwho"><i class="fa fa-user"></i> Bruce Wayne</p>
                </div>
                <p class="gridexerpt">Lorem ipsum dolor set amet, some dummy content..</p>
                <a href="#" class="grid-btn grid-more"><span>More</span> <i class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>

</div>



</body>
</html>



