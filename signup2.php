<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
  <head>
    <title>회원가입</title>
  </head>
  <body>
    <h1>Sign up page</h1>
    <form action="idcheck2.php" method="post">
      <p>ID : <input type="text" name="id"></p>
      <p>PW : <input type="password" name="pwd"></p>
      <p>Name : <input type="text" name="name"></p>
      <p>E-mail : <input type="text" name="email"></p>
      <p><input type="submit" value="회원가입"/></p>

    </FORM>
  </body>
</html>
