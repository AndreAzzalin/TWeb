<?php


include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">
<title>HomePage - TWeb</title>


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>





</head>

<style>body {
        background: #333;
    }

    #dropzone {
        position: relative;
        border: 10px dotted #FFF;
        border-radius: 20px;
        color: white;
        font: bold 24px/200px arial;
        height: 200px;
        margin: 30px auto;
        text-align: center;
        width: 200px;
    }

    #dropzone.hover {
        border: 10px solid #FE5;
        color: #FE5;
    }

    #dropzone.dropped {
        background: #222;
        border: 10px solid #444;
    }

    #dropzone div {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    #dropzone img {
        border-radius: 10px;
        vertical-align: middle;
        max-width: 95%;
        max-height: 95%;
    }

    #dropzone [type="file"] {
        cursor: pointer;
        position: absolute;
        opacity: 0;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }</style>

<?php
include '../app/views/common/nav.php';
?>



<!--<button id="ajax" name="btn-login" class="btn btn-warning btn-shadow" type='submit'>ajax</button>-->

<div class="container">
    <h1>UPLOAD</h1>

    <div id="dropzone">
        <div>dropzone</div>
        <input type="file" accept="image/gif, application/pdf" />
    </div>

   </div>

</body>

<script>
    $(function() {

    $('#dropzone').on('dragover', function() {
    $(this).addClass('hover');
    });

    $('#dropzone').on('dragleave', function() {
    $(this).removeClass('hover');
    });

    $('#dropzone input').on('change', function(e) {
    var file = this.files[0];

    $('#dropzone').removeClass('hover');

    if (this.accept && $.inArray(file.type, this.accept.split(/, ?/)) == -1) {
    return alert('File type not allowed.');
    }

    $('#dropzone').addClass('dropped');
    $('#dropzone img').remove();

    if ((/^image\/(gif|png|jpeg)$/i).test(file.type)) {
    var reader = new FileReader(file);

    reader.readAsDataURL(file);

    reader.onload = function(e) {
    var data = e.target.result,
    $img = $('<img />').attr('src', data).fadeIn();

    $('#dropzone div').html($img);
    };
    } else {
    var ext = file.name.split('.').pop();

    $('#dropzone div').html(ext);
    }
    });
    });
</script>
</html>



