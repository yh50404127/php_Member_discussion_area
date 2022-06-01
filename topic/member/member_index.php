  <html>
  <head>
  <title>登入頁面</title>
  </head>
  <Script Language="javascript">
  function formcheck()
   {
    if ( Regist.id.value == "" ) {
	alert("請輸入[帳號]");
	document.Regist.id.focus();
	return false; 
  }
  
    if ( Regist.pw.value == "" ) {
	alert("請輸入[密碼]");
	document.Regist.pw.focus();
	return false; 
  }
    return true;
  }
  </script>
  
  
  <body bgcolor="#F2F2F2">
  <form method="POST" action="member_check.php" name="Regist" onsubmit="return formcheck();">
    <table border="0" width="300" align="center">
       
       <tr>
            <td align="right">帳號:</td>
            <td><input type="text" name="id" size="20"></td>
       </tr>
       <tr>
            <td align="right">密碼:</td>
            <td><input type="password" name="pw" size="20"></td>
       </tr>
   </table>
   <p align="center"><input type="submit" value="登入"></p>
  </form>
  <p align="center"><a href="member_register.php">註冊會員</a></p>
  </body>
  </html>
