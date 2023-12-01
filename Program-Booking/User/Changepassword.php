<?php
include("../Connection/Connection.php");
session_start();

$sel="select * from tbl_user where user_id='".$_SESSION["userid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data);

if(isset($_POST["txtupdate"]))
{
	$cupass=$_POST["txtpass"];
	$newpass=$_POST["txtnewpass"];
	$conpass=$_POST["txtconnew"];
	if($cupass==$row["user_password"])
	{
		if($newpass==$conpass)
		{
			$up="update tbl_user set user_password='".$newpass."' where user_id='".$_SESSION["userid"]."'";
			mysql_query($up);
		}
		else
		{
			echo "<script>alert('error in confirm password!!')</script>";
		}
	}
	else
{
	echo "<script>alert('error in current password!!')</script>";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab" align="center">
<br><br><br><br><br><br>
<h2>Change Password</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="472">
    <tr>
      <td width="209">Current Password</td>
      <td width="247"><label for="txtpass"></label>
      <input type="text" name="txtpass" id="txtpass" required="required" placeholder="Current Password" autocomplete="off" pattern="[a-zA-z0-9]{8,20}" title="Enter atleast 8 character should be condain number and capital letter" /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="txtnewpass"></label>
      <input type="text" name="txtnewpass" id="txtnewpass" required="required" placeholder="New Password" autocomplete="off" pattern="[a-zA-z0-9]{8,20}" title="Enter atleast 8 character should be condain number and capital letter" /></td>
    </tr>
    <tr>
      <td>Confirm New Password</td>
      <td><label for="txtconnew"></label>
      <input type="text" name="txtconnew" id="txtconnew" required="required" placeholder="Confirm new Password" autocomplete="off" pattern="[a-zA-z0-9]{8,20}" title="Enter atleast 8 character should be condain number and capital letter" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="txtupdate" id="txtupdate" value="Update" /></td>
    </tr>
  </table>
</form>
</body>
</div>
<br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>