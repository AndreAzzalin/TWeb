<style>
    .border-warning {
        border: solid 5px;
    }

    .container {
        position: relative;
    }

    #cross {
        position: absolute;
        top: 0px;
        right: 0px;
        margin-right: 15px;
    }

</style>

<div id="publicSection" class="container border-warning">

    <h1> Explore <span><?= $data['nickname'] ?></span>'s GIFs <a href="http://localhost/tweb/public/artists/"><i
                    id="cross" class=" fa fa-times "></i></a></h1>

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

                <h1>
                    GIFs Favorited: <span id="countFav">0</span>
                </h1>

                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/dashboard#favorited">Go to favorite</a>
                <a class="btn btn-success btn-shadow btn-lg" href="/tweb/public/dashboard#uploaded"> Go to Upload</a>

                </p>
            </div>

        </div>
    </div>

    <hr>
    <h1 id="uploaded">
        <i class="fa fa-upload" aria-hidden="true"></i>&nbspUploeaded GIFs
    </h1>

    <div id="gifsUploads" class="grid">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>
    </div>
</div>





