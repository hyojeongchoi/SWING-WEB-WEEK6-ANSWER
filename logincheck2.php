<?php
session_start();
$conn = mysqli_connect("localhost","root","branson113","mydb") or die("mysql connect error");
$query1= "select * from mydb where id= '{$_POST['id']}';";
$result1= mysqli_query($conn, $query1) or die("query1 error");
$count1=mysqli_num_rows($result1);
$query2= "select * from mydb where pwd= '{$_POST['pwd']}';";
$result2= mysqli_query($conn, $query2) or die("query2 error");
$count2=mysqli_num_rows($result2);

if ($count1==1 && $count2==1 )
{
  $_SESSION['id']=$_POST['id'];
  $_SESSION['pwd']=$_POST['pwd'];
  header("location: index2.php");
}
else{
  echo "잘못된 정보입니다.";
  echo "<a href=login2.php>login</a>";
}
mysqli_close($conn);
 ?>
