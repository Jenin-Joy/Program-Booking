<?php
include("../Connection/Connection.php");

if($_GET["rejid"])
{
	$up="update tbl_artist set artist_status='2' where artist_id='".$_GET["rejid"]."'";
	mysql_query($up);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reject Artist</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center" style="overflow-x:auto">
<h2>Rejected Artists</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="1213" border="1">
    <tr>
      <th width="53">No</th>
      <th width="129">Name</th>
      <th width="158">Condact</th>
      <th width="153">Email</th>
      <th width="226">Address</th>
      <th width="178">place</th>
      <th width="201">Image</th>
    </tr>
    <?php 
	$sel="select * from tbl_artist a inner join tbl_place p on a.place_id=p.place_id where artist_status=2";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	 ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["artist_name"] ?></td>
      <td><?php echo $row["artist_condact"] ?></td>
      <td><?php echo $row["artist_email"] ?></td>
      <td><?php echo $row["artist_address"] ?></td>
      <td><?php echo $row["place_name"] ?></td>
      <td><img src="../Artist/Images/<?php echo $row["artist_image"] ?>" height="160" width="201" /></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</div>
</body>
</html>