<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <form action="../index.php" method="post" enctype="multipart/form-data">
      username : <input type="text" name="email" id="email">
      password : <input type="password" name="pwd" id="pwd">
      <button type="submit" name="loginButton">Login</button>
      Don't have an account ? Create one <a href="register.php">here</a>
    </form>
  </body>
</html>
