<?php
include 'app/views/common/top.html';
?>
<title><?= $data['nickname'] ?> | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include 'app/views/common/nav.php';
?>

<div class="container">

    <h1>Explore <span id="nickname"><?= $data['nickname'] ?></span>'s GIFs</h1>

    <div id="msg"></div>

    <div class="info-box">
        <div class="row">
            <div class="col-md-6 col-sx-6 ">
                <img id="avatar" src="../common/images/avatar.gif" alt="avatar" >
            </div>
            <div class="col-md-6 col-sx-6 ">
                <p> </p>
                <h1>
                    GIFs Uploaded:<span id="countUploads">0</span>
                </h1>
                <a href="http://localhost/tweb/artists" id="return" class="btn btn-success btn-shadow btn-lg">Return to
                    artists</a>

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

<script src="../artists/js/artistFunctions.js"></script>
<script src="../artists/js/publicPage.js"></script>
<script src="../common/js/functions.js"></script>
</body>
</html>







