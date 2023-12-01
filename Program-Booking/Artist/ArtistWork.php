<?php
include("../Connection/Connection.php");
session_start();

if(isset($_POST["save"]))
{
	$workname=$_FILES["txtworks"]["name"];
	$workpath=$_FILES["txtworks"]["tmp_name"];
	move_uploaded_file($workpath,"ArtistWorks/".$workname);
	
	$caption=$_POST["txtcaption"];
	$ins="insert into tbl_artistwork(artistwork_file,artistwork_caption,artist_id) value('".$workname."','".$caption."','".$_SESSION['artistid']."')";
	mysql_query($ins);
	}
	
if($_GET["delid"])
{
	$del="delete from tbl_artistwork where artistwork_id='".$_GET["delid"]."'";
	//echo $del;
	mysql_query($del);
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Work</title>
<?php include("Template/Header.php")?>
</head>
<div class="main_form"  align="center" id="tab" style="overflow-x:auto">
<br><br><br><br><br><br>
<h2>Artist Works</h2>
<body>
<form id="request" name="form1" method="post" enctype="multipart/form-data" action="">
  <table width="416" >
    <tr>
      <td width="102">Works</td>
      <td width="298"><label for="txtworks"></label>
      <input type="file" name="txtworks" id="txtworks" required /></td>
    </tr>
    <tr>
      <td>Caption</td>
      <td><label for="txtcaption"></label>
      <input type="text" name="txtcaption" id="txtcaption" required placeholder="Captions" autocomplete="off" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Submit" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="600" border="1">
    <tr>
      <th width="41">No</th>
      <th width="212">Work Caption</th>
      <th width="212">Works</th>
      <th>Action</th>
    </tr>
    <?php
	  $sel="select * from tbl_artistwork where artist_id='".$_SESSION["artistid"]."'";
	  $data=mysql_query($sel);
	  $i=0;
	  while($row=mysql_fetch_array($data))
	   {
		   $i=$i+1;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $row["artistwork_caption"] ?></td>
      <td><img src="ArtistWorks/<?php echo $row["artistwork_file"] ?>" height="150" width="200" /></td>
      <td><a href="ArtistWork.php?delid=<?php echo $row["artistwork_id"] ?>">Delete</a></td>
    </tr>
    <?php
	   }
	   ?>
  </table>
  
  
</form>
</div>
<?php include("Template/Footer.php")?>
</body>
</html>