<?
session_start();
$id=$_SESSION['id'];
$pw=$_SESSION['pw'];

if( empty($id) or empty($pw) )
{
?>
	<html>
	<head>
	<title></title>
	</head>
	<body>
		<Script Language="JavaScript">
			alert("你沒有登入喔～");
			window.parent.frames.location.href="member_index.php";
		</Script>
	</body>
	</html>
<?
	exit;
}
?>
