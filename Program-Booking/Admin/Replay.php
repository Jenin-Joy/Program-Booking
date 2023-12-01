<?php
include("../Connection/Connection.php");

if(isset($_POST["txtsave"]))
{
	$replay=$_POST["txtreplay"];
	$up="update tbl_complaint set comp_replay='".$replay."',comp_status='1' where comp_id='".$_GET["compid"]."'";
	mysql_query($up);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Replay</title>
<?php include("HomePage.php") ?>
</head>

<body>
<div id="tab" align="center">
<h2>Replays</h2>
<form name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td><label for="txtsave"></label>
      <textarea name="txtreplay" id="txtreplay" cols="70" rows="30" required="required" placeholder="Replay"></textarea></td>
    </tr>
    <tr>
      <td align="right"><input type="submit" name="txtsave" id="txtsave" value="Replay"></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>