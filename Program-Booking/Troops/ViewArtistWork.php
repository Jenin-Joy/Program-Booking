<?php
include("../Connection/Connection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Artist Work</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>View Artist Works</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
<?php 
	$sel="select * from tbl_artistwork where artist_id='".$_GET['artistid']."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	
	?>
  <table width="317">
    <tr>
      <td colspan="2"><img src="../Artist/artist works/<?php echo $row["artistwork_file"] ?>" height="200" width="200" /></td>
    </tr>
    <tr>
      <td>Captions</td>
      <td ><?php echo $row["artistwork_caption"] ?></td>
    </tr>
  </table>
</form>
</body>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>