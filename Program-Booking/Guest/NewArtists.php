<?php 
include("../Connection/Connection.php");


if(isset($_POST["txtsave"]))
{
	$name=$_POST["txtname"];
	$condact=$_POST["txtcon"];
	$email=$_POST["txtemail"];
	$gender=$_POST["gender"];
	$dob=$_POST["txtdob"];
	
	$imagename=$_FILES['txtimg']['name'];
	$imgpath=$_FILES['txtimg']['tmp_name'];
	move_uploaded_file($imgpath,"../Artist/Images/".$imagename);
	
	$place=$_POST["selplace"];
	$usname=$_POST["txtuser"];
	$password=$_POST["txtpass"];
	$repassword=$_POST["txtrepass"];
	$artisttypeid=$_POST["selartype"];
	$address=$_POST["txtaddress"];
	$rate=$_POST["txtrate"];
	
	if($_POST["txtpass"]==$_POST["txtrepass"])
	{
	$ins="insert into tbl_artist(artist_name,artist_condact,artist_email,artist_gender,artist_dob,artist_username,artist_password,artist_repassword,artisttype_id,artist_address,artist_rate,artist_image,place_id) value('".$name."','".$condact."','".$email."','".$gender."','".$dob."','".$usname."','".$password."','".$repassword."','".$artisttypeid."','".$address."','".$rate."','".$imagename."','".$place."')";
	mysql_query($ins,$con);
	}
	else
	{
		echo "<script>alert('Incorrect retypepassword')</script>";
	}
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artist</title>
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
<h2>Artist Registration</h2>
<body>
<form id="request" name="form1" method="post" enctype="multipart/form-data" action="">
<table width="510" >
  <tr>
    <td width="162">Name</td>
    <td width="336"><input type="text" name="txtname" id="txtname"  required="required" autocomplete="off" pattern="[a-zA-Z. ]{5,15}" title="Enter atleast 5 characters" placeholder="Name"/></td>
  </tr>
  <tr>
    <td>Condact</td>
    <td><input type="text" name="txtcon" id="txtcon" required="required" autocomplete="off" placeholder="Condact" pattern="[0-9]{10,12}" title="Enter 10 numbers" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input type="email" name="txtemail" id="txtemail" required="required" autocomplete="off" placeholder="Email" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" id="gender" value="male" required="required" />Male
    <input type="radio" name="gender" id="gender" value="female"/>Female</td>
  </tr>
  <tr>
    <td>Date Of Birth</td>
    <td><input type="date" name="txtdob" id="txtdob" required="required" /></td>
  </tr>
  <tr>
    <td>Insert Your Image</td>
    <td><input type="file" name="txtimg" id="txtimg" required="required" /></td>
  </tr>
  <tr>
      <td>District</td>
      <td><select name="seldistrict" onchange="getplace(this.value)" required="required">
      <option selected="selected" value="">...Select....</option>
      <?php 
		 $sel1="select * from tbl_district";
		 $datas=mysql_query($sel1);
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
    <td><input type="text" name="txtuser" id="txtuser" required="required" autocomplete="off" placeholder="Enter user name" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="txtpass" id="txtpass" required="required" autocomplete="off" placeholder="Enter password" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 characters should be condain number and capital letters" /></td>
  </tr>
  <tr>
    <td>Re-enter Password</td>
    <td><input type="password" name="txtrepass" id="txtrepass" required="required" autocomplete="off" placeholder="Enter password" pattern="[a-zA-Z0-9]{8,20}" title="Enter atleast 8 characters should be condain number and capital letters" /></td>
  </tr>
  <tr>
    <td>Artist Type</td>
    <td><select name="selartype" required="required"><option selected="selected" value="">...Select....</option>
     <?php 
	   $sel="select * from tbl_artisttype";
	   $datas=mysql_query($sel,$con);
	   while($raw=mysql_fetch_array($datas))
	   {
		   ?>
           <option value="<?php echo $raw["artisttype_id"] ?>"><?php echo $raw["artisttype_name"] ?></option>
           <?php
	   }
	   ?>
    
    
    </select></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><textarea name="txtaddress" id="txtaddress" cols="45" rows="5" required="required" placeholder="Enter address"></textarea></td>
  </tr>
  <tr>
    <td>Rate</td>
    <td><input type="text" name="txtrate" id="txtrate" required="required" placeholder="Enter rate" autocomplete="off" pattern="[0-9]{1,10}" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><input type="submit" name="txtsave" id="txtsave" value="Save" />
      <input type="reset" name="txtcancel" id="txtcancel" value="Cancel" /></td>
    </tr>
</table>
</form>
</div>

<?php include("Template/Footer.php")?>

</body>
</html>