<?php
include("../Connection/Connection.php");
session_start();
if(isset($_POST["save"]))
{
	$artist=$_GET["artistid"];
	$user=$_SESSION['userid'];
	$date=$_POST["txtdate"];
	$pgmloc=$_POST["txtpgmlocation"];
	$co_condact=$_POST["txtcondact"];
	$amt=$_GET["artistrate"];
	//echo $date;
	$ins="insert into tbl_artistbook(artist_id,artistbook_date,artistbook_todate,arbook_totalamt,condact,pgm_loc,user_id) value('".$artist."','".date("Y-m-d")."','".$date."','".$amt."','".$co_condact."','".$pgmloc."','".$user."')";
	mysql_query($ins);
	
	$sel="select MAX(arbook_id) as bid from tbl_artistbook";
	$data=mysql_query($sel);
	$rows=mysql_fetch_array($data);
	
	header("Location:Payment1/First.php?Amt=".$_POST["rate"]."&Id=".$rows["bid"]."");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist Booking</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form"  id="tab" align="center">
<br><br><br><br><br><br>
<h2>Artist Booking</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
<?php
$sel="select * from tbl_artist where artist_id='".$_GET["artistid"]."'";
$data=mysql_query($sel);
$row=mysql_fetch_array($data); 
?>
  <table width="502">
  <tr>
      <td>Artist Name</td>
      <td><?php echo $row["artist_name"] ?></td>
  </tr>
    <tr>
      <td width="185">Date</td>
      <td width="203"><label for="txtdate"></label>
      <input type="date" name="txtdate" id="txtdate" required /></td>
    </tr>
    <tr>
      <td>Program Location</td>
      <td><label for="txtpgmlocation"></label>
      <textarea name="txtpgmlocation" id="txtpgmlocation" cols="35" rows="5" required placeholder="Program Location"></textarea></td>
    </tr>
    <tr>
      <td>Co-ordinator Condact</td>
      <td><label for="txtcondact"></label>
      <input type="text" name="txtcondact" id="txtcondact" required placeholder="Condact" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Amount</td>
      <td><input type="text" name="rate" readonly value="<?php echo $row["artist_rate"] ?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Book Now" /></td>
    </tr>
  </table>
</form>
</body>
</div>
<?php include("Template/Footer.php")  ?>
</html>