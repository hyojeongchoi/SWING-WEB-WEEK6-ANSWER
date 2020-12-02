<?php
session_start();
$con=mysqli_connect("localhost","root","branson113","mydb");
$number = $_GET['num'];
$query = "select title, content, date, hit, id from board where num=$number";
$result = mysqli_query($con, $query) or die("query error");
$row = mysqli_fetch_array($result);
$hitup=mysqli_query($con,"update board set hit = hit+1 where num like $number");
?>
<table class="view_table" align=center>
  <tr>
    <td align=center colspan="4" class="vtitle"><?php echo $row['title']?></td>
  </tr>
  <tr>
    <td class="vid">작성자</td>
    <td class="vid2"><?php echo $row['id']?></td>
    <td class="vhit">조회수</td>
    <td class="vhit2"><?php echo $row['hit']?></td>
  </tr>
  <tr>
    <td colspan="4" class="vcontent" valign="top">
      <?php echo $row['content']?></td>
    </tr>
  </table>
  <div style="text-align: center">
    <input type="button" align="center" name="list" value="목록" onclick="location.href='board.php'">
    <input type="button" name="index" value="메인화면" onclick="location.href='index2.php'">
  </div>
