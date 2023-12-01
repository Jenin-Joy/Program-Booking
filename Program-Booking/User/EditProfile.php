
<?php
include("../Connection/Connection.php");
session_start();

if(isset($_POST["txtsave"]))
{
	
	$up="update tbl_user set user_name='".$_POST['txtname']."',user_condact='".$_POST['txtcondact']."',user_email='".$_POST['txtemail']."',user_address='".$_POST['txtaddress']."' where user_id='".$_SESSION['userid']."'";
	
	mysql_query($up);
}

	 $sel="select * from tbl_user where user_id='".$_SESSION['userid']."'";
	// echo $sel;
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>Edit Profile</h2>
<br>
<body>
<form id="request" method="post">
     <table width="300">
           <tr>
              <td width="66">Name</td>
              <td width="77"><input type="text" name="txtname" value="<?php echo $row['user_name'] ?>" required="required" placeholder="Name" /></td>
           </tr>
           <tr>
              <td>Condact</td>
              <td><input type="text" name="txtcondact" value="<?php echo $row["user_condact"] ?>" required="required" placeholder="Condact" /></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><input type="text" name="txtemail" value="<?php echo $row["user_email"] ?>" required="required" placeholder="Email"/></td>
           </tr>
           <tr>
               <td>Address</td>
               <td><textarea name="txtaddress" required="required" placeholder="Address"><?php echo $row["user_address"] ?></textarea></td>
           </tr>
           <tr>
              <td colspan="2" align="center">
                <input type="submit" name="txtsave" id="txtsave" value="Up Date" />
              </td>
           </tr>
         
     </table>
     </form>
</body>
</div>
<br>
<?php include("Template/Footer.php") ?>
</html>