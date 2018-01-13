<?php


include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../upload/css/upload.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/min/dropzone.min.css">
<title>HomePage - TWeb</title>


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script src="../upload/js/upload.js"></script>


</head>
<?php

?>

<style>



</style>

<?php
include '../app/views/common/nav.php';
?>


<!--<button id="ajax" name="btn-login" class="btn btn-warning btn-shadow" type='submit'>ajax</button>-->

<div class="container">
    <h1>UPLOAD</h1>

    <div class="file-upload">
        <button id='btn_add' class="btn btn-success btn-shadow btn-lg" type="button"
             >
            Add Image
        </button>


        <div class="image-upload-wrap">
            <input id="file" class="file-upload-input" type='file' accept="image/*"/>
            <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
            </div>
        </div>
        <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="your image"/>
            <div class="image-title-wrap">
                <!--<button id="btn_remove" type="button" class="remove-image">Remove <span class="image-title">Uploaded Image</span>
                </button>-->
                <button id='btn_remove' class="btn btn-danger btn-shadow btn-lg">
                    Remove <span class="image-title">Uploaded Image</span>
                </button>
            </div>
        </div>

        <p>
        <h3>Title</h3>
        <input class="form-control" type="text" value="Text input" id="example-text-input">
        </p>
        <p>
        <h3>Category</h3>
        <select class="custom-select">
            <option selected="">category1</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </p>
        <h3>Category</h3>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
            <p>
        </div>


        </p>


    </div>
</div>

</body>
<script>


</script>
</html>



