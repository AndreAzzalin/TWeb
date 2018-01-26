<?php
include '../app/views/common/top.html';
?>

<title>Artist | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <h1><i class="fa fa-info-circle" aria-hidden="true"></i> FAQ </h1>
    <div id="msg"></div>

    <div class="jumbotron">
        <ul>
            <li><h2>How it works?</h2>
                <p class="lead">Upload and share GIFs with other people.</p>
            </li>
            <li>
                <h2>Site Map:</h2>
                <p> -<a href="/tweb/public/artist"> Artist:</a> browse all artist, and visit their public page</p>
                <p> -<a href="/tweb/public/categories"> Categories:</a> browse GIFs categories.</p>
                <p> -<a href="/tweb/public/upload"> Upload:</a> upload and share your GIFs .</p>
                <p> -<a href="/tweb/public/dashboard"> Dashboard:</a> manage your favorite and uploads GIFs .</p>
                <p> -<a href="/tweb/public/home"> Home:</a> browse all shared GIFs.</p>
            </li>
            <li><h2>Special Thanks to: </h2>

                <p> Arechsteiner for bootstrap template -> <a href="https://github.com/HackerThemes/theme-machine">source code</a>
                </p>
                <p>  David DeSandro for Masonry library -> <a href="https://github.com/desandro/masonry">source code</a>
                </p>
            </li>
            <li><h2>Other Info:</h2>

                <p>Website passed W3C validator for HTML and CSS -> <a
                            href="https://validator.w3.org">validator.w3.org</a></p>
            </li>
        </ul>
    </div>


</div>


</body>
</html>



