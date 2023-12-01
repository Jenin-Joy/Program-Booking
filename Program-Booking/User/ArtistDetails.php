<?php
include("../Connection/Connection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Details</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>Artist Details</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <?php 
	$sel="select * from tbl_artist where artist_id='".$_GET['artistid']."'";
	$data=mysql_query($sel);
	$row=mysql_fetch_array($data);
	
	?>
  <table width="365">
    <tr>
      <td colspan="2"><img src="../Artist/Images/<?php echo $row['artist_image']?>" height="200" width="300" />
      <p><?php echo $row["artist_name"] ?></p></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo $row["artist_address"] ?></td>
    </tr>
    <tr>
      <td>Condact </td>
      <td><?php echo $row["artist_condact"] ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><a href="mailto:<?php echo $row["artist_email"] ?>"><?php echo $row["artist_email"] ?></td>
    </tr>
    <tr>
        <td>Rate</td>
        <td><?php echo $row["artist_rate"] ?></td>
    </tr>
  </table>
  <a href="ArtistBooking.php?artistid=<?php echo $row["artist_id"] ?>&artistrate=<?php echo $row["artist_rate"] ?> ">Book Now</a>	<a href="ViewArtistWork.php?artistid=<?php echo $row["artist_id"] ?>">View Works</a>
</form>
</body>
</div>br
<br><br><br><br><br><br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>