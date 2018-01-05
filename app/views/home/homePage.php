<?php


include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../home/css/home.css">
<title>HomePage - TWeb</title>
<script>
    $(document).ready(function () {
        $("[rel='tooltip']").tooltip();

        $('.thumbnail').hover(
            function () {
                $(this).find('.caption').fadeIn(250); //.fadeIn(250)
            },
            function () {
                $(this).find('.caption').fadeOut(250); //.fadeOut(205)
            }
        );
    });
</script>

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="hovereffect">
            <img class="img-responsive" src="https://media.giphy.com/media/3og0INyCmHlNylks9O/giphy.gif" alt="">
            <div class="overlay">
                <h2>Titolo</h2>

                <p class="icon-links">
                    #ctegory 1,2,3
                    <a href="#">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-instagram"></span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>



