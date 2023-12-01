<?php
include("../Connection/Connection.php");
session_start();

if($_GET["compid"])
{
	$del="delete from tbl_complaint where comp_id='".$_GET["compid"]."'";
	mysql_query($del);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Complaints</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center" style="overflow-x:auto">
<h2>View Complaints</h2>
<br><br>
<form id="form1" name="form1" method="post" action="">
<h2>User Complaints</h2>
<table width="800" border="1">
  <tr>
    <th width="30">No</th>
    <th width="95">Date</th>
    <th width="91">Name</th>
    <th width="135">Complaint Type</th>
    <th width="155">Complaints</th>
    <th width="91">Condact</th>
    <th colspan="2">Actions</th>
  </tr>
  <?php 
  $sel="select * from tbl_complaint c inner join tbl_user u on c.user_id=u.user_id inner join tbl_complainttype t on c.comptype_id=t.comptype_id where comp_status=0";
  $data=mysql_query($sel);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["comp_date"] ?></td>
    <td><?php echo $row["user_name"] ?></td>
    <td><?php echo $row["comptype_name"] ?></td>
    <td><?php echo $row["comp_condent"] ?></td>
    <td><?php echo $row["user_condact"] ?></td>
    <td width="87"><a href="Replay.php?compid=<?php echo $row["comp_id"] ?>">Replay</a></td>
    <td><a href="ViewComplaints.php?compid=<?php echo $row["comp_id"] ?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table><br><br>
<h2>Troop Complaints</h2>
<table width="800" border="1">
  <tr>
    <th width="30">No</th>
    <th width="95">Date</th>
    <th width="91">Name</th>
    <th width="135">Complaint Type</th>
    <th width="155">Complaints</th>
    <th width="91">Condact</th>
    <th colspan="2">Actions</th>

  </tr>
  <?php 
  $sel1="select * from tbl_complaint c inner join tbl_troop t on c.troop_id=t.troop_id inner join tbl_complainttype p on p.comptype_id=c.comptype_id where comp_status=0";
  $data=mysql_query($sel1);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["comp_date"] ?></td>
    <td><?php echo $row["troop_name"] ?></td>
    <td><?php echo $row["comptype_name"] ?></td>
    <td><?php echo $row["comp_condent"] ?></td>
    <td><?php echo $row["troop_condact"] ?></td>
    <td><a href="Replay.php?compid=<?php echo $row["comp_id"] ?>">Replay</a></td>
    <td><a href="ViewComplaints.php?compid=<?php echo $row["comp_id"] ?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table><br><br>
<h2>Artist Complaints</h2>
<table width="800" border="1">
  <tr>
   <th width="30">No</th>
    <th width="95">Date</th>
    <th width="91">Name</th>
    <th width="135">Complaint Type</th>
    <th width="155">Complaints</th>
    <th width="91">Condact</th>
    <th colspan="2">Actions</th>

  </tr>
  <?php 
  $sel2="select * from tbl_complaint c inner join tbl_artist a on c.artist_id=a.artist_id inner join tbl_complainttype p on p.comptype_id=c.comptype_id where comp_status=0";
  $data=mysql_query($sel2);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row["comp_date"] ?></td>
    <td><?php echo $row["artist_name"] ?></td>
    <td><?php echo $row["comptype_name"] ?></td>
    <td><?php echo $row["comp_condent"] ?></td>
    <td><?php echo $row["artist_condact"] ?></td>
    <td><a href="Replay.php?compid=<?php echo $row["comp_id"] ?>">Replay</a></td>
    <td><a href="ViewComplaints.php?compid=<?php echo $row["comp_id"] ?>">Delete</a></td>
  </tr>
  <?php
  }
  ?>
</table>
</form>
</div>
</body>
</html>