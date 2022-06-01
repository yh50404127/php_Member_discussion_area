<?include "check.php";?>

<html>
<head>
<title>­修改會員密碼</title>
</head>
<Script Language="javascript">
function formcheck()
  {
   if ( Regist.newpw.value == "" ) {
	 alert("請輸入新密碼");
	 Regist.newpw.focus();
	 return false;
}
  if ( Regist.newpw2.value == "" ) {
	 alert("請再次輸入新密碼");
	 Regist.newpw2.focus();
	 return false;
}
  if ( Regist.newpw.value != Regist.newpw2.value ) {
	 alert("重複輸入密碼不同");
	 Regist.newpw.value = "";
	 Regist.newpw2.value = "";
	 Regist.newpw.focus();
	 return false;
}
return true;
}
 </script>
 <body bgcolor="#F2F2F2">
 <form method="POST" action="update_pw.php" name="Regist" onsubmit="return formcheck();">
	<table align="center" border="1" cellspacing="1" width="500">
	<p align="center">
	|<a href="../forum/index.php">討論區</a>|
	<a href="member_view.php">瀏覽會員基本資料</a> |
	<a href="member_edit.php">­修改會員基本資料</a> |
	<a href="member_pwedit.php">­修改會員密碼</a> |
	<a href="member_loginout.php">登出會員</a></p>
		<tr>
			<td colspan="2">修改會員密碼</td>
		</tr>
		<tr>
			<td>新密碼:</td>
			<td><input type="password" name="newpw" size="30"></td>
		</tr>
		<tr>
			<td>­再次輸入新密碼:</td>
			<td><input type="password" name="newpw2" size="30"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
            <input type="submit" value="送出修改"></td>
		</tr>
	</table>
 </form>
 </body>
 </html>
