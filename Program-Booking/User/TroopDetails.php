<?php
include("../Connection/Connection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Troop Details</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>Troop Details</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
 <?php 
	$sel="select * from tbl_troop where troop_id='".$_GET['troopid']."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	
	?>
  <table width="365">
    <tr>
      <td colspan="2"><img src="../Troops/Images/<?php echo $row['troop_image']?>" height="200" width="200" />
      <p><?php echo $row["troop_name"] ?></p></td>
    </tr>
    <tr>
   
      <td>Address</td>
      <td><?php echo $row["troop_address"] ?></td>
    </tr>
    <tr>
      <td>Condact</td>
      <td><?php echo $row["troop_condact"] ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><?php echo $row["troop_email"] ?></td>
    
    </tr>
  </table>
  <br>
  <h3>Packages</h3>
  <br>
  <table width="391" height="82" border="1">
    <tr>
    <th>
    No
    </th>
      <th>Name</th>
      <th>Description</th>
      <th>Rate</th>
      <th>Action</th>
    </tr>
      <?php 
  $sel1="select * from tbl_package where troop_id='".$_GET["troopid"]."'";
  $datas=mysql_query($sel1);
  $i=0;
  while($row=mysql_fetch_array($datas))
  {
	    $i=$i+1;

  ?>
    <tr>
     <td><?php echo $i?></td>
      <td><?php echo $row["package_name"] ?></td>
      <td><?php echo $row["package_des"]?></td>
      <td><?php echo $row["package_rate"]?></td>
      <td><a href="TroopBooking.php?Packageid=<?php echo $row["package_id"] ?>&troopid=<?php echo $_GET["troopid"] ?>">Book Now</a></td>
    </tr>
    <?php
  }
  ?>
  </table>
</form>
</body>
</div>
<br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>
