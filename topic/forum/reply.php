<?
session_start();
$id=$_SESSION['id'];
?>

<?
include "db_config.php";
$sn=$_GET['sn'];
$str="select title,content from discuss where sn='$sn' ";
$list=mysqli_query($link,$str);
list($title,$content)=mysqli_fetch_row($list);
?>
<html>
<head>
<title>回覆討論主題</title>
</head>
<body bgcolor="#F2F2F2">
<form action="re_insert.php" method="post">
<input type="hidden" name="suid" value="<?=$sn?>">
	<table border="1" cellspacing="1" cellpadding="0" width="500" align="center">
		<tr>
			<td width="100" align="right">討論主題:</td>
			<td width="300"><?=$title?></td>
		</tr>
		<tr>
			<td width="100" align="right">內容:</td>
			<td width="300"><?=Nl2BR($content)?></td>
		</tr>
		<tr>
			<td width="100" align="right">回覆人姓名:</td>
			<td width="300"><input type="text" name="name" size="49" value="<?=$id?>"></td>
		</tr>
		<tr>
			<td width="100" align="right">回覆內容:</td>
		<td width="300">
			<textarea rows="5" name="content" cols="48"></textarea></td>
		</tr>
	</table>
	<p align="center">
	<input type="button" value="取消回覆" onClick="history.go(-1)">
	<input type="submit" value="確認回覆">
	</p>
</form>
</body>
</html>
