<?
include "db_config.php";

$ip=$_SERVER['REMOTE_ADDR'];
$title=$_POST['title'];
$name=$_POST['name'];
$web=$_POST['web'];
$content=$_POST['content'];


$str="insert into discuss(title,name,web,content,addtime,ip) values ('$title','$name','$web','$content',now(),'$ip' )";
mysqli_query($link,$str);
mysqli_close($link);

?>
<html>
<head>
<title>討論主題發表完成</title>
</head>
<body>
<Script Language="JavaScript">
	alert('討論主題發表完成');
	location.href="index.php";
</Script>

</body>
</html>
