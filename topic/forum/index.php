  <?
  include "db_config.php";
  ?>
  <html>
  <head>
  <title>所有討論主題</title>
  </head>
  <body bgcolor="#F2F2F2">
	|<a href="add.php">發表新文章</a>|
	<a href="../member/member_view.php">瀏覽會員基本資料</a> |
	<a href="../member/member_edit.php">­修改會員基本資料</a> |
	<a href="../member/member_pwedit.php">­修改會員密碼</a> |
	<a href="../member/member_loginout.php">登出會員</a>|
	<p>
	<table border="1" width="500" cellspacing="1" cellpadding="0" align="center">
		<tr>
			<td width="300">標題</td>
			<td width="100">發表人</td>
			<td width="100">回覆/人氣值</td>
			<td width="100">發表日期</td>
			<td width="100">最後回覆</td>
		</tr>
 <?
 $str="select sn,title,name,addtime,counts from discuss order by addtime desc";
 $list=mysqli_query($link,$str);
 while(list($sn,$title,$name,$addtime,$counts) = mysqli_fetch_row($list))
 {
 
 		if(strlen($title)>45) $title=substr($title,0,45)."...";
 		if(strlen($name)>10) $name=substr($name,0,9)."...";
 		
 		
 		$stra="select count(*) from reply where suid='$sn'";
		$lista=mysqli_query($link,$stra);
		list($re_count)=mysqli_fetch_row($lista);
 		
 		$strb="select name,addtime from reply where suid='$sn' order by sn desc limit 0,1;";
		$listb=mysqli_query($link,$strb);
		list($re_name,$re_time)=mysqli_fetch_row($listb);
 		
 		
 ?>
		<tr>
			<td><a href="view.php?sn=<?=$sn?>"><?=$title?></a></td>
			<td><?=$name?></td>
			<td><?=$re_count?>/<?=$counts?></td>
			<td><?=$addtime?></td>
			<td><?=$re_time?><br>by<?=$re_name?></td>
		</tr>
 <?
 }
 ?>
	</table>
 </body>
 </html>
