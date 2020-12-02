<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
?>

<!DOCTYPE html>
<meta charset='UTF-8'>
<html>
<body>
  <h1>
    LOGIN PAGE
  </h1>
  <form action="logincheck2.php" method="POST">
    <p>ID : <input type="text" name="id"><br></p>
    <p>PW :
    <input type="password" name="pwd"><br></p>
    <p><input type="reset" name="signup" value="sign up" onclick="location.href='signup2.php'"></p>
    <p><input type="submit" name="login" value="login" onclick="location.href='logincheck2.php'"></p>
  </form>
</body>
</html>
