<?php
include("../Connection/Connection.php");


if($_GET["conid"])
{
	$del="delete from tbl_contact where contact_id='".$_GET["conid"]."'";
	mysql_query($del);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center">
<h2>Condact</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="770" border="1">
    <tr>
      <th width="60">No</th>
      <th width="167">Name</th>
      <th width="186">Phone Number</th>
      <th width="173">Email</th>
      <th width="150">Message</th>
      <th width="60">Actions</th>
    </tr>
    <?php 
		 $sel="select * from tbl_contact";
		 $datas=mysql_query($sel);
		 $i=0;
		 while($raw=mysql_fetch_array($datas))
		 {
			 $i=$i+1;
			 ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $raw["contact_name"] ?></td>
      <td><?php echo $raw["contact_number"] ?></td>
      <td><?php echo $raw["contact_email"] ?></td>
      <td><?php echo $raw["contact_msg"] ?></td>
      <td><a href="Contact.php?conid=<?php echo $raw["contact_id"] ?>">Delete</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>