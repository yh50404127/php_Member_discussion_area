<html>
<head>
	<title>註冊會員</title>
	
	<Script language="javaScript">
		function formcheck(){
		
			if(Regist.id.value == ""){
			alert("請輸入[帳號]");
			Regist.id.focus();
			return false;
			}
			
			if(Regist.pw.value == ""){
			alert("請輸入[密碼]");
			Regist.pw.focus();
			return false;
			}
			
			if(Regist.name.value == ""){
			alert("請輸入[姓名]");
			Regist.name.focus();
			return false;
			}
			
			if(Regist.phone.value == ""){
			alert("請輸入[電話]");
			Regist.phone.focus();
			return false;
			}
			return true;
		}
	</script>
	
</head>


<body bgcolor="#f2f2f2">
<form method="POST" action="member_insert.php" name="Regist"
onsubmit="return formcheck();">
	<table border="0" cellspacing="1" width="400" align="center">
		<tr>
			<td colspan="2">加入會員請填寫以下資料：（*為必填）</td>
		</tr>
		<tr>
			<td align="right">*帳號:</td>
			<td><input type="text" name="id" size="20"></td>
		</tr>
		<tr>
			<td align="right">*密碼:</td>
			<td><input type="password" name="pw" size="20"></td>
			
		</tr>
		<tr>
			<td align="right">*姓名:</td>
			<td><input type="text" name="name" size="20"></td>
		</tr>
		<tr>
			<td align="right">性別:</td>
			<td>
			<input type="radio" name="sex" value="男">男
			<input type="radio" name="sex" value="女">女
			</td>
		</tr>
		<tr>
			<td align="right">出生日期:</td>
			<td>
			<select szie="1" name="year">
			<option value="請選擇">請選擇</option>
			<?
			for($year=1960;$year<2000;$year++)
			{
				echo "<option value=\"$year\">$year</option>\n";
			}
			?>
			</select>年
			
			<select szie="1" name="month">
			<option value="請選擇">請選擇</option>
			<?
			for($month=1;$month<=12;$month++)
			{
				echo "<option value=\"$month\">$month</option>\n";
			}
			?>
			</select>月
			
			<select szie="1" name="day">
			<option value="請選擇">請選擇</option>
			<?
			for($day=1;$day<=31;$day++)
			{
				echo "<option value=\"$day\">$day</option>\n";
			}
			?>
			</select>日
			</td>
		</tr>
		<tr>
			<td align="right">*電話：</td>
			<td><input type="text" name="phone" size="20"></td>
		</tr>
		<tr>
			<td align="right">E-mail：</td>
			<td><input type="text" name="mail" size="20"></td>
		</tr>
		<tr>
			<td align="right">住址：</td>
			<td><input type="text" name="address" size="20"></td>
		</tr>
	</table>
	
	<p align="center"><input type="submit" value="加入會員"></p>
</form>
</body>
</html>


</html>
