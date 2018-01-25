<?php
include '../app/views/common/top.html';
?>

<title>Category | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <h1><i class="fa fa-folder-open" aria-hidden="true"></i> Category: <span
                id="category"><?= $data['category'] ?></span></h1>
    <div id="msg"></div>


    <div id="category" class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>

</div>


</body>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<script src="../common/js/functions.js"></script>
<script src="../categories/js/categories.js"></script>
</html>



