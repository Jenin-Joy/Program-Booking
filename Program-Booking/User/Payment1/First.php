
<?php
//include("../Guest/Connection/connection.php");
//$con=mysql_connect("localhost","root","");
//mysql_select_db("db_ltl",$con);
//session_start();	
//  ob_start();
//  
// echo $_SESSION['id'];
//  $id=$_REQUEST['workid'];
// if($_REQUEST['cartid'])
// {
//	 $SELQ="select * from tbl_payment where work_id='".$id."'";
//  $sel2=mysql_query($SELQ)or die(mysql_error());
//  $row2=mysql_fetch_array($sel2);
//  if($row2['payment_status']=='1')
//  {
//	  echo "Already Paid";
//  }
//  else
//  {
//	$selquery="select * from tbl_cart c inner join tbl_user u on c.user_id=u.user_id inner join tbl_workdetails w  on c.work_id=w.work_id inner join tbl_city ct on u.city_id=ct.city_id where c.cart_status='1' and u.user_id='".$_SESSION['id']."'";
//	echo $selquery;
//   $sel=mysql_query($selquery)or die(mysql_error());
//  $row=mysql_fetch_array($sel);
//  
//   
//   $_SESSION['userid']=$row['user_id'];
//	 echo "<br>userid".$_SESSION['userid'];
//	 $_SESSION['name']=$row['user_name'];
//	/* $_SESSION['tender_id']=$row['tender_id'];
//	  $_SESSION['auction_id']=$row['auction_id'];
//	 $_SESSION['worker_name']=$row['worker_name'];
//	   echo  $_SESSION['worker_name'];
//	 $_SESSION['tender_no']=$row['tender_no'];*/
//	 $_SESSION['ifsc_code']=$row['ifsc_code'];
//		echo $_SESSION['ifsc_code '];
//     $_SESSION['account_no']=$row['account_no'];
//
//	 $_SESSION['place_name']=$row['city_name'];
//	 echo $_SESSION['district_name'];
//	 $_SESSION['user_email']=$row['user_email'];
//	 echo $_SESSION['user_email'];
//     $_SESSION['user_contact']=$row['user_contact'];
//	 $_SESSION['amount']=$row['work_amount'];
//   
//  
// }
// 
///*include("header.php");
//*/ 
//	
  

if(isset($_POST['btnsub']))
{
	
    session_start();
	/*$type=$_POST['rdlcard'];
	
	$cno=$_POST['txt1'];
 
	$_SESSION['type']=$type;
	$_SESSION['amount']=$_POST['txtamount'];
   
   echo $_SESSION['type'];	
   $_SESSION['cno']=$cno;
   
   echo $_SESSION['cno'];	*/ 
//		  
//		  
//		 
//	
//		
//	

$amount=$_GET['Amt'];
$_SESSION['Amt']=$amount; 
 $_SESSION['Id']=$_GET['Id']; 

header("location:Second.php");

}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../include/css/style.css">
<title>UpWork</title>
<script>
function checknum(y)
{
	var numericExp=/^\d{3}$/;
	if(numericExp.test(y)==false)
	{
		alert("Not 3 digit confirmation number");
		return false;
	}
}
</script>

<style type="text/css">
        .auto-style15 {
            height: 134px;
        }
        .auto-style18 {
            text-align: right;
            width: 322px;
        }
        .style5 {}
        .auto-style19 {
            width: 58px;
            height: 31px;
        }
        .auto-style20 {
            height: 52px;
        }
        .auto-style21 {
            height: 23px;
        }
        .auto-style22 {
            height: 52px;
            width: 322px;
        }
        .auto-style23 {
            width: 322px;
        }
        .auto-style24 {
            height: 23px;
            width: 322px;
        }
        .auto-style25 {
            color: #3366FF;
        }
        .auto-style26 {
            text-align: right;
            width: 322px;
            color: #3366FF;
        }
    </style>
    

</head>


</head>


<body>
<!--<div class="container">
<div class="header_holder">
<div class="logo"><img src="../../include/images/logo.png"></div>
</div>
<div id='cssmenu'>
<ul>
   <li><a href='../HomePage.php'><span>Home</span></a></li>
   
   <li class='active has-sub'><a href='#'><span>Location</span></a>
      <ul>
         <li class='has-sub'><a href='../State.php'><span>State</span></a></li>
         <li class='has-sub'><a href='../District.php'><span>District</span></a></li>
         <li class='has-sub'><a href='../Place.php'><span>Place</span></a></li>
            
      </ul>
   </li>
   
   <li><a href='../WorkerType.php'><span>WorkerType</span></a></li>
