<?php


include '../app/views/common/top.html';
?>
<title>HomePage - TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

</head>

<style>

    #avatar {
        -webkit-filter: brightness(30%) sepia(100%);
        filter: hue-rotate(500deg);
        background-color: #32334a;
    }

    span {
        color: #1FB264;
    }

    .info-box {
        background-color: #32334a;

    }

    p {
        padding-top: 20px;
    }

    hr {
        height: 5px;

        background: #e4e2ff;

    }

</style>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">

    <h1>Explore <span><?php if (isset($_SESSION['User'])) {
                echo $_SESSION['User'];
            } else {
                echo 'User';
            } ?> </span>GIFs</h1>


    <div class="info-box">
        <div class="row">
            <div class="col-md-6 col-sx-6 ">
                <img id="avatar" src="/tweb/app/uploads/2018-01-20_13-45-04_uploadBy_a.gif">
            </div>
            <div class="col-md-6 col-sx-6 ">
                <p>
                <h1>
                    GIFs Uploaded: 35
                </h1>

                <h1>
                    GIFs Favorited: 35
                </h1>

                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/artists/#favorited">Go to favorite</a>
                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/artists/#uploaded"> Go to Upload</a>

                </p>
            </div>

        </div>
    </div>
    <hr>
    <h1 id="favorited">
        <i class="fa fa-heart" aria-hidden="true"></i>&nbsp Favorited GIFs
    </h1>

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>

    <hr>
    <h1 id="uploaded">
        <i class="fa fa-upload" aria-hidden="true"></i>&nbsp Uploeaded GIFs
    </h1>

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>
</div>


</body>
<script src="../artists/js/artist.js"></script>
</html>



