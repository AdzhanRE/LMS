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
<?php
    session_start();
    ?>
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
                        <li><button type="submit" class="btn btn-primary" onclick="logout()"><i class="fa fa-sign-out fa-fw"></i> Logout</button>
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
                                <a href="view_subtopic_cisco.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_cisco.php">Search Subtopic</a>
                            </li>
                            

                              
                              
                       
                            
                                  
                              </ul>
							  <li>
							  
							  
<a href="#"><i class="fa fa-desktop"></i>JUPITER<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="view_subtopic_jupiter.php?id=0">View Subtopic</a>
                            </li>
                            <li>
                                <a href="search_subtopic_jupiter.php">Search Subtopic</a>
                            </li>
                            
                                  
                              </ul>
							  
							 <li> 
							  
                        <a href="#"><i class="fa fa-desktop"></i>HUAWEI<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li>
                       <a href="view_subtopic_huawei.php?id=0">View Subtopic</a>
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

            <?php
                $user_id = $_SESSION['user_id'];

                $url ='http://localhost/api_learning/index.php/user/view/'.$user_id;
                $ch = curl_init();

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_URL, $url);

                $result=curl_exec($ch);
                curl_close($ch);

                $data=json_decode($result, true);
                
                //$title = $data['title'];
                //$id = $data['data']['admin_id'];
                $d = $data['data'];
                
            ?>
            
            <h2><center> USER'S PROFILE</center></h2><br>

            <form id="update_user" method="POST" onsubmit="return update_user(<?=$d['user_id']?>)">
                <div class="row mb-3">
                    <div class="col-md-5">
                        <div class="form-floating mb-3 mb-md-0">
						<label for="inputFirstName">First name</label>
                            <input class="form-control" name="user_fname" type="text" value="<?=$d['user_fname']?>"> 
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating mb-3 mb-md-0">
						<label for="inputLastName">Last name</label>
                            <input class="form-control" name="user_lname" type="text" value="<?=$d['user_lname']?>">
                        </div>
                    </div>
                </div>
				<div class="row mb-3">
				<div class="col-md-5">
					<div class="form-floating mb-3 mb-md-0">
                    <label for="inputLastName">Phone Number</label>
                            <input class="form-control" name="user_notel" type="text" value="<?=$d['user_notel']?>">
					</div>
				</div>
                
                    <div class="col-md-5">
                        <div class="form-floating mb-3 mb-md-0">
						    <label for="inputEmail">Email address</label>
                    <input class="form-control" name="user_email" type="email" value="<?=$d['user_email']?>">
                            
                        </div>
                    </div>
					
                    <div class="col-md-5">
                        <div class="form-floating mb-3 mb-md-0">
                            <label for="inputPassword">Password</label>
                            <input class="form-control" name="user_password" type="password" value="<?=$d['user_password']?>">
                            
                        </div>
                    </div>
                </div>
				
				<br></br>
				<div class="row mb-3">
				<div class="col-md-4">
				<div class="d-flex align-items-center justify-content-between mt-5 mb-0"> 
                    <div class="d-grid"><button type="submit" class="btn btn-primary">Update Account</button>
                </div>
				</div>
				</div>
            </form>

         
              
        
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

    <!--Action JS-->
    <script src="js/action.js"></script>


</body>

</html>