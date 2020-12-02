<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['pwd']))
{}
else
{
    Header('location: login2.php');
}
?>
<meta charset='UTF-8'>
<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>

<body>
  <h1>
  INDEX PAGE
  </h1>

  <?php
  echo '로그인 성공';
  ?>
  <form>
    <input type="button" name="logout" value="logout" onclick="location.href='logout2.php'">
    <input type="button" name="list" value="list" onclick="location.href='board.php'">

  </form>
</body>
</html>
