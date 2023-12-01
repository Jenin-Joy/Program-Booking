<?php  
include("../Connection/Connection.php");
session_start();

if(isset($_POST["save"]))
{
	$comptype=$_POST["selcomtype"];
	$condent=$_POST["txtcomplaints"];
	$user=$_SESSION["userid"];
	$ins="insert into tbl_complaint(comp_date,comptype_id,comp_condent,user_id) value('".date('Y-m-d')."','".$comptype."','".$condent."','".$user."')";
	//echo $ins;
	mysql_query($ins);
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaints</title>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab" align="center">
<br><br><br><br><br><br>
<h2>Complaints</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="1267">
    <tr>
      <td width="152">Complaint Type</td>
      <td width="1099"><select name="selcomtype" required="required"><option selected="selected" value="">....Select....</option>
      <?php
  $sel="select * from tbl_complainttype";
  $data=mysql_query($sel);
  while($row=mysql_fetch_array($data))
  {
	  ?>
      <option value="<?php echo $row["comptype_id"] ?>"><?php echo $row["comptype_name"] ?></option>
      <?php
  }
  ?>
      
      </select></td>
    </tr>
    <tr>
      <td>Complaints</td>
      <td><label for="txtcomplaints"></label>
      <textarea name="txtcomplaints" id="txtcomplaints" cols="80" rows="15" required="required" placeholder="Complaints"></textarea></td>
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