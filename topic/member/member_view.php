<?
include "check.php";
include "db_config.php";
$str="select name,sex,year,month,day,phone,mail,address from members where id='$id' and pw='$pw'";
$list =mysqli_query($link,$str);
list($name,$sex,$year,$month,$day,$phone,$mail,$address) = mysqli_fetch_row($list);
mysqli_close($link);
?>
 <html>
 <head>
 <title>會員基本資料</title>
 </head>
 <body bgcolor="#F2F2F2">
 
	<p align="center">
	|<a href="../forum/index.php">討論區</a>|
	<a href="member_view.php">瀏覽會員基本資料</a> |
	<a href="member_edit.php">­修改會員基本資料</a> |
	<a href="member_pwedit.php">­修改會員密碼</a> |
	<a href="member_loginout.php">登出會員</a></p>
	<table border="1" cellspacing="1" width="400" align="center">
		<tr>
			<td align="right">姓名:</td>
			<td><?=$name?></td>
		</tr>
		<tr>
			<td align="right">性別:</td>
			<td><?=$sex?></td>
		</tr>
		<tr>
			<td align="right">出生日期:</td>
			<td><?=$year?>年<?=$month?>月<?=$day?>日</td>
		</tr>
		<tr>
			<td align="right">電話:</td>
			<td><?=$phone?></td>
		</tr>
		<tr>
			<td align="right">E-mail:</td>
			<td><?=$mail?></td>
		</tr>
		<tr>
			<td align="right">住址:</td>
			<td><?=$address?></td>
		</tr>
	</table>
</body>
</html>
