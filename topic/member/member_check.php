<?
session_start();
include "db_config.php";    
$id=$_POST['id'];
$pw=$_POST['pw'];
$str="select count(*) from members where id='$id' and pw='$pw' ";
$list =mysqli_query($link,$str);
list($members_count) = mysqli_fetch_row($list);

if( $members_count == 0 )
  {
?>
<Script Language="JavaScript">
	alert('帳號密碼輸入錯誤');
	history.go(-1);
</Script>
<?
}
else
{

$_SESSION['id']=$id;
$_SESSION['pw']=$pw;
@mysqli_close($link);
header("location:../forum/index.php");
}
?>
