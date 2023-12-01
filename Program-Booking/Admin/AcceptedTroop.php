<?php
include("../Connection/Connection.php");

if($_GET["accid"])
{
	$up="update tbl_troop set troop_status='1' where troop_id='".$_GET["accid"]."'";
	mysql_query($up);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Accepted Troop</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center" style="overflow-x:auto">
<h2>Accepted Troops</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="1213" border="1">
    <tr>
      <th width="50">No</th>
      <th width="111">Name</th>
      <th width="142">Condact</th>
      <th width="146">Email</th>
      <th width="194">Address</th>
      <th width="122">Place</th>
      <th width="179">Image</th>
      <th width="165">Proof</th>
    </tr>
    <?php 
	$sel="select * from tbl_troop t inner join tbl_place p on t.place_id=p.place_id  where troop_status=1";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["troop_name"] ?></td>
      <td><?php echo $row["troop_condact"] ?></td>
      <td><?php echo $row["troop_email"] ?></td>
      <td><?php echo $row["troop_address"] ?></td>
      <td><?php echo $row["place_name"] ?></td>
      <td><img src="../Troops/Images/<?php echo $row["troop_image"] ?>" height="200" width="179" /></td>
      <td><img src="../Troops/Proof/<?php echo $row["troop_proof"] ?>" height="200" width="165" /></td>
     </tr>
     <?php
	}
	?>
   </table>
</form>
</div>
</body>
</html>