<?php
include("../Connection/Connection.php");
session_start();


if(isset($_POST["save"]))
{
	$userid=$_SESSION['userid'];
	$package=$_POST["selpack"];
	$date=$_POST["txtdate"];
	$pgmlocation=$_POST["txtpgmloc"];
	$extra=$_POST["txtextra"];
	$pgmtype=$_POST["selpgmtype"];
	$condact=$_POST["txtcondact"];
	$ins="insert into tbl_troopbooking(troop_id,user_id,booking_date,booking_todate,package_id,pgm_location,extra,condact,pgmtype_id) value('".$_GET["troopid"]."','".$userid."','".date('Y-m-d')."','".$date."','".$_GET["Packageid"]."','".$pgmlocation."','".$extra."','".$condact."','".$pgmtype."')";
	mysql_query($ins);
	
	$sel="select MAX(trbook_id) as bid from tbl_troopbooking";
	$data=mysql_query($sel);
	$rows=mysql_fetch_array($data);
	
	header("Location:Payment/First.php?Amt=".$_POST["rate"]."&Id=".$rows["bid"]."");
	
	}
	$sel1="select * from tbl_package where package_id='".$_GET["Packageid"]."'";
	$datas=mysql_query($sel1);
	$row=mysql_fetch_array($datas);
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Troop Booking</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>Troop Booking</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="533">
    <tr>
      <td width="157">Package</td>
      <td width="360"><label for="txtpackage"></label>
      <?php echo $row["package_name"] ?>
      </td>
      <tr>
      
        <td width="157">Rate</td>
        <td><input type="text" name="rate" readonly="readonly" value="<?php echo $row["package_rate"] ?>"/></td>
    </tr>
    <tr>
      <td>Date</td>
      <td><label for="txtdate"></label>
      <input type="date" name="txtdate" id="txtdate" required="required" /></td>
    </tr>
    <tr>
      <td>Program Location</td>
      <td><label for="txtpgmloc"></label>
      <textarea name="txtpgmloc" id="txtpgmloc" cols="45" rows="5" required="required" placeholder="Program Location"></textarea></td>
    </tr>
    <tr>
      <td>Extra</td>
      <td><label for="txtextra"></label>
      <textarea name="txtextra" id="txtextra" cols="45" rows="5" required="required" placeholder="Enter extra things or enter nothing"></textarea></td>
    </tr>
    <tr>
      <td>Program Type</td>
      <td><select name="selpgmtype" required="required"><option selected="selected" value="">....Select.....</option>
       <?php 
			 $sel="select * from tbl_programtype";
			 $data=mysql_query($sel,$con);
			 while($raw=mysql_fetch_array($data))
			 {
				 ?>
                 <option value="<?php echo $raw["pgmtype_id"] ?>"><?php echo $raw["pgmtype_name"] ?></option>
                <?php
			 }
			 ?>
      
      
      </select></td>
    </tr>
    <tr>
      <td>Condact</td>
      <td><label for="txtcondact"></label>
      <input type="text" name="txtcondact" id="txtcondact" required="required" placeholder="Condact" autocomplete="off" pattern="[0-9]{10,12}" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Book Now" /></td>
    </tr>
  </table>
</form>
</body>
</div>
<?php include("Template/Footer.php") ?>
</html>