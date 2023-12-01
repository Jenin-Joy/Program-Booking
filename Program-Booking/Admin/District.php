<?php
include("../Connection/Connection.php");


if(isset($_POST["save"]))
{

	$district=$_POST["txtdis"];
	
	
	if($_GET["editid"])
	{
	$update="update tbl_district set district_name='".$district."' where district_id='".$_GET["editid"]."'";
	mysql_query($update);
	header("Location:District.php");
	
	}
	else
	{
	
	$ins="insert into tbl_district(district_name) value('".$district."')";
	mysql_query($ins,$con);
	}
}



if($_GET["delid"])
{
	$del="delete from tbl_district where district_id='".$_GET["delid"]."'";
	mysql_query($del,$con);
}


	
	if($_GET["editid"])
{
	 $sel="select * from tbl_district where district_id='".$_GET["editid"]."'";
		 $datas=mysql_query($sel);
		 $raw=mysql_fetch_array($datas);
}
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
<?php include("HomePage.php")?>
</head>

<body>
<div id="tab" align="center">
<h2>Add District</h2>
<form method="post">
  <table width="319" border="1">
    <tr>
      <td width="92">District</td>
      <td width="211"><label for="txtdis"></label>
      <input type="text" name="txtdis" id="txtdis" value="<?php echo $raw['district_name']?>" required="required" placeholder="District" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
  <table border="1">
         <tr>
            <th>
            Serial No
            </th>
            <th>
            District
            </th>
            <th colspan="2">Action</th>
           
         </tr>
         <tr>
         <?php 
		 $sel="select * from tbl_district";
		 $datas=mysql_query($sel);
		 $i=0;
		 while($raw=mysql_fetch_array($datas))
		 {
			 $i=$i+1;
			 ?>
             <tr>
                 <td>
                 <?php echo $i?>
                 </td>
                 <td>
                 <?php echo $raw["district_name"]; ?>
                 </td>
                 <td><a href="District.php?delid=<?php echo $raw["district_id"]?>";>Delete</a></td>
                  <td><a href="District.php?editid=<?php echo $raw["district_id"]?>";>Edit</a></td>
             </tr>
             <?php
             }
		 ?>
         </tr>
  </table>
</form>
</div>
</body>
</html>