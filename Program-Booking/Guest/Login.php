<?php
include("../Connection/Connection.php");
session_start();
if(isset($_POST["save"]))
{
	
	$usname=$_POST["txtuser"];
	$password=$_POST["txtpass"];
	
	$sel="select * from tbl_admin where admin_username='".$usname."' and admin_password='".$password."'";
	$data=mysql_query($sel);
	$count=mysql_num_rows($data); 
	

	
	$sel1="select * from tbl_artist where artist_username='".$usname."' and artist_password='".$password."'";
	$data1=mysql_query($sel1);
	$count1=mysql_num_rows($data1);
	$row1=mysql_fetch_array($data1);
	
	$_SESSION['artistname']=$row1['artist_name'];
	$_SESSION['artistid']=$row1['artist_id'];
	
	$sel2="select * from tbl_troop where troop_usname='".$usname."' and troop_password='".$password."'";
	$data2=mysql_query($sel2);
	$count2=mysql_num_rows($data2);
	$row2=mysql_fetch_array($data2);
	
	$_SESSION['troopname']=$row2['troop_name'];
	$_SESSION['troopid']=$row2['troop_id'];
	
	
	$sel3="select * from tbl_user where user_name='".$usname."' and user_password='".$password."'";
	$data3=mysql_query($sel3);
	$count3=mysql_num_rows($data3);
	$row3=mysql_fetch_array($data3);
	
	$_SESSION['username']=$row3['us_name'];
	$_SESSION['userid']=$row3['user_id'];
	
	
	if($count>0)
	{
		header("Location:../Admin/HomePage.php");
	}
	elseif($count1>0)
	{
		header("Location:../Artist/HomePage.php");
	}
	else if($count2>0)
	{
		header("Location:../Troops/HomePage.php");
	}
	else if($count3>0)
	{
		header("Location:../User/HomePage.php");
	}
	else
	{
		echo "<script>alert('Invalid Username/Password!!')</script>";
	}
	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<?php include("Template/Header.php")?>
</head>

<body>
<br /><br /><br /><br /><br /><br />
<br /><br /><br />
<div class="main_form" id="tab" align="center">
<form id="request" name="form1" method="post" action="">
  <table width="361">
    <tr>
      <td>User Name</td>
      <td><label for="txtuser"></label>
      <input type="text" name="txtuser" id="txtuser" required placeholder="Enter user name" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpass"></label>
      <input type="password" name="txtpass" id="txtpass" required autocomplete="off" placeholder="Enter password" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 character should be condain number and capital letters" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Login" /> <input type="reset" name="save" id="save" value="Reset" /></td>
    </tr>
  </table>
</form>
</div>
<br /><br /><br /><br><br>
<br />


<?php include("Template/Footer.php")?>

</body>
</html>