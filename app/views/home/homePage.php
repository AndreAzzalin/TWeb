<?php
include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../home/css/home.css">
<title>HomePage - TWeb</title>


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>




</head>

<?php
include '../app/views/common/nav.php';
?>

<!--<button id="ajax" name="btn-login" class="btn btn-warning btn-shadow" type='submit'>ajax</button>-->

<div class="container">
    <h1><i class="fa fa-picture-o" aria-hidden="true"></i> ALL MEMES</h1>

    <div id="msg"></div>

    <div class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
         </div>
    </div>
</div>

</body>
<script src="../home/js/home.js"></script>
</html>



