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
<title>View Replays</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br><br>
<h2>View Replays</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="441" border="1">
    <tr>
      <th width="47">No</th>
      <th width="142">Complaint Type</th>
      <th width="120">Complaints</th>
      <th width="104">Replays</th>
      <th>Action</th>
    </tr>
    <?php
	$sel="select * from tbl_complaint c inner join tbl_artist a on c.artist_id=a.artist_id inner join  tbl_complainttype t on c.comptype_id=t.comptype_id where c.artist_id='".$_SESSION["artistid"]."'";
	//echo $sel;
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	 ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["comptype_name"] ?></td>
      <td><?php echo $row["comp_condent"] ?></td>
      <td><?php echo $row["comp_replay"] ?></td>
      <td><a href="ViewReplays.php?compid=<?php echo $row["comp_id"] ?>">Delete</a></td>
    </tr>
    <?php 
	}
	?>
  </table>
</form>
</body>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>