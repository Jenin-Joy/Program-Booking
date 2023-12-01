<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$district=$_POST["seldistrict"];
	$place=$_POST["txtplace"];
	
	if($_GET["editid"])
	{
	$update="update tbl_place set place_name='".$place."' where place_id='".$_GET["editid"]."'";
	mysql_query($update);
	header("Location:Place.php");
	
	}
	else
	{
	$ins="insert into tbl_place(district_id,place_name) value('".$district."','".$place."')";
	mysql_query($ins,$con);
}}
if($_GET["delid"])
{
	$del="delete from tbl_place where place_id='".$_GET["delid"]."'";
	mysql_query($del,$con);
	}
	
	
	if($_GET["editid"])
{
	 $sel="select * from tbl_place where place_id='".$_GET["editid"]."'";
		 $datas=mysql_query($sel);
		 $raw1=mysql_fetch_array($datas);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Place</title>
<?php include("HomePage.php")?>

</head>
<div id="tab" align="center">
<h2>Add Place</h2>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="312" border="1">
    <tr>
      <td width="132">District</td>
      <td width="168">
      <select name="seldistrict" required="required">
      <option selected="selected" value="">...Select....</option>
      
     
         <?php 
		 $sel="select * from tbl_district";
		 $datas=mysql_query($sel,$con);
		 while($raw=mysql_fetch_array($datas))
		 {
			 
			 ?>
             <option value="<?php echo $raw['district_id']?>" <?php if($raw['district_id']==$raw1['district_id']) { echo "selected";}?> ><?php echo $raw['district_name']?></option>
             
      <?php 
		 }
		 ?>
      
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txtplace"></label>
      <input type="text" name="txtplace" id="txtplace" value="<?php echo $raw1['place_name']?>" required="required" placeholder="Place" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" /><input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
  <table border="1">
  <tr>
  <th>
  Serial No
  </th>
  <th>Place</th>
  <th>District</th>
  <th colspan="2">Actions</th>
  </tr>
         <tr>
             <?php 
			 $sel="select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
			 $datas=mysql_query($sel);
			 $i=0;
			 while($raw=mysql_fetch_array($datas))
			 {
				 $i=$i+1;
				 ?>
                 <tr>
                     <td><?php echo $i ?></td>
                     <td><?php echo $raw["place_name"] ?></td>
                     <td><?php echo $raw["district_name"] ?></td>
                     <td><a href="Place.php?delid=<?php echo $raw["place_id"]?>">Delete</a></td>
                     <td><a href="Place.php?editid=<?php echo $raw["place_id"]?>";>Edit</a></td>
                 </tr>
                 <?php
                 }
			 ?>
         </tr>
  </table>
</form>
</body>
</div>
</html>