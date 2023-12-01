<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$name=$_POST["txtname"];
	$condact=$_POST["txtcondact"];
	$email=$_POST["txtemail"];
	$address=$_POST["txtaddress"];
	$usname=$_POST["txtuser"];
	$password=$_POST["txtpass"];
	$repassword=$_POST["txtrepass"];
	$ins="insert into tbl_user(us_name,user_condact,user_email,user_address,user_name,user_password,user_repassword) value('".$name."','".$condact."','".$email."','".$address."','".$usname."','".$password."','".$repassword."')";
	mysql_query($ins,$con);
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User</title>
<?php include("Template/Header.php")?>
</head>
<div class="main_form" id="tab" align="center">
<br/><br/><br/><br/><br/>
<br/><br/><br/>
<h2>User Registration</h2>

<body>
<form id="request" name="form1" method="post" action="">
  <table width="402">
    <tr>
      <td width="159">Name</td>
      <td width="231"><input type="text" name="txtname" id="txtname" required="required" placeholder="Name" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Condact</td>
      <td><input type="text" name="txtcondact" id="txtcondact" required="required" placeholder="Condact" autocomplete="off" pattern="[0-9]{10,12}" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="txtemail" id="txtemail" required="required" placeholder="Email" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="txtaddress" id="txtaddress" cols="30" rows="5" required="required" placeholder="Address"></textarea></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="txtuser" id="txtuser" required="required" placeholder="User name" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtpass" id="txtpass" required="required" autocomplete="off" placeholder="Enter password" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 characters should be condain number and capital letters" /></td>
    </tr>
    <tr>
      <td>Re-enter Password</td>
      <td><input type="password" name="txtrepass" id="txtpass" required="required" autocomplete="off" placeholder="Enter password" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 characters should be condain number and capital letters" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</div>

<?php include("Template/Footer.php")?>

</body>
</html>