<!--   <li><a href='StaffSchedule.php'><span>StaffSchedule</span></a></li>
--> 
   <!--<li class='active has-sub'><a href='#'><span>WorkerDetails</span></a>
      <ul>
         
         <li class='has-sub'><a href='../WorkerList(New).php'><span>New</span></a></li>
         <li class='has-sub'><a href='../WorkerList(Approved).php'><span>Accepted</span></a></li>
         <li class='has-sub'><a href='../WorkerList(Rejected).php'><span>Rejected</span></a></li>   
     
      </ul>
       <li class='active has-sub'><a href='#'><span>AuctionDetails</span></a>
      <ul>
         
         <li class='has-sub'><a href='../AuctionList(New).php'><span>New</span></a></li>
         <li class='has-sub'><a href='../AuctionList(Approved).php'><span>Accepted</span></a></li>
         <li class='has-sub'><a href='../AuctionList(Rejected).php'><span>Rejected</span></a></li>   
     
      </ul>
   </li>
   
  

   
   
   
   
   
   
   
   <li><a href='../../Guest/Logout.php'><span>Logout</span></a></li>
  
</ul>
</div>
</div>
<div class="container">
<div class="slider_holder">
  <img src="../../include/images/banner.jpg">
</div>
</div>
<div class="container">
<div class="content_area">
<div class="menu_holder">
<ul class="vert-one">
  <li><a href="State.php" title="CSS Menus">State</a></li>
  <li><a href="District.php" title="CSS Menus">District</a></li>
  <li><a href="Place.php" title="CSS Menus" class="current">Place</a></li>
  <li><a href="WorkerList(New).php" title="CSS Menus">WorkerList(New)</a></li>
  <li><a href="WorkerList(Approved).php" title="CSS Menus">WorkerList(Approved)</a></li>
  <li><a href="WorkerList(Rejected).php" title="CSS Menus">WorkerList(Rejected)</a></li>
</ul>
</div>
<div class="content_holder">-->
           
<body>
<form name="frm" id="frm" method="post"action="">
 
 <fieldset><legend style="font-weight: 700; text-align: center; font-size: large;">Enter Your Card Details</legend>
    <table class="auto-style1">
        <tr>
            <td class="auto-style20"></td>
            <td class="auto-style22"></td>
            <td class="auto-style20"></td>
            <td class="auto-style20"></td>
        </tr>
       <?php
        if($row2['payment_status']!='1'){?>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Choose your card type</td>
            <td style="vertical-align:middle;"> <input type="radio" id="rdlcard" runat="server"  value="Visa"  
                    name="rdlcard"  Width="57px" CssClass="style5" />
          <img alt="" class="auto-style19" src="../Payment1/Images/1391796960_payment_method_card_visa.png" />&nbsp;&nbsp; <input type="radio"  runat="server" value="Master Card" name="rdlcard"  Width="108px" CssClass="style5" 
                   /><img alt="" class="auto-style19" src="../Payment1/Images/1391796956_payment_method_master_card.png" /></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Enter your card number</td>
            <td>
                <input type="text" name="txt1" ID="TextBox1" runat="server" ontextchanged="TextBox1_TextChanged" Width="240px" required/>
                 
                
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style18">Enter CVV</td>
            <td>
                <p>
                  <input type="text"  name="txt2" runat="server" CssClass="style4" OnTextChanged="TextBox2_TextChanged" pattern="[0-9]{3,3}" required title="Not 3 digit no."/>
                </p>
                 
                
            </td>
            <td>&nbsp;</td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td class="auto-style18">Account Holder </td>
          <td><label for="txtAcc"></label>
          <input type="text" name="txtAcc" id="txtAcc" value="" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td class="auto-style18">Amount </td>
          <td><label for="txtAcc"></label>
          <input type="text" name="txtamount" id="txtamount" readonly value="<?php echo $_GET['Amt'];?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style26">&nbsp;</td>
            <td>
                <input type="checkbox" name="chkAccept" ID="CheckBox1" runat="server" CssClass="auto-style25" />
                <span class="auto-style25">&nbsp;I Accept the Terms &amp; Conditions</span></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>
                <ID="Label1" runat="server" ForeColor="Red">
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>
                <input type="submit" name="btnsub" id="btnsub" value="Submit" />
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td class="auto-style21"></td>
            <td class="auto-style24"></td>
            <td class="auto-style21"></td>
            <td class="auto-style21"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td class="auto-style23">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
    <?php
		}?>
        </fieldset>
        
</form>
</body>
</html>

<?php

include("../Payment1/footer.php");
?>