<?php
include("../Connection/Connection.php");

if(isset($_POST["save"]))
{
	$pgmtype=$_POST["txtpgmtyp"];
	
	if($_GET["editid"])
	{
		$up="update tbl_programtype set pgmtype_name='".$pgmtype."' where pgmtype_id='".$_GET["editid"]."'";
		mysql_query($up);
		header("Location:Programtype.php");
	}
else
{
	$ins="insert into tbl_programtype(pgmtype_name) value('".$pgmtype."')";
	mysql_query($ins,$con);
}}
if($_GET["delid"])
{
	$del="delete from tbl_programtype where pgmtype_id='".$_GET["delid"]."'";
	mysql_query($del,$con);
	}
	
if($_GET["editid"])
{
	$sel1="select * from tbl_programtype where pgmtype_id='".$_GET["editid"]."'";
	$data=mysql_query($sel1);
	$row=mysql_fetch_array($data);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Program Type</title>
<?php include("HomePage.php")?>

</head>

<body>
<div id="tab" align="center">
<h2>Add Program Type</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="321" border="1">
    <tr>
      <td width="137">Program Type</td>
      <td width="168"><label for="txtpgmtyp"></label>
      <input type="text" name="txtpgmtyp" id="txtpgmtyp" value="<?php echo $row["pgmtype_name"] ?>" required="required" placeholder="Program Type" /></td>
    </tr>
    <tr>
      <td colspan="2" align="right"><input type="submit" name="save" id="save" value="Save" />
      <input type="reset" name="cancel" id="cancel" value="Cancel" /></td>
    </tr>
  </table>
  <table border="1">
         <tr>
             <th>
                 Serial No
             </th>
             <th>
                 Program Type
             </th>
             <th colspan="2">Actions</th>
         </tr>
         <tr>
             <?php 
			 $sel="select * from tbl_programtype";
			 $datas=mysql_query($sel,$con);
			 $i=0;
			 while($raw=mysql_fetch_array($datas))
			 {
				 $i=$i+1;
				 ?>
                <tr>
                    <td>
                        <?php echo $i ?>
                    </td>
                    <td><?php echo $raw["pgmtype_name"]; ?></td>
                    <td><a href="Programtype.php?delid=<?php echo $raw["pgmtype_id"] ?>">Delete</a></td>
                    <td><a href="Programtype.php?editid=<?php echo $raw["pgmtype_id"]?>";>Edit</a></td>
                </tr>
                 <?php
				 }
			 ?>
         </tr>
  </table>
</form>
</body>
</div>
</html>