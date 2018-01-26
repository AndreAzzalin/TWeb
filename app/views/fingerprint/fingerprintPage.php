<?php
include '../app/views/common/top.html';
?>

<title>BadGuy | TWeb</title>

<link rel="stylesheet" href="../home/css/home.css">
<link rel="stylesheet" href="../artists/css/artists.css">

</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <h1><i class="fa fa-eye" aria-hidden="true"></i> BadGuy Page </h1>
    <div id="msg"></div>

    <table class="table table-hover table-info">
        <thead>
        <tr>
            <th><h2>User</h2></th> <th><h2>IP</h2></th> <th><h2>Country</h2></th>
            <th><h2>City</h2></th><th><h2>ISP</h2></th><th><h2>Time</h2></th>
        </tr>
        </thead>
        <tbody id="logUsers">
        </tbody>
    </table>
</div>

<div id="publicSection"></div>


</body>

<script src="../fingerprint/js/fingerprint.js"></script>
</html>



