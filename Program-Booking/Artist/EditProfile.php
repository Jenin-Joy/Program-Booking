
<?php
include("../Connection/Connection.php");
session_start();


if(isset($_POST["txtsave"]))
{
	
	$up="update tbl_artist set artist_name='".$_POST['txtname']."',artist_condact='".$_POST['txtcondact']."',artist_email='".$_POST['txtemail']."',artist_address='".$_POST['txtaddress']."' where artist_id='".$_SESSION['artistid']."'";
	
	mysql_query($up);
}

	 $sel1="select * from tbl_artist where artist_id='".$_SESSION['artistid']."'";
	// echo $sel1;
	 $data=mysql_query($sel1);
	 $row=mysql_fetch_array($data);
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Profile</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form"  align="center">
<br><br><br><br><br><br><br>
<h2>Edit Profile</h2>
<body>
<form method="post">
     <table width="253">
           <tr>
              <td width="66">Name</td>
              <td width="77"><input type="text" name="txtname" value="<?php echo $row['artist_name'] ?>" required="required" /></td>
           </tr>
           <tr>
              <td>Condact</td>
              <td><input type="text" name="txtcondact" value="<?php echo $row["artist_condact"] ?>" required="required" /></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><input type="text" name="txtemail" value="<?php echo $row["artist_email"] ?>" required="required" /></td>
           </tr>
           <tr>
               <td>Address</td>
               <td><textarea name="txtaddress" required="required" /><?php echo $row["artist_address"] ?></textarea></td>
           </tr>
           <tr>
               <td colspan="2" align="center"><input type="submit" name="txtsave" id="txtsave" value="Up Date" /></td>
           </tr>
         
   </table>
</body>
</div>
<br><br>
<?php include("Template/Footer.php") ?>
</html>