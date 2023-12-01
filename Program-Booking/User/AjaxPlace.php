<?php
include("../Connection/Connection.php");

$districtid=$_REQUEST['disid'];
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<option>------Select-------</option>
      <?php
	  $sel="select * from tbl_place where district_id='".$districtid."'";
	  $exe=mysql_query($sel); 
	  while($row=mysql_fetch_array($exe))
	  {
		  
	  ?>
      <option value="<?php echo $row['place_id'];?>"><?php echo $row['place_name'];?></option>
      <?php
	  }
	  ?>
</body>
</html>