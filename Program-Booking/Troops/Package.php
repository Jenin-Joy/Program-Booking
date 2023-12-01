<?php
include("../Connection/Connection.php");
session_start();

if(isset($_POST["txtsave"]))
{
	$packagename=$_POST["txtpkname"];
	$pkdis=$_POST["txtpkdes"];
	$pkrate=$_POST["txtpkrate"];
	$troopid=$_SESSION['troopid'];
	
	
	if($_GET["editid"])
	{
		$up="update tbl_package set package_name='".$packagename."',package_des='".$pkdis."',package_rate='".$pkrate."' where package_id='".$_GET["editid"]."'";
		mysql_query($up);
		header("Location:Package.php");
	}
else
{
	//echo $troupid;
	$ins="insert into tbl_package(package_name,package_des,package_rate,troop_id) value('".$packagename."','".$pkdis."','".$pkrate."','".$troopid."')";
	mysql_query($ins);
	}}
if($_GET["delid"])
{
	$del="delete from tbl_package where package_id='".$_GET["delid"]."'";
	mysql_query($del);
}

if($_GET["editid"])
{
	$sel="select * from tbl_package where package_id='".$_GET["editid"]."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Package</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br>
<h2>Add Packages</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="543">
    <tr>
      <td>Package Name</td>
      <td><label for="txtpkname"></label>
      <input type="text" name="txtpkname" id="txtpkname" value="<?php echo $row["package_name"] ?>" required="required" placeholder="Package Name" /></td>
    </tr>
    <tr>
      <td>Package Description</td>
      <td><label for="txtpkdes"></label>
      <textarea name="txtpkdes" id="txtpkdes" cols="45" rows="5" required="required" placeholder="Package Description" ><?php echo $row["package_des"] ?> </textarea></td>
    </tr>
    <tr>
      <td>Package Rate</td>
      <td><label for="txtpkrate"></label>
      <input type="text" name="txtpkrate" id="txtpkrate" value="<?php echo $row["package_rate"] ?>" required="required" placeholder="Package Rate" /></td>
    </tr>
    <tr>
       <td colspan="2" align="center"><input type="submit" name="txtsave" id="txtsave" value="Save" /></td>
    </tr>
  </table>
  <br>
  
  <table width="652" border="1">
    <tr>
      <th width="60">No</th>
      <th width="147">Package Name</th>
      <th width="202">Package Description</th>
      <th width="64">Rate</th>
      <th colspan="2">Actions</th>
    </tr>
    <?php
	$sel="select * from tbl_package where troop_id='".$_SESSION["troopid"]."'";
	$data=mysql_query($sel);
	$i=0;
	while($row=mysql_fetch_array($data))
	{
		$i=$i+1;
	 ?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["package_name"] ?></td>
      <td><?php echo $row["package_des"] ?></td>
      <td><?php echo $row["package_rate"] ?></td>
      <td><a href="Package.php?delid=<?php echo $row["package_id"] ?>">Delete</a></td>
      <td><a href="Package.php?editid=<?php echo $row["package_id"] ?>">Edit</a></td>
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</div>
<?php include("Template/Footer.php") ?>
</html>
