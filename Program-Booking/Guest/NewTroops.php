<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$name=$_POST["txtname"];
	$condact=$_POST["txtcondact"];
	$email=$_POST["txtemail"];
	$address=$_POST["txtaddress"];
	
	$imagename=$_FILES['txtphoto']['name'];
	$imgpath=$_FILES['txtphoto']['tmp_name'];
	move_uploaded_file($imgpath,"../Troops/Images/".$imagename);
	
	$proofname=$_FILES['txtproof']['name'];
	$proofpath=$_FILES['txtproof']['tmp_name'];
	move_uploaded_file($proofpath,"../Troops/Proof/".$proofname);
	
	$place=$_POST["selplace"];
	$usname=$_POST["txtuser"];
	$password=$_POST["txtpass"];
	$repassword=$_POST["txtrepass"];
	$ins="insert into tbl_troop(troop_name,troop_condact,troop_email,troop_address,troop_proof,troop_image,place_id,troop_usname,troop_password,troop_repassword) value('".$name."','".$condact."','".$email."','".$address."','".$proofname."','".$imagename."','".$place."','".$usname."','".$password."','".$repassword."')";
	mysql_query($ins,$con);
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Troop</title>
<?php include("Template/Header.php")?>
<script src="../JQuery/jQuery.js" type="text/javascript"></script>

<script>
function getplace(did)
{
	//alert(a);
	$.ajax({url:"../User/AjaxPlace.php?disid="+did,
	success: function(result){
	$("#selplace").html(result);}});
}
</script>


</head>
<div class="main_form" id="tab"  align="center">
<br/><br/><br/><br/><br/>
<br/><br/><br/>
<h2>Troop Registration</h2>
<body>
<form id="request" name="form1" method="post" enctype="multipart/form-data" action="">
  <table width="564">
    <tr>
      <td width="138">Name</td>
      <td width="340"><label for="txtname"></label>
      <input type="text" name="txtname" id="txtname" required="required" autocomplete="off" placeholder="Name" /></td>
    </tr>
    <tr>
      <td>Condact</td>
      <td><label for="txtcondact"></label>
      <input type="text" name="txtcondact" id="txtcondact" required="required" autocomplete="off" placeholder="Condact" pattern="[0-9]{10,12}" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txtemail"></label>
      <input type="email" name="txtemail" id="txtemail" required="required" autocomplete="off" placeholder="Email" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txtaddress"></label>
      <textarea name="txtaddress" id="txtaddress" cols="45" rows="5" required="required" placeholder="Address"></textarea></td>
    </tr>
    <tr>
      <td>Image</td>
      <td><label for="txtphoto"></label>
      <input type="file" name="txtphoto" id="txtphoto" required="required" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="txtproof"></label>
      <input type="file" name="txtproof" id="txtproof" required="required" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><select name="seldistrict" onchange="getplace(this.value)" required="required">
      <option selected="selected" value="">...Select....</option>
      <?php 
		 $sel="select * from tbl_district";
		 $datas=mysql_query($sel,$con);
		 while($raw=mysql_fetch_array($datas))
		 {
			 ?>
             <option value="<?php echo $raw["district_id"] ?>"><?php echo $raw["district_name"] ?></option>
             <?php
		 }
		 ?></select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><select name="selplace" id="selplace" required="required">
      <option selected="selected" value="">...Select....</option>
      </select></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="txtuser" id="txtuser" required="required" placeholder="User name" autocomplete="off"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="txtpass" id="txtpass" required="required" placeholder="Password" autocomplete="off" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 character should be condain numbers and capital letters"/></td>
    </tr>
    <tr>
      <td>Re_enter Password</td>
      <td><input type="password" name="txtrepass" id="txtpass" required="required" placeholder="Password" autocomplete="off" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 character should be condain numbers and capital letters"/></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel"/>
      </td>
    </tr>
  </table>
</form>
</div>

<?php include("Template/Footer.php")?>

</body>
</html>