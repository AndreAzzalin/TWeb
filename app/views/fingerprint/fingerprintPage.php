<?php
include '../app/views/common/top.html';
?>

<title>BadGuy | TWeb</title>


<link rel="stylesheet" href="../fingerprint/css/fingerprint.css">
<link rel="stylesheet" href="../artists/css/artists.css">
</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <h1><i class="fa fa-eye" aria-hidden="true"></i> BadGuy Page</h1>

    <div class="dropdown">
        <button class="btn btn-warning  btn-shadow" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select user...
        </button>
        <div id='selectUser' class="dropdown-menu border-warning " aria-labelledby="dropdownMenuButton">
            <i id='all' class="dropdown-item text-light">All</i>
        </div>
    </div>


    <div id="msg"></div>

    <table class="table table-hover table-info">
        <thead>
        <tr>
            <th>User</th>
            <th>IP</th>
            <th>Country</th>
            <th>City</th>
            <th>ISP</th>
            <th>Time</th>
        </tr>
        </thead>
        <tbody id="logUsers">
        </tbody>
    </table>
</div>

<div id="publicSection"></div>


</body>
<script src="../fingerprint/js/fingerprint.js"></script>
<script src="../common/js/functions.js"></script>
</html>



