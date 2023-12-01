<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dream Home</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
       <link href="form.css" rel="stylesheet" />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="../Guest/Login.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                   <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                  
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="HomePage.php"><i class="fa fa-dashboard fa-3x"></i> Home Page</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Add Details<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="District.php">Add District</a>
                            </li>
                           
                            <li>
                               <a href="ArtistType.php">Artist Type</a>

                            </li>
                             <li>
                                <a href="ComplaintType.php">Complaint Type</a>
                            </li>
                            <li>
                                <a href="Programtype.php">Program Type</a>
                            </li>
                            <li>
                                <a href="Place.php">Place</a>
                            </li>
                        </ul>
                     
                    
                   	
					
					
                     <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Troop and Artist Details<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="NewArtist.php">New Artist</a>
                            </li>
                            <li>
                                <a href="NewTroops.php">New Troop</a>
                            </li>
                             <li>
                                <a href="AcceptedArtist.php">Accepted Artist</a>
                            </li>
                            <li>
                                <a href="AcceptedTroop.php">Accepted Troop</a>
                            </li>
                             <li>
                                <a href="RejectArtist.php">Reject Artist</a>
                            </li>
                             <li>
                                <a href="RejectTroop.php">Reject Troop</a>
                            </li>
                        </ul>
                      </li>
                      
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Others<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Replay.php">Replay</a>
                            </li>
                            <li>
                                <a href="ViewComplaints.php">View Complaints</a>
                            </li>
                             <li>
                                <a href="ViewFeedback.php">Feed Backs</a>
                            </li>
                           <!-- <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>-->
                        </ul>
                        
                      </li> 
              		 <li>
                        <a  href="Contact.php"><i class="fa fa-desktop fa-3x"></i>Contact</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                       <h3>Your Are The Admin</h3>

                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
                   
                   
                 <!-- /. ROW  -->           
    
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>


