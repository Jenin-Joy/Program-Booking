<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$artist_type=$_POST["txtartype"];
	
	
	
	if($_GET["editid"])
	{
		$up="update tbl_artisttype set artisttype_name='".$artist_type."' where artisttype_id='".$_GET["editid"]."'";
		mysql_query($up);
		header("Location:ArtistType.php");
	}
else
{
	$ins="insert into tbl_artisttype(artisttype_name) value('".$artist_type."')";
	mysql_query($ins,$con);
	
	
}
}
if($_GET["delid"])
	{
		$del="delete from tbl_artisttype where artisttype_id='".$_GET["delid"]."'";
		//echo $del;
		mysql_query($del,$con);
		}
if($_GET["editid"])
{
	$sel1="select * from tbl_artisttype where artisttype_id='".$_GET["editid"]."'";
	$data=mysql_query($sel1);
	$raw=mysql_fetch_array($data);
}
?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Type</title>
<?php include("HomePage.php")?>

</head>

<body>
<div id="tab" align="center" style="overflow-x:auto">
<h2>Add Artist Type</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="350" border="1">
    <tr>
      <td>Artist Type</td>
      <td><label for="txtartype"></label>
      <input type="text" name="txtartype" id="txtartype" value="<?php echo $raw["artisttype_name"] ?>" required="required" placeholder="Artist Type" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
<table border="1">
<tr>
       <th>
       Serial NO
       </th>
       <th>
       Artist Type
       </th>
       <th colspan="2">Actions</th>
</tr>
<tr>
       <?php 
	   $sel="select * from tbl_artisttype";
	   $datas=mysql_query($sel,$con);
	   $i=0;
	   while($raw=mysql_fetch_array($datas))
	   {
		    $i=$i+1;
		?>
      <tr>
        <td>
        <?php echo $i ?>
        </td>
        <td><?php echo $raw["artisttype_name"]; ?></td>
        <td><a href="ArtistType.php?delid=<?php echo $raw["artisttype_id"]; ?>">Delete</a></td>
        <td><a href="ArtistType.php?editid=<?php echo $raw["artisttype_id"]?>";>Edit</a></td>
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