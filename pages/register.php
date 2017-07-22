<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <form action="../index.php" method="post" enctype="multipart/form-data">
      First Name: <input type="text" name="firstName" id="firstName">
      Last Name: <input type="text" name="lastName" id="lastName">
      Email: <input type="text" name="email" id="email">
      Password: <input type="password" name="pwd" id="pwd">
      Confirm Password: <input type="password" name="confPwd" id="confPwd">
      <button type="submit" name="registerButton">Register</button>
    </form>
  </body>
</html>
