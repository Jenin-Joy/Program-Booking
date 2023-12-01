<?php
include("../Connection/Connection.php");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Profile</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab" align="center">
<br><br><br><br><br><br>
<h2>View Profile</h2>
<br>
<body>
<form id="request">
     <table width="253">
     <?php
	 $sel="select * from tbl_user where user_id='".$_SESSION['userid']."'";
	// echo $sel;
	 $data=mysql_query($sel);
	 $row=mysql_fetch_array($data);
	 
		 ?>
           <tr>
              <td width="66">Name</td>
              <td width="77"><?php echo $_SESSION['username'] ?></td>
           </tr>
           <tr>
              <td>Condact</td>
              <td><?php echo $row["user_condact"] ?></td>
           </tr>
           <tr>
               <td>Email</td>
               <td><?php echo $row["user_email"] ?></td>
           </tr>
           <tr>
               <td>Address</td>
               <td><?php echo $row["user_address"] ?></td>
           </tr>
     </table>
</form>
</body>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>