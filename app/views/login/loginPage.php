<?php
include 'app/views/common/top.html';
?>
<link rel="stylesheet" href="../login/css/style.css">
<title>Login | Tweb</title>
</head>
<body>


<div class="container">


    <div class="jumbotron">
        <h1>WELCOME TO ShareYourGifs</h1>
        <p>SYG is your top source for the best & newest GIFs online. Find everything from animals GIFs, emotions GIFs, unique GIFs and more..</p>
        <p>Upload and share GIFs with other people.</p>
        <p>First time here? Click signUp below this banner </p>

    </div>

    <div id="msg">
        <!-- l'msge verrà visualizzato in questo div -->
    </div>


    <div class="container">
        <form id="login-form">
            <input checked id='signin' name='action' type='radio' value='signin'>
            <label for='signin'>Sign in</label>
            <input id='signup' name='action' type='radio' value='signup'>
            <label for='signup'>Sign up</label>
            <div id='wrapper'>
                <div id='arrow'></div>
                <input id='nickname' name="nickname" placeholder='Nickname' type='text' required>
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
</div>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="../login/js/login.js"></script>
</body>
</html>

