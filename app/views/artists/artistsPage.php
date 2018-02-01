<?php
include 'app/views/common/top.html';
?>

<title>Artist | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include 'app/views/common/nav.php';
?>

<div class="container">
    <h1><i class="fa fa-users" aria-hidden="true"></i> ALL ARTISTS </h1>
    <div id="msg"></div>

    <table class="table table-hover table-info">
        <thead>
        <tr>
            <th>Nickname</th>
        </tr>
        </thead>
        <tbody id="artistsList">
        </tbody>
    </table>
</div>

<div id="publicSection"></div>

<script src="../common/js/functions.js"></script>
<script src="../artists/js/artistFunctions.js"></script>
<script src="../artists/js/artistsPage.js"></script>
</body>
</html>



