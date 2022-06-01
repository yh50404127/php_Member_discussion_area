<?
  include "check.php";
  include "db_config.php";
  $phone=$_POST['phone'];
  $mail=$_POST['mail'];
  $address=$_POST['address'];
  $str="update members set phone='$phone',mail='$mail',address='$address' where id='$id' and pw='$pw' ";
  mysqli_query($link,$str) or die("更新失敗");
  mysqli_close($link);
?>
 <html>
 <head>
 <title>資料修改</title>
 </head>
 <body>
 <Script Language="JavaScript">
	alert('資料修改完成');
	location.href="member_view.php";
 </Script>
 </body>
 </html>
