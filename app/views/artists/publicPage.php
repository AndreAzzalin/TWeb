<?php


include '../app/views/common/top.html';
?>
<title><?= $data['nickname'] ?> | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">

    <h1>Explore <span id="nickname"><?= $data['nickname'] ?></span>'s GIFs</h1>

    <div id="msg"></div>

    <div class="info-box">
        <div class="row">
            <div class="col-md-6 col-sx-6 ">
                <img id="avatar" src="/tweb/app/uploads/2018-01-20_13-45-04_uploadBy_a.gif">
            </div>
            <div class="col-md-6 col-sx-6 ">
                <p>
                <h1>
                    GIFs Uploaded:<span id="countUploads">0</span>
                </h1>
                <a href="http://localhost/tweb/public/artists" id="return" class="btn btn-success btn-shadow btn-lg">Return to artists</a>
                </p>
            </div>

        </div>
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
<script src="../artists/js/publicPage.js"></script>
<script src="../common/js/functions.js"></script>
</html>







