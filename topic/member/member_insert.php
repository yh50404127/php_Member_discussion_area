<?
	if(empty($_POST['id']) or empty($_POST['pw']) or empty($_POST['name']) or empty($_POST['phone'])){
		echo "您有資料未填寫";
		exit;
	}
	
	if(!empty($_POST['year']) and !empty($_POST['month']) and !empty($_POST['day'])){
		if(!checkdate($_POST['month'],$_POST['day'],$_POST['year'])){
			echo "您選擇的日期不存在";
			exit;
		}
	}
	
	include "db_config.php";
	
	
	$id=$_POST['id'];
    $pw=$_POST['pw'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $year=$_POST['year'];
    $month=$_POST['month'];
    $day=$_POST['day'];
    $phone=$_POST['phone'];
    $mail=$_POST['mail'];
    $address=$_POST['address'];
	
	
	
	$str="select count(*) from members where id='$id'";
	
	
	$list =mysqli_query($link,$str);
	list($member_count) = mysqli_fetch_row($list);
	  
	if ($member_count!=0 )
	{
	     echo	"您的帳號已經申請過了";
	     exit;
	}



	$str="insert into members(id,pw,name,sex,year,month,day,phone,mail,address,reg_date) values('$id','$pw','$name','$sex','$year','$month','$day','$phone','$mail','$address',now())";
	mysqli_query($link,$str) or die("申請失敗");

	mysqli_close($link);
	header("Location:register_ok.php");
	
?>
