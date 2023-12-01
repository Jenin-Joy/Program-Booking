<?php
include("../Connection/Connection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Troop</title>
<script src="../JQuery/jQuery.js" type="text/javascript"></script>

<script>
function getplace(did)
{
	//alert(a);
	$.ajax({url:"AjaxPlace.php?disid="+did,
	success: function(result){
	$("#selplace").html(result);}});
}
</script>
<?php include("Template/Header.php") ?>
</head>
<div class="main_form" id="tab" align="center">
<br><br><br><br><br><br>
<h2>View Troops</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="356">
    <tr>
      <td>Select District</td>
      <td><select name="seldis" onchange="getplace(this.value)"><option selected="selected" onchange="getplace(this.value)">....Select....</option>
         <?php 
		 $sel="select * from tbl_district";
		 $datas=mysql_query($sel);
		 while($raw=mysql_fetch_array($datas))
		 {
	  ?>
      <option value="<?php echo $raw["district_id"] ?>"><?php echo $raw["district_name"] ?></option>
      <?php
		 }
		 ?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Select Place</td>
      <td><select name="selplace" id="selplace"><option selected="selected">....Select....</option>
       </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="txtshowtroop" id="txtshowtroop" value="Show Troop" /></td>
    </tr>
  </table>
  <br>
<?php
if(isset($_POST['txtshowtroop']))
{
?>
  <table width="400" height="119" border="1">
    <tr>
      <?php 
			 $sel="select * from tbl_troop where place_id='".$_POST["selplace"]."'";
			 $datas=mysql_query($sel);
			 while($raw=mysql_fetch_array($datas))
			 {
				 ?>
                 
    
      <td><img src="../Troops/Images/<?php echo $raw['troop_image']?>" height="200" width="200" />
      <p><?php echo $raw['troop_name']?></p>
      <a href="TroopDetails.php?troopid=<?php echo $raw['troop_id']?>">View Details</a>
      </td>
      
      
      
      
      
      <?php
			 }
			 ?>
    </tr>
  </table>
  <?php
}
?>
  <p>&nbsp;</p>
</form>
</body>
</div>

<?php include("Template/Footer.php") ?>
</html>