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
                <a class="navbar-brand" href="index_user.html"><b>LMS</b>COURSE</a>
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
                        <a class="#" href="index_user.html?page=homepage"><i class="fa fa-dashboard"></i>HOME</a>
                    </li>
    
	
 <li>
                        <a class="active-menu" href="profile_user.php"><i class="fa fa-circle"></i> PROFILE</a>
                   
                    <li>
                        <a href="#"><i class="fa fa-desktop"></i>CISCO<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_cisco.php">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_cisco.php">Search Subtopic</a>
                            </li>
                            

                              
                              
                       
                            
                                  
                              </ul>
							  <li>
							  
							  
<a href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_jupiter.php">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>
                            
                                  
                              </ul>
							  
							 <li> 
							  
                        <a href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                       <a href="view_subtopic_huawei.php">View Subtopic</a>
                        </li>
                        <li>
                        <a href="search_subtopic_huawei.php">Search Subtopic</a>
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
            
            <h2><center> USER'S PROFILE</center></h2><br>

<?php

                include("conn.php");

                if($conn!==FALSE)
                {
                    // create table, check if the table was created
                    $TableName="User";
                    $SQLstring="SELECT * FROM $TableName 
                    WHERE user_id = '".$_SESSION['user_id']."'";

                    $QueryResult = mysql_query($SQLstring, $conn);
                    
                    while(($Row = mysql_fetch_assoc($QueryResult))  !==  FALSE)
                    {

                        echo '<center><table>';
                        
						
						
						echo '<tr>';
                        echo '<td> ID :</td><td>'.$Row['user_id'].'</td>';
                        echo '</tr>';
						
						
						
                        echo '<tr>';
                        echo '<td> First Name :</td><td>'.$Row['user_fname'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Last Name :</td><td>'.$Row['user_lname'].'</td>';
                        echo '</tr>';

                        echo '<tr>';
                        echo '<td>Phone :</td><td>'.$Row['user_phone'].'</td>';
                        echo '</tr>';
                        

                        echo '<tr>';
                        echo '<td>Email:</td><td>'.$Row['user_email'].'</td>';
                        echo '</tr>';
                        

                        echo '<tr>';
                        echo '<td>Password :</td><td>'.$Row['user_pssword'].'</td>';
                        echo '</tr>';
                        
                        



                        echo '<br><form action="update_user.php"><input type="submit" class="btn-md btn-warning" name="submit" value="UPDATE">';
                     

                        

                    }
                mysql_close($conn);
                }
                ?>

         
              
          </button>
        </div> 


               				
				
<tr>
<td height="450px" valign="top">


</td>
</tr>
    </form>
    
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