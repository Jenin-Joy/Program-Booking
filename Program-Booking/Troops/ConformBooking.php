<?php
include("../Connection/Connection.php");
session_start();

if($_GET["troopbookid"])
{
	$up="update tbl_troopbooking set troop_status='1' where trbook_id='".$_GET["troopbookid"]."'";
	//echo $up;
	mysql_query($up);
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm Booking</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab" align="center">
<br /><br /><br /><br<br><br><br><br>
<h2>Confirm Booking</h2>
<br>
<body>
<form id="request">
<h3>User Booking</h3>
<table width="1000" border="1">
  <tr>
    <th width="30">No</th>
    <th width="101">Name</th>
    <th width="110">Package Name</th>
    <th width="101">Book Date</th>
    <th width="126">Book To Date</th>
    <th width="150">Program Location</th>
    <th width="101">Extra</th>
    <th width="101">Condact </th>
    <th width="152">Program Type Name</th>
  </tr>
  <?php 
  $sel="select * from tbl_troopbooking t inner join tbl_user u on u.user_id=t.user_id inner join tbl_package p on p.package_id=t.package_id inner join tbl_programtype pt on pt.pgmtype_id=t.pgmtype_id  where t.troop_id='".$_SESSION['troopid']."' and t.troop_status=1";
 // echo $sel;
  $data=mysql_query($sel);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["user_name"] ?></td>
    <td><?php echo $row["package_name"] ?></td>
    <td><?php echo $row["booking_date"] ?></td>
    <td><?php echo $row["booking_todate"] ?></td>
    <td><?php echo $row["pgm_location"] ?></td>
    <td><?php echo $row["extra"] ?></td>
    <td><?php echo $row["condact"] ?></td>
    <td><?php echo $row["pgmtype_name"] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>