
<?php
include("../Connection/Connection.php");
session_start();

if(isset($_POST["txtsave"]))
{
	
	$up="update tbl_troop set troop_name='".$_POST['txtname']."',troop_condact='".$_POST['txtcontact']."',troop_email='".$_POST['txtemail']."',troop_address='".$_POST['txtaddress']."' where troop_id='".$_SESSION['troopid']."'";
	
	mysql_query($up);
}

	 $sel="select * from tbl_troop where troop_id='".$_SESSION['troopid']."'";
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
<br /><br /><br /><br<br><br><br><br>
<h2>Edit Profile</h2>
<br>
<body>
<form id="request" method="post">
     <table width="253">
    
           <tr>
              <td width="66">Name</td>
              <td width="77"><input type="text" name="txtname" value="<?php echo $row['troop_name'] ?>" required="required" placeholder="Name" /></td>
           </tr>
           <tr>
              <td>Condact</td>
              <td><input type="text" name="txtcontact" value="<?php echo $row["troop_condact"] ?>" required="required" placeholder="Condact" /></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><input type="text" name="txtemail" value="<?php echo $row["troop_email"] ?>" required="required" placeholder="Email" /></td>
           </tr>
           <tr>
               <td>Address</td>
               <td><textarea name="txtaddress" required="required" placeholder="Address"><?php echo $row["troop_address"] ?></textarea></td>
           </tr>
           <tr>
               <td colspan="2" align="center"><input type="submit" name="txtsave" id="txtsave" value="Up Date" /></td>
           </tr>
  </table>
</form>
</body>
</div>
<br>
<?php include("Template/Footer.php") ?>
</html>