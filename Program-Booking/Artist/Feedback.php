<?php
include("../Connection/Connection.php");
session_start();
if(isset($_POST["save"]))
{
	$feedback=$_POST["txtfeedback"];
	$artistid=$_SESSION["artistid"];
	$ins="insert into tbl_feedback(feedback_date,feback_details,artist_id) value('".date("Y-m-d")."','".$feedback."','".$artistid."')";
	mysql_query($ins);
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Feed Back</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form"  align="center">
<br /><br /><br><br><br><br>
<h2>Feed Backs</h2>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="1267">
      <td>Feedback</td>
      <td><label for="txtfeedback"></label>
      <textarea name="txtfeedback" id="txtfeedback" cols="30" rows="12" required="required" placeholder="Enter feed backs"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</div>
<br>
<?php include("Template/Footer.php") ?>
</html>