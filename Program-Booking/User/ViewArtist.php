<?php
include("../Connection/Connection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Artist</title>

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
<div class="main_form" id="tab"  align="center">
<br><br><br><br><br><br>
<h2>View Artist</h2>
<br>
<body>
<form id="request" name="form1" method="post" action="">
  <table width="346" height="113">
    <tr>
      <td width="154">Select District</td>
      <td width="176"><label for="txtdis"></label>
      <select name="seldis" onchange="getplace(this.value)" required="required"><option selected="selected" value="">...Select...</option>
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
         </select></td>
    </tr>
      <tr>
      <td>Select Place</td>
      <td><select name="selplace" id="selplace" required="required">
      <option selected="selected" value="">....Select....</option>
      
      
      </select>
      </td>
    </tr>
    <tr>
      <td>Select Artist Type</td>
      <td><label for="txtartype"></label>
      <select name="selartype" required="required"><option selected="selected" value="">...Select...</option>
       <?php 
	   $sel1="select * from tbl_artisttype";
	   $datas=mysql_query($sel1);
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
      <td colspan="2" align="center"><input type="submit" name="txtshowartist" id="txtshowartist" value="Show Artist" /></td>
    </tr>
  </table>
  <?php 
  if(isset($_POST["txtshowartist"]))
  { 
  ?>
  <table width="200" height="119" border="1">
    <tr>
      <?php 
			 $sel2="select * from tbl_artist where artisttype_id='".$_POST["selartype"]."' and place_id='".$_POST["selplace"]."'";
			 $datas=mysql_query($sel2);
			 while($raw=mysql_fetch_array($datas))
			 {
				 ?>
                 
    
      <td><img src="../Artist/Images/<?php echo $raw['artist_image']?>" height="200" width="200" />
      <p><?php echo $raw['artist_name']?></p>
      <a href="ArtistDetails.php?artistid=<?php echo $raw['artist_id']?>">View Details</a>
      </td>
      
      
      
      
      
      <?php
			 }
			 ?>
    </tr>
  </table>
  <?php
}
?>
</form>
</body>
</div>
<br><br><br><br><br>
<?php include("Template/Footer.php") ?>
</html>