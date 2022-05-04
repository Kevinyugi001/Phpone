<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="styles.css"

</head>
<body>
<style>
    body{
        background-image: url("img/comp.jpeg");
    }
</style>
<form action="login.php" method="post"
      <h2>LOGIN</h2>

<br>
<?php if (isset($_GET['error'])){ ?>
<p class="error"><?php echo $_GET['error'];?> </p>
<?php } ?>
<label> Username</label>
<input type="text" name="username" placeholder="username"><br><br>
<label>password</label>
<input type="password" name="password" placeholder="password"><br>
<p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password.php" style="color: #4590ef;">Forgot Password?</a></p>
<button type="submit">Login</button>

</form>
</body>
</html>