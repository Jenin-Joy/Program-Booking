<?php  
include("../Connection/Connection.php");

if(isset($_POST["txtsave"]))
{
	$comptype=$_POST["txtcomtype"];
	
	if($_GET["editid"])
	{
		$up="update tbl_complainttype set comptype_name='".$comptype."' where comptype_id='".$_GET["editid"]."'";
		mysql_query($up);
		header("Location:ComplaintType.php");
	}
else
{
    $ins="insert into tbl_complainttype(comptype_name) value('".$comptype."')";
	mysql_query($ins);
}
}
if($_GET["delid"])
{
	$del="delete from tbl_complainttype where comptype_id='".$_GET["delid"]."'";
	mysql_query($del);
}
if($_GET["editid"])
{
	$sel1="select * from tbl_complainttype where comptype_id='".$_GET["editid"]."'";
	$data=mysql_query($sel1);
	$row=mysql_fetch_array($data);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint Type</title>
<?php include("HomePage.php")?>

</head>
<div id="tab" align="center" style="overflow-x:auto">
<h2>Add Complaint Types</h2>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="350" border="1">
    <tr>
      <td>Complaint Type</td>
      <td><label for="txtcomtype"></label>
      <input type="text" name="txtcomtype" id="txtcomtype" value="<?php echo $row["comptype_name"] ?>" required="required" placeholder="Complaint Type" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="txtsave" id="txtsave" value="Save" />
      <input type="submit" name="txtcancel" id="txtcancel" value="cancel" /></td>
    </tr>
  </table>
  <table border="1">
  <tr>
     <th>No</th>
     <th>Complaint Type</th>
     <th colspan="2">Actions</th>
  </tr>
  <?php
  $sel="select * from tbl_complainttype";
  $data=mysql_query($sel);
  $i=0;
  while($row=mysql_fetch_array($data))
  {
	  $i=$i+1;
  ?><tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row["comptype_name"] ?></td>
       <td><a href="ComplaintType.php?delid=<?php echo $row["comptype_id"] ?>">Delete</a></td>
       <td><a href="ComplaintType.php?editid=<?php echo $row["comptype_id"]?>";>Edit</a></td>
  </tr>
  <?php
  }
  ?>
  </table>
</form>
</body>
</div>
</html>