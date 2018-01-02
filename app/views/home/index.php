<?php


include '../app/views/common/top.html';
?>
<title>HomePage - TWeb</title>
</head>

<?php
include '../app/views/common/nav.php';
?>

<div class="container">
    <div class="py-5">
        <h1>TWEB <span class="glyphicons glyphicons-heart"></span></h1>
        <p>
            <?php
            if (isset($_SESSION)) {
                var_dump($_SESSION);
            }
                       ?>


        </p>
        <a href="#!" class="btn btn-primary">Default Button</a>

        <a href="#!" class="btn btn-outline-primary">Outline Button</a>
    </div>
</div>
</body>
</html>



