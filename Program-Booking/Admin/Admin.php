<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$username=$_POST["txtusname"];
	$password=$_POST["txtpass"];
	$ins="insert into tbl_admin(admin_username,admin_password) value('".$username."','".$password."')";
	mysql_query($ins,$con);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="323" border="1">
    <tr>
      <td width="167">User Name</td>
      <td width="259"><label for="txtusname"></label>
      <input type="text" name="txtusname" id="txtusname" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txtpass"></label>
      <input type="password" name="txtpass" id="txtpass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>