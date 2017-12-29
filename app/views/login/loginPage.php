<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login-Tweb</title>
    <base href="http://localhost/TWeb/app/views/common/">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel='stylesheet' href="//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="../login/css/style.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
    <script href="../login/js/index.js"></script>


</head>
<body>

<div id="error">
    <!-- error will be shown here ! -->
</div>

<div class="container">
    <form method="post" id="login-form">
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
</html>
