<?php
include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../upload/css/upload.css">

<title>Upload - TWeb</title>


<!--<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>-->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="../upload/js/upload.js"></script>


</head>


<?php
include '../app/views/common/nav.php';
?>


<!--<button id="ajax" name="btn-login" class="btn btn-warning btn-shadow" type='submit'>ajax</button>-->

<div class="container">
    <h1>UPLOAD</h1>

    <div id="msg">
        <!-- l'msge verrà visualizzato in questo div -->
    </div>
    <form id="upload_form">
        <div class="file-upload">
            <button id='btn_add' class="btn btn-success btn-shadow btn-lg" type="button">
                Add Image
            </button>


            <div class="image-upload-wrap">
                <input id="file" class="file-upload-input" type='file' accept="image/*"/>
                <div class="drag-text">
                    <h3>Drag and drop a file or select add Image</h3>
                </div>
            </div>
            <div class="file-upload-content">
                <img class="file-upload-image" src="" alt="your image"/>
                <div class="image-title-wrap">

                    <button id='btn_remove' class="btn btn-danger btn-shadow btn-lg">
                        Remove <span class="image-title">Uploaded Image</span>
                    </button>
                </div>
            </div>

            <p>
            <h3>Title</h3>
            <input name="title" class="form-control" type="text" placeholder="Text input" id="titile" required>
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
                <input type="checkbox"id="customCheck1">
                <label type="checkbox" class="custom-control-label" for="customCheck1">Check this custom checkbox</label>

            </div>


            <p>
                <button id='btn_upload' class="btn btn-success btn-shadow btn-lg" type="submit">
                    Upload image
                </button>
            </p>

        </div>
    </form>
</div>

</body>
</html>



