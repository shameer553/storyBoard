<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Story</title>
  </head>
  <body>
    <h1>Add Story</h1>
    <form action="thankYou.php" method="post" enctype="multipart/form-data">
      Title: <input type="text" name='title' id="title" placeholder="title goes here">
      Story: <input type="text" name='story' id="story" placeholder="Story goes here">

      <button type="submit" name="addStoryButton">Submit</button>
    </form>
  </body>
</html>
