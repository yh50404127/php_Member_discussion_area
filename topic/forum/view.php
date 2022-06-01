  <?
  include "db_config.php";
  $sn=$_GET['sn'];
  
  $str="update discuss set counts=counts+1 where sn='$sn'";
  mysqli_query($link,$str);
  
  $str="select title,name,web,content,ip from discuss where sn='$sn' ";
  $list=mysqli_query($link,$str);
  list($title,$name,$web,$content,$ip)=mysqli_fetch_row($list);
  $content = nl2br($content);
  
  ?>
  <html>
  <head>
  <title>瀏覽討論主題</title>
  </head>
  <body bgcolor="#F2F2F2">
	| <a href="index.php">討論主題列表</a> | 瀏覽討論主題
	<p></p>
	<table border="1" cellspacing="1" cellpadding="0" width="400" align="center">
		<tr>
			<td width="100" align="right">討論主題:</td>
			<td width="300"><?=$title?></td>
		</tr>
		<tr>
			<td width="100" align="right">發表人:</td>
			<td width="300"><?=$name?></td>
		</tr>
		<tr>
			<td width="100" align="right">­個人網站:</td>
			<td width="300"><?=$web?></td>
		</tr>
		<tr>
			<td width="100" align="right">ip:</td>
			<td width="300"><?=$ip?></td>
		</tr>
		<tr>
			<td width="100" align="right">內容:</td>
			<td width="300"><?=$content?></td>
		</tr>
	</table>
	<p align="center"><a href="reply.php?sn=<?=$sn?>">回覆</a></p>
	
	
	<?
	$str="select name,content,addtime from reply where suid='$sn' order by sn desc";
 	$list=mysqli_query($link,$str);
 	while(list($name,$content,$addtime) = mysqli_fetch_row($list))
 	{?>
	<table border="1" cellspacing="1" cellpadding="0" width="400" align="center">
		<tr>
			<td width="100" align="right">回覆人:</td>
			<td width="300"><?=$name?></td>
		</tr>
		<tr>
			<td width="100" align="right">回覆時間:</td>
			<td width="300"><?=$addtime?></td>
		</tr>
		<tr>
			<td width="100" align="right">回覆內容:</td>
			<td width="300"><?=$content?></td>
		</tr>
		
	</table>
	<p></p>
	<?}?>
  </body>
  </html>
