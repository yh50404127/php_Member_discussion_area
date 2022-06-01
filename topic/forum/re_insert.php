<?
include "db_config.php";

$suid=$_POST['suid'];
$name=$_POST['name'];
$content=$_POST['content'];

$str="insert into reply(suid,name,content,addtime) values('$suid','$name','$content',now() )";
mysqli_query($link,$str);
mysqli_close($link);
?>
<html>
<head>
<title>回覆完成</title>
</head>
<body>
<Script Language="JavaScript">
	alert('回覆完成');
	location.href="view.php?sn=<?=$suid?>";
</Script>
</body>
</html>
