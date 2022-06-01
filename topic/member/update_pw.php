<?
include "check.php";
include "db_config.php";
$newpw=$_POST['newpw'];
$str="update members set pw='$newpw' where id='$id' ";
mysqli_query($link,$str) or die("更新失敗");
mysqli_close($link);
$_SESSION['pw']=$newpw;
?>
<html>
<head>
<title>­修改會員密碼</title>
</head>
<body>
<Script Language="JavaScript">
	alert('修改會員密碼完成');
	location.href="member_view.php";
</Script>
</body>
</html>
