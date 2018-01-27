<?php


include '../app/views/common/top.html';
?>
<title>Private | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">

    <h1><i class="fa fa-user-circle" aria-hidden="true"></i> Explore <span><?php if (isset($_SESSION['User'])) {
                echo $_SESSION['User'];
            } else {
                echo 'User';
            } ?></span>'s GIFs</h1>

    <div id="msg"></div>

    <div class="info-box">
        <div class="row">
            <div class="col-md-6 col-sx-6 ">
                <img id="avatar" src="/tweb/app/uploads/2018-01-20_13-45-04_uploadBy_a.gif" alt="">
            </div>
            <div class="col-md-6 col-sx-6 ">
                <p></p>
                <h1>
                    GIFs Uploaded:<span id="countUploads">0</span>
                </h1>

                <h1>
                    GIFs Favorited: <span id="countFav">0</span>
                </h1>

                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/dashboard#favorited">Go to favorite</a>
                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/dashboard#uploaded"> Go to Upload</a>

                <p></p>
            </div>

        </div>
    </div>
    <hr>
    <h1 id="favorited">
        <i class="fa fa-heart" aria-hidden="true"></i> Favorited GIFs
    </h1>

    <div id="gifsFav" class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>

    <hr>
    <h1 id="uploaded">
        <i class="fa fa-upload" aria-hidden="true"></i> Uploaded GIFs
    </h1>

    <div id="gifsUploads" class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>
</div>


</body>
<script src="../artists/js/artistFunctions.js"></script>
<script src="../common/js/functions.js"></script>
<script src="../artists/js/privatePage.js"></script>

</html>



