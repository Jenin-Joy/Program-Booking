<?php
include("../Connection/Connection.php");
session_start();

$sel="select * from tbl_artist where artist_id='".$_SESSION["artistid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data);

if(isset($_POST["txtupdate"]))
{
	$cupass=$_POST["txtpass"];
	$newpass=$_POST["txtnewpass"];
	$conpass=$_POST["txtconnew"];
	if($cupass==$row["artist_password"])
	{
		if($newpass==$conpass)
		{
			$up="update tbl_artist set artist_password='".$newpass."' where artist_id='".$_SESSION["artistid"]."'";
			mysql_query($up);
			echo "<script>alert(' Password Successfully Updated')</script>";
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
<?php include("Template/Header.php")?>
</head>
<div class="main_form"  align="center">
<br><br><br><br><br><br><br>
<h2>Change Password</h2>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="447">
    <tr>
      <td width="209">Current Password</td>
      <td width="222"><label for="txtpass"></label>
      <input type="text" name="txtpass" id="txtpass" required placeholder="Current Password" pattern="[a-zA-Z0-9]{8,20}" title="Enter at least 8 character should be condain numbers and captial letters"  /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="txtnewpass"></label>
      <input type="text" name="txtnewpass" id="txtnewpass" required placeholder="New Password" pattern="[a-zA-Z0-9] {8,20}" title="Enter at least 8 character should be condain numbers and captial letters"  /></td>
    </tr>
    <tr>
      <td>Confirm New Password</td>
      <td><label for="txtconnew"></label>
      <input type="text" name="txtconnew" id="txtconnew" required placeholder="Confirm New Password" pattern="[a-zA-Z0-9] {8,20}" title="Enter at least 8 character should be condain numbers and captial letters" /></td>
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
