<?
session_start();
$id=$_SESSION['id'];
?>

<html>
<head>
<title>發表討論主題</title>
</head>
<body bgcolor="#F2F2F2">
<form action="insert.php" method="post">
	<table border="0" width="500" cellspacing="1" cellpadding="0" align="center">
		<tr>
			<td align="right">討論主題:</td>
			<td><input type="text" name="title" size="50"></td>
		</tr>
		<tr>
			<td align="right">發表人:</td>
			<td><input type="text" name="name" size="50" value="<?=$id?>"></td>
		</tr>
		<tr>
			<td align="right">­個人網站:</td>
			<td><input type="text" name="web" size="50"></td>
		</tr>
		<tr>
			<td align="right">內容:</td>
			<td><textarea rows="7" name="content" cols="48"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<input type="button" value="取消新增" onClick="history.go(-1)">
			<input type="submit" value="確認新增"></td>
		</tr>
</table>
</form>
</body>
</html>
