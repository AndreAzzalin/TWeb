<script src="/TWeb/app/views/common/js/navFunction.js"></script>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/tweb/public/home">
            <h2 id="logo"><i class="fa fa-share-alt" aria-hidden="true"></i>  ShareYourGIFs</h2>
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item">
                    <a href="/tweb/public/artists" class="btn btn-warning btn-shadow">Artists</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary  btn-shadow" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu border-warning " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-light" href="/tweb/public/categories/animals">#animals</a>
                            <a class="dropdown-item text-light" href="/tweb/public/categories/emoticons">#emoticons</a>
                            <a class="dropdown-item text-light" href="/tweb/public/categories/memes">#memes</a>
                        </div>
                    </div>
                </li>
                <li class="nav-ite">
                    <a href="/tweb/public/upload" class="btn btn-success btn-shadow">Upload</a>
                </li>
                <li class="nav-ite">
                    <a href="/tweb/public/faq" class="btn btn-light btn-shadow">FAQ</a>
                </li>

            </ul>

            <div class="dropdown my-2 my-lg-0">
                <button class="btn btn-danger  btn-shadow " type="button" id="buttonUser" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle" aria-hidden="true"></i> <i id="user"><?php
                        if (isset($_SESSION['User'])) {
                            echo $_SESSION['User'];
                        } else {
                            echo 'User';
                        }
                        ?></i>

                </button>

                <div  id='userMenu' class="dropdown-menu border-warning" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-light" href="/tweb/public/dashboard">Dashboard</a>
                    <a class="dropdown-item text-light" href="/tweb/public/logout/">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
