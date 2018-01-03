<?php
include '../app/views/common/top.html';
?>
<link rel="stylesheet" href="../login/css/style.css">

<script src="../login/js/index.js"></script>
</head>
<body>

<div id="error">
    <!-- l'errore verrà visualizzato in questo div -->
</div>

<div class="container">
    <form id="login-form">
        <input checked id='signin' name='action' type='radio' value='signin'>
        <label for='signin'>Sign in</label>
        <input id='signup' name='action' type='radio' value='signup'>
        <label for='signup'>Sign up</label>
        <div id='wrapper'>
            <div id='arrow'></div>
            <input id='email' name="nickname" placeholder='Nickname' type='text' required>
            <input id='pass' name="password" placeholder='Password' type='password' required>
            <input id='repass' name="repass" placeholder='Repeat password' type='password'>
        </div>
        <button id="btn-login" name="btn-login" class="btn btn-warning btn-shadow" type='submit'>
    <span>
        <br>
      Sign in
      <br>
      Sign up
    </span>
        </button>
    </form>
</div>
</body>
<?php
if (isset($_SESSION) && isset($_COOKIE)){ var_dump($_SESSION); var_dump($_COOKIE['User']); }?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


</html>

