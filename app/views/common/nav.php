<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="./images/logo.gif" width="100" height="50" alt="">
            SYM
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                <li class="nav-item">
                    <a href="#!" class="btn btn-warning btn-shadow">Artists</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary  btn-shadow" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </button>
                        <div class="dropdown-menu border-warning " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-light" href="#">Action</a>
                            <a class="dropdown-item text-light" href="#">Another action</a>
                            <a class="dropdown-item text-light" href="#">Something else here</a>
                        </div>
                    </div>
                </li>
                <li class="nav-ite">
                    <a href="#!" class="btn btn-success btn-shadow">Upload</a>
                </li>
                <li class="nav-item">
                    <a href="#!" class="btn btn-light btn-shadow">Create</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
            </form>

            <div class="dropdown my-2 my-lg-0">
                <button class="btn btn-danger  btn-shadow " type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp <?= $_SESSION['nickname']?>
                </button>

                <div class="dropdown-menu border-warning" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-light" href="#">Action</a>
                    <a class="dropdown-item text-light" href="#">Another action</a>
                    <a class="dropdown-item text-light" href="http://localhost/TWeb/public/logout/">Logout</a>
                </div>
            </div>
        </div>
    </nav>
</div>
