<?php
include("../Connection/Connection.php");
session_start();
if($_GET["artistbookid"])
{
	
$up="update tbl_artistbook set arbook_status='1' where arbook_id='".$_GET["artistbookid"]."'";
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
<div class="main_form"  align="center" id="tab" style="overflow-x:auto">
<br><br><br><br><br><br>
<h2>Confirm Booking</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
<table width="804" border="1" >
<h3>Troop Booking</h3>
<br>
  <tr>
    <th hwidth="101">No</th>
    <th width="101">Name</th>
    <th width="101">Address</th>
    <th width="101">Book Date</th>
    <th width="126">Book To Date</th>
    <th width="76">Amount</th>
    <th width="101">Condact </th>
    <th width="152">Program Location</th>
  </tr>
  <?php 
  $sel="select * from tbl_artistbook a inner join tbl_troop t on t.troop_id=a.troup_id where artist_id='".$_SESSION['artistid']."' and arbook_status=1";
  //echo $sel;
  $data=mysql_query($sel);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["troop_name"] ?></td>
    <td><?php echo $row["troop_address"] ?></td>
    <td><?php echo $row["artistbook_date"] ?></td>
    <td><?php echo $row["artistbook_todate"] ?></td>
    <td><?php echo $row["arbook_totalamt"] ?></td>
    <td><?php echo $row["condact"] ?></td>
    <td><?php echo $row["pgm_loc"] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<br>
</form>
<form id="form1" name="form1" method="post" action="">
<table width="804" border="1" >
<h3>User Booking</h3>
<br>
  <tr>
    <th width="101">No</th>
    <th width="101">Name</th>
    <th width="101">Address</th>
    <th width="101">Book Date</th>
    <th width="126">Book To Date</th>
    <th width="76">Amount</th>
    <th width="101">Condact </th>
    <th width="152">Program Location</th>
  </tr>
  <?php 
  $sel1="select * from tbl_artistbook a inner join tbl_user u on u.user_id=a.user_id where artist_id='".$_SESSION['artistid']."' and arbook_status=1";
  //echo $sel;
  $data=mysql_query($sel1);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["user_name"] ?></td>
    <td><?php echo $row["user_address"] ?></td>
    <td><?php echo $row["artistbook_date"] ?></td>
    <td><?php echo $row["artistbook_todate"] ?></td>
    <td><?php echo $row["arbook_totalamt"] ?></td>
    <td><?php echo $row["condact"] ?></td>
    <td><?php echo $row["pgm_loc"] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</body>
</div>
<br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>