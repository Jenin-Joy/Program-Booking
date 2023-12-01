<?php
include("../Connection/Connection.php");

if($_GET["feedbackid"])
{
	$del="delete from tbl_feedback where feedback_id='".$_GET["feedbackid"]."'";
	mysql_query($del);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Feedback</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center" style="overflow-x:auto">
<h2>View FeedBacks</h2>
<br><br>
<form id="form1" name="form1" method="post" action="">
<h3>User FeedBacks</h3>
  <table width="450" border="1">
    <tr>
      <th width="46">No</th>
      <th width="112">Date</th>
      <th width="87">Names</th>
      <th width="141">Feed Backs</th>
      <th>Action</th>
    </tr>
    <?php 
	$sel="select * from tbl_feedback f inner join tbl_user u on f.user_id=u.user_id";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["feedback_date"] ?></td>
      <td><?php echo $row["us_name"] ?></td>
      <td><?php echo $row["feback_details"] ?></td>
      <td><a href="ViewFeedback.php?feedbackid=<?php echo $row["feedback_id"] ?>">Delete</a></td>
    </tr>
    <?php 
	}
	?>
  </table>
  <br><br>
  <h3>Troop FeedBacks</h3>
  <table width="450" border="1">
    <tr>
      <th width="46">No</th>
      <th width="112">Date</th>
      <th width="87">Names</th>
      <th width="141">Feed Backs</th>
      <th>Action</th>
    </tr>
    <?php 
	$sel="select * from tbl_feedback f inner join tbl_troop t on f.troop_id=t.troop_id";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["feedback_date"] ?></td>
      <td><?php echo $row["troop_name"] ?></td>
      <td><?php echo $row["feback_details"] ?></td>
      <td><a href="ViewFeedback.php?feedbackid=<?php echo $row["feedback_id"] ?>">Delete</a></td>
    </tr>
    <?php 
	}
	?>
  </table>
  <br><br>
  <h3>Artist FeedBacks</h3>
  <table width="450" border="1">
    <tr>
      <th width="46">No</th>
      <th width="112">Date</th>
      <th width="87">Names</th>
      <th width="141">Feed Backs</th>
      <th> Action</th>
    </tr>
    <?php 
	$sel="select * from tbl_feedback f inner join tbl_artist a on f.artist_id=a.artist_id";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["feedback_date"] ?></td>
      <td><?php echo $row["artist_name"] ?></td>
      <td><?php echo $row["feback_details"] ?></td>
      <td><a href="ViewFeedback.php?feedbackid=<?php echo $row["feedback_id"] ?>">Delete</a></td>
    </tr>
    <?php 
	}
	?>
  </table>
</form>
</div>
</body>
</html>