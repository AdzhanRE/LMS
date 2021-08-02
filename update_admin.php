<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMS COURSE</title> 
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_admin.html"><b>LMS</b>COURSE</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

                </li>
				                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="question.php">
                                <div>
                                    <p>
                                        <strong>My Question</strong>
                                        <span class="pull-right text-muted"></span>
                                    </p>
                                  
                                </div>
                            </a>
                        </li>
                        
                       
                       
                       
                       
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
     
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                     <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
				
            </ul>
        </nav>
        
       <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index_admin.html?page=homepage"><i class="fa fa-dashboard"></i>HOME</a>
                    </li>
                    
 <li>
                        <a class="active-menu" href="profile_admin.php"><i class="fa fa-circle"></i> PROFILE</a>
                   
                    <li>
                        <a  href="#"><i class="fa fa-desktop"></i>CISCO<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_subtopic_cisco.php">Add Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_cisco.php">Search Subtopic</a>
                            </li>
							
							 <li>
                                <a href="view_subtopic_cisco.php">View Subtopic</a>
                            </li>
                            

                              
                              
                       
                            
                                  
                              </ul>
							  <li>
							  
							  
<a href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_subtopic_jupiter.php">Add Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>
							
							<li>
                                <a href="view_subtopic_jupiter.php">View Subtopic</a>
                            </li>
                            
                            
                                  
                              </ul>
							  
							 <li> 
							  
                        <a href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                       <a href="add_subtopic_huawei.php">Add Subtopic</a>
                        </li>
                        <li>
                        <a href="search_subtopic_huawei.php">Search Subtopic</a>
                        </li>
<li>
                                <a href="view_subtopic_huawei.php">View Subtopic</a>
                            </li>
                            

                         </li>
                        </ul>
			
					
						
			
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
            
           <center>
<h3>UPDATE USER'S PROFILE</h3>
<br><br>
<table width="300" cellpadding="5" cellspacing="0" border="0">
<tr align="left" valign="top">
<td align="left" colspan="1" rowspan="1" bgcolor="transparent">


<?php
include("conn.php");

                session_start();
                if(!isset($_SESSION['admin_id']))
                {
                    echo "<script language=javascript type=text/javascript>alert('Sila log masuk untuk teruskan sesi !');
                          window.location.href='login_form.php';</script>";
                }

if($conn!==FALSE)
{
    
    $TableName="Admin";
    $SQLstring="SELECT * FROM $TableName WHERE admin_id = '".$_SESSION['admin_id']."'";
    $QueryResult= @mysql_query($SQLstring, $conn);
    $num=mysql_num_rows($QueryResult);

$i=0;   
while($i<$num)
    {

        $admin_id=mysql_result($QueryResult, $i , "admin_id");
        $admin_fname=mysql_result($QueryResult, $i , "admin_fname");  
        
        $admin_lname=mysql_result($QueryResult, $i , "admin_lname");
        $admin_phone=mysql_result($QueryResult, $i , "admin_phone");
        $admin_email=mysql_result($QueryResult, $i , "admin_email");
        $admin_password=mysql_result($QueryResult, $i , "admin_password");        
        
?>  


                <center><table>
                <form name="update_admin.php" method="post" action="#.php">
                    <tr>
                        <td><b><b>ID :</td>
                        <td><br> <input type ="text" name = "admin_id" size ="60" value="<?php  echo  "$admin_id"?>" required></td>
                    </tr>

                   


 <tr>
                        <td><b>First Name :</td>
                        <td><br><input type ="text" name = "admin_fname" size ="60" value="<?php  echo  "$admin_fname"?>"required></td>
                    </tr>
                    <tr>



					<tr>
                        <td><b>Last Name :</td>
                        <td><br><input type ="text" name = "admin_lname" size ="60" value="<?php  echo  "$admin_lname"?>"></td>
                    </tr>
                    <tr>
                        <td><b>Phone No.:</td>
                        <td><br><input type ="text" name = "admin_phone" size ="60" value="<?php  echo  "$admin_phone"?>" required></td>
                    </tr>
                    <tr>
                        <td><b>Email :</td>
                        <td><br><input type ="text" name = "admin_email" size ="60" value="<?php  echo  "$admin_email"?>" required></td>
                    </tr>




                    <tr>
                        <td><b>Password :</td>
                        <td><br><input type ="text" name = "admin_password" size ="60" value="<?php  echo  "$admin_password"?>" required></td>
                    </tr>
                    
                   

                   



    
     




                    </table>
                        <input type="hidden" name="kategori" value="1">
                    
                       <br> <input type = "submit" value = "SAVE">
                        <input type = "reset" value = "RESET">
                </form></center>
                        
                        </div>
                    </section>
                </div>

                    <!-- /Content -->
                        
            </div>
            
        </div>
    <!-- Main -->
    
<?php
    ++$i;
}
mysql_close($conn);
}
?>
</center> <a href="profile_admin.php" class="btn btn-warning">BACK</a>

    
</body>       
<h3>
					
				
				
               
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>