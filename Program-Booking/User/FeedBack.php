<?php
include("../Connection/Connection.php");
session_start();
if(isset($_POST["save"]))
{
	$feedback=$_POST["txtfeedback"];
	$userid=$_SESSION["userid"];
	$ins="insert into tbl_feedback(feedback_date,feback_details,user_id) value('".date("Y-m-d")."','".$feedback."','".$userid."')";
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
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>Feed Back</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="1166">
      <td width="83">Feedback</td>
      <td width="1071"><label for="txtfeedback"></label>
      <textarea name="txtfeedback" id="txtfeedback" cols="60" rows="15" required="required" placeholder="Feed Backs"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</div>
<?php include("Template/Footer.php") ?>
</html>